/*global Modernizr, $ */

// /**
//  * Reponsive and gracefully degrading header video
//    More info on http://zerosixthree.se/create-a-responsive-header-video-with-graceful-degradation/
//  * -----------------------------------------------------------------------------
//  */
'use strict';

var HeaderVideo = function(settings) {
    if (settings.element.length === 0) {
        return;
    }
    this.init(settings);
};

HeaderVideo.prototype.init = function(settings) {
	var temp_this = this;
    this.$element = jQuery(settings.element);
    this.settings = settings;
    this.videoDetails = this.getVideoDetails();

    jQuery(this.settings.closeTrigger).hide();
    
    this.bindUIActions();

    if(this.videoDetails.teaser && Modernizr.video || (this.videoDetails.mobiteaser && Modernizr.touch)) {
        this.appendTeaserVideo();
    }
	if(!Modernizr.touch){
	    jQuery('#header-video__teaser-video').on('loadedmetadata', function() {
		    temp_this.setFluidContainer();
		    jQuery('#header-video__teaser-video').css('visibility','visible');
	    });
	}else{
	    jQuery('.header-image').on('load', function() {
		    temp_this.setFluidContainer();
		    jQuery('.header-image').css('visibility','visible');
	    });
	}
/*    
	var myVid = document.getElementById("header-video__teaser-video");
	myVid.onloadedmetadata = function() {
	    temp_this.setFluidContainer();
	    myVid.style.visibility = 'visible';
	};
*/    
};

HeaderVideo.prototype.bindUIActions = function() {
    var that = this;
    jQuery(this.settings.playTrigger).on('click', function(e) {
        e.preventDefault();
        that.appendIframe();
    });
    jQuery(this.settings.closeTrigger).on('click', function(e){
        e.preventDefault();
        that.removeIframe();
    });
};

HeaderVideo.prototype.appendIframe = function() {
    var html = '<iframe id="header-video__video-element" src="'+this.videoDetails.videoURL+'?rel=0&amp;hd=1&autohide=1&showinfo=0&autoplay=1&enablejsapi=1&origin=*" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
    jQuery(this.settings.playTrigger).fadeOut();
    jQuery(this.settings.closeTrigger).fadeIn();
    this.$element.append(html);
    jQuery('.header-video').css('z-index','10');
};

HeaderVideo.prototype.removeIframe = function() {
    jQuery(this.settings.playTrigger).fadeIn();
    jQuery(this.settings.closeTrigger).fadeOut();
    this.$element.find('#header-video__video-element').remove();
    jQuery('.header-video').css('z-index','-1');
};

HeaderVideo.prototype.appendTeaserVideo = function() {
	if(!Modernizr.touch) {
	    var source = this.videoDetails.teaser;
	    var html = '<video autoplay="true" muted id="header-video__teaser-video" class="header-video__teaser-video" style="visibility: hidden;"><source src="'+source+'.webm" type="video/mp4"><source src="'+source+'.mp4" type="video/mp4"></video>';
	    this.$element.append(html);
	} else {
	    var source = this.videoDetails.mobiteaser;
	    var html = '<img class="header-image" src="'+source+'" width="auto" height="100%" style="visibility: hidden;"></img>';
	    this.$element.append(html);
	}
};

HeaderVideo.prototype.setFluidContainer = function() {
    var element = this.$element;
    element.data('aspectRatio', this.videoDetails.videoHeight / this.videoDetails.videoWidth);

    jQuery(window).resize(function() {
        var windowWidth = jQuery(window).width();
        var windowHeight = jQuery(window).height();

        element.width(Math.ceil(windowWidth));
        element.height(Math.ceil(windowWidth * element.data('aspectRatio'))); //Set the videos aspect ratio, see https://css-tricks.com/fluid-width-youtube-videos/

        if(windowHeight < element.height()) {
            element.width(Math.ceil(windowWidth));
            element.height(Math.ceil(windowHeight));
    	}else{
    		windowHeight = windowWidth * element.data('aspectRatio');
    	}
				//check breakpoint when content
				//becomes top to bottom 
/*				
				if(jQuery(window).width()<=767){
					windowHeight	= jQuery('.header-video video').outerHeight();
				}else{
					windowHeight	= jQuery(window).height();
				}
*/
				windowHeight	= jQuery(window).height();
				windowWidth	= jQuery(window).width();
				//windowHeight	= jQuery(window).height();
				var winRatio	= windowHeight / windowWidth;
				if(!Modernizr.touch){
					var imgW	=  jQuery('.header-video').width();
					var imgH	=  jQuery('.header-video').height();
				}else{
					var imgW	=  jQuery('.header-image').width();
					var imgH	=  jQuery('.header-image').height();
				}
				var imgRatio	= imgH / imgW;
				var newH, newW;
				if(winRatio > imgRatio){
					newH	= windowHeight;
					newW	= windowHeight / imgRatio;
				}else{
					newH	= windowWidth * imgRatio;
					newW	= windowWidth;
				};
		element.width(Math.ceil(newW));
		element.height(Math.ceil(newH));
		if(!Modernizr.touch){
			jQuery(".play").css('top',newH /2-60 + 'px');
			jQuery(".showreel").css('top',newH /2-50 + 'px');
			jQuery(".play").css('left',jQuery(window).width() /2 + 'px');
		}else{
			jQuery(".play").css('top',newH /2-30 + 'px');
			jQuery(".showreel").css('top',newH /2-30 + 'px');
			jQuery(".play").css('left',jQuery(window).width() /2 - 10 + 'px');
		}
		jQuery(".showreel").css('left',jQuery(window).width() /2 - 8 + 'px');
		jQuery("#home").css('height',newH-135 + 'px');
    }).trigger('resize');
};

HeaderVideo.prototype.getVideoDetails = function() {
    var mediaElement = jQuery(this.settings.media);

    return {
        videoURL: mediaElement.attr('data-video-URL'),
        teaser: mediaElement.attr('data-teaser'),
        videoHeight: mediaElement.attr('data-video-height'),
        videoWidth: mediaElement.attr('data-video-width'),
        mobiteaser: mediaElement.attr('data-mobiteaser'),
    };
};
