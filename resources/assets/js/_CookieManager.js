var CookieManager = (function () {

    function init() {

        var cookieName = 'cookie_policy_modal';
        var modal = $('.cookie-modal');

        var cookie = Cookies.get(cookieName);
        if (cookie !== 'hidden') {
            showModal();
        }

        function closeModal() {
            Cookies.set(cookieName, 'hidden', {expires: 90});
            modal.addClass('hidden');
        }

        function showModal() {
            modal.find('.btn').click(function () {
                closeModal();
            });
            modal.removeClass('hidden');
        }

    }

    return {
        init: init
    };

})();

module.exports = CookieManager;