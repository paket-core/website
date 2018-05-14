var MyAccountManager = (function () {

    var RevealManager = require('./_RevealManager');
    var ToastrManager = require('./_ToastrManager');

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
    }

})();

module.exports = MyAccountManager;