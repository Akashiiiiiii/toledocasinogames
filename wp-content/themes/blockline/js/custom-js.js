
$(document).ready(function(){ 
	console.log('Document Ready');

	// Initialize simple slick slider
	


  $('.simple-slick-slider').slick({
   
	infinite: true,
	speed: 300,
	slidesToShow: 4,
	slidesToScroll: 4,
	responsive: [
	  {
		breakpoint: 1024,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  infinite: true,
		  dots: true
		}
	  },
	  {
		breakpoint: 600,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1
		}
	  },
	  {
		breakpoint: 480,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1
		}
	  }
	  // You can unslick at a given breakpoint now by adding:
	  // settings: "unslick"
	  // instead of a settings object
	]
  });

  
  // Initialize post slick carousel slider
  $('.post-slick-carousel-slider').slick({
  	slidesToShow: 5,
		responsive: [
		  {
		    breakpoint: 768,
		    settings: {
		      slidesToShow: 1
		    }
		  }
		]  	
  });	 $('s')
});