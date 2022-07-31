
function inicio(){

    cargarbeneficiarios();

}


function cargarbeneficiarios(){

    /*
    |-----------------------------------------------------
    | AQUI SE AGREGA UN PARAMETRO ADICIONAL AL FORMULARIO 
    |-----------------------------------------------------
    */
    var formData = new FormData();

    formData.append('opcion','C');
    /*
    |-----------------------------------------------
    | AQUI SE LLAMA EL AJAX 
    |-----------------------------------------------
    */
    $.ajax({
        url: "app/handler/alquileres/hndregistrobeneficiarios.php",
        data: formData,
        processData: false,
        contentType: false,
        type: 'POST',
        beforeSend: function () {
            //$("#preview").fadeOut();
            $("#error").fadeOut();
        },
        success: function (data) {
        var json = data;
        var html = "";
/*
        console.log(json);
        console.log("Este es el Mensaje: " + json.mensaje);
        console.log("Items: " + json.Items.length);
        console.log("Items Resultados: " + json.Items[0].length);
        console.log("Email Resultados: " + json.Items[0][1].email);
*/
                /*
                |------------------------------------------------------
                | AQUI SE CARGA LA INFORMACION EN LA TABLA
                |------------------------------------------------------
                */
                if(json.Items.length > 0){
                    var tr;
                    for (var i = 0; i < json.Items[0].length; i++) {
                
                       // if (isEmpty(json.Items[0][i]) == false) {
                            tr = $('<tr/>');
                            
                            tr.append("<td>" + json.Items[0][i].propietario+ "</td>");
                            tr.append("<td>" + json.Items[0][i].codigo + "</td>");
                            tr.append("<td>" + json.Items[0][i].beneficiario+ "</td>");
                            tr.append("<td>" + json.Items[0][i].cedula+ "</td>");
                            tr.append("<td>" + json.Items[0][i].telefono + "</td>");
                            tr.append("<td>" + json.Items[0][i].correo + "</td>"); 
                            tr.append("<td>" % "</td>"); 
                            
                            var html="";
                            html = '<div class="btn-group" style="font-size:1.3em; letter-spacing:0.2em;">';
                            html += '<a title="Editar" data-field-id="' + json.Items[0][i].id  + '"><i class="fa fa-edit" alt=“editar”></i></a>&nbsp;';
                            html += '<a title="Ver" data-field-id="' + json.Items[0][i].id + '"><i class="fa fa-search" alt=“Ver”></i></a>&nbsp;'
                            html += '<a title="Bitacora" data-field-id="' + json.Items[0][i].id + '"><i class="fa fa-folder-open"></i></a>&nbsp;';
                            html += '<a title="Eliminar"  data-field-id="'  + json.Items[0][i].id + '"><i class="fa fa-trash" alt=“eliminar”></i></a>';
                            html += '</div>'
                            tr.append("<td>" + html + "</td>");
                            $('#datosBeneficiario').append(tr);
                        //}
                    }

                    new simpleDatatables.DataTable("#datosBeneficiario");
                    //editarRepresentante();
                    //validareliminarRepresentante();
                }
                /************************************************ */


        },
        error: function (e) {
            $("#error").html(e).fadeIn();
        }
    });

}

function limpiarTabla() {

    $('#datatablesSimple tbody').children().remove();

}

$(document).ready(function() {


    inicio();



});