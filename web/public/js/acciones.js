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

			location.href = $(this).attr("data-href");
		}
		
	});

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
var Ingrediente = function (id, nombre, unidad,precio) {
    this.id = id;
    this.nombre = nombre;
    this.unidad = unidad;
    this.precio = precio;
    this.und_comp = und_comp;
    this.select=false;
}
//Variables Globlales
var ingredientes = [];
var idModal="";
var precioTotal=0;


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
           ingredientes[key]=ingr;
          
        } 
	});
	genInterfaz();
	$('#'+idModal).modal('hide');
	
}
function genInterfaz(){
	interfaz="";
	for(var i in ingredientes) {
		
    	if( comprobarExistIng(i)== false){
    		interfaz=[
			'<tr class="ingr_'+i+'">'+
				'<td>'+ingredientes[i].nombre+" --"+i+'<input type="hidden" name="id_ing['+i+']" value="'+ingredientes[i].id+'"></td>'+
				'<td>'+
					'<div class="input-group">'+
						'<input type="text" id="cantidad_'+i+'" name="cantidad['+i+']" class="form-control input-sm" onchange="calcPrecioTotal('+i+',true)">'+
						'<span class="input-group-addon">'+ingredientes[i].unidad+'</span>'+
				'</td>'+
				'<td>'+
					'<button type="button" class="btn btn-danger btn-sm" onclick="eliminarIng('+i+')">'+
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
	// pos=indexById(id,ingredientes);
	// alert("pos "+pos);
	calcPrecioTotal(id,false);

	ingredientes.splice(id,1);
	
	
	$(".ingr_"+id).remove();
	// for (var i = 0; i < ingredientes.length; i++) {
	// 	alert("->"+i);
	// };
}

function calcPrecioTotal(key,accion){
	
	cantidad=parseFloat($("#cantidad_"+key).val());
	// alert(cantidad+" - "+ typeof(cantidad));
	// alert(ingredientes.length);
	// alert("key"+ key+" -- "+ingredientes[key].nombre);
	// alert("");
	if(cantidad!=""){
		precio=(parseFloat(cantidad) * parseFloat(ingredientes[key].precio) ) / parseFloat(ingredientes[key].und_comp);
		if(accion){
			precioTotal+=precio;
		}else{
			precioTotal-=precio;
		}
		$(".precioTotal").val(precioTotal);
	}
	// alert(precioTotal);
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
