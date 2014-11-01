
function cargarDataTable (id_datatable,flag) { 
    
        user=$('#'+id_datatable).data('user');
        if (user!="NULL") {
             tipo="user";
        }else{
            tipo="all";
        }
        if (flag) {
            // alert(user+" "+tipo);
            $('#'+id_datatable).html( '<table cellpadding="0" cellspacing="0" border="0" class="display" id="tbl_'+tipo+'"></table>' );
             columns=obtenerCol (tipo);
             dataSet=obtenerDataset (user);
            // alert(print_r(set,true));
            $('#tbl_'+tipo).dataTable( {
                "data": dataSet,
                "columns": columns,
                "language": {
                        "url": "//cdn.datatables.net/plug-ins/725b2a2115b/i18n/Spanish.json"
                    },
                "responsive": true,
            });  
    }else{
        // $('#tbl_'+tipo).dataTable('destroy');
        $('#'+id_datatable).html('');
    }
}




// function cargarDataTable (id_datatable) {  
//     user=$('#'+id_datatable).data('user');
//     // alert(tipo);
//     if (user!="NULL") {
//         tipo="user";
//     }else{
//         tipo="all";
//     }
//     $("#"+id_datatable).html( '<table cellpadding="0" cellspacing="0" border="0" class="display" id="table_'+tipo+'"></table>' );
//     dataset=obtenerDataset(user);
//     columns=obtenerCol(tipo);
//     alert(print_r(dataset,true));
//     alert(print_r(columns,true));


//     $('#table_user').dataTable( { 
//     // $('#table_'+tipo+'').dataTable( {
//         "data": dataset,
//         "columns": columns,
//         "language": {
//                 "url": "//cdn.datatables.net/plug-ins/725b2a2115b/i18n/Spanish.json"
//             },
//         "responsive": true,
//     } );
// }


function obtenerDataset (user) {
    
    url_rec=$('#url_rec').data('url')+"receta/";
    url=$('#misrecetas').data('url');
    // alert(url);
    $.ajax({
            url: url,
            type: 'POST',
            async: false,
            data: {'usuario':user},
            success: function (response) {
                    // alert(response);
                    respProc=[];
                    if (response=="") {
                        
                    }else{
                        separadores=["||","&"];
                        respProc=procResponse(response,separadores);
                        for (var i = 0; i < respProc.length; i++) {
                            // botonera=genBotonera(respProc[i][0],tipo);
                            id=respProc[i][0];
                            respProc[i].splice(0,1);
                            respProc[i][0]='<a href="'+url_rec+''+id+'">'+respProc[i][0]+'</a>';
                            respProc[i][3]+=" min";
                            respProc[i][4]+=" €";
                            respProc[i][5]=respProc[i][5]+'  <span class="fav"><span class="glyphicon glyphicon-star"></span></span>';
                        }

                        
                    }
                   
                }
            
        });
    return respProc;
}



function obtenerCol (tipo) {
   switch(tipo){
        case 'user':
            columns=[
            { "title": "Nombre" },
            { "title": "Fecha creacion" },
            { "title": "Comensales" },
            { "title": "Tiempo", "class": "center"  },
            { "title": "Precio", "class": "center"  },
            { "title": "Nota media", "class": "center"  },
            // { "title": "Opciones" }
        ];
        break;
         case 'all':
            columns=[
            { "title": "Nombre" },
            { "title": "Fecha creacion" },
            { "title": "Comensales" },
            { "title": "Tiempo", "class": "center"  },
            { "title": "Precio", "class": "center"  },
            { "title": "Nota media", "class": "center"  },
            // { "title": "Creador" },
            // { "title": "Opciones" }
        ];
        break;
        


   }
        
        return columns;
}
function genBotonera (id,tipo) {
    /************************************************/
    var botonera='';
        
       //  botonera += '<div class=\'btn-group botonera\'>';
       //  botonera += '  <button type=\'button\' class=\'btn btn-primary dropdown-toggle\' data-toggle=\'dropdown\'>';
       //  botonera += '    Opciones <span class=\'caret\'><\/span>';
       //  botonera += '  <\/button>';
       //  botonera += '  <ul class=\'dropdown-menu\' role=\'menu\'>';
       // // alert(tipo);
       //  switch(tipo){
       //      case 'facturas':
       //      case 'facturas_pend':
       //          botonera += '    <li><a href=\'#\' onclick="cargarEntidad('+id+',\'facturas\')"><span class="glyphicon glyphicon-cog"></span> Ver detalles<\/a><\/li>';
       //          botonera += '    <li><a href=\'#\' onclick="descargar('+id+',\'facturas\')"><span class="glyphicon glyphicon-download-alt"></span> Descargar<\/a><\/li>';
       //      break;
       //      case 'curso':
       //          botonera += '    <li><a href=\'#\' onclick="cargarEntidad('+id+',\''+tipo+'\')"><span class="glyphicon glyphicon-cog"></span> Ver detalles<\/a><\/li>';
       //          botonera += '    <li><a href=\'#\' onclick="cargarEntidadsec ('+id+',\'empresas_curso\',\'\')"><span class="glyphicon glyphicon-inbox"></span> Empresas<\/a><\/li>';
       //          botonera += '    <li><a href=\'#\' onclick="cargarEntidadsec ('+id+',\'alumno_curso\',\'\')"><span class="glyphicon glyphicon-user"></span> Alumnos<\/a><\/li>';
       //      break;
       //      default:
       //          botonera += '    <li><a href=\'#\' onclick="cargarEntidad('+id+',\''+tipo+'\')"><span class="glyphicon glyphicon-cog"></span> Ver detalles<\/a><\/li>';
       //          // botonera += '    <li><a href=\'#\' onclick="descargar('+id+',\''+tipo+'\')">Descargar<\/a><\/li>';
       //          botonera += '    <li><a href=\'#\' onclick="cargarEntidadsec ('+id+',\''+tipo+'\',\'\')"><span class="glyphicon glyphicon-sort"></span> Relaciones<\/a><\/li>';
       //      break;
       //  }
       
        
       //  botonera += '<\/div>';
    return botonera;
}