(function(){
    'use strict';

    jQuery.fn.rotate = function(degrees) {
        $(this).css({
            'transform': 'rotate(' + degrees + 'deg)'
        });
        return $(this);
    };

    $(document).ready(function(){
        let ecosystem = $('#ecoGraph');
        let timeout, selected = 0;
        let items = ecosystem.find('.graph-item').click(function(){
            let degrees, item = $(this);
            clearTimeout(timeout);
            selected = item.attr('data-pos');
            degrees = selected * 60;
            item.one('transitionend', function(){
                $('#ecoGraphDesc h2').text(item.find('.graph-title').text());
                $('#ecoGraphDesc p').text(item.find('.graph-desc').text());
                clearTimeout(timeout);
                timeout = setTimeout(function(){
                    items.eq((parseInt(selected, 10) + 1) % 6).click();
                }, 5000);
            });
            ecosystem.rotate(degrees);
            items.rotate(-degrees);
            $('#eco-logo').rotate(-3*degrees);

        });
        items.last().click();
    });
}());
