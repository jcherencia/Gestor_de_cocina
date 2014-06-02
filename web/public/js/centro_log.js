/**
* @author Juan Carlos Herencia
*
* En este archivo se recoge el funcionamiento de la interfaz del centro Logistico
***/


$(document).ready(function(){

//*****************MANEJADORES DE EVENTOS DE LA BOTONERA********//
	$('.agregarProd').click(function () {
		
		if($(this).data('agregado')==false){
			agrgSolcPedido ($(this).data('id'),$(this));
		}
		
	});
	$('.elimProd').click(function () {
		button=$('#button_'+$(this).data('id'));
		delTag ($(this).data('idprod'),$(this).data('cant'),$(this).data('und'),button);  
	});
	$('#generarPed').click(function () {
		$('#tags').html('');
		$('#modal-pedido-title').html("Generar pedido");
		$('#modal-pedido').modal('show');
	});


	$('#crearPed').click(function () {
		newPedido($(this).data('url'));
		
	});
//*****Agregar nuevo producto al pedido****//
	$('.list-group-item').click(function (e) {
		prod=$(this).data('idprod');
		nombre=$(this).data('nombre');
		unid=$(this).data('unid');
		$('#formtag_cantidad').val('');
		$('#formtag_unid').html(unid);
		$('#formtag_nombre').html(nombre);
		$('#formtag_nombre').data('idprod',prod);
		return false;
	});
	
});
$('.showPedido').click(function () {
		id = $(this).data('id');
		url = $(this).data('url');
		fecha = $(this).data('fecha');
		usu = $(this).data('usu');
		showPedido(id,url,fecha,usu);
		return false;
	});
$('.edit_pend').click(function () {
	// alert("editar");
	id = $(this).data('id');
	url = $(this).data('url');
	editPedido (id,url);

});
//************************************************//
//**********INTERFAZ SOLICITUD PRODUCTO***********//
//************************************************//
var Tag = function (id_pro,nombre,cantidad,unidad) {
    this.id_pro = id_pro;
    this.nombre = nombre;
    this.cantidad = cantidad;
    this.unidad = unidad;
  }

function agrgSolcPedido (id,button) {
	contenedor=$('#solicitud_'+id);
	id_pro=contenedor.children('.nombre').data('id');
	nombre=contenedor.children('.nombre').data('nombre');
	unidad=contenedor.children('.cantidad').data('unidad');
	cantidad=contenedor.children('.cantidad').data('cantidad');
	addTag(new Tag(id_pro,nombre,cantidad,unidad),'#tags');
	button.attr('class','agregarProd btn btn-success');
	button.html('<span class="glyphicon glyphicon-ok"></span>');
	button.data('agregado',true);
}

function addTag (tag,id_tag) {
	

	if(ifexistTag(tag.id_pro)){
			$('.tag_cnt').each(function(key, element){
	  		id_pro=$(this).data('idprod');
	  		cant_prod=$(this).children('.cantidad').html();
	  		
	  			if(tag.id_pro==id_pro){
	  				cantidad=parseFloat(cant_prod) + parseFloat(tag.cantidad);
		  			cantidad=Math.round(cantidad * 100) / 100;
		  			// alert($(this).html()+" - Actual: " +cant_prod+" + "+tag.cantidad+" = "+cantidad);
		  			$(this).data('cant',cantidad);
		  			$('#tag_cnt_'+id_pro).html("<span class='cantidad'>"+cantidad+" </span>"+unidad);
			
	  			}
	  		
	 		 });
		
		}else{
			generateTag (tag,id_tag);
		}
}

function delTag (id_pro,cant,unidad,button) {
	$('.tag_cnt').each(function(key, element){
		cant_prod=$(this).children('.cantidad').html();	
  		if(id_pro==$(this).data('idprod')){
	  			
	  			cantidad=parseFloat(cant_prod)- cant;
	  			cantidad=parseFloat(Math.round(cantidad * 100) / 100);
	  			if (cantidad<=0) {
	  				
	  				$('#cnt_tag_'+id_pro).remove();
	  			}else{	
	  				
	  				$('#tag_cnt_'+id_pro).html("<span class='cantidad'>"+cantidad+" </span>"+unidad);
	  			};
	  			
			
	  		}
	  		
	  });
	button.attr('class','agregarProd btn btn-primary');
	button.html('<span class="glyphicon glyphicon-plus"></span>');
	button.data('agregado',false);
}
function borrarProducto (id_pro) {
	
	$('.agregarProd').each(function(key, element){
			if($(this).data('idprod')==id_pro){
				$(this).attr('class','agregarProd btn btn-primary');
				$(this).html('<span class="glyphicon glyphicon-plus"></span>');
				$(this).data('agregado',false);
			}
	});
	$('#cnt_tag_'+id_pro).remove();
}
function generateTag (tag,id_tag) {
	salida="<tr id='cnt_tag_"+tag.id_pro+"' class='content_tag'>";
		salida+="<td id='tag_"+tag.id_pro+"' class='tag col-md-5' data-idprod='"+tag.id_pro+"' >"+tag.nombre+"</td>";  
		salida+="<td id='tag_cnt_"+tag.id_pro+"' class='tag_cnt col-md-3' data-idprod='"+tag.id_pro+"' > <span class='cantidad'> "+tag.cantidad+"</span> "+ tag.unidad+"</td>";
		salida+="<td class='col-md-4'><div class='btn-group btn-group-sm'>";
		salida+="<button id='' data-id='' type='button' class='agregarProd btn btn-primary'>";
		salida+="<span class='glyphicon glyphicon-edit'></span></button>";
		salida+="<button id='' data-id='' type='button' class='btn btn-danger' onclick='borrarProducto ("+tag.id_pro+")'>";
		salida+="<span class='glyphicon glyphicon-remove'></span></button>";								
		salida+="</div></td>";
	salida+="</tr>";
	$(id_tag).html($(id_tag).html()+salida);
	
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
		if ($(this).data('agregado')==false) {
			agrgSolcPedido ($(this).data('id'),$(this));
		} ;
			
	});
}
function borrarTodos () {
	$('.elimProd').each(function(key, element){
		button=$('#button_'+$(this).data('id'));
		delTag ($(this).data('idprod'),$(this).data('cant'),$(this).data('und'),button);  
	});
}



