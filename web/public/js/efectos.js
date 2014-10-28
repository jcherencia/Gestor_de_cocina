/*
*	@author Juan Carlos Herencia Castro
*
*	Archivo que recoge el código de los efectos visuales 
*/

$(document).ready(function(){
	view_receta();
    	
	show_limit_text(".description",45);
	//Boton de "Ir Arriba"
       scrollUp();

       cargarUnidades();
     //------------------------------//
 	//-----------------------//
     showInfoCreate();
     //-----------------------//
	$("#toggle-open_id").click(function () {    
		$('.open_id_body').toggle(500);
	});
	//Mostrar modal de subir foto
	$("#user-photo").click(function () {
		$('#modal-upload').modal('show');
	});
  
        //IDENTIFICA SI EXISTE EL DIV ADMIN 
  	if ($('.admin').length) {
  		
  		// alert(print_r(getGET(),true));
  		get=getGET();
  		switch(get['menu']){
  			case 'pedidos':
  				panel_control("mod_pedidos");
  			break;
  			case 'usuarios':
  				panel_control("mod_usuarios");
  			break;
  			case 'categorias':
  				panel_control("mod_categorias");
  			break;
  			default:
  				panel_control("mod_pedidos");
  			break;
  		}
  		
  		$(".side-nav > li > a").click(function(){
  			panel_control("mod_" + $(this).attr('id'));
  			return false;
  		});
  	}
 	$('figure').hover(function(){
		  $(this).children("figcaption").children(".info_hide").slideDown('fast');
		},function(){
		  $(this).children("figcaption ").children(".info_hide").slideUp('fast');
		});
 	$("#editPerfil").click(function(){
 			load_user_info();
			$("#modal-editPerfil").modal('show');
	});
	// $("#input_busqueda").onkeyup(function(){
	// 		alert("prueba");
	// });
	//prepare_rec();

	generateSelect();
	//**************************************************//
	
	});//FIN DOCUMENT READY
/*******************************/
function buscar () {

	busqueda=$('#input_busqueda').val();
	url=$('#input_busqueda').data('url');
	urlrec=$('#input_busqueda').data('url-rec');
	if (busqueda!="") {
		
		$.ajax({
			url: url,
			type: 'POST',
			async: true,
			data: {'busqueda':busqueda},
			success: function (response) {
					// alert(response);
					if (response=="") {
						content="<ul class='list'>";
						content+="<li>No hay resultados.</li>";
						content+="</ul>";
						showResult (content);
					}else{
						separadores=["||","&","="];
						respProc=procResponse(response,separadores);
						// alert(print_r(respProc,true));
						content="<ul class='list'>";

						for (var i = 0; i < respProc.length; i++) {
							content+="<li>";
							// content+="<span class=\"glyphicon glyphicon-book\"></span><a href=''>";
							content+="<a href='"+urlrec+"receta/"+respProc[i][0][1]+"'>";

							content+=respProc[i][1][1]+"</a></li>";
						};
						content+="</ul>";
						showResult (content);
					}
					
				}
			
		});
	}
	if(busqueda==""){
		
		showResult (false);
	}
	
	
	
}

function showResult (content) {
	if (content==false) {
		$('#input_busqueda').popover('destroy');
	}else{
		$('#input_busqueda').popover('destroy');
		var plantilla = '<div class="popover resul_busqueda" role="tooltip"><div class="arrow"></div><h3 class="popover-title complement-1-b"></h3><div class="popover-content "></div></div>';
		$('#input_busqueda').popover({
		        trigger: 'manual',
		        container:'body',
		        placement: 'bottom',
		        html:true,
		        title:"Resultados de búsqueda",
		        template:plantilla,
		        content: content
		    });
		    $('#input_busqueda').popover("show");
		}
}
function showInfoCreate () {
	var info=[];
	info['und_compra']=	"La <strong>unidad de compra</strong> es la cantidad mínima, de un producto, que se puede comprar de una sola vez";

	$("input").mouseover(function () {
		msg=info[$(this).attr('id')];
		
		if(msg==""){
			$("#info").addClass('alert-info');
     		$("#info").html(msg);
		}else{
			// alert(msg);
		}
		
     });
	$("input").mouseout(function () {
		$("#info").removeClass('alert-info');
     	$("#info").html("");

     });

}
/********************************/
function show_hide_slide(visible,hidden){
	for (var i = 0; i < hidden.length; i++) {
		$("#"+hidden[i]).slideUp('slow');
	}
	$("#"+visible).slideDown('slow');
}
/****************CONTROL DEL MENÚ LATERAL************************/
function panel_control(visible){
	var hidden = [];
  		
	$('.mod').each(function(key, element){
		id_element=$(element).attr('id');
		if(id_element!=visible){
			hidden.push(id_element);	
		}
		
	});
	toggle_class_active(visible,hidden);
	show_hide_slide(visible,hidden);


}
function toggle_class_active(visible,hidden){
	
	for (var i = 0; i < hidden.length; i++) {
		//item_menu=hidden[i].split("_");
		//alert(item_menu[1]);
		$("#"+hidden[i].split("_")[1]).parent().removeClass("active");
	}
	//alert(visible.split("_")[1]);
	$("#"+visible.split("_")[1]).parent().addClass("active");

}

