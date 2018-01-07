var HeroesTuBe = HeroesTuBe || {};

HeroesTuBe.Base = (function () {

    var init = function () {
        _toggleImages();
    };

    var _toggleImages = function () {

        $('aside').css('background-image', 'url(img/' + $('article > section:first-child').data('image') + ')');
        $('aside > a').show();

        $(window).on('resize scroll', function() {
            $('article > section').each(function() {
                if ($(this).isInViewport()) {
                    $('aside').css('background-image', 'url(img/' + $(this).data('image') + ')');
                    if ($(this).data('movie')) {
                        $('aside a').show();
                    } else {
                        $('aside a').hide();
                    }
                }
            });
        });
    };

    return {
        init: init
    };

})();

HeroesTuBe.Base.init();
