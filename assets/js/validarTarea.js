$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';


        if( $('#tarea').val() == '' ){
            errores += '<p>Ingrese un nombre para la tarea</p>';
            $('#tarea').css("border-bottom-color", "#F14B4B")
        } else{
            $('#tarea').css("border-bottom-color", "#d1d1d1")
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
