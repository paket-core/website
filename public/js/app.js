!function(e){var t={};function n(a){if(t[a])return t[a].exports;var o=t[a]={i:a,l:!1,exports:{}};return e[a].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,a){n.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:a})},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=0)}({"/LvN":function(e,t,n){var a=function(){var e=n("U7jh"),t=n("KoRp");return{init:function(){e.initHeader({margin:100});var n=window.location.hash;n&&$('ul.nav a[href="'+n+'"]').tab("show"),$(".nav-pills a").click(function(){$(this).tab("show");var e=$("body").scrollTop()||$("html").scrollTop();window.location.hash=this.hash,$("html,body").scrollTop(e)}),new Clipboard(".btn-copy").on("success",function(){t.success($("#copyText").val())})}}}();e.exports=a},0:function(e,t,n){n("sV/x"),n("xZZD"),e.exports=n("rSXE")},"04hq":function(e,t,n){var a=function(){var e,t,a=n("U7jh"),o=n("SYHt"),i=n("47h6"),s=n("Ym1x"),r=!1;function c(){var e=$(".road-map-carousel-1").owlCarousel({items:1});$(".owlRoadMapNextBtn").click(function(){e.trigger("next.owl.carousel")}),$(".owlRoadMapPrevBtn").click(function(){e.trigger("prev.owl.carousel",[300])});var t=$(".road-map-carousel-2").owlCarousel({items:4});$(".owlRoadMap2NextBtn").click(function(){t.trigger("next.owl.carousel")}),$(".owlRoadMap2PrevBtn").click(function(){t.trigger("prev.owl.carousel",[300])})}function l(){var e,n=$("#ecoGraph").find(".graph-item"),a=$("#ecoGraphDesc"),o=a.find("h2,p"),i=a.find("h2"),s=a.find("p"),r=2,c=300;function l(t,n,a){var r=parseInt(t.attr("data-start")),l=parseInt(r+n),u=r-l;u=u<0?-1*u:u;var d=parseInt(u/60);d=d<2?2:d,e={center:[c-90,c-90],radius:c,start:r,end:l,dir:r<l?1:-1},a&&function(e){i.html(e.find(".graph-title").html()),s.html(e.find(".graph-desc").html()),o.removeClass("fadeOut").addClass("fadeIn")}(t),t.animate({path:new $.path.arc(e)},500*d,function(){t.attr("data-start",l),a&&t.addClass("active")})}function u(e){o.removeClass("fadeIn").addClass("animated fadeOut"),setTimeout(function(){--r<0&&(r=5),n.removeClass("active"),n.each(function(t){l($(this),e,t===r)})},500)}n.each(function(e){$(this).attr("data-start",30+60*e),$(this).off("click").click(function(){clearInterval(t);var n=r-e;r=e+1,u(60*n)})}),u(60),clearInterval(t),t=setInterval(function(){u(60)},5e3)}return{init:function(){var n,u,d,f,p=767,h=1200,m=$(window),v=m.width();function g(){!function(e){e<p?n||(n=$(".project-items-carousel").owlCarousel({autoHeight:!0,autoplay:!0,smartSpeed:1e3,autoplayTimeout:15e3,loop:!0,items:1}),$(".owlProjectNextBtn").off("click").click(function(){n.trigger("next.owl.carousel")}),$(".owlProjectPrevBtn").off("click").click(function(){n.trigger("prev.owl.carousel",[300])})):n&&(n.owlCarousel("destroy"),n=null)}(v),function(e){e<h?d||($(".graph-item").removeAttr("style"),d=$(".eco-carousel").owlCarousel({autoplay:!0,smartSpeed:1e3,autoplayTimeout:15e3,loop:!0,stagePadding:30,items:1}),$(".owlEcosystemNextBtn").off("click").click(function(){d.trigger("next.owl.carousel")}),$(".owlEcosystemPrevBtn").off("click").click(function(){d.trigger("prev.owl.carousel",[300])}),r=!1,clearInterval(t)):(d&&(d.owlCarousel("destroy"),d=null),r||(r=!0,l()))}(v),function(e){e<=p?(u=$(".team-carousel").owlCarousel({autoplay:!0,smartSpeed:1e3,autoplayTimeout:1e4,loop:!0,stagePadding:0,autoHeight:!0,items:1}),$(".owlTeamNextBtn").off("click").click(function(){u.trigger("next.owl.carousel")}),$(".owlTeamPrevBtn").off("click").click(function(){u.trigger("prev.owl.carousel",[300])})):u&&(u.owlCarousel("destroy"),u=null)}(v),function(e){e<=p?f=$(".media-carousel").owlCarousel({autoplay:!0,smartSpeed:1e3,autoplayTimeout:3e3,loop:!0,stagePadding:0,autoHeight:!0,items:1}):f&&(f.owlCarousel("destroy"),f=null)}(v)}a.init({bars:!0}),o.init(),i.init(),s.init(),m.resize(function(){v=$(this).width(),g()}),c(),function(){$("#viewMoreCompanies").off("click").click(function(){$(".company-row.additional").removeClass("additional")}),e&&e.owlCarousel("destroy");var t=$(window).width(),n=3;t<500?n=1:t<600&&(n=2),$(".owl-carousel-companies-mobile").owlCarousel({items:n,autoplay:!0,smartSpeed:1e3,autoplayTimeout:3e3,dots:!1})}(),g()},initTokenSale:function(){c(),o.init()}}}();e.exports=a},"47h6":function(e,t){var n=function(){return{init:function(){var e;function t(t){if(e)t&&e.playVideo();else{var n=function(){t&&e.playVideo()},a=document.createElement("script");a.src="https://www.youtube.com/iframe_api";var o=document.getElementsByTagName("script")[0];o.parentNode.insertBefore(a,o);var i=$("#playVideoButton").attr("data-video-src");window.onYouTubeIframeAPIReady=function(){e=new YT.Player("player",{width:"100%",height:"100%",playerVars:{modestbranding:1,rel:0,showinfo:0,controls:1,html5:1},events:{onReady:n},videoId:i})}}}$(".play-button").click(function(){$(".video-link").addClass("video-animated"),setTimeout(function(){!function(){function n(){e&&e.stopVideo()}$("#videoModal").modal("show").on("hidden.bs.modal",function(){n()}).on("shown.bs.modal",function(){$(".video-link").removeClass("video-animated")}).find("button.close").off("click").click(function(){n()}),e?e.playVideo():t(!0)}()},700)}),setTimeout(function(){t()},1e3)}}}();e.exports=n},"8spD":function(e,t,n){var a=function(){var e,t,a,o,i,s,r=[],c=n("U7jh"),l=n("IK4z"),u=["users","paths","packages"];function d(e,t){return e.reduce(function(e,n){return(e[n[t]]=e[n[t]]||[]).push(n),e},{})}function f(e,t){return e.sort(function(e,n){var a=e[t],o=n[t];return a<o?-1:a>o?1:0})}function p(e){r.push(L.icon({iconUrl:"/images/map/user_"+e+".png",iconSize:[39,54],shadowUrl:"/plugins/leaflet/images/marker-shadow.png",shadowSize:[38,35],shadowAnchor:[22,30]}))}return{init:function(){c.init(),e=L.map("mapId").setView([51.505,-.09],8),L.tileLayer("https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoia29ucmFkLWNyYWNzb2Z0IiwiYSI6ImNqa2w2MDA5aTFybnMzcG9nMXdhNTlmOWsifQ.zA5TCRI7TFVWWJyJpnQxYg",{attribution:'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',maxZoom:19,id:"mapbox.streets",accessToken:"your.mapbox.access.token"}).addTo(e),t=L.icon({iconUrl:"/images/map/marker_package.png",iconSize:[40,55],iconAnchor:[20,55],shadowUrl:"/plugins/leaflet/images/marker-shadow.png",shadowSize:[38,35],shadowAnchor:[14,35]}),p(1),p(2),p(3),$(".filter-btn").click(function(){var t=$(this).attr("data-filter"),n=function(e){switch(e){case"users":return o;case"packages":return s;case"paths":return i}}(t),a=u.indexOf(t);$(this).toggleClass("selected"),a>=0?(u.splice(a,1),e.hasLayer(n)&&e.removeLayer(n)):(u.push(t),e.hasLayer(n)||e.addLayer(n))}),l.sendGet("/map-markers",{},function(n){"success"===n.status&&(a=n.data.events,function(){i=L.layerGroup(),o=L.layerGroup(),s=L.layerGroup();var n,c,l,u,p,h=0,m=d(a.user_events,"user_pubkey");for(n in m)m.hasOwnProperty(n)&&(c=m[n],l=f(c,"timestamp"),p=l.slice(-1)[0],u=p.location.split(","),L.marker(u,{icon:r[++h%r.length]}).addTo(o));var v=d(a.packages_events,"escrow_pubkey");for(n in v)v.hasOwnProperty(n)&&(c=v[n],l=f(c,"timestamp"),u=[],l.forEach(function(e){u.push(e.location.split(","))}),antPolyline=L.polyline.antPath(u,{delay:1200,dashArray:[10,20],weight:5,color:"#2ac4ff",pulseColor:"#FFFFFF",paused:!1,reverse:!1}),antPolyline.addTo(i),p=l.slice(-1)[0],u=p.location.split(","),L.marker(u,{icon:t}).addTo(s));i.addTo(e),o.addTo(e),s.addTo(e)}())})}}}();e.exports=a},EmU5:function(e,t){var n=function(){return{init:function(){window.verification_callback=function(){$("#successMessage").removeClass("hidden"),$(".verification-form-wrapper").addClass("hidden")}}}}();e.exports=n},FbWP:function(e,t,n){var a=function(){var e=n("04hq");return{init:function(){e.initTokenSale()}}}();e.exports=a},IK4z:function(e,t,n){var a=function(){var e=n("KoRp");function t(t,n,a,o){$.ajax({url:n,data:a,type:t,success:function(t){t.message&&("success"===t.status?e.success(t.message):"error"===t.status&&e.error(t.message)),void 0!==o&&o(t)},error:function(t){0===t.status&&e.error("Sorry. Something went wrong.")}})}return{clearForm:function(e){e.find("input[type!=radio], select, textarea").each(function(){this.value=null;var e=$(this);e.hasClass("select2me")&&e.trigger("change")})},debounce:function(e,t){var n=null;return function(){var a=this,o=arguments;clearTimeout(n),n=setTimeout(function(){e.apply(a,o)},t)}},extendValidator:function(){jQuery.validator.addMethod("ethereum_address",function(e,t){return this.optional(t)||/^0x[a-fA-F0-9]{40}$/.test(e)},"Please enter a valid ethereum address."),jQuery.validator.addMethod("year18",function(e,t){return this.optional(t)||moment().diff(moment(e,"MM/DD/YYYY"),"years")>=18},"You must be 18 years or older")},fixAuth:function(){$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}})},getData:function(e,t){return e.find("input[type!=checkbox], select, textarea").each(function(){t[this.name]=this.value}),e.find("input[type=checkbox]").each(function(){t[this.name]=!!this.checked}),e.find("input[type=radio]:checked").each(function(){t[this.name]=this.value}),t},loadData:function(e,t){e.find("input[type!=password][type!=radio], select, textarea").each(function(){void 0!==t[this.name]&&("checkbox"===this.type?this.checked="true"===t[this.name]||!0===t[this.name]:this.value=t[this.name])})},makeId:function(e){for(var t="",n="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",a=0;a<e;a++)t+=n.charAt(Math.floor(Math.random()*n.length));return t},sendFile:function(t,n,a,o){var i=new FormData;i.append(n&&n.customName?n.customName:"identification",t),Object.keys(n).forEach(function(e){i.append(e,n[e])}),function(t,n,a){$.ajax({url:t,data:n,type:"POST",success:function(e){void 0!==a&&a(e)},error:function(t){var n=t.responseText;("string"==typeof n||n instanceof String)&&(n=JSON.parse(n)),n=n.message?n.message:"Wrong data",e.error(n)},contentType:!1,processData:!1,cache:!1})}(a,i,o)},sendGet:function(e,n,a){t("GET",e,n,a)},sendPost:function(e,n,a){t("POST",e,n,a)},throttle:function(e,t,n){var a,o;return t||(t=250),function(){var i=n||this,s=+new Date,r=arguments;a&&s<a+t?(clearTimeout(o),o=setTimeout(function(){a=s,e.apply(i,r)},t)):(a=s,e.apply(i,r))}}}}();e.exports=a},KoRp:function(e,t){var n=function(){return{error:function(e){toastr.error(e)},init:function(){"undefined"!=typeof toastr&&(toastr.options.closeMethod="fadeOut",toastr.options.closeDuration=300,toastr.options.closeEasing="swing",toastr.options.timeOut=3e3,toastr.options.closeButton=!0)},success:function(e){toastr.success(e)},warning:function(e){toastr.warning(e)}}}();e.exports=n},MgWb:function(e,t,n){var a=function(){var e=n("U7jh"),t=n("xz79");return{init:function(){e.initMenu(),t.init()}}}();e.exports=a},Rtx8:function(e,t,n){var a=function(){n("IK4z");function e(){$("body").css("overflow","auto")}function t(e,t){window.location.href=t.replace("{LANG}",e)}return $(".navbar-toggle").click(function(){$(this).hasClass("collapsed")?$("body").css("overflow","hidden"):e()}),{init:function(){var n,a;n=$(".language-select-wrapper"),a=n.find("li"),n.click(function(){$(this).toggleClass("open")}),a.click(function(){a.removeClass("active");var e=$(this).toggleClass("active").attr("data-lang");setTimeout(function(){var a=n.attr("data-url");t(e,a)})}),$(".preload-lang-images").each(function(){var e=new Image,t=$(this).attr("data-lang");e.src="/images/flags_s/"+t+".png?sf32fl"}),$(".navbar-nav li a").click(function(){$(".navbar-collapse").hasClass("collapse")&&$(".navbar-toggle").click(),e()})}}}();e.exports=a},SYHt:function(e,t){var n=function(){var e=(new Date).getMonth();e>=11&&(e=0);var t=Date.UTC(2018,e+1,25,0,0,0);return{init:function(e){var n;e=e||t,(n=jQuery).fn.countdown=function(e){function t(){a=s.date/1e3,o=Math.floor((new Date).getTime()/1e3),a<=o?(clearInterval(interval),days=0,hours=0,minutes=0,seconds=0):(seconds=a-o,days=Math.floor(seconds/86400),seconds-=60*days*60*24,hours=Math.floor(seconds/3600),seconds-=60*hours*60,minutes=Math.floor(seconds/60),seconds-=60*minutes),"on"===s.format&&(days=String(days).length>=2?days:"0"+days,hours=String(hours).length>=2?hours:"0"+hours,minutes=String(minutes).length>=2?minutes:"0"+minutes,seconds=String(seconds).length>=2?seconds:"0"+seconds),isNaN(a)?(errorMessage="Invalid date",console.log(errorMessage),clearInterval(interval)):(i.find(".days").text(days),i.find(".hours").text(hours),i.find(".minutes").text(minutes),i.find(".seconds").text(seconds))}var i=n(this),s={date:null,format:null};e&&n.extend(s,e),interval=setInterval(t,1e3),t()};var a=e/1e3,o=Math.floor((new Date).getTime()/1e3),i=$("#counterTopText");a<=o&&(i.html("Public presale starts in"),e=Date.UTC(2017,10,24,2,0,0)),(a=e/1e3)<=o&&(i.html("Public presale ends in"),e=Date.UTC(2018,0,1,0,0,0)),(a=e/1e3)<=o&&(i.html("Public sale starts in"),e=Date.UTC(2018,0,14,2,0,0)),i.removeClass("hidden"),$(".countdown").countdown({date:e,format:"on"})}}}();e.exports=n},U7jh:function(e,t){var n=function(){function e(e){var n,a,o=$(window),i=$(".header"),s=$(".revealOnScroll"),r=e.smooth,c=e.margin;function l(){var t=o.scrollTop(),a=o.height(),s=$("#presale").height();t>s?i.addClass("filled"):i.removeClass("filled header-blue header-white"),$(".changeHeaderOnScroll").each(function(){var e=$(this),n=e.data("header-color");if(!i.hasClass("header-"+n)){var a=e.offset().top,o=e.height();t>a&&t<=a+o&&i.removeClass("header-blue header-white").addClass("header-"+n)}}),e.bars&&$(".barsOnScroll").each(function(){var e=$(this),o=parseInt(e.data("bar-id")),i=e.offset().top,s=e.height();t+a/3>i&&t+a/3<=i+s&&(n.eq(o).hasClass("active")||(n.removeClass("active"),n.eq(o).addClass("active")))}),$(".revealOnScroll.animated").each(function(){var e=$(this),n=e.offset().top,o=e.data("animation");e.hasClass(o)||e.addClass(o),t+a+500<n&&$(this).removeClass("animated "+o)}),$(".revealOnScroll:not(.animated)").each(function(){var e=$(this),n=e.offset().top;t+a-c>n&&(e.data("timeout")?window.setTimeout(function(){e.css("opacity",1).addClass("animated "+e.data("animation"))},parseInt(e.data("timeout"),10)):e.css("opacity",1).addClass("animated "+e.data("animation")))})}c=void 0!==c?c:120,e.bars&&(n=$("#menuBars").find(".bar")),o.height()<800&&(c/=2),r&&new SmoothScroll('a[href*="#"]',{offset:80}),s.css("opacity",0),setTimeout(function(){l(),o.on("scroll",l)},1200),l(),a=$("header .social-wrapper"),$("#socialButton").click(function(e){e.stopPropagation(),a.addClass("active")}),$(window).click(function(){a.hasClass("active")&&a.removeClass("active")}),t()}function t(){$(".menu-open").click(function(){$(".menu").removeClass("hidden"),setTimeout(function(){$(".menu-close").removeClass("hidden")},1e3)}),$(".menu a").click(function(){$(".menu-close").trigger("click")}),$(".menu-close").click(function(){var e=$(this).parents(".menu");$(this).addClass("hidden"),e.find(".section-right").removeClass("fadeInRight").addClass("fadeOutRight"),e.find(".section-left").removeClass("fadeInLeft").addClass("fadeOutLeft"),setTimeout(function(){e.addClass("hidden"),e.find(".section-right").addClass("fadeInRight").removeClass("fadeOutRight"),e.find(".section-left").addClass("fadeInLeft").removeClass("fadeOutLeft")},1e3)})}return{init:function(t){e({margin:(t=t||{}).margin,bars:t.bars,smooth:!0})},initHeader:function(t){e({margin:(t=t||{}).margin,smooth:!1})},initMenu:t}}();e.exports=n},Ym1x:function(e,t,n){var a=function(){var e=n("xz79");return{init:function(){$(".login-click").click(function(){$(".login-page").addClass("visible")}),$(".join-click").click(function(){$(".join-page").addClass("visible")}),$(".menu, .auth-page").find(".close-link").click(function(){var e=$(this).parents(".auth-page");e.find(".section-right").removeClass("fadeInRight").addClass("fadeOutRight"),e.find(".section-left").removeClass("fadeInLeft").addClass("fadeOutLeft"),setTimeout(function(){e.removeClass("visible"),e.find(".section-right").addClass("fadeInRight").removeClass("fadeOutRight"),e.find(".section-left").addClass("fadeInLeft").removeClass("fadeOutLeft")},1e3)}),e.init()}}}();e.exports=a},rSXE:function(e,t){},"sV/x":function(e,t,n){$(document).ready(function(){function e(){if("local"!==$("#appEnv").attr("data-env")){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="https://cdnjs.cloudflare.com/ajax/libs/countly-sdk-web/18.1.0/countly.min.js",e.onload=function(){var e=window.Countly||{};e.q=e.q||[],e.app_key="b442c665697cc1996665ebeee2a35e649c156ec3",e.url="https://c.paket.global/",e.q.push(["track_sessions"]),e.q.push(["track_pageview"]),e.q.push(["track_clicks"]),e.q.push(["track_scrolls"]),e.q.push(["track_errors"]),e.q.push(["track_links"]),e.q.push(["track_forms"]),e.q.push(["collect_from_forms"]),e.init()};var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)}WebFont.load({google:{families:["Open Sans:regular:cyrillic","Roboto"]},custom:{families:["Proxima Nova","icomoon"],urls:[$("#fontPath").attr("data-font-path")]},fontloading:function(e,t){"icomoon"===e&&$(".fa-svg").addClass("visible")}});var a=n("04hq"),o=n("FbWP"),i=n("scoL"),s=n("8spD"),r=n("/LvN"),c=n("MgWb"),l=n("EmU5"),u=n("KoRp"),d=n("Rtx8");var f=function(e){return e.split("?")[0].split("#")[0]}(window.location.href.replace(/^(?:\/\/|[^\/]+)*\//,"")).toLowerCase();switch(u.init(),d.init(),f){case"":a.init();break;case"token-sale":o.init();break;case"developers":i.init();break;case"map":s.init();break;case"my-account":r.init();break;case"password":case"login":case"sign-up":case"terms-and-conditions":case"privacy-policy":c.init();break;default:if(/^[a-zA-Z]{2}\/token-sale$/.test(f))o.init();else if(/^[a-zA-Z]{2}\/developers$/.test(f))i.init();else if(/^[a-zA-Z]{2}\/map$/.test(f))s.init();else if("reset-password/"===f.substr(0,15))c.init();else if("verification/"===f.substr(0,13))c.init(),l.init();else if(["en","cn","ko","pl","ru"].indexOf(f)>=0)return a.init(),!1}}"undefined"==typeof Raven?e():(Raven.config("https://6dfaa9dccdcb4a5783c91b96f79818e7@sentry.io/1219139").install(),Raven.context(function(){e()}))})},scoL:function(e,t,n){var a=function(){var e=n("U7jh");return{init:function(){e.init()}}}();e.exports=a},xZZD:function(e,t){},xz79:function(e,t){var n=function(){return{init:function(){$(".accept-field-link").click(function(){var e,t;switch($(this).attr("data-field-name")){case"terms_and_conditions":e=$("#termsModal"),t=$("#termsModalScroll"),e.modal("show"),t.off("click").click(function(){e.animate({scrollTop:e.find(".modal-dialog").height()},500)}),e.on("shown.bs.modal",function(){t.removeClass("hidden")}),e.on("hidden.bs.modal",function(){t.addClass("hidden")});break;case"privacy_policy":$("#privacyModal").modal("show")}})}}}();e.exports=n}});