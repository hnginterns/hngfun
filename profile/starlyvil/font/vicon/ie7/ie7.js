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
		el.innerHTML = '<span style="font-family: \'vicon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'vicon-hng-spinner2': '&#xe987;',
		'vicon-hng-spinner3': '&#xe988;',
		'vicon-hng-slack': '&#xe901;',
		'vicon-hng-compass': '&#xe955;',
		'vicon-hng-spinner': '&#xe986;',
		'vicon-hng-facebook': '&#xea9d;',
		'vicon-hng-whatsapp': '&#xea9f;',
		'vicon-hng-twitter': '&#xeaa2;',
		'vicon-hng-github': '&#xeabc;',
		'vicon-hng-google': '&#xea95;',
		'vicon-hng-facebook2': '&#xea9e;',
		'vicon-hng-telegram': '&#xeaa1;',
		'vicon-hng-phone': '&#xe94e;',
		'vicon-hng-location': '&#xe953;',
		'vicon-hng-mail-envelope-closed': '&#xe900;',
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
		c = c.match(/vicon-hng-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
