	

	$("#valoracion").rating({
        starCaptions: function(val) {
        	return val;
            },
        starCaptionClasses: function(val) {
            if (val < 3) {
                return 'label label-danger';
            }
            if(val == 3){
            	return 'label label-primary';
            }
            if(val > 3){
                return 'label label-success';
            }
        },
        clearCaption:"Sin valoracion",
        clearButton:'<i class="glyphicon glyphicon-remove-sign"></i>',
        clearButtonTitle: 'Borrar',
    });
    $('#valoracion').on('rating.change', function(event, value, caption) {
    	// $('#val_receta').data('userid');
		    // updateValoracion (value,$('#val_receta').val(),$('#val_receta').data('userid'));
            updateValoracion (value);
		    // alert(caption);
		});
   	$('#valoracion').on('rating.clear', function(event) {
	    alert("vacio");
	});

	function updateValoracion (nota) {
		receta=$('#val_receta').val();
        usu=$('#val_receta').data('userid');
        url=$('#val_receta').data('url');
		// alert(url+","+receta+","+usu);
        $.ajax({
            // url: '/Gestor_de_cocina/web/app_dev.php/recetas/genSolicitud',
            url: url,
            type: 'POST',
            async: true,
            data: {'receta':receta,'usu':usu,'nota':nota},
            success: function (response) {
                // notificacion ("Receta preparada: <strong>"+response+"</strong>",0,"show");
                // alert(response);
                $('#notamedia').html(response);
            },
            error: function(jqXHR, exception) {
                if (jqXHR.status === 0) {
                    alert('Not connect.\n Verify Network.');
                } else if (jqXHR.status == 404) {
                    alert('Requested page not found. [404]');
                } else if (jqXHR.status == 500) {
                             $('#respose').html(jqXHR.responseText); 
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