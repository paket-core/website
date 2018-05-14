var AutPageManager = (function () {

    var RevealManager = require('./_RevealManager');
    var DocumentModalManager = require('./_DocumentModalManager');

    function init() {
        RevealManager.initMenu();
        DocumentModalManager.init();
    }

    return {
        init: init
    };

})();

module.exports = AutPageManager;