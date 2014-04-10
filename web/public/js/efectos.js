/*
*	@author Juan Carlos Herencia Castro
*
*	Archivo que recoge el código de los efectos visuales 
*/

$(document).ready(function(){
	view_receta();
    	
	show_limit_text(".description",45);
	//---Pasos creacion nuevo producto----//
	
	if ($('#form-productos').length) {

	 	steps_create();
	}
	//Editar info usuario
	edit_user_info();
    //Permite cambiar entre distintas vistas
    toggleview("panel-lista");
	//Boton de "Ir Arriba"
       scrollUp();
     //-----------------------//
	$("#toggle-open_id").click(function () {    
		$('.open_id_body').toggle(500);
	});
	//Mostrar modal de subir foto
	$("#user-photo").click(function () {
		$('#modal-upload').modal('show');
	});
  if ($('.admin').length) {
        //IDENTIFICA SI EXISTE EL DIV ADMIN 
  	if ($('.admin').length) {
  		panel_control("mod_pedidos");
  		$(".side-nav > li > a").click(function(){
  			panel_control("mod_" + $(this).attr('id'));
  		});
  	}
 	// $('figure').mouseover(function(){
 	// 	$(this).children("figcaption ").slideDown('fast');
 	// });
 	$('figure').hover(function(){
		  $(this).children("figcaption").children(".info_hide").slideDown('fast');
		},function(){
		  $(this).children("figcaption ").children(".info_hide").slideUp('fast');
		});	
	//prepare_rec();
	 }
});//FIN DOCUMENT READY
/********************************/
// function show_hide(visible,hidden){
// 	for (var i = 0; i < hidden.length; i++) {
// 		$("#"+hidden[i]).fadeOut('slow');
// 	}
		
	
// 	$("#"+visible).fadeIn('slow');
// }
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
		nombre=$(this).children().children("a.nombre").text();
		img=$(this).children("img").clone();
		info=$(this).children().children(".info-rec");
		slug=info.children(".slug").text();
		desc=info.children(".desc").text();
		comens=info.children(".comensales").text();
		precio=info.children(".precio").text();
		ingr=info.children(".ingr").html();
		/************/

		$("#modal-prepare #img-rec").html(img);
		$("#modal-prepare #edit").attr("data-href","/receta/editar/"+slug);
		$("#modal-prepare #delete").attr("data-href","/receta/editar/"+slug);
		/************/
		$("#modal-prepare .precio").html(precio+" € / persona");
		$("#modal-prepare .comensales").html(comens+" comensal/es");
		$("#modal-prepare .pr-total").html("<strong>"+comens*precio+" €</strong>");

		$("#modal-prepare .modal-title span#ModalLabel").html(nombre);
		$("#modal-prepare p.desc").html(desc);
		$("#modal-prepare .ingr").html(ingr);
		/*********SHOW MODAL********/
		$("#modal-prepare").modal('show');
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
//Controla los tipos de vistas diponibles
function toggleview(default_hidden){
	$("#"+default_hidden).hide();
    $("input[name=vista]").change(function () {

		var selected ="panel-"+$(this).val();
		var hidden = [];
		 $('.panel-view').each(function(key, element){
		 	var id_element=$(element).attr('id');
		 	if(id_element!=selected){
		 		hidden.push(id_element);
		 	}
  		});
			show_hide_slide(selected,hidden);
		  //Efecto mostrar/ocultar para los open id
	});
}
/********************USER INFO****************************/
function edit_user_info(){
	$(".edit-info").click(function(e){
			var element=$(this).prev();
			content=element.text();
			element.html("<input type=\"text\" value=\""+content+"\">");
			input=element.children();

				input.focusout(function(){
					if(input.val()!=""){
						content=input.val();

						//Aqui iria la llamada a la API para almacenar los datos
						element.html("<span class=\"info\">"+content+"</span>");

					}

				});

		});
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
function show_more_info(id){
	//var text=$("#more-info_"+id).text().split(" + info...");
	//$(".modal-body").html(text[0]+""+text[1]);
	//$('#modal-descrip').modal('show');

}
function prepare_rec(){
	$("#modal-prepare").modal('show');
}

/**************************/
function steps_create(){
	var step=1;
	boton=$("#button-action");
	$(".step_1").show("slow");
	$("#unit").change(function(){
		if($(this).val()!=""){
			steps++;
			//Step 2
			$(".unit").html($(this).val());
			$(".step_2").show("slow");
				$("input[name=und_compra]").change(function(){
					
					if($(this).val()!=""){
						//Step 3
						$(".step_3").show("slow");
						$("input[name=precio]").change(function(){
							if($(this).val()!=""){
						//Step 4
						$(".step_4").show("slow");
								}
						});
					}
				});
		}
	});
	
	
}

function detector(){
	
}


