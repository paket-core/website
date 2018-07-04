/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-chevron-down': '&#xe90f;',
		'icon-arrow_back': '&#xe911;',
		'icon-social': '&#xe904;',
		'icon-arrow_left': '&#xe905;',
		'icon-arrow_right': '&#xe906;',
		'icon-download': '&#xe907;',
		'icon-close': '&#xe90c;',
		'icon-play': '&#xe90d;',
		'icon-arrow_down': '&#xe90e;',
		'icon-telegram': '&#xe908;',
		'icon-medium': '&#xe909;',
		'icon-linkedin': '&#xe901;',
		'icon-fb': '&#xe90a;',
		'icon-git': '&#xe902;',
		'icon-google': '&#xe900;',
		'icon-twitter': '&#xe90b;',
		'icon-whatsapp': '&#xe903;',
		'icon-reddit': '&#xeac6;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
