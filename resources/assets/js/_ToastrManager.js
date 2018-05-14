var ToastrManager = (function () {

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

})();

module.exports = ToastrManager;