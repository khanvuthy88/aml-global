window._ = require('lodash');
window.Popper = require('popper.js').default;
try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}

import device from "current-device";

var plugins = {
	customLogoImage : $('img.custom-logo'),
	customFeatureImage : $('div.custom_feature_image_style'),
	singlePageThumb: $('div.custom_feature_image_style .post-thumbnail img'),
	navResponsive: $('#navbarCollapse'),
	navResponsiveLi: $('#navbarCollapse ul li'),
	navResponsiveAlink: $('#navbarCollapse ul li a'),
	hasScopeOfSupply: $('ul#scope-of-supply'),
	hasGlobalPartners: $('ul#sidebar-global-partners'),
	screenHeight: $(window).height()
}

if(plugins.singlePageThumb.length){
	if(device.mobile() === false){
		plugins.singlePageThumb.css({'height':plugins.screenHeight + 'px', 'object-fit':'cover', 'width':'100%'});
	}
}
if(device.mobile()){
	plugins.customLogoImage.css({'width': 'auto'});
	plugins.navResponsive.css({
		'margin-right': '-15px',
        'margin-left': '-15px',
        'background-color': '#1579bd'
	});
	plugins.navResponsiveLi.css({
		'border-bottom': '1px solid #fff'
	});
	plugins.navResponsiveAlink.css({
		'color': '#fff',
		'padding': '7px 15px'
	});
}
if(plugins.hasScopeOfSupply.length){
	plugins.hasScopeOfSupply.css({
		'padding': '0px',
		'margin': '0px'
	});
}
if(plugins.hasGlobalPartners.length){
	plugins.hasGlobalPartners.css({
		'padding': '0px',
		'margin': '0px',
		'maring-top': '30px'
	});
}
