var HomeManager = (function () {

    var RevealManager = require('./_RevealManager');
    var CountDownManager = require('./_CountDownManager');
    var VideoManager = require('./_VideoManager');
    var LoginPageEmbedded = require('./_LoginPageEmbedded');

    var owlPublications;
    var ecoInterval;
    var ecoAnimation = false;

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

        $('#viewMoreCompanies').off('click').click(function () {
            $('.company-row.additional').removeClass('additional');
        });

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
        var ecoDesc = $('#ecoGraphDesc');
        var ecoInner = ecoDesc.find('h2,p');

        var title = ecoDesc.find('h2');
        var desc = ecoDesc.find('p');

        var rotate = 2;

        var arc_params;
        var radius = 300;

        function goToItem(item, rotate, active) {

            var current = parseInt(item.attr('data-start'));
            var newValue = parseInt(current + rotate);

            var diff = current - newValue;
            diff = diff < 0 ? diff * -1 : diff;
            var duration = parseInt(diff / 60);
            duration = duration < 2 ? 2 : duration;

            arc_params = {
                center: [radius - 90, radius - 90],
                radius: radius,
                start: current,
                end: newValue,
                dir: current < newValue ? 1 : -1
            };

            if (active) {
                selectOption(item)
            }

            item.animate({path: new $.path.arc(arc_params)}, duration * 500, function () {
                item.attr('data-start', newValue);
                if (active) {
                    item.addClass('active');
                }
            });
        }

        function animate(angle) {

            ecoInner.removeClass('fadeIn').addClass('animated fadeOut');
            setTimeout(function () {
                rotate--;
                if (rotate < 0) {
                    rotate = 5;
                }
                items.removeClass('active');
                items.each(function (index) {
                    var el = $(this);
                    goToItem(el, angle, index === rotate);
                })
            }, 500);
        }

        function selectOption(item) {
            title.html(item.find('.graph-title').html());
            desc.html(item.find('.graph-desc').html());
            ecoInner.removeClass('fadeOut').addClass('fadeIn');
        }

        items.each(function (index) {
            $(this).attr('data-start', 30 + index * 60);
            $(this).off('click').click(function () {
                clearInterval(ecoInterval);
                var diff = rotate - index;
                rotate = index + 1;
                animate(diff * 60);
            });
        });

        animate(60);
        clearInterval(ecoInterval);
        ecoInterval = setInterval(function () {
            animate(60);
        }, 5000);
    }

    function init() {
        var widthSmall = 767;
        var widthLarge = 1200;
        var win = $(window);
        var owlProject, owlTeam, owlEcosystem;
        var width = win.width();

        RevealManager.init({
            bars: true
        });

        CountDownManager.init();
        VideoManager.init();
        LoginPageEmbedded.init();

        win.resize(function () {
            width = $(this).width();
            reloadItems();
        });

        function reloadItems() {
            initProjects(width);
            initEcoSystem(width);
            initTeam(width);
        }

        initRoadMap();
        initCompanies();
        initAutoShow();
        reloadItems();

        function initAutoShow() {

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
        }

        function initTeam(width) {
            if (width <= widthSmall) {
                owlTeam = $(".team-carousel").owlCarousel({
                    autoplay: true,
                    smartSpeed: 1000,
                    autoplayTimeout: 15000,
                    loop: true,
                    stagePadding: 0,
                    autoHeight: true,
                    items: 1
                });

                $('.owlTeamNextBtn').off('click').click(function () {
                    owlTeam.trigger('next.owl.carousel');
                });

// Go to the previous item
                $('.owlTeamPrevBtn').off('click').click(function () {
                    // With optional speed parameter
                    // Parameters has to be in square bracket '[]'
                    owlTeam.trigger('prev.owl.carousel', [300]);
                });
            } else {
                if (owlTeam) {
                    owlTeam.owlCarousel('destroy');
                    owlTeam = null;
                }
            }
        }

        function initEcoSystem(width) {

            if (width < widthLarge) {

                if (!owlEcosystem) {
                    $('.graph-item').removeAttr('style');

                    owlEcosystem = $(".eco-carousel").owlCarousel({
                        autoplay: true,
                        smartSpeed: 1000,
                        autoplayTimeout: 15000,
                        loop: true,
                        stagePadding: 30,
                        items: 1
                    });

                    $('.owlEcosystemNextBtn').off('click').click(function () {
                        owlEcosystem.trigger('next.owl.carousel');
                    });

// Go to the previous item
                    $('.owlEcosystemPrevBtn').off('click').click(function () {
                        // With optional speed parameter
                        // Parameters has to be in square bracket '[]'
                        owlEcosystem.trigger('prev.owl.carousel', [300]);
                    });

                    ecoAnimation = false;
                    clearInterval(ecoInterval);
                }

            } else {

                if (owlEcosystem) {
                    owlEcosystem.owlCarousel('destroy');
                    owlEcosystem = null;
                }

                if (!ecoAnimation) {
                    ecoAnimation = true;
                    initEcosystemGraph();
                }
            }
        }

        function initProjects(width) {
            if (width < widthSmall) {
                if (!owlProject) {
                    owlProject = $(".project-items-carousel").owlCarousel({
                        autoHeight: true,
                        autoplay: true,
                        smartSpeed: 1000,
                        autoplayTimeout: 15000,
                        loop: true,
                        items: 1
                    });

                    $('.owlProjectNextBtn').off('click').click(function () {
                        owlProject.trigger('next.owl.carousel');
                    });

                    // Go to the previous item
                    $('.owlProjectPrevBtn').off('click').click(function () {
                        // With optional speed parameter
                        // Parameters has to be in square bracket '[]'
                        owlProject.trigger('prev.owl.carousel', [300]);
                    });
                }
            } else {
                if (owlProject) {
                    owlProject.owlCarousel('destroy');
                    owlProject = null;
                }
            }
        }

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