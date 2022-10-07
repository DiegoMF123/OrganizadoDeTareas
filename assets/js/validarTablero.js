$(document).ready(function () {

    $('#btnSend').click(function () {

        var errores = '';

        // Validado nombre del tablero ==============================
        if ($('#nombTablero').val() == '') {
            errores += '<p>Ingrese un nombre para el tablero</p>';
            $('#nombTablero').css("border-bottom-color", "#F14B4B")
        } else {
            $('#nombTablero').css("border-bottom-color", "#d1d1d1")
        }

        // Validado de la descripcion del tablero ==============================
        if ($('#descTablero').val() == '') {
            errores += '<p>Ingrese una Descripcion para el tablero</p>';
            $('#descTablero').css("border-bottom-color", "#F14B4B")
        } else {
            $('#descTablero').css("border-bottom-color", "#d1d1d1")
        }

        // Validado de la selección del tipo de tablero ==============================
        if ($('#tipoTablero').val() == '') {
            errores += '<p>Ingrese una Descripcion para el tablero</p>';
            $('#tipoTablero').css("border-bottom-color", "#F14B4B")
        } else {
            $('#tipoTablero').css("border-bottom-color", "#d1d1d1")
        }


        // ENVIANDO MENSAJE ============================
        if (errores == '' == false) {
            var mensajeModal = '<div class="modal_wrap">' +
                '<div class="mensaje_modal">' +
                '<h3>Errores encontrados</h3>' +
                errores +
                '<span id="btnClose">Cerrar</span>' +
                '</div>' +
                '</div>'

            $('body').append(mensajeModal);
        }

        // CERRANDO MODAL ==============================
        $('#btnClose').click(function () {
            $('.modal_wrap').remove();
        });
    });

});
