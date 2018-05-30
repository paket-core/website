/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/fonts/fonts.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/js/_AuthPageManager.js":
/***/ (function(module, exports, __webpack_require__) {

var AutPageManager = function () {

    var RevealManager = __webpack_require__("./resources/assets/js/_RevealManager.js");
    var DocumentModalManager = __webpack_require__("./resources/assets/js/_DocumentModalManager.js");

    function init() {
        RevealManager.initMenu();
        DocumentModalManager.init();
    }

    return {
        init: init
    };
}();

module.exports = AutPageManager;

/***/ }),

/***/ "./resources/assets/js/_CountDownManager.js":
/***/ (function(module, exports) {

var CountDownManager = function () {

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
                        seconds = String(seconds).length >= 2 ? seconds : "0" + seconds;
                    }
                    //
                    if (!isNaN(eventDate)) {
                        thisEl.find(".days").text(days);
                        thisEl.find(".hours").text(hours);
                        thisEl.find(".minutes").text(minutes);
                        thisEl.find(".seconds").text(seconds);
                    } else {
                        errorMessage = "Invalid date";
                        console.log(errorMessage);
                        clearInterval(interval);
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
}();

module.exports = CountDownManager;

/***/ }),

/***/ "./resources/assets/js/_DocumentModalManager.js":
/***/ (function(module, exports) {

var DocumentModalManager = function () {

    function init() {
        $('.accept-field-link').click(function () {
            var el = $(this);
            var url = el.attr('data-field-name');
            switch (url) {
                case 'terms_and_conditions':
                    openTermsModal();
                    break;
                case 'privacy_policy':
                    openPrivacyModal();
                    break;
            }
        });
    }

    function openTermsModal() {
        var modal = $('#termsModal');
        var btn = $('#termsModalScroll');
        modal.modal('show');
        btn.off('click').click(function () {
            modal.animate({ scrollTop: modal.find('.modal-dialog').height() }, 500);
        });
        modal.on('shown.bs.modal', function () {
            btn.removeClass('hidden');
        });
        modal.on('hidden.bs.modal', function () {
            btn.addClass('hidden');
        });
    }

    function openPrivacyModal() {
        $('#privacyModal').modal('show');
    }

    return {
        init: init
    };
}();

module.exports = DocumentModalManager;

/***/ }),

