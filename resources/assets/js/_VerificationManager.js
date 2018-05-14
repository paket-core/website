var VerificationManager = (function () {

    function init() {
        window.verification_callback = function () {
            $('#successMessage').removeClass('hidden');
            $('.verification-form-wrapper').addClass('hidden');
        };
    }

    return {
        init: init
    };

})();

module.exports = VerificationManager;