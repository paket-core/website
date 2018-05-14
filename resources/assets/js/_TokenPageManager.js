var TokenPageManager = (function () {

    var RevealManager = require('./_RevealManager');
    var CountDownManager = require('./_CountDownManager');
    var LoginPageEmbedded = require('./_LoginPageEmbedded');

    var DateDiff = {

        inDays: function (d1, d2) {
            var t2 = d2.getTime();
            var t1 = d1.getTime();

            return parseInt((t2 - t1) / (24 * 3600 * 1000));
        },

        inWeeks: function (d1, d2) {
            var t2 = d2.getTime();
            var t1 = d1.getTime();

            return parseInt((t2 - t1) / (24 * 3600 * 1000 * 7));
        },

        inMonths: function (d1, d2) {
            var d1Y = d1.getFullYear();
            var d2Y = d2.getFullYear();
            var d1M = d1.getMonth();
            var d2M = d2.getMonth();

            return (d2M + 12 * d2Y) - (d1M + 12 * d1Y);
        },

        inYears: function (d1, d2) {
            return d2.getFullYear() - d1.getFullYear();
        }
    };

    function init() {
        RevealManager.init({
            margin: 100
        });
        CountDownManager.init();
        LoginPageEmbedded.init();

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

        animateProgress();

        animateDistribution();

    }

    function animateProgressChart(config) {
        var container = config.el;

        var to = config.to ? config.to : config.from;
        var width = config.width ? config.width : 4;

        var bar = new ProgressBar.Circle(container, {
            color: '#aaa',
            // This has to be the same size as the maximum width to
            // prevent clipping
            strokeWidth: width,
            trailWidth: width,
            easing: 'easeInOut',
            duration: 1400,
            text: {
                autoStyleContainer: false
            },
            from: {color: config.from, width: width},
            to: {color: to, width: width},
            // Set default step function for all animate calls
            step: function (state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);

                var value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('0%');
                } else {
                    circle.setText(value + '%');
                }

            }
        });

        bar.animate(config.progress / 100);  // Number from 0.0 to 1.0
    }

    function animateProgress() {
        var end = new Date('2018-06-10T00:00:00');
        var start = new Date('2018-04-25T00:00:00');
        var days = DateDiff.inDays(start, new Date());
        var total = DateDiff.inDays(start, end);
        var progress = days > 0 ? parseInt(days * 100 / total) : 0;
        animateProgressChart({
            el: $('#progressChart')[0],
            from: '#FFB450',
            to: '#FF7070',
            width: 2,
            progress: progress
        });
        $('#frontProgress').css('width', progress + '%');
    }

    function animateDistribution() {

        var charts = $('.token-distribution').find('.chart');
        animateProgressChart({
            el: charts[0],
            from: '#2190F5',
            width: 2,
            progress: 100
        });

        animateProgressChart({
            el: charts[1],
            from: '#28DACE',
            width: 2,
            progress: 20
        });

        animateProgressChart({
            el: charts[2],
            from: '#FF7070',
            progress: 4
        });

        animateProgressChart({
            el: charts[3],
            from: '#FF7070',
            progress: 1
        });

        animateProgressChart({
            el: charts[4],
            from: '#FF7070',
            progress: 1
        });

        animateProgressChart({
            el: charts[5],
            from: '#FF7070',
            progress: 1
        });
    }

    return {
        init: init
    }
})();

module.exports = TokenPageManager;