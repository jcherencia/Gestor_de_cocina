
function cargarDataTable (id_datatable,flag) { 
        user=$('#'+id_datatable).data('user');
        tipo=$('#'+id_datatable).data('tipo');
        if (flag) {
            // alert(user+" "+tipo);
            $('#'+id_datatable).html( '<table cellpadding="0" cellspacing="0" border="0" class="display" id="tbl_'+tipo+'"></table>' );
             columns=obtenerCol (tipo);
             dataSet=obtenerDataset (user,tipo);
             // alert(print_r(columns,true));

            // alert(print_r(dataSet,true));
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


function obtenerDataset (user,tipo) {
  url_element=$('#url_ini').data('url');
  // alert(url_element);
    switch(tipo){
      case 'user_recetas':
      case 'all_recetas':
         url_element+="receta/";
         url=$('#misrecetas').data('url');
        
      break;
      case 'all_productos':
        url_element+="producto/";
        url=$('#productos').data('url');
        
      break;
    }
    
    // alert(url+" - "+url_element+" - "+user);
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
                            botonera=genBotonera(id,tipo);
                            // alert(botonera);
                            respProc[i].splice(0,1);
                            respProc[i][0]='<a href="'+url_element+''+id+'">'+respProc[i][0]+'</a>';
                            switch(tipo){
                              case 'user_recetas':
                              case 'all_recetas':
                                respProc[i][3]+=" min";
                                respProc[i][4]+=" €";
                                respProc[i][5]=respProc[i][5]+'  <span class="fav"><span class="glyphicon glyphicon-star"></span></span>';
                                respProc[i][6]=botonera;
                              break;
                              case 'all_productos':
                                unidad=respProc[i][3];
                                respProc[i].splice(3,1);
                                respProc[i][1]+=" €";
                                respProc[i][2]+=" "+unidad;
                                respProc[i][3]+=" "+unidad;
                                respProc[i][4]+=" "+unidad;
                                respProc[i][5]=botonera;
                                
                              break;
                            }
                            
                        }

                        
                    }
                   
                },error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(xhr.responseText);
                alert(thrownError);
            }
            
        });
    return respProc;
}



function obtenerCol (tipo) {
   switch(tipo){
        case 'user_recetas':
            columns=[
            { "title": "Nombre" },
            { "title": "Fecha creacion" },
            { "title": "Comensales" },
            { "title": "Tiempo", "class": "center"  },
            { "title": "Precio", "class": "center"  },
            { "title": "Nota media", "class": "center"  },
            { "title": "Opciones" }
        ];
        break;
         case 'all_recetas':
            columns=[
            { "title": "Nombre" },
            { "title": "Fecha creacion" },
            { "title": "Comensales" },
            { "title": "Tiempo", "class": "center"  },
            { "title": "Precio", "class": "center"  },
            { "title": "Nota media", "class": "center"  },
            // { "title": "Creador" },
            { "title": "Opciones" }
        ];
        break;
        case 'all_productos':
            columns=[
            { "title": "Nombre" },
            { "title": "Precio" },
            { "title": "Unid Compra" },
            // { "title": "", "class": "center"  },
            { "title": "Stock"  },
            { "title": "Stock Min"  },
            // { "title": "Creador" },
            { "title": "Opciones" }
        ];
        break;
        


   }
        
        return columns;
}
function genBotonera (id,tipo) {
    /************************************************/
    url_ini=$('#url_ini').data('url');

      var botonera='';
      switch(tipo){
          case 'user_recetas':
          case 'all_recetas':
            edit=url_ini+"recetas/editar/"+id;
            del=url_ini+"recetas/borrar/"+id;
          break;
          case 'all_productos':
            edit=url_ini+"almacen/mod_producto/"+id;
            del=url_ini+"almacen/borrar_producto/"+id;   
          break;
      }
        // alert(edit+" "+del);
        botonera += '<div class=\'btn-group btn-group-sm botonera\'>';
        botonera += '  <button data-href=\''+edit+'\' class=\'btn btn-primary\' onclick=\'confirmAction($(this))\'>';
        botonera += '<span class="glyphicon glyphicon-edit"></span>';
        botonera +='   </button>';
        // botonera +='<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> Popover on right</button>';
        botonera += '  <button data-href=\''+del+'\' data-type=\'delete\' class=\'btn btn-danger\' onclick=\'confirmAction($(this))\'>';
        botonera += '<span class="glyphicon glyphicon-trash"></span>';
        botonera +='   </button>';
        botonera +='</div>';

    return botonera;
}