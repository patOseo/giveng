jQuery(function($){
	$('.image-slider').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  dots: false,
	  fade: true,
	  speed: 500,
	  autoplay: true,
	  cssEase: 'linear'
	});
});