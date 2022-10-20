$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';


        if( $('#usuario').val() == '' ){
            errores += '<p>Seleccione un usuario para asignación</p>';
            $('#usuario').css("border-bottom-color", "#F14B4B")
        } else{
            $('#usuario').css("border-bottom-color", "#d1d1d1")
        }

        if( $('#asignarTarea').val() == '' ){
            errores += '<p>Seleccione una tarea ha asignar</p>';
            $('#asignarTarea').css("border-bottom-color", "#F14B4B")
        } else{
            $('#asignarTarea').css("border-bottom-color", "#d1d1d1")
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