/***********************/
function view_receta(){
	$("figure.receta").click(function () {
		id=$(this).data('id');
		if (id!="NULL") {


			info=$(this).children().children(".info-rec");
			slug_view=info.children("#slug_view").text();
			slug_edit=info.children("#slug_edit").text();
			slug_del=info.children("#slug_del").text();
			nombre='<a href="'+slug_view+'">'
			nombre+=$(this).children().children("a.nombre").text();
			nombre+='</a>';
			img=$(this).children("img").clone();
			desc=info.children(".desc").text();
			categ=info.children(".categoria").text();
			comens=info.children(".comensales").text();
			precio=info.children(".precio").text();
			tiempo=info.children(".tiempo").text();
			notamedia=info.children(".nota_media").text();
			editable=info.children('#editable').val();
			ingr=info.children(".ingr").html();
				if (editable=="true") {
					$("#panel-edit").children().prop('disabled',false);
				}else{
					$("#panel-edit").children().prop('disabled',true);
				}

			// cont_edit=$("#panel-edit");
			// cont_edit.each(function(){
			
			// });
			/**********************************************/

			$("#modal-prepare #img-rec").html(img);
			$("#modal-prepare #img-rec").children('img').addClass('img-xs'); //img-profile_xs
			$("#modal-prepare #edit").attr("data-href",slug_edit);
			$("#modal-prepare #delete").attr("data-href",slug_del);
			/************/

			precio_pers=parseFloat(precio/comens);
			precio_pers=Math.round(precio_pers * 100) / 100;
			$("#modal-prepare .precio").html(precio_pers+" € / persona");
			$("#modal-prepare .tiempo").html(" ("+tiempo+" min )");
			$("#modal-prepare .categoria").html(categ);
			$("#modal-prepare .comensales").html(comens+" comensal/es");
			$("#modal-prepare .comensales").data('comensales',comens);
			$("#modal-prepare .pr-total").html("<strong>"+precio+" €</strong>");

			$("#modal-prepare .modal-title span#ModalLabel").html(nombre);
			$("#modal-prepare p.desc").html(desc);
			$("#modal-prepare .ingr").html(ingr);
			$("#modal-prepare #prepare_rec").data( "id", id );
			$('#val_receta').val(id);
			$('#notamedia').html(notamedia);
			//******************************************//
			$("#modal-prepare input[name='comensales']").val(comens);

			/*********SHOW MODAL********/
			$("#modal-prepare").modal('show');
		};	
	});
}

/***********************/
function scrollUp(){ 
 $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
  
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 200);
            return false;
        });
    }

/********************USER INFO****************************/
function load_user_info(){
	nombre=$('#perfilNombre').html();
	apellidos=$('#perfilApellidos').html();
	usuario=$('#perfilUsuario').html();
	email=$('#perfilEmail').html();
	imgsrc=$('#user-photo').attr('src');
	$('#editImg').attr('src',imgsrc); 
	$('#nombre').val(nombre);
	$('#apellidos').val(apellidos);
	$('#usuario').val(usuario);
	$('#email').val(email);
	
}
/*********************************************/
function show_limit_text(selector,limit){
	var ind=0;
	$(selector).each(function (index) {
		var text=$(this).text();
		if(text.length>limit){
			var show_text= $(this).text().slice(0,limit);
		    var hide_text=$(this).text().slice(limit,text.length);
			var exit= show_text +"<a href='#' onclick='show_more_info("+ind+");'> + info...</span><span class='more-info'>"+hide_text+"</span>";
			$(this).html(exit);
			$(this).attr("id","more-info_"+ind);
		}
	   
		ind++;
	});
}
function  generateSelect() {
	unid=$("#unit").data('value');
	$("#unit option").each(function (index) {
		 if ($(this).val() == unid){
		 	$(this).attr("selected",true); 
		 }
	});

}




function cargarUnidades(){
				if($('#unit').change(function(){
					if($(this).val()!=""){
						$(".unit").html($(this).val());
					}
				}));
			}


