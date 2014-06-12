/**
* @author Juan Carlos Herencia
*
* En este documento se recogen todas las funcionalidades de manejo de datos
***/
$(document).ready(function(){
	$("button[data-href]").click(function(){
		if($(this).data("type")=="delete"){
			// alert("delete");
			if(confirm("¿Desea realmente borrar?") == true)
			{
				location.href = $(this).attr("data-href");
			}
		}else{
			// alert("no");
			location.href = $(this).attr("data-href");
		}
		
	});
	if ($('#prepare_rec').length){

		$('#prepare_rec').click(function(){
			prepare_rec($(this).data('id'));
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
           ingredientes["'"+id+"'"]=ingr;
          
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
		key="'"+key+"'";
		ingredientes[key].cantidad=cantidad;
		calcPrecioTotal();
	}
}
function calcPrecioTotal(){
	precioTotal=0;
	for( var ingr in ingredientes){
		precioTotal+=(parseFloat(ingredientes[ingr].cantidad) * parseFloat(ingredientes[ingr].precio) ) / parseFloat(ingredientes[ingr].und_comp);
	}
	precioTotal=Math.round(precioTotal * 100) / 100;
	
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
			index=clase[0].split("_")[1];
			ing=$(this).children('.nombre');
			var ingred = new Ingrediente(
				ing.children('input[type="hidden"]'), 
				$(this).children('.nombre').text(), 
				ing.data('unidad'),
				ing.data('precio'),
				ing.data('undcompra')
			);
			ingred.cantidad=$("#cantidad_"+index).val();
			// if( comprobarExistIng(i)== false){
				ingredientes[index]=ingred;
				// alert(ingredientes[index].nombre);
           	// }	
		});
		
		calcPrecioTotal();
	}
}
//**************************************************************//
//****************** FIN GESTION DE INGREDIENTES *******************//
//**************************************************************//

//**************************************************************//
//******************* PREPARACION RECETAS***********************//
//**************************************************************//

function prepare_rec(id_receta){
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
		
	// alert(comensales +" --- "+com_rec);
	$.ajax({
		url: '/Gestor_de_cocina/web/app_dev.php/recetas/genSolicitud',
		type: 'POST',
		async: true,
		data: {'id':id_receta,'ingr':ingredientes},
		success: function (response) {
			notificacion ("Receta preparada: <strong>"+response+"</strong>",0,"show");
			// alert("notificacion");
		},
		error: function(jqXHR, exception) {
            if (jqXHR.status === 0) {
                alert('Not connect.\n Verify Network.');
            } else if (jqXHR.status == 404) {
                alert('Requested page not found. [404]');
            } else if (jqXHR.status == 500) {
                         $('#respose').html(jqXHR.responseText); 
                         alert(jqXHR.responseText);
            } else if (exception === 'parsererror') {
                alert('Requested JSON parse failed.');
            } else if (exception === 'timeout') {
                alert('Time out error.');
            } else if (exception === 'abort') {
                alert('Ajax request aborted.');
            } else {
                alert('Uncaught Error.\n' + jqXHR.responseText);
            }
        }
	});
}

//**************************************************************//
//*********** SISTEMA DE NOTIFICACIONES Y ALERTAS***************//
//**************************************************************//
function alertasPop (id_cont,contenido,posicion,activador) {
	if (activador != "click") {
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