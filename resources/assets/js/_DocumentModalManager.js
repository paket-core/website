var DocumentModalManager = (function () {

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
        })
    }

    function openTermsModal() {
        var modal = $('#termsModal');
        var btn = $('#termsModalScroll');
        modal.modal('show');
        btn.off('click').click(function () {
            modal.animate({scrollTop: modal.find('.modal-dialog').height()}, 500);
        });
        modal.on('shown.bs.modal', function () {
            btn.removeClass('hidden');
        });
        modal.on('hidden.bs.modal', function () {
            btn.addClass('hidden')
        })
    }

    function openPrivacyModal() {
        $('#privacyModal').modal('show');
    }

    return {
        init: init
    };

})();

module.exports = DocumentModalManager;