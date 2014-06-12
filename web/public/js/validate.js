jQuery().ready(function() {

	jQuery.validator.addMethod("ingredientes", function(value, element) {

	}, "Añade un ingrediente");

	$("#form-productos").validate({
		rules: {
			nombre: "required",
			unidad: "required",						
			und_compra: {
				required: true,
				number: true
			},
			precio: {
				required: true,
				number: true
			},
			stock: {
				required: true,
				number: true
			},
			stock_min: {
				required: true,
				number: true
			},
			
		},
		messages: {
			nombre: "Obligatorio *",
			unidad: "Obligatorio *",
			und_compra:{								
				required: "Obligatorio *",
				number:"Introduce un numero"
			},
			precio:{								
				required: "Obligatorio *",
				number:"Introduce un número."
			},
			stock:{								
				required: "Obligatorio *",
				number:"Introduce un número."
			},
			stock_min:{								
				required: "Obligatorio *",
				number:"Introduce un número."
			}
		}
	});
	$("#form-recetas").validate({
		rules: {
			nombre: "required",
			// img: "required",
			descripcion:"required",
			comensales: {
				required: true,
				number: true
			},			

		},
		messages: {
			nombre: "Obligatorio *",
			// img: "Selecciona una foto *",
			descripcion:"Obligatorio *",								
			comensales:{								
				required: "Obligatorio *",
				number:"Introduce un número."
			},
			
		}
	});
	$("#form-recetas").validate({
		rules: {
			nombre: "required",
			// img: "required",
			descripcion:"required",
			comensales: {
				required: true,
				number: true
			},			

		},
		messages: {
			nombre: "Obligatorio *",
			// img: "Selecciona una foto *",
			descripcion:"Obligatorio *",								
			comensales:{								
				required: "Obligatorio *",
				number:"Introduce un número."
			},
			
		}
	});
	$("#form-registro").validate({
		rules: {
			nombre: "required",
			apellidos: "required",
			usuario: "required",
			pass: "required",
			repeat_pass: {
				equalTo: "#pass"
			},
			 email: {
			required: true,
			email: true
			},	

		},
		messages: {
			nombre: "Obligatorio *",
			apellidos: "Obligatorio *",
			usuario: "Obligatorio *",
			pass: "Obligatorio *",
			repeat_pass:"Repite la contraseña",
			email: {
				required: "Obligatorio *",
				email: "Email inválido."
			},	
			
			// img: "Selecciona una foto *",
			
			
		}
	});
	
});