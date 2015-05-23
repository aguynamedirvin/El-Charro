/** Slider **/
$(document).ready(function(){
	$('.slide-container').slick({
		dots: false,
		infinite: true,
		autoplay: true,
		slidesToShow: 1,
  		autoplaySpeed: 2800,
  		arrows: false,
  		respondTo: window
	});
});