/**
* @author Juan Carlos Herencia
*
* En este documento se recogen todas las funcionalidades de manejo de datos
***/
$(document).ready(function(){
	$("button[data-href]").click(function(){
		// alert("ok");
		confirmAction($(this));
		
	});
	if ($('#prepare_rec').length){

		$('#prepare_rec').click(function(){
			id=$(this).data('id');
			url=$(this).data('url');
			userid=$(this).data('userid');
			content="<p>¿Está seguro que desea que desea proceder a la preparación de la receta seleccionada?</p>";
			content+="<p><i>Se descontarán los ingredientes de dicha receta del almacén o si fuera necesario se solicitará dicho produto.</i></p>";
			$("#modal-prepare").modal('hide');
			$.confirm({
				title:"Alerta del sistema",
			    text: content,
			    confirmButton: "Aceptar",
		    	cancelButton: "Cancelar",
		    	theme:"complement-1-b",
			    confirm: function(button) {
			        // prepare_rec(id,url,userid);
			    },
			    cancel: function(button) {
			       $("#modal-prepare").modal('show');
			    }
			});
			
		});

		$("input[name='comensales']").TouchSpin({
			min: 1
	       , postfix: "Comensales"
	    });
	}
	
	editarIng();
	loadTextarea();
	deshabilitar(0);

});

function loadTextarea(){
	
	if($("#hide_descrip").length){
		if($("#hide_descrip").val()!=""){
				$("#descrip").text($("#hide_descrip").val());
			}	
	}
	
}
function confirmAction (element) {
	if(element.data("type")=="delete"){

			$(".modal").modal('hide');
			$.confirm({
				title:"Alerta del sistema",
		        text: "¿Desea realmente borrar el elemento seleccionado?",
		        confirmButton: "Aceptar",
    			cancelButton: "Cancelar",
		        confirm: function(button) {
		            // alert("You just confirmed.");
					location.href = element.attr("data-href");

		        },
		        cancel: function(button) {
		            // $(".modal").modal('show');
		        }
   			 });
		
		}else{
			// alert("no");
			location.href = element.attr("data-href");
		}
}

//**************************************************************//
//******************* GESTION DE CATEGORIAS ********************//
//**************************************************************//
function addCategoria () {
	cat=$('#add_categ').val();
	url=$('#url_addcat').val();
	url_cenlog=$('#url_cenlog').val();
	// alert(url_cenlog);
	// cat="Guisos";
	if (cat!="") {
		$.ajax({
			url: url,
			type: 'POST',
			async: true,
			data: {'data':cat},
			success: function (response) {
				// alert(response);
				if (response!="") {
					$('#add_categ').val("");
					window.location=url_cenlog+"?menu=categorias";
				};
			},
			error: function (xhr, ajaxOptions, thrownError) {
			    alert(xhr.status);
			    alert(thrownError);
			}
		});
	}
}

function updCategoria (id,accion,element) {
	categ=$('tr#categ_'+id+' .categ');
	url=$('#url_editcat').val();
	url_cenlog=$('#url_cenlog').val();
	// alert(url);
	switch(accion){
		case 'edit':
			val = categ.html();
			categ.html('<input type="text" class="form-control in_categ" value="'+val+'">');
			element.removeClass('btn btn-primary complement-1-b');
			element.addClass('btn btn-success');
			element.html("<span class='glyphicon glyphicon-floppy-disk'></span> Guardar");
			element.attr("onclick","updCategoria("+id+",'save',$(this))");
			element.siblings('button').html("<span class='glyphicon glyphicon-remove'></span> Descartar");
			element.siblings('button').attr("onclick","descartar("+id+",'"+val+"',$(this))");
		break;
		case 'save':
			val = categ.children('.in_categ').val();
			if (val !="") {
				$.ajax({
					url: url,
					type: 'POST',
					async: true,
					data: {'id':id,'data':val},
					success: function (response) {
						// alert(response);
						if (response!="") {
							// $('#add_categ').val("");
							window.location=url_cenlog+"?menu=categorias";
						};
					},
					error: function (xhr, ajaxOptions, thrownError) {
					        alert(xhr.status);
					        alert(thrownError);
					      }
				});
			}
					
		break;
		
	}
}
function descartar (id,val,element) {
	categ=$('tr#categ_'+id+' .categ');
	categ.html(val);
	// alert(element.html());
	element.html("<span class='glyphicon glyphicon-trash'></span> Borrar");
	element.attr("onclick","delCategoria ('"+id+"')");
	element.siblings('button').removeClass('btn btn-success');
	element.siblings('button').addClass('btn btn-primary complement-1-b');
	element.siblings('button').html("<span class='glyphicon glyphicon-edit'></span> Editar");
	element.siblings('button').attr("onclick","updCategoria("+id+",'edit',$(this))");

}
function delCategoria (id) {
	url=$('#url_delcat').val();
	url_cenlog=$('#url_cenlog').val();
	$.ajax({
					url: url,
					type: 'POST',
					async: true,
					data: {'id':id},
					success: function (response) {
						// alert(response);
						if (response=="") {
							window.location=url_cenlog+"?menu=categorias";
						};
					}
				});
}
//**************************************************************//
//**************** FIN GESTION DE CATEGORIAS *******************//
//**************************************************************//


