$(document).ready(function(){

	$('#showPedirProd').click(function () {
		$('#modal-peticiones').modal('show');
	});
	$('#newProd').click(function () {
		agregarNuevoProd ();
	});
	$("#solicitar").click(function () {
		solicitar($(this).data('usu'),$(this).data('url'));
	});
		
	

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
	// $('#prueba').click(function (e) {
	// 	alert('borrar');
	// 	// borrarProducto ($(this).data('id'));
	// });
	

	
	//------------------------------------//
	// $('#contAddProd').hover(function () {
		alertasPop (
		'contAddProd',
		"Haga click en el producto deseado para añadirlo.",
		'right','hover','info large'
		 );
		
	// });
	//----------------------------------------------------//
});
	//--------------FUNCIONES ------------//
var Tag = function (id_pro,nombre,cantidad,unidad) {
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
		if (nombre != undefined && nombre != "") {
			if (cantidad!="" && id_pro!=undefined) {
				if (!isNaN(cantidad)) {
					cantidad=parseFloat(cantidad);
					addTag(new Tag(id_pro,nombre,cantidad,unidad),'#tags');
					$('#formtag_unid').html("");
					$('#formtag_nombre').html("");
					$('#formtag_cantidad').val('');
					alertasPop ('formtag_cantidad',false,'bottom',false,'danger' );
				} else{
					alertasPop ('formtag_cantidad',"El valor introducido no es un número",'top',false,'danger' );
				};
			} else{
				alertasPop ('formtag_cantidad',"Rellene este campo.",'top',false,'danger' );
			};	
		}else{
			alertasPop ('formtag_cantidad',"Haga click en un ingrediente del bloque derecho.",'top',false,'danger' );
		}
		
	}
	function addTag (tag,id_tag) {
		alertasPop ('solicitudes',false,'bottom',false,'danger' );

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
	
	function ifexistTag (id) {
	
		if ($('#tag_'+id).length) {
			return true;
		}else{
			return false;
		}
	}
	function generateTag (tag,id_tag) {
		salida="<tr id='cnt_tag_"+tag.id_pro+"' class='content_tag'>";
			salida+="<td id='tag_"+tag.id_pro+"' class='tag col-md-5' data-idprod='"+tag.id_pro+"' data-idunid='"+tag.unidad+"' data-cant='"+tag.cantidad+"'>"+tag.nombre+"</td>";  
			salida+="<td id='tag_cnt_"+tag.id_pro+"' class='tag_cnt col-md-3' data-idprod='"+tag.id_pro+"' > <span class='cantidad'> "+tag.cantidad+"</span> "+ tag.unidad+"</td>";
			salida+="<td class='col-md-3'><div class='btn-group btn-group-sm'>";
			salida+="<button id='btneditar_"+tag.id_pro+"' data-id='"+tag.id_pro+"' data-editable=false type='button' class='btn btn-primary complement-1-b' onclick='editarProducto ("+tag.id_pro+")'>";
			salida+="<span class='glyphicon glyphicon-edit'></span></button>";
			salida+="<button id='' type='button' class='btn btn-danger' onclick='borrarProducto ("+tag.id_pro+")'>";
			salida+="<span class='glyphicon glyphicon-trash'></span></button>";								
			salida+="</div></td>";
		salida+="</tr>";
		$(id_tag).html($(id_tag).html()+salida);
		
	}

	function borrarProducto (id_pro) {
		
		$('#cnt_tag_'+id_pro).remove();
	}
	function editarProducto (id_pro) {
		button=$('#btneditar_'+id_pro);
		

		if (button.data('editable')) {
			// alert('editable');
			nombre=$("#tag_"+id_pro).html();
			unid=$("#tag_"+id_pro).data('idunid');
			cant=$('.cantidad input').val();
			if (cant !=""  && !isNaN(cant)) {
				$("#tag_cnt_"+id_pro).children(".cantidad").html(cant);
				$("#tag_"+id_pro).data('cant',cant);
			}else{

				$("#tag_cnt_"+id_pro).children(".cantidad").html($("#tag_"+id_pro).data('cant'));
			}
			
			button.html("<span class='glyphicon glyphicon-edit'></span>");
			button.removeClass('btn-success');
			button.addClass('btn-primary complement-1-b');
			button.data('editable',false);
		}else{
			// alert('no editable');
			nombre=$("#tag_"+id_pro).html();
			unid=$("#tag_"+id_pro).data('idunid');
			cant=$("#tag_"+id_pro).data('cant');
			$("#tag_cnt_"+id_pro).children(".cantidad").html("<input type='text' value='"+cant+"' class='col-md-2 editinput'>");
			button.html("<span class='glyphicon glyphicon-ok'></span>");
			button.removeClass('btn-primary complement-1-b');
			button.addClass('btn-success');
			button.data('editable',true);
		}
		
		
	}

	function solicitar (id_usu,url) {
		// alert(url);
		solicitudes={};
		if ($('.tag_cnt').length) {
			$('.tag_cnt').each(function(key, element){
			prod=$(this).data('idprod');
			cantidad=$(this).children('.cantidad').text();
			solicitudes[prod]=cantidad;
			});
			// for (prod in solicitudes) {
			// 	alert(prod+" - "+solicitudes[prod]);
				
			// };
			$.ajax({
					url: url,
					type: 'POST',
					async: true,
					data: {'id_usuario':id_usu, 'ingr':solicitudes},
					success: function (response) {
						// alert(response);
						location.reload();
					},
					error: function(jqXHR, exception) {
			            if (jqXHR.status === 0) {
			                alert('Not connect.\n Verify Network.');
			            } else if (jqXHR.status == 404) {
			                alert('Requested page not found. [404]');
			            } else if (jqXHR.status == 500) {
			                // $('#response').html(jqXHR.responseText); 
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
		}else{
			alertasPop ('solicitudes',"No ha introducido ningún ingrediente.",'bottom',false,'danger' );
		}
	}
	function delSolc(id,element) {
		url=element.data('url');
		$.ajax({
					url: url,
					type: 'POST',
					async: true,
					data: {'idsolic':id,},
					success: function (response) {
						// alert(true);
						if (response='true') {
							location.reload();
						};
						
					}
				});
	}
	function verProdSolc(id,element) {
		url=element.data('url');
		$.ajax({
					url: url,
					type: 'POST',
					async: true,
					data: {'idsolic':id,},
					success: function (response) {
						separadores=["||","&","="];
						respProc=procResponse(response,separadores);
						// alert(print_r(respProc,true));

						for (var i = 0; i < respProc[0].length; i++) {
							// alert(respProc[0][i][0]);
							key=respProc[0][i][0];
							value=respProc[0][i][1];
							if(key!="foto"){
								$("#info_prod ."+key).html(value);
							}else{
								img='<img class="img-rounded img-xs" src="/Gestor_de_cocina/web/'+value+'">';
								$("#info_prod ."+key).html(img);
							}
							
						};
						// $("#info_prod").show();
						
					}
			
				});
	
	}
	
	







