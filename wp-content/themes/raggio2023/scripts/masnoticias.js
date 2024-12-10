$(document).ready(function () {
    // Ocultar todas menos las primeras 6 al cargar la página
    $('#noticiasHome .cajaNoticias:gt(6)').addClass('hidenoticia'); 

    // Mostrar 6 noticias más al hacer clic en el botón
    $('#masnoticias').on('click', function () {
        $('#noticiasHome .cajaNoticias.hidenoticia').slice(0, 6).removeClass('hidenoticia');

        // Si no quedan más noticias ocultas, ocultar el botón
        if ($('#noticiasHome .cajaNoticias.hidenoticia').length === 0) {
            $(this).addClass('hide');
        }
    });
});