/**
* @author Juan Carlos Herencia
*
* En este documento se recogen todas las funcionalidades de manejo de datos
***/
$(document).ready(function(){
	$("button[data-href]").click(function(){
		if($(this).data("type")=="delete"){
			alert("delete");
		}else{
			// alert("no");
			location.href = $(this).attr("data-href");
		}
		
	});
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
			// alert($('#listado_ingr').html());
    	}
			
	}
		
}
function eliminarIng(id){
	// alert("id->"+id);
	// alert(ingredientes.indexOf(ingredientes["'"+id+"'"]));
	ingredientes.splice(id,1);
	// alert(removido);
	calcPrecioTotal();
	
	$(".ingr_"+id).remove();
}
function modCantIng(key){
	cantidad=parseFloat($("#cantidad_"+key).val());
	if(cantidad!=""){
		key="'"+key+"'";
		// alert(key);
		// alert("ingredientes["+key+"]");
		ingredientes[key].cantidad=cantidad;
		calcPrecioTotal();
	}
}
function calcPrecioTotal(){
	precioTotal=0;
	for( var ingr in ingredientes){
		// alert(ingredientes[ingr].nombre);
		precioTotal+=(parseFloat(ingredientes[ingr].cantidad) * parseFloat(ingredientes[ingr].precio) ) / parseFloat(ingredientes[ingr].und_comp);
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
				alert(ingredientes[index].nombre);
           	// }	
		});
		
		calcPrecioTotal();
	}
}
function prepare_rec(id){
	// $("#modal-prepare").modal('show');
	// alert("ok");
	$.ajax({
		url: '/Gestor_de_cocina/web/app_dev.php/centro_log/genSolicitud',
		type: 'POST',
		async: true,
		// 	data: 'id='+id+'&foo2=bar2' ,
		data: {'id':"1",'ingr':{'pollo':500}},
		success: function (response) {
		alert("response "+response);
		},
		error: function(jqXHR, exception) {
            if (jqXHR.status === 0) {
                alert('Not connect.\n Verify Network.');
            } else if (jqXHR.status == 404) {
                alert('Requested page not found. [404]');
            } else if (jqXHR.status == 500) {
                // alert('Internal Server Error [500].');
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