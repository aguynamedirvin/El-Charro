/** Slider **/
$(document).ready(function(){
	$('.slide-container').slick({
		autoplay: true,
		dots: false,
		infinite: true,
		slidesToShow: 1,
  		arrows: false,
  		autoplaySpeed: 2500,
  		lazyLoad: 'progressive',
  		pauseOnHover: false,
  		respondTo: window,
	});
});