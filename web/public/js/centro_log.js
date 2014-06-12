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
		// $('#tags').html('');
		$('#crearPed').removeClass( "hidden" );
		$('#editPed').addClass( "hidden" );
		$('.estado').addClass( "hidden" );
		$('#modal-pedido-title').html("Generar pedido");
		$('#modal-pedido').modal('show');
	});


	$('#crearPed').click(function () {
		newPedido($(this).data('url'));
		
	});
	$('#editPed').click(function () {
		modPedido ($('#modal-pedido-title').data('id'),$(this).data('url'));
	});
	$('#editPed').click(function () {
	modEnviado (id,url);
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

$('.del_ped').click(function () {
	id=$(this).data('id');
	url=$(this).data('url');
	$.confirm({
		title:"Alerta del sistema",
	    text: "¿Está seguro que desea borrar el pedido <span class='label label-danger'> Nº "+id+"</span> definitivamente del sistema?",
	    confirmButton: "Aceptar",
    	cancelButton: "Cancelar",
    	theme:"complement-1-b",
	    confirm: function(button) {
	        borrarPedido(id,url);
	    },
	    cancel: function(button) {
	       // alert(" no borrar");
	    }
	});
});

$('.edit_pend').click(function () {
	id = $(this).data('id');
	url = $(this).data('url');
	editPedido (id,url,"pendiente");

});

$('.edit_enviado').click(function () {
	id = $(this).data('id');
	url = $(this).data('url');
	fecha = $(this).data('fecha');
	usu = $(this).data('usu');
	edit_enviado (id,url,fecha,usu,"enviado");

});

$('.edit_recibido').click(function () {
	id = $(this).data('id');
	url = $(this).data('url');
	editPedido (id,url,"recibido");

});


$('.editarTag').click(function () {
	alert("ok");
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
		  			$('#tag_cnt_'+id_pro).html("<span class='cantidad'>"+cantidad+" </span>"+tag.unidad);
			
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
function editarTag(id) {
	alert("ok" +id);
	$("#formtag_nombre").html($("#tag_"+id).html());
	$("#formtag_unid").html($("#tag_"+id).data('unidad'));
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
		salida+="<td id='tag_"+tag.id_pro+"' class='tag col-md-5' data-idprod='"+tag.id_pro+"' data-idunid='"+tag.unidad+"' >"+tag.nombre+"</td>";  
		salida+="<td id='tag_cnt_"+tag.id_pro+"' class='tag_cnt col-md-3' data-idprod='"+tag.id_pro+"' > <span class='cantidad'> "+tag.cantidad+"</span> "+ tag.unidad+"</td>";
		salida+="<td class='col-md-4'><div class='btn-group btn-group-sm'>";
		salida+="<button id='' data-id='"+tag.id_pro+"' type='button' class='btn btn-primary editarTag'>";
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
				alertasPop ('formtag_cantidad',false,'bottom' );
			} else{
				alertasPop ('formtag_cantidad',"El valor no es un número",'bottom' );
			};
		} else{
			alertasPop ('formtag_cantidad',"Campo vacío",'bottom' );
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
			// alert(response);
			// $('#collapse_1').collapse('hide');
			// $('#collapse_2').collapse('show');
			location.reload();
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
				pedido=ProcesarRespuesta (response);
				listarPedido (pedido,"#list_prod",false);
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
function editPedido (id,url,estado) {
	// alert(id);
	$.ajax({
		url: url,
		type: 'POST',
		async: true,
		data: {'id':id},
		success: function (response) {
			// alert(response);
			if (response!="false") {
				pedido=ProcesarRespuesta (response);
				cargarPedido (pedido,id,estado);
				$("#"+estado).checked = true;
				$(".btn-status").removeClass('active');
				$("#est_"+estado).addClass('active');
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
function modPedido (id,url) {
	var pedido={};
	$('.tag_cnt').each(function(key, element){
		prod=$(this).data('idprod');
		cantidad=$(this).children('.cantidad').text();
		pedido[prod]=cantidad;
	});
	estado=$('input:radio[name=estado]:checked').val();
		$.ajax({
			url: url,
			type: 'POST',
			async: true,
			data: {'id':id,'estado':estado, 'pedido':pedido},
			success: function (response) {
				location.reload();
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
	// }
	
}
function edit_enviado (id,url,fecha,usu,estado) {
	$.ajax({
		url: url,
		type: 'POST',
		async: true,
		data: {'id':id},
		success: function (response) {
			// alert(response);
			if (response!="false") {
				pedido=ProcesarRespuesta (response);
				listarPedido (pedido,"#list_prod",true,estado);
				$("#showIdPed").html(id);
				$("#showUsuPed").html(usu);
				$("#showFechPed").html(fecha);
				
				$('#modal-showpedido').modal('show');
			}
		},
		error: function(jqXHR, exception) {
            if (jqXHR.status == 500) {
                $('#response').html(jqXHR.responseText); 
                // alert(jqXHR.responseText);
            };
        }
	});	
}
function modEnviado (id,url) {
	estado=$('input:radio[name=estado]:checked').val();
	alert(estado);
}
function borrarPedido(id,url) {
	
	$.ajax({
			url: url,
			type: 'POST',
			async: true,
			data: {'id':id},
			success: function (response) {
				location.reload();
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
function cargarPedido (pedido,id,estado) {
	$('#tags').html('');
	for( index in pedido){
		addTag(pedido[index],'#tags');
		// alert(pedido[index].nombre);
	}
	$('#modal-pedido-title').html("Editar pedido Nº "+id);
	$('#modal-pedido-title').data('id',id);
	//*******************************//
	$('#editPed').removeClass( "hidden" );
	$('#crearPed').addClass( "hidden" );
	$('.estado').removeClass( "hidden" );
	//*****************************//
	// $("#pendiente").prop("checked", "checked");
	$("#"+estado).checked = true;
	$(".btn-status").removeClass('active');
	$("#est_"+estado).addClass('active');
	//**********************//

	//**********************//
	$('#modal-pedido').modal('show');
}

// function cargarPedidoEnv (pedido,id,estado) {
// 	// body...
// }
function ProcesarRespuesta(response) {
	var response = response.split("&");
	var pedido={};
	for (index in response) {
		values=response[index].split(":");
		// alert(index+" - "+values[0]+values[1]+values[2]+values[3]);
		pedido[index]=new ProdPedido(values[0],values[1],values[2],values[3]);
	};
	return pedido;
}
function listarPedido (pedido,div_id,editable) {
	if (editable==undefined) {
		editable=false;
	}
	salida="";
	for (index in pedido) {
		salida+="<a href='#' class='list-group-item' data-idprod='"+pedido[index].id_pro+"''>";
		salida+=pedido[index].nombre+"<span class='badge'>"+pedido[index].cantidad+" "+pedido[index].unidad+"</span>";
		salida+="</a>";
	}
	
	$(div_id).html(salida);
	if (editable) {
		salida="<div class='col-md-4'>Editar estado</div>"+
			"<div class='input-group col-md-8'>"+
					"<div class='btn-group estado' data-toggle='buttons'>"+
					  "<label class='btn btn-primary complement-1-b' disabled>Estado</label>"+
					  "<label id='est_pendiente' class='btn btn-danger btn-status'>"+
					    "<input type='radio' name='estado' id='pendiente' value='pendiente'>"+
					    	"<span class='glyphicon glyphicon glyphicon-warning-sign'></span>"+
					  "</label>"+
					  "<label id='est_enviado' class='btn btn-warning btn-status'>"+
					    "<input type='radio' name='estado' id='enviado' value='enviado'>"+
					    	"<span class='glyphicon glyphicon glyphicon-export'></span>"+
					  "</label>"+
					  "<label id='est_recibido' class='btn btn-success btn-status'>"+
					    "<input type='radio' name='estado' id='recibido' value='recibido'>"+
					    	"<span class='glyphicon glyphicon glyphicon-import'></span>"+
					  "</label>"+
					"</div>"+

				"</div>";

		$('#control_estado').html(salida);

		botonera="<button class='btn btn-primary complement-1-b' type='button'>Editar</button>"+
		"<button class='btn btn-danger' type='button' data-dismiss='modal' > Cerrar</button>";
		$('#btn_showPed').html(botonera);
	} else {
		$('#control_estado').html('');
		botonera="<button class='btn btn-danger' type='button' data-dismiss='modal' > Cerrar</button>";
		$('#btn_showPed').html(botonera);
	}
}

//*******************************************/
