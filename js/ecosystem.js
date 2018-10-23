(function(){
    'use strict';

    jQuery.fn.rotate = function(degrees) {
        $(this).css({
            'transform': 'rotate(' + degrees + 'deg)'
        });
    };

    $(document).ready(function(){
        let ecosystem = $('#ecoGraph');
        let currentRotation = 0;
        let items = ecosystem.find('.graph-item').click(function(){
            let degrees = $(this).attr('data-pos') * 60;
            ecosystem.rotate(degrees);
            items.rotate(-degrees);
            $('#ecoGraphDesc h2').text($(this).find('.graph-title').text());
            $('#ecoGraphDesc p').text($(this).find('.graph-desc').text());
        });
        items.last().click();
    });
}());
