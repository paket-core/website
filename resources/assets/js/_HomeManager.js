var HomeManager = (function () {

    var RevealManager = require('./_RevealManager');
    var CountDownManager = require('./_CountDownManager');
    var VideoManager = require('./_VideoManager');
    var LoginPageEmbedded = require('./_LoginPageEmbedded');

    function init() {
        RevealManager.init({
            bars: true
        });
        CountDownManager.init();
        VideoManager.init();
        LoginPageEmbedded.init();
        var modal = $('#mapModal');
        $('#mapModalButton').click(function () {
            modal.modal('show');
        });
        $('#closeMapModal').click(function () {
            modal.modal('hide');
        });


        var modalCalculator = $('#calculatorModal');
        $('#calculatorModalButton').click(function () {
            modalCalculator.modal('show');
        });
        $('#closeCalculatorModal').click(function () {
            modalCalculator.modal('hide');
        });

        $('.js-example-basic-single').select2({
            minimumResultsForSearch: -1
        });

        $('html').mousemove(function (e) {

            var wx = $(window).width();
            var wy = $(window).height();

            var x = e.pageX - this.offsetLeft;
            var y = e.pageY - this.offsetTop;

            var newx = x - wx / 2;
            var newy = y - wy / 2;

            $('#wrapper').find('div').each(function () {
                var speed = $(this).attr('data-speed');
                if ($(this).attr('data-revert')) speed *= -1;
                TweenMax.to($(this), 1, {x: (1 - newx * speed), y: (1 - newy * speed)});
            });

        });

        $('.graph-btn').click(function () {
            var item = $(this).parents('.graph-item');
            item.toggleClass('active')
        });

        var owlEcosystem = $(".eco-carousel").owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 15000,
            loop: true,
            stagePadding: 40,
            items: 1
        });

        $('.owlEcosystemNextBtn').click(function () {
            owlEcosystem.trigger('next.owl.carousel');
        });

// Go to the previous item
        $('.owlEcosystemPrevBtn').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owlEcosystem.trigger('prev.owl.carousel', [300]);
        });

        var owlTeam = $(".team-carousel").owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 15000,
            loop: true,
            stagePadding: 70,
            items: 1
        });

        $('.owlTeamNextBtn').click(function () {
            owlTeam.trigger('next.owl.carousel');
        });

// Go to the previous item
        $('.owlTeamPrevBtn').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owlTeam.trigger('prev.owl.carousel', [300]);
        });

    }

    return {
        init: init
    }
})();

module.exports = HomeManager;