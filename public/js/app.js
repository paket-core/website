!function(e){var t={};function n(a){if(t[a])return t[a].exports;var o=t[a]={i:a,l:!1,exports:{}};return e[a].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,a){n.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:a})},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=0)}({"/LvN":function(e,t,n){var a=function(){var e=n("U7jh"),t=n("KoRp");return{init:function(){e.initHeader({margin:100});var n=window.location.hash;n&&$('ul.nav a[href="'+n+'"]').tab("show"),$(".nav-pills a").click(function(){$(this).tab("show");var e=$("body").scrollTop()||$("html").scrollTop();window.location.hash=this.hash,$("html,body").scrollTop(e)}),new Clipboard(".btn-copy").on("success",function(){t.success($("#copyText").val())})}}}();e.exports=a},0:function(e,t,n){n("sV/x"),n("xZZD"),e.exports=n("rSXE")},"04hq":function(e,t,n){var a=function(){var e,t=n("U7jh"),a=n("SYHt"),o=n("47h6"),i=n("Ym1x");function s(){var e=$(".road-map-carousel-1").owlCarousel({items:1});$(".owlRoadMapNextBtn").click(function(){e.trigger("next.owl.carousel")}),$(".owlRoadMapPrevBtn").click(function(){e.trigger("prev.owl.carousel",[300])});var t=$(".road-map-carousel-2").owlCarousel({items:4});$(".owlRoadMap2NextBtn").click(function(){t.trigger("next.owl.carousel")}),$(".owlRoadMap2PrevBtn").click(function(){t.trigger("prev.owl.carousel",[300])})}function r(){e&&e.owlCarousel("destroy");var t=$(window).width(),n=3;t<500?n=1:t<600&&(n=2),$(".owl-carousel-companies-mobile").owlCarousel({items:n,autoplay:!0,smartSpeed:1e3,autoplayTimeout:3e3,dots:!1})}return{init:function(){t.init({bars:!0}),a.init(),o.init(),i.init();var e=$("#mapModal");$("#mapModalButton").click(function(){e.modal("show")}),$("#closeMapModal").click(function(){e.modal("hide")});var n=$("#calculatorModal");$("#calculatorModalButton").click(function(){n.modal("show")}),$("#closeCalculatorModal").click(function(){n.modal("hide")}),$(".js-example-basic-single").select2({minimumResultsForSearch:-1}),$("html").mousemove(function(e){var t=$(window).width(),n=$(window).height(),a=e.pageX-this.offsetLeft-t/2,o=e.pageY-this.offsetTop-n/2;$("#wrapper").find("div").each(function(){var e=$(this).attr("data-speed");$(this).attr("data-revert")&&(e*=-1),TweenMax.to($(this),1,{x:1-a*e,y:1-o*e})})});var c=$(".graph-btn");c.click(function(){var e=$(this).parents(".graph-item");e.find(".graph-desc").toggleClass("flipInX"),e.toggleClass("active")}),c.click();var l=$(".eco-carousel").owlCarousel({autoplay:!0,smartSpeed:1e3,autoplayTimeout:15e3,loop:!0,stagePadding:40,items:1});$(".owlEcosystemNextBtn").click(function(){l.trigger("next.owl.carousel")}),$(".owlEcosystemPrevBtn").click(function(){l.trigger("prev.owl.carousel",[300])});var u=$(".team-carousel").owlCarousel({autoplay:!0,smartSpeed:1e3,autoplayTimeout:15e3,loop:!0,stagePadding:70,items:1});$(".owlTeamNextBtn").click(function(){u.trigger("next.owl.carousel")}),$(".owlTeamPrevBtn").click(function(){u.trigger("prev.owl.carousel",[300])});var d=$(".project-items-carousel").owlCarousel({autoHeight:!0,autoplay:!0,smartSpeed:1e3,autoplayTimeout:15e3,loop:!0,items:1});$(".owlProjectNextBtn").click(function(){d.trigger("next.owl.carousel")}),$(".owlProjectPrevBtn").click(function(){d.trigger("prev.owl.carousel",[300])}),$("#viewMoreCompanies").click(function(){$(".company-row.additional").removeClass("additional")}),$(window).resize(function(){r()}),s(),r()},initTokenSale:function(){s(),a.init()}}}();e.exports=a},"47h6":function(e,t){var n=function(){return{init:function(){var e;function t(t){if(e)t&&e.playVideo();else{var n=function(){t&&e.playVideo()},a=document.createElement("script");a.src="https://www.youtube.com/iframe_api";var o=document.getElementsByTagName("script")[0];o.parentNode.insertBefore(a,o);var i=$("#playVideoButton").attr("data-video-src");window.onYouTubeIframeAPIReady=function(){e=new YT.Player("player",{width:"100%",height:"100%",playerVars:{modestbranding:1,rel:0,showinfo:0,controls:1,html5:1},events:{onReady:n},videoId:i})}}}$(".play-button").click(function(){$(".video-link").addClass("video-animated"),setTimeout(function(){!function(){function n(){e&&e.stopVideo()}$("#videoModal").modal("show").on("hidden.bs.modal",function(){n()}).on("shown.bs.modal",function(){$(".video-link").removeClass("video-animated")}).find("button.close").off("click").click(function(){n()}),e?e.playVideo():t(!0)}()},700)}),setTimeout(function(){t()},2e3)}}}();e.exports=n},EmU5:function(e,t){var n=function(){return{init:function(){window.verification_callback=function(){$("#successMessage").removeClass("hidden"),$(".verification-form-wrapper").addClass("hidden")}}}}();e.exports=n},FbWP:function(e,t,n){var a=function(){var e=n("04hq");return{init:function(){e.initTokenSale()}}}();e.exports=a},IK4z:function(e,t,n){var a=function(){var e=n("KoRp");function t(t,n,a,o){$.ajax({url:n,data:a,type:t,success:function(t){t.message&&("success"===t.status?e.success(t.message):"error"===t.status&&e.error(t.message)),void 0!==o&&o(t)},error:function(t){0===t.status&&e.error("Sorry. Something went wrong.")}})}return{clearForm:function(e){e.find("input[type!=radio], select, textarea").each(function(){this.value=null;var e=$(this);e.hasClass("select2me")&&e.trigger("change")})},debounce:function(e,t){var n=null;return function(){var a=this,o=arguments;clearTimeout(n),n=setTimeout(function(){e.apply(a,o)},t)}},extendValidator:function(){jQuery.validator.addMethod("ethereum_address",function(e,t){return this.optional(t)||/^0x[a-fA-F0-9]{40}$/.test(e)},"Please enter a valid ethereum address."),jQuery.validator.addMethod("year18",function(e,t){return this.optional(t)||moment().diff(moment(e,"MM/DD/YYYY"),"years")>=18},"You must be 18 years or older")},fixAuth:function(){$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}})},getData:function(e,t){return e.find("input[type!=checkbox], select, textarea").each(function(){t[this.name]=this.value}),e.find("input[type=checkbox]").each(function(){t[this.name]=!!this.checked}),e.find("input[type=radio]:checked").each(function(){t[this.name]=this.value}),t},loadData:function(e,t){e.find("input[type!=password][type!=radio], select, textarea").each(function(){void 0!==t[this.name]&&("checkbox"===this.type?this.checked="true"===t[this.name]||!0===t[this.name]:this.value=t[this.name])})},makeId:function(e){for(var t="",n="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",a=0;a<e;a++)t+=n.charAt(Math.floor(Math.random()*n.length));return t},sendFile:function(t,n,a,o){var i=new FormData;i.append(n&&n.customName?n.customName:"identification",t),Object.keys(n).forEach(function(e){i.append(e,n[e])}),function(t,n,a){$.ajax({url:t,data:n,type:"POST",success:function(e){void 0!==a&&a(e)},error:function(t){var n=t.responseText;("string"==typeof n||n instanceof String)&&(n=JSON.parse(n)),n=n.message?n.message:"Wrong data",e.error(n)},contentType:!1,processData:!1,cache:!1})}(a,i,o)},sendGet:function(e,n,a){t("GET",e,n,a)},sendPost:function(e,n,a){t("POST",e,n,a)},throttle:function(e,t,n){var a,o;return t||(t=250),function(){var i=n||this,s=+new Date,r=arguments;a&&s<a+t?(clearTimeout(o),o=setTimeout(function(){a=s,e.apply(i,r)},t)):(a=s,e.apply(i,r))}}}}();e.exports=a},KoRp:function(e,t){var n=function(){return{error:function(e){toastr.error(e)},init:function(){"undefined"!=typeof toastr&&(toastr.options.closeMethod="fadeOut",toastr.options.closeDuration=300,toastr.options.closeEasing="swing",toastr.options.timeOut=3e3,toastr.options.closeButton=!0)},success:function(e){toastr.success(e)},warning:function(e){toastr.warning(e)}}}();e.exports=n},MgWb:function(e,t,n){var a=function(){var e=n("U7jh"),t=n("xz79");return{init:function(){e.initMenu(),t.init()}}}();e.exports=a},Rtx8:function(e,t,n){var a=function(){var e=n("IK4z");function t(t,n){e.sendPost("/token-chef/api/language",{lang:t},function(e){"success"===e.status&&(n?window.location.href="/"+t:window.location.reload())})}return{init:function(){var n,a;n=$(".language-select-wrapper"),a=n.find("li"),n.click(function(){$(this).toggleClass("open")}),a.click(function(){a.removeClass("active");var e=$(this).toggleClass("active").attr("data-lang");setTimeout(function(){var a="yes"===n.attr("data-reload");t(e,a)})}),function(){var n="detected_language",a="detected_language_modal",o=Cookies.get(n);function i(){Cookies.set(a,"no",{expires:7}),Cookies.remove(a),$("#changeLanguageModal").addClass("hidden")}function s(){var e=$("#changeLanguageModal");e.find(".change").attr("data-lang",o),e.find(".flag").addClass(o),e.removeClass("hidden").addClass("animated fadeInUp"),e.find(".close-btn").click(function(){i()}),e.find(".change, .flag").click(function(){i(),t(o,"yes"===e.attr("data-reload"))})}o?function(){var e=Cookies.get(a);e&&"yes"===e&&s()}():e.sendPost("/token-chef/api/language/detect",{},function(e){if("success"===e.status){var t=e.data;Cookies.set(n,t.detected,{expires:7}),t.detected!==t.current&&(o=t.detected,Cookies.set(a,"yes",{expires:7}),s())}})}()}}}();e.exports=a},SYHt:function(e,t){var n=function(){var e=(new Date).getMonth();e>=11&&(e=0);var t=Date.UTC(2018,e+1,25,0,0,0);return{init:function(e){var n;e=e||t,(n=jQuery).fn.countdown=function(e){function t(){a=s.date/1e3,o=Math.floor((new Date).getTime()/1e3),a<=o?(clearInterval(interval),days=0,hours=0,minutes=0,seconds=0):(seconds=a-o,days=Math.floor(seconds/86400),seconds-=60*days*60*24,hours=Math.floor(seconds/3600),seconds-=60*hours*60,minutes=Math.floor(seconds/60),seconds-=60*minutes),"on"===s.format&&(days=String(days).length>=2?days:"0"+days,hours=String(hours).length>=2?hours:"0"+hours,minutes=String(minutes).length>=2?minutes:"0"+minutes,seconds=String(seconds).length>=2?seconds:"0"+seconds),isNaN(a)?(errorMessage="Invalid date",console.log(errorMessage),clearInterval(interval)):(i.find(".days").text(days),i.find(".hours").text(hours),i.find(".minutes").text(minutes),i.find(".seconds").text(seconds))}var i=n(this),s={date:null,format:null};e&&n.extend(s,e),interval=setInterval(t,1e3),t()};var a=e/1e3,o=Math.floor((new Date).getTime()/1e3),i=$("#counterTopText");a<=o&&(i.html("Public presale starts in"),e=Date.UTC(2017,10,24,2,0,0)),(a=e/1e3)<=o&&(i.html("Public presale ends in"),e=Date.UTC(2018,0,1,0,0,0)),(a=e/1e3)<=o&&(i.html("Public sale starts in"),e=Date.UTC(2018,0,14,2,0,0)),i.removeClass("hidden"),$(".countdown").countdown({date:e,format:"on"})}}}();e.exports=n},U7jh:function(e,t){var n=function(){function e(e){var n,a,o=$(window),i=(Modernizr.touch,$(".header")),s=$(".revealOnScroll"),r=e.smooth,c=e.margin;function l(){var t=o.scrollTop(),a=o.height(),s=$("#presale").height();t>s?i.addClass("filled"):i.removeClass("filled header-blue header-white"),$(".changeHeaderOnScroll").each(function(){var e=$(this),n=e.data("header-color");if(!i.hasClass("header-"+n)){var a=e.offset().top,o=e.height();t>a&&t<=a+o&&i.removeClass("header-blue header-white").addClass("header-"+n)}}),e.bars&&$(".barsOnScroll").each(function(){var e=$(this),o=parseInt(e.data("bar-id")),i=e.offset().top,s=e.height();t+a/3>i&&t+a/3<=i+s&&(n.eq(o).hasClass("active")||(n.removeClass("active"),n.eq(o).addClass("active")))}),$(".revealOnScroll.animated").each(function(){var e=$(this),n=e.offset().top,o=e.data("animation");e.hasClass(o)||e.addClass(o),t+a+500<n&&$(this).removeClass("animated "+o)}),$(".revealOnScroll:not(.animated)").each(function(){var e=$(this),n=e.offset().top;t+a-c>n&&(e.data("timeout")?window.setTimeout(function(){e.css("opacity",1).addClass("animated "+e.data("animation"))},parseInt(e.data("timeout"),10)):e.css("opacity",1).addClass("animated "+e.data("animation")))})}c=void 0!==c?c:120,e.bars&&(n=$("#menuBars").find(".bar")),o.height()<800&&(c/=2),r&&new SmoothScroll('a[href*="#"]',{offset:80}),s.css("opacity",0),setTimeout(function(){l(),o.on("scroll",l)},1200),l(),a=$("header .social-wrapper"),$("#socialButton").click(function(e){e.stopPropagation(),a.addClass("active")}),$(window).click(function(){a.hasClass("active")&&a.removeClass("active")}),t()}function t(){$(".menu-open").click(function(){$(".menu").removeClass("hidden"),setTimeout(function(){$(".menu-close").removeClass("hidden")},1e3)}),$(".menu a").click(function(){$(".menu-close").trigger("click")}),$(".menu-close").click(function(){var e=$(this).parents(".menu");$(this).addClass("hidden"),e.find(".section-right").removeClass("fadeInRight").addClass("fadeOutRight"),e.find(".section-left").removeClass("fadeInLeft").addClass("fadeOutLeft"),setTimeout(function(){e.addClass("hidden"),e.find(".section-right").addClass("fadeInRight").removeClass("fadeOutRight"),e.find(".section-left").addClass("fadeInLeft").removeClass("fadeOutLeft")},1e3)})}return{init:function(t){e({margin:(t=t||{}).margin,bars:t.bars,smooth:!0})},initHeader:function(t){e({margin:(t=t||{}).margin,smooth:!1})},initMenu:t}}();e.exports=n},Ym1x:function(e,t,n){var a=function(){var e=n("xz79");return{init:function(){$(".login-click").click(function(){$(".login-page").addClass("visible")}),$(".join-click").click(function(){$(".join-page").addClass("visible")}),$(".menu, .auth-page").find(".close-link").click(function(){var e=$(this).parents(".auth-page");e.find(".section-right").removeClass("fadeInRight").addClass("fadeOutRight"),e.find(".section-left").removeClass("fadeInLeft").addClass("fadeOutLeft"),setTimeout(function(){e.removeClass("visible"),e.find(".section-right").addClass("fadeInRight").removeClass("fadeOutRight"),e.find(".section-left").addClass("fadeInLeft").removeClass("fadeOutLeft")},1e3)}),e.init()}}}();e.exports=a},rSXE:function(e,t){},"sV/x":function(e,t,n){$(document).ready(function(){function e(){if("local"!==$("#appEnv").attr("data-env")){var e=e||{};e.q=e.q||[],e.app_key="b442c665697cc1996665ebeee2a35e649c156ec3",e.url="https://c.paket.global/",e.q.push(["track_sessions"]),e.q.push(["track_pageview"]),e.q.push(["track_clicks"]),e.q.push(["track_scrolls"]),e.q.push(["track_errors"]),e.q.push(["track_links"]),e.q.push(["track_forms"]),e.q.push(["collect_from_forms"]);var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://cdnjs.cloudflare.com/ajax/libs/countly-sdk-web/18.1.0/countly.min.js",t.onload=function(){e.init()};var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(t,a)}WebFont.load({google:{families:["Open Sans:regular:cyrillic","Roboto"]},custom:{families:["Proxima Nova","icomoon"],urls:[$("#fontPath").attr("data-font-path")]},fontloading:function(e,t){"icomoon"===e&&$(".fa-svg").addClass("visible")}});var o=n("04hq"),i=n("FbWP"),s=n("/LvN"),r=n("MgWb"),c=n("EmU5"),l=n("KoRp"),u=n("Rtx8");var d=function(e){return e.split("?")[0].split("#")[0]}(window.location.href.replace(/^(?:\/\/|[^\/]+)*\//,"")).toLowerCase();if(l.init(),u.init(),["en","de","es","fr","pt"].indexOf(d)>=0)return o.init(),!1;switch(d){case"":o.init();break;case"token-sale":case"developers":i.init();break;case"my-account":s.init();break;case"password":case"login":case"sign-up":case"terms-and-conditions":case"privacy-policy":r.init();break;default:"reset-password/"===d.substr(0,15)?r.init():"verification/"===d.substr(0,13)&&(r.init(),c.init())}}"undefined"==typeof Raven?e():(Raven.config("https://6dfaa9dccdcb4a5783c91b96f79818e7@sentry.io/1219139").install(),Raven.context(function(){e()}))})},xZZD:function(e,t){},xz79:function(e,t){var n=function(){return{init:function(){$(".accept-field-link").click(function(){var e,t;switch($(this).attr("data-field-name")){case"terms_and_conditions":e=$("#termsModal"),t=$("#termsModalScroll"),e.modal("show"),t.off("click").click(function(){e.animate({scrollTop:e.find(".modal-dialog").height()},500)}),e.on("shown.bs.modal",function(){t.removeClass("hidden")}),e.on("hidden.bs.modal",function(){t.addClass("hidden")});break;case"privacy_policy":$("#privacyModal").modal("show")}})}}}();e.exports=n}});