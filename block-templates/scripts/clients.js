jQuery(function($){

	$('.client-slider').slick({
	  infinite: true,
	  slidesToShow: 6,
	  slidesToScroll: 1,
	  dots: false,
	  responsive: [
   		{
   		  breakpoint: 600,
   		  settings: {
   		    slidesToShow: 3,
   		    slidesToScroll: 1
   		  }
   		}
  	]
	});

});