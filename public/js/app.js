!function(t){var e={};function n(a){if(e[a])return e[a].exports;var o=e[a]={i:a,l:!1,exports:{}};return t[a].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=t,n.c=e,n.d=function(t,e,a){n.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:a})},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="/",n(n.s=0)}({"/LvN":function(t,e,n){var a=function(){var t=n("U7jh"),e=n("KoRp");return{init:function(){t.initHeader({margin:100});var n=window.location.hash;n&&$('ul.nav a[href="'+n+'"]').tab("show"),$(".nav-pills a").click(function(){$(this).tab("show");var t=$("body").scrollTop()||$("html").scrollTop();window.location.hash=this.hash,$("html,body").scrollTop(t)}),new Clipboard(".btn-copy").on("success",function(){e.success($("#copyText").val())})}}}();t.exports=a},0:function(t,e,n){n("sV/x"),n("xZZD"),t.exports=n("rSXE")},"04hq":function(t,e,n){var a=function(){var t,e=n("U7jh"),a=n("SYHt"),o=n("47h6"),i=n("Ym1x");function s(){var t=$(".road-map-carousel-1").owlCarousel({items:1});$(".owlRoadMapNextBtn").click(function(){t.trigger("next.owl.carousel")}),$(".owlRoadMapPrevBtn").click(function(){t.trigger("prev.owl.carousel",[300])});var e=$(".road-map-carousel-2").owlCarousel({items:4});$(".owlRoadMap2NextBtn").click(function(){e.trigger("next.owl.carousel")}),$(".owlRoadMap2PrevBtn").click(function(){e.trigger("prev.owl.carousel",[300])})}function r(){t&&t.owlCarousel("destroy");var e=$(window).width(),n=3;e<500?n=1:e<600&&(n=2),$(".owl-carousel-companies-mobile").owlCarousel({items:n,autoplay:!0,smartSpeed:1e3,autoplayTimeout:3e3,dots:!1})}function c(){var t,e=$("#ecoGraph").find(".graph-item"),n=$("#ecoGraphDesc"),a=n.find("h2,p"),o=n.find("h2"),i=n.find("p"),s=2,r=300;function c(e,n,s){var c=parseInt(e.attr("data-start")),l=parseInt(c+n),u=c-l;u=u<0?-1*u:u;var d=parseInt(u/60);d=d<2?2:d,t={center:[r-90,r-90],radius:r,start:c,end:l,dir:c<l?1:-1},s&&function(t){o.html(t.find(".graph-title").html()),i.html(t.find(".graph-desc").html()),a.removeClass("fadeOut").addClass("fadeIn")}(e),e.animate({path:new $.path.arc(t)},500*d,function(){e.attr("data-start",l),s&&e.addClass("active")})}function l(t){a.removeClass("fadeIn").addClass("animated fadeOut"),setTimeout(function(){--s<0&&(s=5),e.removeClass("active"),e.each(function(e){c($(this),t,e===s)})},500)}e.each(function(t){$(this).attr("data-start",30+60*t),$(this).click(function(){var e=s-t;s=t+1,l(60*e)})}),l(60)}return{init:function(){e.init({bars:!0}),a.init(),o.init(),i.init();var t=$("#mapModal");$("#mapModalButton").click(function(){t.modal("show")}),$("#closeMapModal").click(function(){t.modal("hide")});var n=$("#calculatorModal");$("#calculatorModalButton").click(function(){n.modal("show")}),$("#closeCalculatorModal").click(function(){n.modal("hide")}),$(".js-example-basic-single").select2({minimumResultsForSearch:-1}),$("html").mousemove(function(t){var e=$(window).width(),n=$(window).height(),a=t.pageX-this.offsetLeft-e/2,o=t.pageY-this.offsetTop-n/2;$("#wrapper").find("div").each(function(){var t=$(this).attr("data-speed");$(this).attr("data-revert")&&(t*=-1),TweenMax.to($(this),1,{x:1-a*t,y:1-o*t})})}),c();var l=$(".eco-carousel").owlCarousel({autoplay:!0,smartSpeed:1e3,autoplayTimeout:15e3,loop:!0,stagePadding:40,items:1});$(".owlEcosystemNextBtn").click(function(){l.trigger("next.owl.carousel")}),$(".owlEcosystemPrevBtn").click(function(){l.trigger("prev.owl.carousel",[300])});var u=$(".team-carousel").owlCarousel({autoplay:!0,smartSpeed:1e3,autoplayTimeout:15e3,loop:!0,stagePadding:70,items:1});$(".owlTeamNextBtn").click(function(){u.trigger("next.owl.carousel")}),$(".owlTeamPrevBtn").click(function(){u.trigger("prev.owl.carousel",[300])});var d=$(".project-items-carousel").owlCarousel({autoHeight:!0,autoplay:!0,smartSpeed:1e3,autoplayTimeout:15e3,loop:!0,items:1});$(".owlProjectNextBtn").click(function(){d.trigger("next.owl.carousel")}),$(".owlProjectPrevBtn").click(function(){d.trigger("prev.owl.carousel",[300])}),$("#viewMoreCompanies").click(function(){$(".company-row.additional").removeClass("additional")}),$(window).resize(function(){r()}),s(),r()},initTokenSale:function(){s(),a.init()}}}();t.exports=a},"47h6":function(t,e){var n=function(){return{init:function(){var t;function e(e){if(t)e&&t.playVideo();else{var n=function(){e&&t.playVideo()},a=document.createElement("script");a.src="https://www.youtube.com/iframe_api";var o=document.getElementsByTagName("script")[0];o.parentNode.insertBefore(a,o);var i=$("#playVideoButton").attr("data-video-src");window.onYouTubeIframeAPIReady=function(){t=new YT.Player("player",{width:"100%",height:"100%",playerVars:{modestbranding:1,rel:0,showinfo:0,controls:1,html5:1},events:{onReady:n},videoId:i})}}}$(".play-button").click(function(){$(".video-link").addClass("video-animated"),setTimeout(function(){!function(){function n(){t&&t.stopVideo()}$("#videoModal").modal("show").on("hidden.bs.modal",function(){n()}).on("shown.bs.modal",function(){$(".video-link").removeClass("video-animated")}).find("button.close").off("click").click(function(){n()}),t?t.playVideo():e(!0)}()},700)}),setTimeout(function(){e()},1e3)}}}();t.exports=n},EmU5:function(t,e){var n=function(){return{init:function(){window.verification_callback=function(){$("#successMessage").removeClass("hidden"),$(".verification-form-wrapper").addClass("hidden")}}}}();t.exports=n},FbWP:function(t,e,n){var a=function(){var t=n("04hq");return{init:function(){t.initTokenSale()}}}();t.exports=a},IK4z:function(t,e,n){var a=function(){var t=n("KoRp");function e(e,n,a,o){$.ajax({url:n,data:a,type:e,success:function(e){e.message&&("success"===e.status?t.success(e.message):"error"===e.status&&t.error(e.message)),void 0!==o&&o(e)},error:function(e){0===e.status&&t.error("Sorry. Something went wrong.")}})}return{clearForm:function(t){t.find("input[type!=radio], select, textarea").each(function(){this.value=null;var t=$(this);t.hasClass("select2me")&&t.trigger("change")})},debounce:function(t,e){var n=null;return function(){var a=this,o=arguments;clearTimeout(n),n=setTimeout(function(){t.apply(a,o)},e)}},extendValidator:function(){jQuery.validator.addMethod("ethereum_address",function(t,e){return this.optional(e)||/^0x[a-fA-F0-9]{40}$/.test(t)},"Please enter a valid ethereum address."),jQuery.validator.addMethod("year18",function(t,e){return this.optional(e)||moment().diff(moment(t,"MM/DD/YYYY"),"years")>=18},"You must be 18 years or older")},fixAuth:function(){$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}})},getData:function(t,e){return t.find("input[type!=checkbox], select, textarea").each(function(){e[this.name]=this.value}),t.find("input[type=checkbox]").each(function(){e[this.name]=!!this.checked}),t.find("input[type=radio]:checked").each(function(){e[this.name]=this.value}),e},loadData:function(t,e){t.find("input[type!=password][type!=radio], select, textarea").each(function(){void 0!==e[this.name]&&("checkbox"===this.type?this.checked="true"===e[this.name]||!0===e[this.name]:this.value=e[this.name])})},makeId:function(t){for(var e="",n="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",a=0;a<t;a++)e+=n.charAt(Math.floor(Math.random()*n.length));return e},sendFile:function(e,n,a,o){var i=new FormData;i.append(n&&n.customName?n.customName:"identification",e),Object.keys(n).forEach(function(t){i.append(t,n[t])}),function(e,n,a){$.ajax({url:e,data:n,type:"POST",success:function(t){void 0!==a&&a(t)},error:function(e){var n=e.responseText;("string"==typeof n||n instanceof String)&&(n=JSON.parse(n)),n=n.message?n.message:"Wrong data",t.error(n)},contentType:!1,processData:!1,cache:!1})}(a,i,o)},sendGet:function(t,n,a){e("GET",t,n,a)},sendPost:function(t,n,a){e("POST",t,n,a)},throttle:function(t,e,n){var a,o;return e||(e=250),function(){var i=n||this,s=+new Date,r=arguments;a&&s<a+e?(clearTimeout(o),o=setTimeout(function(){a=s,t.apply(i,r)},e)):(a=s,t.apply(i,r))}}}}();t.exports=a},KoRp:function(t,e){var n=function(){return{error:function(t){toastr.error(t)},init:function(){"undefined"!=typeof toastr&&(toastr.options.closeMethod="fadeOut",toastr.options.closeDuration=300,toastr.options.closeEasing="swing",toastr.options.timeOut=3e3,toastr.options.closeButton=!0)},success:function(t){toastr.success(t)},warning:function(t){toastr.warning(t)}}}();t.exports=n},MgWb:function(t,e,n){var a=function(){var t=n("U7jh"),e=n("xz79");return{init:function(){t.initMenu(),e.init()}}}();t.exports=a},Rtx8:function(t,e,n){var a=function(){var t=n("IK4z");function e(e,n){t.sendPost("/token-chef/api/language",{lang:e},function(t){"success"===t.status&&(n?window.location.href="/"+e:window.location.reload())})}return{init:function(){var n,a,o;n=$(".language-select-wrapper"),a=n.find("li"),n.click(function(){$(this).toggleClass("open")}),a.click(function(){a.removeClass("active");var t=$(this).toggleClass("active").attr("data-lang");setTimeout(function(){var a="yes"===n.attr("data-reload");e(t,a)})}),function(){var n="detected_language",a="detected_language_modal",o=Cookies.get(n);function i(){Cookies.set(a,"no",{expires:7}),Cookies.remove(a),$("#changeLanguageModal").addClass("hidden")}function s(){var t=$("#changeLanguageModal");t.find(".change").attr("data-lang",o),t.find(".flag").addClass(o),t.removeClass("hidden").addClass("animated fadeInUp"),t.find(".close-btn").click(function(){i()}),t.find(".change, .flag").click(function(){i(),e(o,"yes"===t.attr("data-reload"))})}o?function(){var t=Cookies.get(a);t&&"yes"===t&&s()}():t.sendPost("/token-chef/api/language/detect",{},function(t){if("success"===t.status){var e=t.data;Cookies.set(n,e.detected,{expires:7}),e.detected!==e.current&&(o=e.detected,Cookies.set(a,"yes",{expires:7}),s())}})}(),o=new Image,$(".preload-lang-images").each(function(){var t=$(this).attr("data-lang");o.src="/images/flags_s/"+t+".png?sf32fl"})}}}();t.exports=a},SYHt:function(t,e){var n=function(){var t=(new Date).getMonth();t>=11&&(t=0);var e=Date.UTC(2018,t+1,25,0,0,0);return{init:function(t){var n;t=t||e,(n=jQuery).fn.countdown=function(t){function e(){a=s.date/1e3,o=Math.floor((new Date).getTime()/1e3),a<=o?(clearInterval(interval),days=0,hours=0,minutes=0,seconds=0):(seconds=a-o,days=Math.floor(seconds/86400),seconds-=60*days*60*24,hours=Math.floor(seconds/3600),seconds-=60*hours*60,minutes=Math.floor(seconds/60),seconds-=60*minutes),"on"===s.format&&(days=String(days).length>=2?days:"0"+days,hours=String(hours).length>=2?hours:"0"+hours,minutes=String(minutes).length>=2?minutes:"0"+minutes,seconds=String(seconds).length>=2?seconds:"0"+seconds),isNaN(a)?(errorMessage="Invalid date",console.log(errorMessage),clearInterval(interval)):(i.find(".days").text(days),i.find(".hours").text(hours),i.find(".minutes").text(minutes),i.find(".seconds").text(seconds))}var i=n(this),s={date:null,format:null};t&&n.extend(s,t),interval=setInterval(e,1e3),e()};var a=t/1e3,o=Math.floor((new Date).getTime()/1e3),i=$("#counterTopText");a<=o&&(i.html("Public presale starts in"),t=Date.UTC(2017,10,24,2,0,0)),(a=t/1e3)<=o&&(i.html("Public presale ends in"),t=Date.UTC(2018,0,1,0,0,0)),(a=t/1e3)<=o&&(i.html("Public sale starts in"),t=Date.UTC(2018,0,14,2,0,0)),i.removeClass("hidden"),$(".countdown").countdown({date:t,format:"on"})}}}();t.exports=n},U7jh:function(t,e){var n=function(){function t(t){var n,a,o=$(window),i=(Modernizr.touch,$(".header")),s=$(".revealOnScroll"),r=t.smooth,c=t.margin;function l(){var e=o.scrollTop(),a=o.height(),s=$("#presale").height();e>s?i.addClass("filled"):i.removeClass("filled header-blue header-white"),$(".changeHeaderOnScroll").each(function(){var t=$(this),n=t.data("header-color");if(!i.hasClass("header-"+n)){var a=t.offset().top,o=t.height();e>a&&e<=a+o&&i.removeClass("header-blue header-white").addClass("header-"+n)}}),t.bars&&$(".barsOnScroll").each(function(){var t=$(this),o=parseInt(t.data("bar-id")),i=t.offset().top,s=t.height();e+a/3>i&&e+a/3<=i+s&&(n.eq(o).hasClass("active")||(n.removeClass("active"),n.eq(o).addClass("active")))}),$(".revealOnScroll.animated").each(function(){var t=$(this),n=t.offset().top,o=t.data("animation");t.hasClass(o)||t.addClass(o),e+a+500<n&&$(this).removeClass("animated "+o)}),$(".revealOnScroll:not(.animated)").each(function(){var t=$(this),n=t.offset().top;e+a-c>n&&(t.data("timeout")?window.setTimeout(function(){t.css("opacity",1).addClass("animated "+t.data("animation"))},parseInt(t.data("timeout"),10)):t.css("opacity",1).addClass("animated "+t.data("animation")))})}c=void 0!==c?c:120,t.bars&&(n=$("#menuBars").find(".bar")),o.height()<800&&(c/=2),r&&new SmoothScroll('a[href*="#"]',{offset:80}),s.css("opacity",0),setTimeout(function(){l(),o.on("scroll",l)},1200),l(),a=$("header .social-wrapper"),$("#socialButton").click(function(t){t.stopPropagation(),a.addClass("active")}),$(window).click(function(){a.hasClass("active")&&a.removeClass("active")}),e()}function e(){$(".menu-open").click(function(){$(".menu").removeClass("hidden"),setTimeout(function(){$(".menu-close").removeClass("hidden")},1e3)}),$(".menu a").click(function(){$(".menu-close").trigger("click")}),$(".menu-close").click(function(){var t=$(this).parents(".menu");$(this).addClass("hidden"),t.find(".section-right").removeClass("fadeInRight").addClass("fadeOutRight"),t.find(".section-left").removeClass("fadeInLeft").addClass("fadeOutLeft"),setTimeout(function(){t.addClass("hidden"),t.find(".section-right").addClass("fadeInRight").removeClass("fadeOutRight"),t.find(".section-left").addClass("fadeInLeft").removeClass("fadeOutLeft")},1e3)})}return{init:function(e){t({margin:(e=e||{}).margin,bars:e.bars,smooth:!0})},initHeader:function(e){t({margin:(e=e||{}).margin,smooth:!1})},initMenu:e}}();t.exports=n},Ym1x:function(t,e,n){var a=function(){var t=n("xz79");return{init:function(){$(".login-click").click(function(){$(".login-page").addClass("visible")}),$(".join-click").click(function(){$(".join-page").addClass("visible")}),$(".menu, .auth-page").find(".close-link").click(function(){var t=$(this).parents(".auth-page");t.find(".section-right").removeClass("fadeInRight").addClass("fadeOutRight"),t.find(".section-left").removeClass("fadeInLeft").addClass("fadeOutLeft"),setTimeout(function(){t.removeClass("visible"),t.find(".section-right").addClass("fadeInRight").removeClass("fadeOutRight"),t.find(".section-left").addClass("fadeInLeft").removeClass("fadeOutLeft")},1e3)}),t.init()}}}();t.exports=a},rSXE:function(t,e){},"sV/x":function(t,e,n){$(document).ready(function(){function t(){if("local"!==$("#appEnv").attr("data-env")){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://cdnjs.cloudflare.com/ajax/libs/countly-sdk-web/18.1.0/countly.min.js",t.onload=function(){var t=window.Countly||{};t.q=t.q||[],t.app_key="b442c665697cc1996665ebeee2a35e649c156ec3",t.url="https://c.paket.global/",t.q.push(["track_sessions"]),t.q.push(["track_pageview"]),t.q.push(["track_clicks"]),t.q.push(["track_scrolls"]),t.q.push(["track_errors"]),t.q.push(["track_links"]),t.q.push(["track_forms"]),t.q.push(["collect_from_forms"]),t.init()};var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e)}WebFont.load({google:{families:["Open Sans:regular:cyrillic","Roboto"]},custom:{families:["Proxima Nova","icomoon"],urls:[$("#fontPath").attr("data-font-path")]},fontloading:function(t,e){"icomoon"===t&&$(".fa-svg").addClass("visible")}});var a=n("04hq"),o=n("FbWP"),i=n("scoL"),s=n("/LvN"),r=n("MgWb"),c=n("EmU5"),l=n("KoRp"),u=n("Rtx8");var d=function(t){return t.split("?")[0].split("#")[0]}(window.location.href.replace(/^(?:\/\/|[^\/]+)*\//,"")).toLowerCase();if(l.init(),u.init(),["en","de","es","fr","pt","cn","ru"].indexOf(d)>=0)return a.init(),!1;switch(d){case"":a.init();break;case"token-sale":o.init();break;case"developers":i.init();break;case"my-account":s.init();break;case"password":case"login":case"sign-up":case"terms-and-conditions":case"privacy-policy":r.init();break;default:"reset-password/"===d.substr(0,15)?r.init():"verification/"===d.substr(0,13)&&(r.init(),c.init())}}"undefined"==typeof Raven?t():(Raven.config("https://6dfaa9dccdcb4a5783c91b96f79818e7@sentry.io/1219139").install(),Raven.context(function(){t()}))})},scoL:function(t,e,n){var a=function(){var t=n("U7jh");return{init:function(){t.init()}}}();t.exports=a},xZZD:function(t,e){},xz79:function(t,e){var n=function(){return{init:function(){$(".accept-field-link").click(function(){var t,e;switch($(this).attr("data-field-name")){case"terms_and_conditions":t=$("#termsModal"),e=$("#termsModalScroll"),t.modal("show"),e.off("click").click(function(){t.animate({scrollTop:t.find(".modal-dialog").height()},500)}),t.on("shown.bs.modal",function(){e.removeClass("hidden")}),t.on("hidden.bs.modal",function(){e.addClass("hidden")});break;case"privacy_policy":$("#privacyModal").modal("show")}})}}}();t.exports=n}});