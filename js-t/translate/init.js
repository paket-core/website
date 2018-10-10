/*
  Need set class="trn" to all translated elements
  Adding translate to dictionary.js
*/

var translator;
$(document).ready(function () {

  translator = $('body').translate({ lang: "en", t: dictionary }); // http://www.openxrest.com/translatejs/

  var lang = localStorage.getItem('locale_lang') // Load and set language
  if (!lang) lang = "en"
  translator.lang(lang)
  $(".ul-lang .dropdown-toggle").html(`${lang.toUpperCase()} <span class="caret"></span>`);

  $(".ul-lang .dropdown-menu").on('click', 'li a', function (e) { // Dropdown language change
    var str = e.target.text.toLowerCase();
    $(".ul-lang .dropdown-toggle").html(`${e.target.text} <span class="caret"></span>`);
    localStorage.setItem('locale_lang', str);
    translator.lang(str);
  });

});
