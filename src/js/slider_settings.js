/** Slider **/
$(document).ready(function(){
	$('.slide-container').slick({
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2500,
		dots: true,
		infinite: true,
		lazyLoad: 'progressive',
		pauseOnHover: true,
		respondTo: window,
		slidesToShow: 1,
	});
});