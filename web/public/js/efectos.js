/*
*	@author Juan Carlos Herencia Castro
*
*	Archivo que recoge el código de los efectos visuales 
*/

$(document).ready(function(){
	view_receta();
    	
	show_limit_text(".description",45);
	//Editar info usuario
	edit_user_info();
    //Boton de "Ir Arriba"
       scrollUp();

       cargarUnidades();
     //------------------------------//
 //     $("#open-wizard").click(function () {    
	// 	$('#wizzard').modal('show');
	// });
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
  		panel_control("mod_pedidos");
  		$(".side-nav > li > a").click(function(){
  			panel_control("mod_" + $(this).attr('id'));
  		});
  	}
 	$('figure').hover(function(){
		  $(this).children("figcaption").children(".info_hide").slideDown('fast');
		},function(){
		  $(this).children("figcaption ").children(".info_hide").slideUp('fast');
		});

	//prepare_rec();
	generateSelect();
});//FIN DOCUMENT READY
/*******************************/
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
		nombre=$(this).children().children("a.nombre").text();
		img=$(this).children("img").clone();
		info=$(this).children().children(".info-rec");
		slug_edit=info.children("#slug_edit").text();
		slug_del=info.children("#slug_del").text();
		desc=info.children(".desc").text();
		comens=info.children(".comensales").text();
		precio=info.children(".precio").text();
		ingr=info.children(".ingr").html();
		/************/

		$("#modal-prepare #img-rec").html(img);
		$("#modal-prepare #edit").attr("data-href",slug_edit);
		$("#modal-prepare #delete").attr("data-href",slug_del);
		/************/
		$("#modal-prepare .precio").html(precio/comens+" € / persona");
		$("#modal-prepare .comensales").html(comens+" comensal/es");
		$("#modal-prepare .pr-total").html("<strong>"+precio+" €</strong>");

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
function  generateSelect() {
	unid=$("#unit").data('value');
	$("#unit option").each(function (index) {
		 if ($(this).val() == unid){
		 	$(this).attr("selected",true); 
		 }
	});

}
function prepare_rec(){
	$("#modal-prepare").modal('show');
}



function cargarUnidades(){
				if($('#unit').change(function(){
					if($(this).val()!=""){
						$(".unit").html($(this).val());
					}
				}));
			}


