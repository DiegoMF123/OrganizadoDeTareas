$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';


        if( $('#estadoTarea').val() == '' ){
            errores += '<p>Seleccione un estado para la tarea</p>';
            $('#estadoTarea').css("border-bottom-color", "#F14B4B")
        } else{
            $('#estadoTarea').css("border-bottom-color", "#d1d1d1")
        }

        if( $('#porcentajeTarea').val() == '' ){
            errores += '<p>Seleccione un porcentaje de avance de su tarea</p>';
            $('#porcentajeTarea').css("border-bottom-color", "#F14B4B")
        } else{
            $('#porcentajeTarea').css("border-bottom-color", "#d1d1d1")
        }



        // ENVIANDO MENSAJE ============================
        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errores Encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }

        // CERRANDO MODAL ==============================
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});
