/**
* @author Juan Carlos Herencia
*
* En este documento se recogen todas las funcionalidades de manejo de datos
***/
$(document).ready(function(){
	$("button[data-href]").click(function(){
		location.href = $(this).attr("data-href");
			});

	loadTextarea();
});
function loadTextarea(){
	
	if($("#hide_descrip").length){
		if($("#hide_descrip").val()!=""){
				$("#descrip").text($("#hide_descrip").val());
			}	
	}
	
}


var ingredientes = [];
function crearListadoIng(id_modal){
	// if(cargarDatos()){
		$('#'+id_modal).modal('show');

	// }

}

function cargarDatos(){
	
}
// function agregarIngred(){
// 	// alert("ok");
// 	var new_ingred=$("#sel-ingred").val();
	
// 	if(new_ingred!=""){
// 		ingredientes.push(new_ingred);
// 		//$("#ingredientes").val(ingredientes.serializeArray());
// 		ingr_to_array();
// 		if (ingredientes.length>1) {
// 			var ind_ingr=ingredientes.length -1;
// 			addIngr(ind_ingr,ingredientes[ind_ingr]);
// 		}else{
// 			//alert("generar");
// 			generate_table();
// 		}
// 	}


// }

// function generate_table(){
// //Crea la tabla cuando se añade el primer elemento
// 	var salida="<table id='ingred' class='table table-condensed'>";
//         	salida+="<tr>";                  
//         		salida+="<th class='col-md-6'>Ingrediente</th>";                            
//                 salida+="<th class='col-md-5'>Cantidad</th>";                   
//                 salida+="<th class='col-md-1'>Unidad</th>";                    
//             salida+="</tr>";                     
// 		var datos_ing=ingredientes[0].split("-");
// 		salida+="<tr id='ing_0'>";
// 			salida+="<td>"+datos_ing[0]+"</td>";
// 			salida+="<td>";
//                 salida+="<div class='col-md-12'>";
//                     salida+="<input type='text' class='cant form-control'>";
//               	salida+="</div>";
//             salida+="</div>";
//             salida+="<td>"+datos_ing[1]+"</td>";
//             salida+="<td><a class='btn btn-danger btn-xs' href='#' onclick='remv_ing(0)'><span class='glyphicon glyphicon-remove'></span></a></td>";
//         salida+="</tr>";
	
// 	salida+="</table>";
// 	$("#list_ingr").html(salida);
// }
// function addIngr(ind_ingr,new_ingredient){
// //Añade una fila a la tabla
// 	var datos_ing=new_ingredient.split("-");
// 		salida="<tr id='ing_"+ind_ingr+"'>";
// 			salida+="<td>"+datos_ing[0]+"</td>";
// 			salida+="<td>";
//                 salida+="<div class='col-md-12'>";
//                     salida+="<input type='text' class='cant form-control'>";
//               	salida+="</div>";
//             salida+="</div>";
//             salida+="<td>"+datos_ing[1]+"</td>";
//             salida+="<td><a class='btn btn-danger btn-xs' href='#' onclick='remv_ing("+ind_ingr+")'><span class='glyphicon glyphicon-remove'></span></a></td>";
//         salida+="</tr>";
//        // alert(salida);
// 	$("#ingred").append(salida);
// }
                         
// function remv_ing(ind_ing){
	
// 	$("#ing_"+ind_ing).remove();
// 	ingredientes.splice(ind_ing,1);
	

// }
// /************************/
// function ingr_to_array(){
// 	//ing_array =ingredientes.toString();
// 	$("#ingredientes").val(ingredientes);
// }
// /********************/
// function calculaTotal(){
	

// }