//************************************************//
//************FIN SOLICITUD PRODUCTO**************//
//************************************************//
var pedido={};
var ProdPedido = function (id_pro,nombre,cantidad,unidad) {
    this.id_pro = id_pro;
    this.nombre = nombre;
    this.cantidad = cantidad;
    this.unidad = unidad;
  }

function agregarNuevoProd () {
		id_pro=$('#formtag_nombre').data('idprod');
		nombre=$('#formtag_nombre').html();
		cantidad=$('#formtag_cantidad').val();
		unidad=$('#formtag_unid').html();
		if (cantidad!="" && id_pro!=undefined) {
			if (!isNaN(cantidad)) {
				cantidad=parseFloat(cantidad);
				addTag(new Tag(id_pro,nombre,cantidad,unidad),'#tags');
				$('#formtag_unid').html("");
				$('#formtag_nombre').html("");
				$('#formtag_cantidad').val('');
			} else{
				alert("no es un numero");
			};
		} else{
			alert("vacio");
		};	

		
}		

function newPedido(url) {
	var pedido={};
	var solicitudes=[];
	$('.tag_cnt').each(function(key, element){
		prod=$(this).data('idprod');
		cantidad=$(this).children('.cantidad').text();
		pedido[prod]=cantidad;
	});
	$('.agregarProd').each(function(key, element){
		if ($(this).data('agregado')) {
			solicitudes[key]=$(this).data('id');
		};
	});
	if(solicitudes.length==0){
		solicitudes=false;
	};
	$.ajax({
		url: url,
		type: 'POST',
		async: true,
		data: {'solicitudes':solicitudes, 'pedido':pedido},
		success: function (response) {
			// notificacion ("Receta preparada: <strong>"+response+"</strong>",0,"show");
			// $('#response').html(response);
			alert(response);
			$('#collapse_1').collapse('hide');
			$('#collapse_2').collapse('show');
		},
		error: function(jqXHR, exception) {
            if (jqXHR.status === 0) {
                alert('Not connect.\n Verify Network.');
            } else if (jqXHR.status == 404) {
                alert('Requested page not found. [404]');
            } else if (jqXHR.status == 500) {
                $('#response').html(jqXHR.responseText); 
                // alert(jqXHR.responseText);
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

function showPedido (id,url,fecha,usu) {
	$.ajax({
		url: url,
		type: 'POST',
		async: true,
		data: {'id':id},
		success: function (response) {
			if (response!="false") {
				pedido=ProcesarRespusta (response);
				listarPedido (pedido,"#list_prod");
				$("#showIdPed").html(id);
				$("#showUsuPed").html(usu);
				$("#showFechPed").html(fecha);
				$('#modal-showpedido').modal('show');
			}

			
		},
		error: function(jqXHR, exception) {
            if (jqXHR.status === 0) {
                alert('Not connect.\n Verify Network.');
            } else if (jqXHR.status == 404) {
                alert('Requested page not found. [404]');
            } else if (jqXHR.status == 500) {
                // $('#response').html(jqXHR.responseText); 
                // alert(jqXHR.responseText);
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
function editPedido (id,url) {
	// alert(id);
	$.ajax({
		url: url,
		type: 'POST',
		async: true,
		data: {'id':id},
		success: function (response) {
			// alert(response);
			if (response!="false") {
				pedido=ProcesarRespusta (response);
				cargarPedido (pedido,id);
			}
		},
		error: function(jqXHR, exception) {
            if (jqXHR.status === 0) {
                alert('Not connect.\n Verify Network.');
            } else if (jqXHR.status == 404) {
                alert('Requested page not found. [404]');
            } else if (jqXHR.status == 500) {
                $('#response').html(jqXHR.responseText); 
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
function cargarPedido (pedido,id) {
	for( index in pedido){
		addTag(pedido[index],'#tags');
		// alert(pedido[index].nombre);
	}
	$('#modal-pedido-title').html("Editar pedido Nº "+id);
	$('#crearPed').html('Editar Pedido');
	$('#modal-pedido').modal('show');
}
function ProcesarRespusta(response) {
	var response = response.split("&");
	for (index in response) {
		values=response[index].split(":");
		// alert(index+" - "+values[0]+values[1]+values[2]+values[3]);
		pedido[index]=new ProdPedido(values[0],values[1],values[2],values[3]);
	};
	return pedido;
}
function listarPedido (pedido,div_id) {
	salida="";
	for (index in pedido) {
		salida+="<a href='#' class='list-group-item' data-idprod='"+pedido[index].id_pro+"''>";
		salida+=pedido[index].nombre+"<span class='badge'>"+pedido[index].cantidad+" "+pedido[index].unidad+"</span>";
		salida+="</a>";
	}
	$(div_id).html(salida);
}