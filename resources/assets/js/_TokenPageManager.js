var TokenPageManager = (function () {

    var HomeManager = require('./_HomeManager');

    function init() {
        HomeManager.initTokenSale();
    }

    return {
        init: init
    }
})();

module.exports = TokenPageManager;