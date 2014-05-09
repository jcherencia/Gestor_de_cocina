jQuery().ready(function() {

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

});