//**************************************************************//
//****************** GESTION DE INGREDIENTES *******************//
//**************************************************************//

//CLASE INGREDIENTE
var Ingrediente = function (id, nombre, unidad,precio,und_comp) {
    this.id = id;
    this.nombre = nombre;
    this.unidad = unidad;
    this.precio = precio;
    this.und_comp = und_comp;
    this.cantidad = 0;
    this.select=false;

}
//Variables Globlales
var ingredientes = [];
var idModal="";
// var precioTotal=0;


//---------------------//
function crearListadoIng(id_modal){
	idModal=id_modal;
	$('#'+idModal).modal('show');

}
function anadirIngre(){
	//Comprobamos que checkbox estan selecionados 
	
	$('.ing_seleccionable').each(function(key, element){
		input=$(element).children('td').children('input');
		if(input.is(':checked')) {  

		 	id=input.data('value');
			nombre=$(element).children('.info_nombre').text();
          	unidad=$(element).children("td").children('.unidad').text();
          	precio=$(element).children("td").children('.precio').text();
          	und_comp=$(element).children("td").children('.und_comp').text();
           var ingr = new Ingrediente(id, nombre, unidad,precio,und_comp);
           // ingredientes["'"+id+"'"]=ingr;
           ingredientes[id]=ingr;
          
        } 
	});
	genInterfaz();
	$('#'+idModal).modal('hide');
	
}
function genInterfaz(){
	interfaz="";
	for(var i in ingredientes) {
		// alert("i -"+i);
		index=i.replace(/'/g,'');
		// alert("index "+index);
    	if( comprobarExistIng(index)== false){
    		interfaz=[
			'<tr class="ingr_'+index+' ingredientes">'+
				'<td>'+ingredientes[i].nombre+'<input type="hidden" name="id_ing['+index+']" value="'+ingredientes[i].id+'"></td>'+
				'<td>'+
					'<div class="input-group">'+
						'<input type="text" id="cantidad_'+index+'" name="cantidad['+index+']" class="form-control input-sm" onchange="modCantIng('+index+')">'+
						'<span class="input-group-addon">'+ingredientes[i].unidad+'</span>'+
				'</td>'+
				'<td>'+
					'<button type="button" class="btn btn-danger btn-sm" onclick="eliminarIng('+index+')">'+
						'<span class="glyphicon glyphicon-remove"></span>'+
					'</button>'+
				'</td>'+
			'</tr>'
			];
			$('#listado_ingr').html($('#listado_ingr').html()+interfaz);
			
    	}
			
	}
		
}
function eliminarIng(id){
	
	ingredientes.splice(id,1);
	calcPrecioTotal();
	$(".ingr_"+id).remove();
}
function modCantIng(key){
	cantidad=parseFloat($("#cantidad_"+key).val());
	if(cantidad!=""){
		// key="'"+key+"'";
		// alert(ingredientes[key].nombre);
		ingredientes[key].cantidad=cantidad;
		calcPrecioTotal();
	}
}
function calcPrecioTotal(){
	precioTotal=0;
	for( var key in ingredientes){
		// alert(key+" - "+ingredientes[key].nombre)
		precioTotal+=(parseFloat(ingredientes[key].cantidad) * parseFloat(ingredientes[key].precio) ) / parseFloat(ingredientes[key].und_comp);
	}
	precioTotal=Math.round(precioTotal * 100) / 100;
	// alert(precioTotal);
	$(".precioTotal").val(precioTotal);
	
}
function indexById(id,array) {
	posicion=-1;
	for (var i = 0; i < array.length; i++) {
		if(array[i].id==id){
			posicion=i;
		}
	};
	return posicion;
}
function comprobarExistIng(id){
	encontrado=false;
	$('#listado_ingr').each(function(key, element){
		if($(element).children("tr").hasClass("ingr_"+id)){
			encontrado=true;
		}
		
	});
	return encontrado;
}


function deshabilitar(id){
	//deshabilitar un div entero y lo que contiene
	// $( "#ing_seleccionable_"+id ).prop( "disabled", true );
	$("#precioTotal").prop( "disabled", true );
}

function editarIng () {
	if($("#listado_ingr").html()==""){
		// alert("vacío");
	}else{
		// alert("no vacío");
		$(".ingredientes").each(function(key, element){
			clase=$(this).attr('class').split(" ");
			key=clase[0].split("_")[1];
			ing=$(this).children('.nombre');
			var ingred = new Ingrediente(
				ing.children('input[type="hidden"]'), 
				$(this).children('.nombre').text(), 
				ing.data('unidad'),
				ing.data('precio'),
				ing.data('undcompra')
			);
			ingred.cantidad=$("#cantidad_"+key).val();
			// if( comprobarExistIng(i)== false){
				// key="'"+key+"'";
				ingredientes[key]=ingred;
				// alert(ingredientes[index].nombre);
           	// }	
		});
		// for(var i in ingredientes) {
		// 	alert(i+" - "+ingredientes[i].nombre);
		// }
		
		calcPrecioTotal();
	}
}

//**************************************************************//
//*************** FIN GESTION DE INGREDIENTES ******************//
//**************************************************************//

//**************************************************************//
//******************* PREPARACION RECETAS***********************//
//**************************************************************//

function prepare_rec(id_receta,url,id_usuario){
	var ingredientes={};
	comensales=$("input[name='comensales']").val();
	com_rec=$("#modal-prepare .comensales").data('comensales');
	$("#modal-prepare .ingr li").each(function(key, element){
		cantidad=$(this).children('.badge').html();
		cantidad=cantidad.split(' ');
		cantidad=(parseFloat(comensales)*parseFloat(cantidad))/parseFloat(com_rec);
		cantidad=Math.round(cantidad * 100) / 100;
		ingredientes[$(this).data('id')]=parseFloat(cantidad);
	});
		$("#modal-prepare").modal('hide');
		
	
	$.ajax({
		// url: '/Gestor_de_cocina/web/app_dev.php/recetas/genSolicitud',
		url: url,
		type: 'POST',
		async: true,
		data: {'ingr':ingredientes,'id_usuario':id_usuario},
		success: function (response) {
			notificacion ("Receta preparada: <strong>"+response+"</strong>",0,"show");
			// alert("notificacion");
		}
	});
}

//**************************************************************//
//*********** SISTEMA DE NOTIFICACIONES Y ALERTAS***************//
//**************************************************************//

//***************************************************************//
//***************** FUNCION ALERTAS POP**************************//
//***************************************************************//
/* Esta funcion se encarga de mostrar un cuadro de diálogo con  
* información relevante para el usuario 
* @args
* @id_cont (string): id del elemento sobre el que mostrarmos al alerta
* @contenido (string): mensaje a mostrar
* @posicion (string):posicion del mensaje (valores: top,bottom,left,right)
* @activador (string):elemento activador para el mensaje (hover,click)
* @addClass (string): clases a añadir al div del mensaje (se usan para el tema)
* @addId (string): id añadido al div del mensaje
*/

function alertasPop (id_cont,contenido,posicion,activador,addClass,addId) {
	if (activador != "" && activador!=undefined && activador!=false) {
		evento=activador;
	}else{
		evento="click";
	}
	if(contenido!=false){
		contenedor=$('#'+id_cont);
		contenedor.popover('destroy');
		options={'content':contenido,'placement':posicion,'trigger':evento};
		contenedor.popover(options);
		contenedor.popover('show');
		if (addClass != undefined && addClass != "") {
			popover=contenedor.parent().children('.popover');
			popover.addClass(addClass);
		};
		
	}else{
		$('#'+id_cont).popover('destroy');
	}
	
}


function notificacion (contenido,tipo,accion) {
	if(accion=="show"){
		switch (tipo) {
		case 0:
	    	$('#notification').addClass( "success" );
	    break;
		case 1:
	    	$('#notification').addClass( "danger" );
	    break;
		case 2:
	    	$('#notification').addClass( "warming" );
	    break;
	    default:
	    	$('#notification').addClass( "primary" );

		}
		$('#notification').animate({
	      width: "show",
	      opacity:"show"
	    }, 500, "swing",function (argument) {
	    	$('#notification').html(contenido);
	    	setTimeout("notificacion ('','','hide')",5000);
	    	
	    });

	}
	if(accion=="hide")
	{
		$('#notification').html(contenido);
		$('#notification').animate({
	      width: "hide",
	      opacity:"hide"
	    }, 500, "swing");
	}
	

}


function informButton (element) {
	id=element.attr('id');
	cont=element.data('info');
	alertasPop (id,cont,"top","hover",false,"info");
	// body...
}