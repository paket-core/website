!function(e){var t={};function n(o){if(t[o])return t[o].exports;var a=t[o]={i:o,l:!1,exports:{}};return e[o].call(a.exports,a,a.exports,n),a.l=!0,a.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:o})},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=0)}({"/LvN":function(e,t,n){var o=function(){var e=n("U7jh"),t=n("KoRp");return{init:function(){e.initHeader({margin:100});var n=window.location.hash;n&&$('ul.nav a[href="'+n+'"]').tab("show"),$(".nav-pills a").click(function(){$(this).tab("show");var e=$("body").scrollTop()||$("html").scrollTop();window.location.hash=this.hash,$("html,body").scrollTop(e)}),new Clipboard(".btn-copy").on("success",function(){t.success($("#copyText").val())})}}}();e.exports=o},0:function(e,t,n){n("sV/x"),n("xZZD"),e.exports=n("rSXE")},"04hq":function(e,t,n){var o=function(){var e=n("U7jh"),t=n("SYHt"),o=n("47h6"),a=n("Ym1x");return{init:function(){e.init({bars:!0}),t.init(),o.init(),a.init();var n=$("#mapModal");$("#mapModalButton").click(function(){n.modal("show")}),$("#closeMapModal").click(function(){n.modal("hide")});var i=$("#calculatorModal");$("#calculatorModalButton").click(function(){i.modal("show")}),$("#closeCalculatorModal").click(function(){i.modal("hide")}),$(".js-example-basic-single").select2({minimumResultsForSearch:-1}),$("html").mousemove(function(e){var t=$(window).width(),n=$(window).height(),o=e.pageX-this.offsetLeft-t/2,a=e.pageY-this.offsetTop-n/2;$("#wrapper").find("div").each(function(){var e=$(this).attr("data-speed");$(this).attr("data-revert")&&(e*=-1),TweenMax.to($(this),1,{x:1-o*e,y:1-a*e})})}),$(".graph-btn").click(function(){$(this).parents(".graph-item").toggleClass("active")});var s=$(".eco-carousel").owlCarousel({autoplay:!0,smartSpeed:1e3,autoplayTimeout:15e3,loop:!0,stagePadding:40,items:1});$(".owlEcosystemNextBtn").click(function(){s.trigger("next.owl.carousel")}),$(".owlEcosystemPrevBtn").click(function(){s.trigger("prev.owl.carousel",[300])});var r=$(".team-carousel").owlCarousel({autoplay:!0,smartSpeed:1e3,autoplayTimeout:15e3,loop:!0,stagePadding:70,items:1});$(".owlTeamNextBtn").click(function(){r.trigger("next.owl.carousel")}),$(".owlTeamPrevBtn").click(function(){r.trigger("prev.owl.carousel",[300])});var c=$(".project-items-carousel").owlCarousel({autoHeight:!0,autoplay:!0,smartSpeed:1e3,autoplayTimeout:15e3,loop:!0,items:1});$(".owlProjectNextBtn").click(function(){c.trigger("next.owl.carousel")}),$(".owlProjectPrevBtn").click(function(){c.trigger("prev.owl.carousel",[300])});var l=$(".road-map-carousel-1").owlCarousel({items:1});$(".owlRoadMapNextBtn").click(function(){l.trigger("next.owl.carousel")}),$(".owlRoadMapPrevBtn").click(function(){l.trigger("prev.owl.carousel",[300])});var u,d=$(".road-map-carousel-2").owlCarousel({items:4});function f(){u&&u.owlCarousel("destroy");var e=$(window).width(),t=3;e<500?t=1:e<600&&(t=2),$(".owl-carousel-companies-mobile").owlCarousel({items:t,autoplay:!0,smartSpeed:1e3,autoplayTimeout:3e3,dots:!1})}$(".owlRoadMap2NextBtn").click(function(){d.trigger("next.owl.carousel")}),$(".owlRoadMap2PrevBtn").click(function(){d.trigger("prev.owl.carousel",[300])}),$("#viewMoreCompanies").click(function(){$(".company-row.additional").removeClass("additional")}),$(window).resize(function(){f()}),f()}}}();e.exports=o},"47h6":function(e,t){var n=function(){return{init:function(){var e;function t(t){if(e)t&&e.playVideo();else{var n=function(){t&&e.playVideo()},o=document.createElement("script");o.src="https://www.youtube.com/iframe_api";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a);var i=$("#playVideoButton").attr("data-video-src");window.onYouTubeIframeAPIReady=function(){e=new YT.Player("player",{width:"100%",height:"100%",playerVars:{modestbranding:1,rel:0,showinfo:0,controls:1,html5:1},events:{onReady:n},videoId:i})}}}$(".play-button").click(function(){$(".video-link").addClass("video-animated"),setTimeout(function(){!function(){function n(){e&&e.stopVideo()}$("#videoModal").modal("show").on("hidden.bs.modal",function(){n()}).on("shown.bs.modal",function(){$(".video-link").removeClass("video-animated")}).find("button.close").off("click").click(function(){n()}),e?e.playVideo():t(!0)}()},700)}),setTimeout(function(){t()},2e3)}}}();e.exports=n},EmU5:function(e,t){var n=function(){return{init:function(){window.verification_callback=function(){$("#successMessage").removeClass("hidden"),$(".verification-form-wrapper").addClass("hidden")}}}}();e.exports=n},FbWP:function(e,t,n){var o=function(){var e=n("U7jh"),t=n("SYHt"),o=n("Ym1x"),a={inDays:function(e,t){var n=t.getTime(),o=e.getTime();return parseInt((n-o)/864e5)},inWeeks:function(e,t){var n=t.getTime(),o=e.getTime();return parseInt((n-o)/6048e5)},inMonths:function(e,t){var n=e.getFullYear(),o=t.getFullYear(),a=e.getMonth();return t.getMonth()+12*o-(a+12*n)},inYears:function(e,t){return t.getFullYear()-e.getFullYear()}};function i(e){var t=e.el,n=e.to?e.to:e.from,o=e.width?e.width:4;new ProgressBar.Circle(t,{color:"#aaa",strokeWidth:o,trailWidth:o,easing:"easeInOut",duration:1400,text:{autoStyleContainer:!1},from:{color:e.from,width:o},to:{color:n,width:o},step:function(e,t){t.path.setAttribute("stroke",e.color),t.path.setAttribute("stroke-width",e.width);var n=Math.round(100*t.value());0===n?t.setText("0%"):t.setText(n+"%")}}).animate(e.progress/100)}return{init:function(){var n,s,r,c,l,u;e.init({margin:100}),t.init(),o.init(),$(".js-example-basic-single").select2({minimumResultsForSearch:-1}),$("html").mousemove(function(e){var t=$(window).width(),n=$(window).height(),o=e.pageX-this.offsetLeft-t/2,a=e.pageY-this.offsetTop-n/2;$("#wrapper").find("div").each(function(){var e=$(this).attr("data-speed");$(this).attr("data-revert")&&(e*=-1),TweenMax.to($(this),1,{x:1-o*e,y:1-a*e})})}),n=new Date("2018-06-10T00:00:00"),s=new Date("2018-04-25T00:00:00"),r=a.inDays(s,new Date),c=a.inDays(s,n),l=r>0?parseInt(100*r/c):0,i({el:$("#progressChart")[0],from:"#FFB450",to:"#FF7070",width:2,progress:l}),$("#frontProgress").css("width",l+"%"),i({el:(u=$(".token-distribution").find(".chart"))[0],from:"#2190F5",width:2,progress:100}),i({el:u[1],from:"#28DACE",width:2,progress:20}),i({el:u[2],from:"#FF7070",progress:4}),i({el:u[3],from:"#FF7070",progress:1}),i({el:u[4],from:"#FF7070",progress:1}),i({el:u[5],from:"#FF7070",progress:1})}}}();e.exports=o},IK4z:function(e,t,n){var o=function(){var e=n("KoRp");function t(t,n,o,a){$.ajax({url:n,data:o,type:t,success:function(t){t.message&&("success"===t.status?e.success(t.message):"error"===t.status&&e.error(t.message)),void 0!==a&&a(t)},error:function(t){0===t.status&&e.error("Sorry. Something went wrong.")}})}return{clearForm:function(e){e.find("input[type!=radio], select, textarea").each(function(){this.value=null;var e=$(this);e.hasClass("select2me")&&e.trigger("change")})},debounce:function(e,t){var n=null;return function(){var o=this,a=arguments;clearTimeout(n),n=setTimeout(function(){e.apply(o,a)},t)}},extendValidator:function(){jQuery.validator.addMethod("ethereum_address",function(e,t){return this.optional(t)||/^0x[a-fA-F0-9]{40}$/.test(e)},"Please enter a valid ethereum address."),jQuery.validator.addMethod("year18",function(e,t){return this.optional(t)||moment().diff(moment(e,"MM/DD/YYYY"),"years")>=18},"You must be 18 years or older")},fixAuth:function(){$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}})},getData:function(e,t){return e.find("input[type!=checkbox], select, textarea").each(function(){t[this.name]=this.value}),e.find("input[type=checkbox]").each(function(){t[this.name]=!!this.checked}),e.find("input[type=radio]:checked").each(function(){t[this.name]=this.value}),t},loadData:function(e,t){e.find("input[type!=password][type!=radio], select, textarea").each(function(){void 0!==t[this.name]&&("checkbox"===this.type?this.checked="true"===t[this.name]||!0===t[this.name]:this.value=t[this.name])})},makeId:function(e){for(var t="",n="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",o=0;o<e;o++)t+=n.charAt(Math.floor(Math.random()*n.length));return t},sendFile:function(t,n,o,a){var i=new FormData;i.append(n&&n.customName?n.customName:"identification",t),Object.keys(n).forEach(function(e){i.append(e,n[e])}),function(t,n,o){$.ajax({url:t,data:n,type:"POST",success:function(e){void 0!==o&&o(e)},error:function(t){var n=t.responseText;("string"==typeof n||n instanceof String)&&(n=JSON.parse(n)),n=n.message?n.message:"Wrong data",e.error(n)},contentType:!1,processData:!1,cache:!1})}(o,i,a)},sendGet:function(e,n,o){t("GET",e,n,o)},sendPost:function(e,n,o){t("POST",e,n,o)},throttle:function(e,t,n){var o,a;return t||(t=250),function(){var i=n||this,s=+new Date,r=arguments;o&&s<o+t?(clearTimeout(a),a=setTimeout(function(){o=s,e.apply(i,r)},t)):(o=s,e.apply(i,r))}}}}();e.exports=o},KoRp:function(e,t){var n=function(){return{error:function(e){toastr.error(e)},init:function(){"undefined"!=typeof toastr&&(toastr.options.closeMethod="fadeOut",toastr.options.closeDuration=300,toastr.options.closeEasing="swing",toastr.options.timeOut=3e3,toastr.options.closeButton=!0)},success:function(e){toastr.success(e)},warning:function(e){toastr.warning(e)}}}();e.exports=n},MgWb:function(e,t,n){var o=function(){var e=n("U7jh"),t=n("xz79");return{init:function(){e.initMenu(),t.init()}}}();e.exports=o},Rtx8:function(e,t,n){var o=function(){var e=n("IK4z");function t(t,n){e.sendPost("/token-chef/api/language",{lang:t},function(e){"success"===e.status&&(n?window.location.href="/"+t:window.location.reload())})}return{init:function(){var n,o;n=$(".language-select-wrapper"),o=n.find("li"),n.click(function(){$(this).toggleClass("open")}),o.click(function(){o.removeClass("active");var e=$(this).toggleClass("active").attr("data-lang");setTimeout(function(){var o="yes"===n.attr("data-reload");t(e,o)})}),function(){var n="detected_language",o="detected_language_modal",a=Cookies.get(n);function i(){Cookies.set(o,"no",{expires:7}),Cookies.remove(o),$("#changeLanguageModal").addClass("hidden")}function s(){var e=$("#changeLanguageModal");e.find(".change").attr("data-lang",a),e.find(".flag").addClass(a),e.removeClass("hidden").addClass("animated fadeInUp"),e.find(".close-btn").click(function(){i()}),e.find(".change, .flag").click(function(){i(),t(a,"yes"===e.attr("data-reload"))})}a?function(){var e=Cookies.get(o);e&&"yes"===e&&s()}():e.sendPost("/token-chef/api/language/detect",{},function(e){if("success"===e.status){var t=e.data;Cookies.set(n,t.detected,{expires:7}),t.detected!==t.current&&(a=t.detected,Cookies.set(o,"yes",{expires:7}),s())}})}()}}}();e.exports=o},SYHt:function(e,t){var n=function(){var e=(new Date).getMonth();e>=11&&(e=0);var t=Date.UTC(2018,e+1,25,0,0,0);return{init:function(e){var n;e=e||t,(n=jQuery).fn.countdown=function(e){function t(){o=s.date/1e3,a=Math.floor((new Date).getTime()/1e3),o<=a?(clearInterval(interval),days=0,hours=0,minutes=0,seconds=0):(seconds=o-a,days=Math.floor(seconds/86400),seconds-=60*days*60*24,hours=Math.floor(seconds/3600),seconds-=60*hours*60,minutes=Math.floor(seconds/60),seconds-=60*minutes),"on"===s.format&&(days=String(days).length>=2?days:"0"+days,hours=String(hours).length>=2?hours:"0"+hours,minutes=String(minutes).length>=2?minutes:"0"+minutes,seconds=String(seconds).length>=2?seconds:"0"+seconds),isNaN(o)?(errorMessage="Invalid date",console.log(errorMessage),clearInterval(interval)):(i.find(".days").text(days),i.find(".hours").text(hours),i.find(".minutes").text(minutes),i.find(".seconds").text(seconds))}var i=n(this),s={date:null,format:null};e&&n.extend(s,e),interval=setInterval(t,1e3),t()};var o=e/1e3,a=Math.floor((new Date).getTime()/1e3),i=$("#counterTopText");o<=a&&(i.html("Public presale starts in"),e=Date.UTC(2017,10,24,2,0,0)),(o=e/1e3)<=a&&(i.html("Public presale ends in"),e=Date.UTC(2018,0,1,0,0,0)),(o=e/1e3)<=a&&(i.html("Public sale starts in"),e=Date.UTC(2018,0,14,2,0,0)),i.removeClass("hidden"),$("#countdown").countdown({date:e,format:"on"})}}}();e.exports=n},U7jh:function(e,t){var n=function(){function e(e){var n,o,a=$(window),i=(Modernizr.touch,$(".header")),s=$(".revealOnScroll"),r=e.smooth,c=e.margin;function l(){var t=a.scrollTop(),o=a.height(),s=$("#presale").height();t>s?i.addClass("filled"):i.removeClass("filled header-blue header-white"),$(".changeHeaderOnScroll").each(function(){var e=$(this),n=e.data("header-color");if(!i.hasClass("header-"+n)){var o=e.offset().top,a=e.height();t>o&&t<=o+a&&i.removeClass("header-blue header-white").addClass("header-"+n)}}),e.bars&&$(".barsOnScroll").each(function(){var e=$(this),a=parseInt(e.data("bar-id")),i=e.offset().top,s=e.height();t+o/3>i&&t+o/3<=i+s&&(n.eq(a).hasClass("active")||(n.removeClass("active"),n.eq(a).addClass("active")))}),$(".revealOnScroll.animated").each(function(){var e=$(this),n=e.offset().top,a=e.data("animation");e.hasClass(a)||e.addClass(a),t+o+500<n&&$(this).removeClass("animated "+a)}),$(".revealOnScroll:not(.animated)").each(function(){var e=$(this),n=e.offset().top;t+o-c>n&&(e.data("timeout")?window.setTimeout(function(){e.css("opacity",1).addClass("animated "+e.data("animation"))},parseInt(e.data("timeout"),10)):e.css("opacity",1).addClass("animated "+e.data("animation")))})}c=void 0!==c?c:120,e.bars&&(n=$("#menuBars").find(".bar")),a.height()<800&&(c/=2),r&&new SmoothScroll('a[href*="#"]',{offset:80}),s.css("opacity",0),setTimeout(function(){l(),a.on("scroll",l)},1200),l(),o=$("header .social-wrapper"),$("#socialButton").click(function(e){e.stopPropagation(),o.addClass("active")}),$(window).click(function(){o.hasClass("active")&&o.removeClass("active")}),t()}function t(){$(".menu-open").click(function(){$(".menu").removeClass("hidden"),setTimeout(function(){$(".menu-close").removeClass("hidden")},1e3)}),$(".menu a").click(function(){$(".menu-close").trigger("click")}),$(".menu-close").click(function(){var e=$(this).parents(".menu");$(this).addClass("hidden"),e.find(".section-right").removeClass("fadeInRight").addClass("fadeOutRight"),e.find(".section-left").removeClass("fadeInLeft").addClass("fadeOutLeft"),setTimeout(function(){e.addClass("hidden"),e.find(".section-right").addClass("fadeInRight").removeClass("fadeOutRight"),e.find(".section-left").addClass("fadeInLeft").removeClass("fadeOutLeft")},1e3)})}return{init:function(t){e({margin:(t=t||{}).margin,bars:t.bars,smooth:!0})},initHeader:function(t){e({margin:(t=t||{}).margin,smooth:!1})},initMenu:t}}();e.exports=n},Ym1x:function(e,t,n){var o=function(){var e=n("xz79");return{init:function(){$(".login-click").click(function(){$(".login-page").addClass("visible")}),$(".join-click").click(function(){$(".join-page").addClass("visible")}),$(".menu, .auth-page").find(".close-link").click(function(){var e=$(this).parents(".auth-page");e.find(".section-right").removeClass("fadeInRight").addClass("fadeOutRight"),e.find(".section-left").removeClass("fadeInLeft").addClass("fadeOutLeft"),setTimeout(function(){e.removeClass("visible"),e.find(".section-right").addClass("fadeInRight").removeClass("fadeOutRight"),e.find(".section-left").addClass("fadeInLeft").removeClass("fadeOutLeft")},1e3)}),e.init()}}}();e.exports=o},rSXE:function(e,t){},"sV/x":function(e,t,n){$(document).ready(function(){var e=n("04hq"),t=n("FbWP"),o=n("/LvN"),a=n("MgWb"),i=n("EmU5"),s=n("KoRp"),r=n("Rtx8");var c=function(e){return e.split("?")[0].split("#")[0]}(window.location.href.replace(/^(?:\/\/|[^\/]+)*\//,"")).toLowerCase();if(s.init(),r.init(),["en","de","es","fr","pt"].indexOf(c)>=0)return e.init(),!1;switch(c){case"":e.init();break;case"token-sale":t.init();break;case"my-account":o.init();break;case"password":case"login":case"sign-up":case"terms-and-conditions":case"privacy-policy":a.init();break;default:"reset-password/"===c.substr(0,15)?a.init():"verification/"===c.substr(0,13)&&(a.init(),i.init())}})},xZZD:function(e,t){},xz79:function(e,t){var n=function(){return{init:function(){$(".accept-field-link").click(function(){var e,t;switch($(this).attr("data-field-name")){case"terms_and_conditions":e=$("#termsModal"),t=$("#termsModalScroll"),e.modal("show"),t.off("click").click(function(){e.animate({scrollTop:e.find(".modal-dialog").height()},500)}),e.on("shown.bs.modal",function(){t.removeClass("hidden")}),e.on("hidden.bs.modal",function(){t.addClass("hidden")});break;case"privacy_policy":$("#privacyModal").modal("show")}})}}}();e.exports=n}});