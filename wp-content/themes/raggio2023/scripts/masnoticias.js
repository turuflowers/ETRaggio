$(document).ready(function () {
    // Ocultar todas menos las primeras 6 al cargar la página
    $('#noticiasHome .cajaNoticias:not(.hide):gt(5)').addClass('hidenoticia'); 

    // Mostrar 6 noticias más al hacer clic en el botón
    $('#masnoticias').on('click', function () {
        $('#noticiasHome .cajaNoticias.hidenoticia').not('.hide').slice(0, 6).removeClass('hidenoticia');

        // Si no quedan más noticias ocultas, ocultar el botón
        if ($('#noticiasHome .cajaNoticias.hidenoticia').not('.hide').length === 0) {
            $(this).addClass('hide');
        }
    });
});