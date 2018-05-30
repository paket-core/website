var CountDownManager = (function () {

    var d = new Date();
    var n = d.getMonth();
    if (n >= 11) {
        n = 0;
    }
    var defaultDate = Date.UTC(2018, n + 1, 25, 0, 0, 0);

    function init(date) {
        date = date ? date : defaultDate;
        (function (e) {
            e.fn.countdown = function (t) {
                function i() {
                    eventDate = r.date / 1e3;
                    currentDate = Math.floor(new Date().getTime() / 1e3);

                    //
                    if (eventDate <= currentDate) {
                        clearInterval(interval);
                        days = 0;
                        hours = 0;
                        minutes = 0;
                        seconds = 0;
                    } else {
                        seconds = eventDate - currentDate;
                        days = Math.floor(seconds / 86400);
                        seconds -= days * 60 * 60 * 24;
                        hours = Math.floor(seconds / 3600);
                        seconds -= hours * 60 * 60;
                        minutes = Math.floor(seconds / 60);
                        seconds -= minutes * 60;
                    }
                    if (r["format"] === "on") {
                        days = String(days).length >= 2 ? days : "0" + days;
                        hours = String(hours).length >= 2 ? hours : "0" + hours;
                        minutes = String(minutes).length >= 2 ? minutes : "0" + minutes;
                        seconds = String(seconds).length >= 2 ? seconds : "0" + seconds
                    }
                    //
                    if (!isNaN(eventDate)) {
                        thisEl.find(".days").text(days);
                        thisEl.find(".hours").text(hours);
                        thisEl.find(".minutes").text(minutes);
                        thisEl.find(".seconds").text(seconds)
                    }
                    else {
                        errorMessage = "Invalid date";
                        console.log(errorMessage);
                        clearInterval(interval)
                    }
                }

                //
                var thisEl = e(this);
                var r = {
                    date: null,
                    format: null
                };
                //
                t && e.extend(r, t);
                interval = setInterval(i, 1e3);
                i();
            };
        })(jQuery);

        var eventDate = date / 1e3;
        var currentDate = Math.floor(new Date().getTime() / 1e3);
        var counterTopText = $('#counterTopText');

        if (eventDate <= currentDate) {
            counterTopText.html('Public presale starts in');
            date = Date.UTC(2017, 10, 24, 2, 0, 0);
        }
        eventDate = date / 1e3;
        if (eventDate <= currentDate) {
            counterTopText.html('Public presale ends in');
            date = Date.UTC(2018, 0, 1, 0, 0, 0);
        }

        eventDate = date / 1e3;
        if (eventDate <= currentDate) {
            counterTopText.html('Public sale starts in');
            date = Date.UTC(2018, 0, 14, 2, 0, 0);
        }

        counterTopText.removeClass('hidden');

        //
        $(".countdown").countdown({
            date: date, // change date/time here - do not change the format!
            format: "on"
        });
    }

    return {
        init: init
    };

})();

module.exports = CountDownManager;