/***/ "./resources/assets/js/_FormManager.js":
/***/ (function(module, exports, __webpack_require__) {

var FormManager = function () {

    var ToastrManager = __webpack_require__("./resources/assets/js/_ToastrManager.js");

    function clearForm(form) {
        form.find('input[type!=radio], select, textarea').each(function () {
            this.value = null;
            var it = $(this);
            if (it.hasClass('select2me')) {
                it.trigger('change');
            }
        });
    }

    function fixAuth() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-tokens"]').attr('content')
            }
        });
    }

    function loadData(form, data) {
        form.find('input[type!=password][type!=radio], select, textarea').each(function () {
            if (data[this.name] !== undefined) {
                if (this.type === 'checkbox') {
                    this.checked = data[this.name] === 'true' || data[this.name] === true;
                } else {
                    this.value = data[this.name];
                }
            }
        });
    }

    function getData(form, data) {
        form.find('input[type!=checkbox], select, textarea').each(function () {
            data[this.name] = this.value;
        });
        form.find('input[type=checkbox]').each(function () {
            data[this.name] = !!this.checked;
        });
        form.find('input[type=radio]:checked').each(function () {
            data[this.name] = this.value;
        });
        return data;
    }

    function makeId(length) {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (var i = 0; i < length; i++) {
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        }return text;
    }

    /**
     * Send file to server
     *
     * @param file
     * @param data
     * @param url
     * @param callback
     */
    function sendFile(file, data, url, callback) {
        var formData = new FormData();
        formData.append(data && data.customName ? data.customName : "identification", file);
        Object.keys(data).forEach(function (key) {
            formData.append(key, data[key]);
        });
        sendPostFormData(url, formData, callback);
    }

    /**
     * Sends POST request to server for FILES
     * @param url url
     * @param data data
     * @param callback callback when data is received
     */
    function sendPostFormData(url, data, callback) {

        $.ajax({
            url: url,
            data: data,
            type: 'POST',
            success: function success(result) {
                if (callback !== undefined) callback(result);
            },
            error: function error(xhr) {
                var response = xhr.responseText;
                if (typeof response === 'string' || response instanceof String) {
                    response = JSON.parse(response);
                }
                response = response.message ? response.message : 'Wrong data';
                ToastrManager.error(response);
            },
            contentType: false,
            processData: false,
            cache: false
        });
    }

    /**
     * Sends requests to server
     * @param type type of request (GET, POST, etc.)
     * @param url url
     * @param data data
     * @param callback callback when data is received
     */
    function sendAjax(type, url, data, callback) {
        $.ajax({
            url: url,
            data: data,
            type: type,
            success: function success(result) {
                if (result.message) {
                    if (result.status === "success") {
                        ToastrManager.success(result.message);
                    } else if (result.status === "error") {
                        ToastrManager.error(result.message);
                    }
                }
                if (callback !== undefined) callback(result);
            },
            error: function error(result) {
                if (result.status === 0) {
                    ToastrManager.error('Sorry. Something went wrong.');
                }
            }
        });
    }

    /**
     * Sends POST request to server
     * @param url url
     * @param data data
     * @param callback callback when data is received
     */
    function sendPost(url, data, callback) {
        sendAjax('POST', url, data, callback);
    }

    /**
     * Sends GET request to server
     * @param url url
     * @param data data
     * @param callback callback when data is received
     */
    function sendGet(url, data, callback) {
        sendAjax('GET', url, data, callback);
    }

    /**
     *
     * @param fn
     * @param delay
     * @returns {Function}
     */
    function debounce(fn, delay) {
        var timer = null;
        return function () {
            var context = this,
                args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                fn.apply(context, args);
            }, delay);
        };
    }

    function throttle(fn, threshhold, scope) {
        threshhold || (threshhold = 250);
        var last, deferTimer;
        return function () {
            var context = scope || this;

            var now = +new Date(),
                args = arguments;
            if (last && now < last + threshhold) {
                // hold on to it
                clearTimeout(deferTimer);
                deferTimer = setTimeout(function () {
                    last = now;
                    fn.apply(context, args);
                }, threshhold);
            } else {
                last = now;
                fn.apply(context, args);
            }
        };
    }

    function extendValidator() {
        //add ethereum address validation
        jQuery.validator.addMethod("ethereum_address", function (value, element) {
            // allow any non-whitespace characters as the host part
            return this.optional(element) || /^0x[a-fA-F0-9]{40}$/.test(value);
        }, 'Please enter a valid ethereum address.');

        //add ethereum address validation
        jQuery.validator.addMethod("year18", function (value, element) {
            // allow any non-whitespace characters as the host part
            return this.optional(element) || moment().diff(moment(value, 'MM/DD/YYYY'), 'years') >= 18;
        }, 'You must be 18 years or older');
    }

    return {
        clearForm: clearForm,
        debounce: debounce,
        extendValidator: extendValidator,
        fixAuth: fixAuth,
        getData: getData,
        loadData: loadData,
        makeId: makeId,
        sendFile: sendFile,
        sendGet: sendGet,
        sendPost: sendPost,
        throttle: throttle
    };
}();

module.exports = FormManager;

/***/ }),

