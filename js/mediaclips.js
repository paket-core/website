(function(){
    'use strict';
    $(document).ready(function(){
        let quotes = $('#companiesList').find('.quote, .quote-company').hide();
        console.log(quotes);
        let currentQuoteIndex = 0;
        setInterval(function(){
            console.log(currentQuoteIndex);
            $('#quoteWrapper')
                .find('.quote').text(quotes.eq(currentQuoteIndex).text()).end()
                .find('.quote-company').text(quotes.eq(currentQuoteIndex + 1).text());
            currentQuoteIndex = (currentQuoteIndex + 2) % quotes.length;
        }, 5000);
    });
}());
