var FormManager = (function () {

    var ToastrManager = require('./_ToastrManager');

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
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
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

        for (var i = 0; i < length; i++)
            text += possible.charAt(Math.floor(Math.random() * possible.length));

        return text;
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
        formData.append((data && data.customName) ? data.customName : "identification", file);
        Object.keys(data).forEach(function (key) {
            formData.append(key, data[key]);
        });
        sendPostFormData(url, formData, callback)
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
            success: function (result) {
                if (callback !== undefined) callback(result);
            },
            error: function (xhr) {
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
            success: function (result) {
                if (result.message) {
                    if (result.status === "success") {
                        ToastrManager.success(result.message);
                    } else if (result.status === "error") {
                        ToastrManager.error(result.message);
                    }
                }
                if (callback !== undefined) callback(result);
            },
            error: function (result) {
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
            var context = this, args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                fn.apply(context, args);
            }, delay);
        };
    }

    function throttle(fn, threshhold, scope) {
        threshhold || (threshhold = 250);
        var last,
            deferTimer;
        return function () {
            var context = scope || this;

            var now = +new Date,
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

})();

module.exports = FormManager;