/***/ "./resources/assets/js/_HomeManager.js":
/***/ (function(module, exports, __webpack_require__) {

var HomeManager = function () {

    var RevealManager = __webpack_require__("./resources/assets/js/_RevealManager.js");
    var CountDownManager = __webpack_require__("./resources/assets/js/_CountDownManager.js");
    var VideoManager = __webpack_require__("./resources/assets/js/_VideoManager.js");
    var LoginPageEmbedded = __webpack_require__("./resources/assets/js/_LoginPageEmbedded.js");

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
            owlPublications.owlCarousel('destroy');
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
                TweenMax.to($(this), 1, { x: 1 - newx * speed, y: 1 - newy * speed });
            });
        });

        $('.graph-btn').click(function () {
            var item = $(this).parents('.graph-item');
            item.toggleClass('active');
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
            initCompanies();
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
    };
}();

module.exports = HomeManager;

/***/ }),

/***/ "./resources/assets/js/_LanguageManager.js":
/***/ (function(module, exports, __webpack_require__) {

var LanguageManager = function () {

    var FormManager = __webpack_require__("./resources/assets/js/_FormManager.js");

    function init() {
        enableMenu();
        detectLanguage();
    }

    function enableMenu() {
        var sel = $('.language-select-wrapper');
        var li = sel.find('li');

        sel.click(function () {
            $(this).toggleClass('open');
        });

        li.click(function () {
            li.removeClass('active');
            var language = $(this).toggleClass('active').attr('data-lang');
            setTimeout(function () {
                var reload = sel.attr('data-reload') === 'yes';
                changeLanguage(language, reload);
            });
        });
    }

    function changeLanguage(language, reload) {
        FormManager.sendPost('/tokens-chef/api/language', {
            lang: language
        }, function (response) {
            if (response.status === 'success') {
                if (reload) {
                    window.location.href = '/' + language;
                } else {
                    window.location.reload();
                }
            }
        });
    }

    function detectLanguage() {
        var name = 'detected_language';
        var name_modal = 'detected_language_modal';
        var cookie = Cookies.get(name);
        if (!cookie) {
            FormManager.sendPost('/tokens-chef/api/language/detect', {}, function (response) {
                if (response.status === 'success') {
                    var data = response.data;
                    Cookies.set(name, data.detected, { expires: 7 });
                    if (data.detected !== data.current) {
                        cookie = data.detected;
                        Cookies.set(name_modal, 'yes', { expires: 7 });
                        showModal();
                    }
                }
            });
        } else {
            checkModal();
        }

        function checkModal() {
            var cookie = Cookies.get(name_modal);
            if (cookie && cookie === 'yes') {
                showModal();
            }
        }

        function closeModal() {
            Cookies.set(name_modal, 'no', { expires: 7 });
            Cookies.remove(name_modal);
            $('#changeLanguageModal').addClass('hidden');
        }

        function showModal() {
            var modal = $('#changeLanguageModal');
            modal.find('.change').attr('data-lang', cookie);
            modal.find('.flag').addClass(cookie);
            modal.removeClass('hidden').addClass('animated fadeInUp');
            modal.find('.close-btn').click(function () {
                closeModal();
            });
            modal.find('.change, .flag').click(function () {
                closeModal();
                changeLanguage(cookie, modal.attr('data-reload') === 'yes');
            });
        }
    }

    return {
        init: init
    };
}();

module.exports = LanguageManager;

/***/ }),

/***/ "./resources/assets/js/_LoginPageEmbedded.js":
/***/ (function(module, exports, __webpack_require__) {

var LoginPageEmbedded = function () {

    var DocumentModalManager = __webpack_require__("./resources/assets/js/_DocumentModalManager.js");

    function init() {

        $('.login-click').click(function () {
            $('.login-page').addClass('visible');
        });

        $('.join-click').click(function () {
            $('.join-page').addClass('visible');
        });

        $('.menu, .auth-page').find('.close-link').click(function () {
            var section = $(this).parents('.auth-page');
            section.find('.section-right').removeClass('fadeInRight').addClass('fadeOutRight');
            section.find('.section-left').removeClass('fadeInLeft').addClass('fadeOutLeft');
            setTimeout(function () {
                section.removeClass('visible');
                section.find('.section-right').addClass('fadeInRight').removeClass('fadeOutRight');
                section.find('.section-left').addClass('fadeInLeft').removeClass('fadeOutLeft');
            }, 1000);
        });

        DocumentModalManager.init();
    }

    return {
        init: init
    };
}();

module.exports = LoginPageEmbedded;

/***/ }),

