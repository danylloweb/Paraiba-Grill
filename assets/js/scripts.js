$(function () {
      //Abre o Popup
    $('[data-modal-open]').on('click', function (e) {
        $("html").addClass("modal-aberto");
        var targeted_modal_class = $(this).attr('data-modal-open');
        //$('[data-modal="' + targeted_modal_class + '"]').fadeIn(550);
        $('[data-modal="' + targeted_modal_class + '"]').css("display", "flex").hide().fadeIn();
        e.preventDefault();
    });

    //Fecha o Popup
    $('[data-modal-close]').on('click', function (e) {
        $("html").removeClass("modal-aberto");
        var targeted_modal_class = $(this).attr('data-modal-close');
        $('[data-modal="' + targeted_modal_class + '"]').fadeOut(550);
        e.preventDefault();
    });

    //Fecha o Popup quando clicar fora
    $('.modal').bind('click', function (e) {
        if (e.target === this) {
            $("html").removeClass("modal-aberto");
            $('.modal').fadeOut(550);
        }
    });
});
