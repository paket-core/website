var HomeManager = (function () {

    var RevealManager = require('./_RevealManager');
    var CountDownManager = require('./_CountDownManager');
    var VideoManager = require('./_VideoManager');
    var LoginPageEmbedded = require('./_LoginPageEmbedded');

    var owlPublications;

    function initRoadMap() {
        var owlRoadMap = $(".road-map-carousel-1").owlCarousel({
            items: 1
        });

        $('.owlRoadMapNextBtn').click(function () {
            owlRoadMap.trigger('next.owl.carousel');
        });

// Go to the previous item
        $('.owlRoadMapPrevBtn').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owlRoadMap.trigger('prev.owl.carousel', [300]);
        });

        var owlRoadMap2 = $(".road-map-carousel-2").owlCarousel({
            items: 4
        });

        $('.owlRoadMap2NextBtn').click(function () {
            owlRoadMap2.trigger('next.owl.carousel');
        });

// Go to the previous item
        $('.owlRoadMap2PrevBtn').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owlRoadMap2.trigger('prev.owl.carousel', [300]);
        });
    }

    function initCompanies() {

        if (owlPublications) {
            owlPublications.owlCarousel('destroy')
        }

        var width = $(window).width();
        var items = 3;
        if (width < 500) {
            items = 1;
        } else if (width < 600) {
            items = 2;
        }

        $('.owl-carousel-companies-mobile').owlCarousel({
            items: items,
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 3000,
            dots: false
        });
    }

    function initEcosystemGraph() {
        var ecoGraph = $('#ecoGraph');

        var items = ecoGraph.find('.graph-item');
        var icons = $(ecoGraph.find('.graph-icon img'));
        var ecoDesc = $('#ecoGraphDesc');
        var ecoInner = ecoDesc.find('h2,p');

        var title = ecoDesc.find('h2');
        var desc = ecoDesc.find('p');

        var rotate = 0;
        var index = 0;

        function animate() {
            icons = icons.clone();
            rotate++;
            if (rotate >= 6) {
                rotate = 0;
            }
            selectOption(rotate);
            items.each(function (index) {
                var newIndex = rotate + index;
                if (newIndex >= 6) {
                    newIndex = newIndex - 6;
                }
                showNewIcon($(this).find('.inner'), icons.eq(newIndex), newIndex);
            })
        }

        function showNewIcon(el, icon, index) {
            var iconWrapper = el.find('.graph-icon');
            iconWrapper.removeClass('fadeIn').addClass('animated fadeOut');
            setTimeout(function () {
                iconWrapper.html(icon);
                iconWrapper.removeClass('fadeOut').addClass('fadeIn');
                el.parent().attr('data-icon', index);
            }, 1000);
        }

        function selectOption(newIndex) {
            index = newIndex;
            var item = items.eq(index);
            ecoInner.removeClass('fadeIn').addClass('animated fadeOut');
            setTimeout(function () {
                title.html(item.find('.graph-title').html());
                desc.html(item.find('.graph-desc').html());
                ecoInner.removeClass('fadeOut').addClass('fadeIn');
            }, 1000);
        }

        animate();

        items.each(function () {
            $(this).click(function () {
                rotate = parseInt($(this).attr('data-icon')) - 1;
                animate();
                clearInterval(interval);
            });
        });

        var interval = setInterval(function () {
            animate();
        }, 10000);


    }

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

        initEcosystemGraph();

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

        var owlProject = $(".project-items-carousel").owlCarousel({
            autoHeight: true,
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 15000,
            loop: true,
            items: 1
        });

        $('.owlProjectNextBtn').click(function () {
            owlProject.trigger('next.owl.carousel');
        });

// Go to the previous item
        $('.owlProjectPrevBtn').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owlProject.trigger('prev.owl.carousel', [300]);
        });


        $('#viewMoreCompanies').click(function () {
            $('.company-row.additional').removeClass('additional');
        });

        $(window).resize(function () {
            initCompanies()
        });

        initRoadMap();
        initCompanies();

    }

    function initTokenSale() {
        initRoadMap();
        CountDownManager.init();
    }

    return {
        init: init,
        initTokenSale: initTokenSale
    }
})();

module.exports = HomeManager;