/***/ "./resources/assets/js/_MyAccountManager.js":
/***/ (function(module, exports, __webpack_require__) {

var MyAccountManager = function () {

    var RevealManager = __webpack_require__("./resources/assets/js/_RevealManager.js");
    var ToastrManager = __webpack_require__("./resources/assets/js/_ToastrManager.js");

    function init() {
        RevealManager.initHeader({
            margin: 100
        });

        var hash = window.location.hash;
        hash && $('ul.nav a[href="' + hash + '"]').tab('show');

        $('.nav-pills a').click(function () {
            $(this).tab('show');
            var scrollmem = $('body').scrollTop() || $('html').scrollTop();
            window.location.hash = this.hash;
            $('html,body').scrollTop(scrollmem);
        });

        var clipboard = new Clipboard('.btn-copy');
        clipboard.on('success', function () {
            ToastrManager.success($('#copyText').val());
        });
    }

    return {
        init: init
    };
}();

module.exports = MyAccountManager;

/***/ }),

/***/ "./resources/assets/js/_RevealManager.js":
/***/ (function(module, exports) {

var RevealManager = function () {

    function init(config) {
        config = config ? config : {};
        reveal({
            margin: config.margin,
            bars: config.bars,
            smooth: true
        });
    }

    function initHeader(config) {
        config = config ? config : {};
        reveal({
            margin: config.margin,
            smooth: false
        });
    }

    function reveal(config) {
        var $window = $(window),
            isTouch = Modernizr.touch;
        var navBar = $('.header');
        var reveal = $(".revealOnScroll");
        var smooth = config.smooth;
        var margin = config.margin;
        var bars;

        margin = margin !== undefined ? margin : 120;

        if (config.bars) {
            bars = $("#menuBars").find('.bar');
        }

        if ($window.height() < 800) {
            margin = margin / 2;
        }

        if (smooth) {
            new SmoothScroll('a[href*="#"]', {
                offset: 80
            });
        }

        reveal.css('opacity', 0);
        setTimeout(function () {
            revealOnScroll();
            $window.on('scroll', revealOnScroll);
        }, 1200);

        function revealOnScroll() {

            var scrolled = $window.scrollTop(),
                win_height = $window.height();

            // var position = $('.gladius').position().top - 80;
            var position = $('#presale').height();

            if (scrolled > position) {
                navBar.addClass('filled');
            } else {
                navBar.removeClass('filled header-blue header-white');
            }

            // Hidden...
            $(".changeHeaderOnScroll").each(function () {

                var $this = $(this);
                var color = $this.data('header-color');

                if (!navBar.hasClass('header-' + color)) {
                    var offsetTop = $this.offset().top;
                    var height = $this.height();
                    if (scrolled > offsetTop && scrolled <= offsetTop + height) {
                        navBar.removeClass('header-blue header-white').addClass('header-' + color);
                    }
                }
            });

            if (config.bars) {

                $(".barsOnScroll").each(function () {

                    var $this = $(this);
                    var index = parseInt($this.data('bar-id'));
                    var offsetTop = $this.offset().top;
                    var height = $this.height();
                    if (scrolled + win_height / 3 > offsetTop && scrolled + win_height / 3 <= offsetTop + height) {
                        if (!bars.eq(index).hasClass('active')) {
                            bars.removeClass('active');
                            bars.eq(index).addClass('active');
                        }
                    }
                });
            }

            // Hidden...
            $(".revealOnScroll.animated").each(function () {

                var $this = $(this),
                    offsetTop = $this.offset().top;
                var animation = $this.data('animation');
                if (!$this.hasClass(animation)) {
                    $this.addClass(animation);
                }

                if (scrolled + win_height + 500 < offsetTop) {
                    $(this).removeClass('animated ' + animation);
                }
            });

            // Showed...
            $(".revealOnScroll:not(.animated)").each(function () {
                var $this = $(this),
                    offsetTop = $this.offset().top;

                if (scrolled + win_height - margin > offsetTop) {

                    if ($this.data('timeout')) {
                        window.setTimeout(function () {
                            $this.css('opacity', 1).addClass('animated ' + $this.data('animation'));
                        }, parseInt($this.data('timeout'), 10));
                    } else {
                        $this.css('opacity', 1).addClass('animated ' + $this.data('animation'));
                    }
                }
            });
        }

        revealOnScroll();
        initSocialButton();
        initMenu();
    }

    function initMenu() {
        $('.menu-open').click(function () {
            $('.menu').removeClass('hidden');
            setTimeout(function () {
                $('.menu-close').removeClass('hidden');
            }, 1000);
        });

        $('.menu a').click(function () {
            $('.menu-close').trigger('click');
        });

        $('.menu-close').click(function () {
            var section = $(this).parents('.menu');
            $(this).addClass('hidden');
            section.find('.section-right').removeClass('fadeInRight').addClass('fadeOutRight');
            section.find('.section-left').removeClass('fadeInLeft').addClass('fadeOutLeft');
            setTimeout(function () {
                section.addClass('hidden');
                section.find('.section-right').addClass('fadeInRight').removeClass('fadeOutRight');
                section.find('.section-left').addClass('fadeInLeft').removeClass('fadeOutLeft');
            }, 1000);
        });
    }

    function initSocialButton() {

        var header = $('header .social-wrapper');
        var active = 'active';

        $('#socialButton').click(function (event) {
            event.stopPropagation();
            header.addClass(active);
        });

        $(window).click(function () {
            if (header.hasClass(active)) {
                header.removeClass(active);
            }
        });
    }

    return {
        init: init,
        initHeader: initHeader,
        initMenu: initMenu
    };
}();

module.exports = RevealManager;

/***/ }),

