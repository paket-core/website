var translations = {
    en: {},
    he: {
        pagetitle: 'אנחנו פאקט',
        credo: 'ואללה ואללה'
    }
};

$(document).ready(function(){
    $.each(translations, function(lang, translation){
        opt = new Option(lang, lang);
        $('#langselect').append(opt);
    });
    $('#langselect').change(function(ev){
        $.each(translations[ev.target.value], function(key, value){
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
