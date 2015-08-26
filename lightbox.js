// Add this to your javascript scripts file, be sure to place this within ready() and enqueue jQuery.

jQuery('.sc-lightbox-button a').click(function(e){
 
	e.preventDefault();
 
	var lightboxButton = jQuery(this);
 
	currentLightbox = lightboxButton.parent('.sc-lightbox-button').next('.sc-lightbox');
 
	currentLightbox.fadeIn();
 
});
 
jQuery('.sc-close-lightbox').click(function(e){
 
	jQuery('.sc-lightbox').fadeOut();
 
});