/***/ "./resources/assets/js/_ToastrManager.js":
/***/ (function(module, exports) {

var ToastrManager = function () {

    function init() {
        if (typeof toastr !== 'undefined') {
            toastr.options.closeMethod = 'fadeOut';
            toastr.options.closeDuration = 300;
            toastr.options.closeEasing = 'swing';
            toastr.options.timeOut = 3000;
            toastr.options.closeButton = true;
        }
    }

    function success(message) {
        toastr.success(message);
    }

    function warning(message) {
        toastr.warning(message);
    }

    function error(message) {
        toastr.error(message);
    }

    return {
        error: error,
        init: init,
        success: success,
        warning: warning
    };
}();

module.exports = ToastrManager;

/***/ }),

/***/ "./resources/assets/js/_TokenPageManager.js":
/***/ (function(module, exports, __webpack_require__) {

var TokenPageManager = function () {

    var HomeManager = __webpack_require__("./resources/assets/js/_HomeManager.js");

    function init() {
        HomeManager.initTokenSale();
    }

    return {
        init: init
    };
}();

module.exports = TokenPageManager;

/***/ }),

/***/ "./resources/assets/js/_VerificationManager.js":
/***/ (function(module, exports) {

var VerificationManager = function () {

    function init() {
        window.verification_callback = function () {
            $('#successMessage').removeClass('hidden');
            $('.verification-form-wrapper').addClass('hidden');
        };
    }

    return {
        init: init
    };
}();

module.exports = VerificationManager;

/***/ }),

