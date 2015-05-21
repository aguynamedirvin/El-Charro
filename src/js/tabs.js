/** Tabs **/
$(document).ready(function(){
	$('ul.tax-service-list li').click(function(){

		var tab_id = $(this).attr('data-tab');

		$('ul.tax-service-list li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})
});


/** Slider **/
$(document).ready(function(){
	$('.slide-container').slick({
		dots: false,
		infinite: true,
		autoplay: true,
		slidesToShow: 1,
  		autoplaySpeed: 2800,
  		adaptiveHeight: true,
  		arrows: true,
  		respondTo: window
	});
});