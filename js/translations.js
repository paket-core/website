var translations = {
    en: {},
    pl: {
        pagetitle: 'This is in Polish',
        credotitle: 'This is in Polish too'
    },
    he: {
        pagetitle: 'אנחנו פאקט',
        credo: 'ואללה ואללה'
    }
};

$(document).ready(function(){
    $.each(translations, function(langName){
        optionElement = new Option(langName, langName);
        $('#langselect').append(optionElement);
    });
    $('#langselect').change(function(changeEvent){
        var langCascade = ['en'];
        if(changeEvent.target.value !== 'en'){
            langCascade.push(changeEvent.target.value);
        }
        $.each(langCascade, function(idx, langName){
            $.each(translations[langName], function(key, value){
                var el = $('#' + key);
                if(el.length === 0){
                    return true;
                }
                if(!(key in translations.en)){
                    translations.en[key] = el.text();
                }
                el.text(value);
            });
        });
    });
});
