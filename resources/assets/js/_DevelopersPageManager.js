var DevelopersPageManager = (function () {

    var RevealManager = require('./_RevealManager');

    function init() {
        RevealManager.init();
    }

    return {
        init: init
    }
})();

module.exports = DevelopersPageManager;