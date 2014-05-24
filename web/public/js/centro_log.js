/**
* @author Juan Carlos Herencia
*
* En este archivo se
***/


$(document).ready(function(){


	$('.agregarProd').click(function () {
		agrgSolcPedido ($(this).data('id'),$(this));
	});
	$('#crearPed').click(function () {
		genPedido();
		
	});
	$('.list-group-item').click(function (e) {
		prod=$(this).data('idprod');
		nombre=$(this).data('nombre');
		unid=$(this).data('unid');
		$('#formtag_cantidad').val('');
		$('#formtag_unid').html(unid);
		$('#formtag_nombre').html(nombre);
		return false;
	});
	
});
var Tag = function (id,id_pro,nombre,cantidad,unidad) {
    this.id = id;
    this.id_pro = id_pro;
    this.nombre = nombre;
    this.cantidad = cantidad;
    this.unidad = unidad;
  }
 var tags = [];
function agrgSolcPedido (id,button) {
	contenedor=$('#solicitud_'+id);
	id_pro=contenedor.children('.nombre').data('id');
	nombre=contenedor.children('.nombre').data('nombre');
	unidad=contenedor.children('.cantidad').data('unidad');
	cantidad=contenedor.children('.cantidad').data('cantidad');
	addTag(new Tag(id,id_pro,nombre,cantidad,unidad),'#tags');
	button.attr('class','agregarProd btn btn-success');
	button.html('<span class="glyphicon glyphicon-ok"></span>');
}

function addTag (tag,id_tag) {
	

	if(ifexistTag(tag.id_pro)){
		sumatorio=sumarProd (tag);
		sumatorio=Math.round(sumatorio * 100) / 100;
		alert(sumatorio);
		if(sumatorio!=false){
			// alert(sumatorio);
			salida=sumatorio+" "+ tag.unidad;
			$('#tag_cnt_'+tag.id_pro).html(salida);
		// 	cantidad=sumarProd (tag);
		// 	cantidad=Math.round(cantidad * 100) / 100;
			
		// 	alert(tag.id_pro+" "+cantidad+" - "+tag.cantidad);
		// 	tag.cantidad=cantidad;
			// alert(sumarProd (tag));
			// generateTag (tag,id_tag);
		}
		// // cantidad=parseFloat($('.tag_'+tag.id_pro).data('cant'))+parseFloat(tag.cantidad);
		// tag.cantidad=cantidad;
		
		// alert(tag.id_pro+" "+cantidad+" - "+tag.cantidad);
		
		}else{
			generateTag (tag,id_tag);
		}
}

function generateTag (tag,id_tag) {
	salida="<tr id='cnt_tag_"+tag.id_pro+"' class='content_tag'>";
		salida+="<td id='tag_"+tag.id_pro+"' class='tag' data-idprod='"+tag.id_pro+"' data-cant='"+tag.cantidad+"'>"+tag.nombre+"</td>";  
		salida+="<td id='tag_cnt_"+tag.id_pro+"'> "+tag.cantidad+" "+ tag.unidad+"</td>";
		salida+="<td><div class='btn-group btn-group-sm'>";
		salida+="<button id='' data-id='' type='button' class='agregarProd btn btn-primary'>";
		salida+="<span class='glyphicon glyphicon-edit'></span></button>";
		salida+="<button id='' data-id='' type='button' class='agregarProd btn btn-danger'>";
		salida+="<span class='glyphicon glyphicon-remove'></span></button>";								
		salida+="</div></td>";
	salida+="</tr>";
	// alert(salida);
	$(id_tag).html($(id_tag).html()+salida);
	// alert($(id_tag).html());
}
function sumarProd (tag) {
	var cantidad=false;
	  $('.tag').each(function(key, element){
	  		
	  		// if(tag.id_pro==$(this).data('idprod')){
	  		// 	// alert($(this).data('cant'));
	  		// }
	  		if(tag.id_pro==$(this).data('idprod')){
	  			// alert(tag.cantidad+" - "+$(this).data('cant'));
	  			cantidad=parseFloat(tag.cantidad)+parseFloat($(this).data('cant'));
	  			// alert(cantidad);
	  			
	  		}
	  		
	  });
	  alert("cant  "+cantidad);
	  return cantidad;
	// var response =false;
	// $('.tag').each(function(key, element){
	// 	prod=$(this).data('idprod');
	// 	cant=$(this).data('cant');
		
	// 	// alert(prod+" - "+cant);
	// 	alert(tag.id_pro+"  "+prod);
	// 	if(tag.id_pro == prod){
	// 		cantidad= parseFloat(tag.cantidad) + parseFloat($(this).data('cant'));
	// 		// alert(tag.cantidad+" + " +$(this).data('cant') );
	// 		// tag.cantidad=cantidad;
	// 		// alert(cantidad+"   key "+key);
	// 		response= cantidad;
	// 		// return cantidad;
	// 	}
		
	// });	
	// return response;
}
function delTag (id) {
	$('tr.tag_'+id).remove();
	$('#button_'+id).attr('class','agregarProd btn btn-primary');
	$('#button_'+id).html('<span class="glyphicon glyphicon-plus"></span>');
	// alert();
}
function ifexistTag (id) {
	
	if ($('#tag_'+id).length) {
		return true;
	}else{
		return false;
	}
}


function agrTodos () {
	$('.agregarProd').each(function(key, element){
			agrgSolcPedido ($(this).data('id'),$(this));
	});
}
function borrarTodos () {
	$('.agregarProd').each(function(key, element){
			delTag ($(this).data('id'));
	});
}
function noTags() {
	if($('#tags').find(".tag").length){
            return false;
        }else{
        	return true;
        }
}
function genPedido() {
	// prueba ("tag");
	$('#modal-pedido').modal('show');
}