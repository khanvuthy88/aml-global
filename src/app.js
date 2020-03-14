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
	screenHeight: $(window).height()
}

if(plugins.singlePageThumb.length){
	if(device.mobile() === false){
		plugins.singlePageThumb.css({'height':plugins.screenHeight + 'px', 'object-fit':'cover', 'width':'100%'});
	}
}
if(device.mobile()){
	plugins.customLogoImage.css({'width': 'auto'});
}