/***/ "./resources/assets/js/_VideoManager.js":
/***/ (function(module, exports) {

var CountDownManager = function () {

    function init() {
        var player;

        function loadVideo(play) {

            if (!player) {

                // 4. The API will call this function when the video player is ready.
                var onPlayerReady = function onPlayerReady() {
                    play && player.playVideo();
                };

                // 2. This code loads the IFrame Player API code asynchronously.
                var tag = document.createElement('script');

                tag.src = "https://www.youtube.com/iframe_api";
                var firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                var videoSrc = $('#playVideoButton').attr("data-video-src");

                // 3. This function creates an <iframe> (and YouTube player)
                //    after the API code downloads.
                window.onYouTubeIframeAPIReady = function () {
                    player = new YT.Player('player', {
                        width: '100%',
                        height: '100%',
                        playerVars: {
                            modestbranding: 1,
                            rel: 0,
                            showinfo: 0,
                            controls: 1,
                            html5: 1
                        },
                        events: {
                            'onReady': onPlayerReady
                        },
                        videoId: videoSrc
                    });
                };
            } else {
                play && player.playVideo();
            }
        }

        function runVideo() {
            var modal = $('#videoModal');
            modal.modal('show').on('hidden.bs.modal', function () {
                stopVideo();
            }).on('shown.bs.modal', function () {
                $('.video-link').removeClass('video-animated');
            }).find('button.close').off('click').click(function () {
                stopVideo();
            });

            if (player) {
                player.playVideo();
            } else {
                loadVideo(true);
            }

            function stopVideo() {
                player && player.stopVideo();
            }
        }

        $(".play-button").click(function () {
            $('.video-link').addClass('video-animated');
            setTimeout(function () {
                runVideo();
            }, 700);
        });

        setTimeout(function () {
            loadVideo();
        }, 2000);
    }

    return {
        init: init
    };
}();

module.exports = CountDownManager;

/***/ }),

/***/ "./resources/assets/js/app.js":
/***/ (function(module, exports, __webpack_require__) {

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

$(document).ready(function () {

    var HomeManager = __webpack_require__("./resources/assets/js/_HomeManager.js");
    var TokenPageManager = __webpack_require__("./resources/assets/js/_TokenPageManager.js");
    var MyAccountManager = __webpack_require__("./resources/assets/js/_MyAccountManager.js");
    var AuthPageManager = __webpack_require__("./resources/assets/js/_AuthPageManager.js");
    var VerificationManager = __webpack_require__("./resources/assets/js/_VerificationManager.js");
    var ToastrManager = __webpack_require__("./resources/assets/js/_ToastrManager.js");
    var LanguageManager = __webpack_require__("./resources/assets/js/_LanguageManager.js");

    function stripQueryStringAndHashFromPath(url) {
        return url.split("?")[0].split("#")[0];
    }

    var fullUrl = stripQueryStringAndHashFromPath(window.location.href.replace(/^(?:\/\/|[^\/]+)*\//, ""));
    var url = fullUrl.toLowerCase();

    ToastrManager.init();
    LanguageManager.init();

    if (['en', 'de', 'es', 'fr', 'pt'].indexOf(url) >= 0) {
        HomeManager.init();
        return false;
    }

    switch (url) {
        case '':
            HomeManager.init();
            break;
        case 'token-sale':
            TokenPageManager.init();
            break;
        case 'developers':
            TokenPageManager.init();
            break;
        case 'my-account':
            MyAccountManager.init();
            break;
        case 'password':
            AuthPageManager.init();
            break;
        case 'login':
            AuthPageManager.init();
            break;
        case 'sign-up':
            AuthPageManager.init();
            break;
        case 'terms-and-conditions':
            AuthPageManager.init();
            break;
        case 'privacy-policy':
            AuthPageManager.init();
            break;
        default:
            if (url.substr(0, 15) === 'reset-password/') {
                AuthPageManager.init();
            } else if (url.substr(0, 13) === 'verification/') {
                AuthPageManager.init();
                VerificationManager.init();
            }
            break;
    }
});

/***/ }),

/***/ "./resources/assets/sass/app.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__("./resources/assets/js/app.js");
__webpack_require__("./resources/assets/sass/app.scss");
module.exports = __webpack_require__("./resources/assets/fonts/fonts.scss");


/***/ })

/******/ });