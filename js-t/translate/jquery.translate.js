// Modifaed placeholder

(function ($) {
  $.fn.translate = function (options) {

    var that = this; //a reference to ourselves

    var settings = {
      css: "trn",
      lang: "en"
    };
    settings = $.extend(settings, options || {});
    if (settings.css.lastIndexOf(".", 0) !== 0)   //doesn't start with '.'
      settings.css = "." + settings.css;

    var t = settings.t;

    //public methods
    this.lang = function (l) {
      if (l) {
        settings.lang = l;
        this.translate(settings);  //translate everything
      }

      return settings.lang;
    };


    this.get = function (index) {
      index = trim((index.trim() + '').replace(/(\r\n|\n|\r|\t)/g, "").replace(/\n|\r|\t/g, ""));

      var res = index;

      try {
        res = t[index][settings.lang];
      }
      catch (err) {
        //not found, return index
        return index;
      }

      if (res)
        return res;
      else
        return index;
    };

    this.g = this.get;

    //main
    this.find(settings.css).each(function (i) {
      var $this = $(this);

      var trn_key = $this.attr("data-trn-key");
      if (!trn_key) {
        trn_key = $this.html();

        if($(this)[0].placeholder) {          
          trn_key = $(this)[0].placeholder;
        }
        trn_key = trim((trn_key + '').replace(/(\r\n|\n|\r)/gm, ""))
        $this.attr("data-trn-key", trn_key);   //store key for next time
      }
      trn_key = trim((trn_key + '').replace(/(\r\n|\n|\r)/gm, ""))
      $this.html(that.get(trn_key));
      if($(this)[0].placeholder) $(this)[0].placeholder = that.get(trn_key);
    });

    return this;

  };
})(jQuery);

var trim = function (str) {
  new_str = str;
  for (var i = 0; i < 20; i++) {
    new_str = new_str.split('  ').join(' ')
  }
  return new_str;
}