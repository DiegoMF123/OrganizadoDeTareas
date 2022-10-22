$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';


        if( $('#nombre').val() == '' ){
            errores += '<p>Ingrese un nombre</p>';
            $('#nombre').css("border-bottom-color", "#F14B4B")
        } else{
            $('#nombre').css("border-bottom-color", "#d1d1d1")
        }

        if( $('#usuariodos').val() == '' ){
            errores += '<p>Ingrese un nombre de usuario</p>';
            $('#usuariodos').css("border-bottom-color", "#F14B4B")
        } else{
            $('#usuariodos').css("border-bottom-color", "#d1d1d1")
        }

        if( $('#password').val() == '' ){
            errores += '<p>Ingrese una contraseña</p>';
            $('#password').css("border-bottom-color", "#F14B4B")
        } else{
            $('#password').css("border-bottom-color", "#d1d1d1")
        }

        if( $('#correo').val() == '' ){
            errores += '<p>Ingrese un correo electrónico</p>';
            $('#correo').css("border-bottom-color", "#F14B4B")
        } else{
            $('#correo').css("border-bottom-color", "#d1d1d1")
        }

        if( $('#cofirmarusername').val() == '' ){
            errores += '<p>Ingrese un correo electrónico</p>';
            $('#cofirmarusername').css("border-bottom-color", "#F14B4B")
        } else{
            $('#cofirmarusername').css("border-bottom-color", "#d1d1d1")
        }

        if( $('#confirmarpassword').val() == '' ){
            errores += '<p>Ingrese un correo electrónico</p>';
            $('#confirmarpassword').css("border-bottom-color", "#F14B4B")
        } else{
            $('#confirmarpassword').css("border-bottom-color", "#d1d1d1")
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
