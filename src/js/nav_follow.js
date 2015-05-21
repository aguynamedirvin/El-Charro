/** 

	This script allows the header to follow
	as you scroll down/up the page

**/
$(function() {
	// Stick the #header to the top of the window
	var header = $('#header');
	var headerHomeY = header.offset().top;
	var isFixed = false;
	var $w = $(window);
	$w.scroll(function() {
		var scrollTop = $w.scrollTop();
		var shouldBeFixed = scrollTop > headerHomeY;
		if (shouldBeFixed && !isFixed) {
			header.css({
				position: 'fixed',
				top: 0,
				left: header.offset().left,
				
				//width: header.width()
			});
			isFixed = true;
		}
		else if (!shouldBeFixed && isFixed)
		{
			header.css({
				position: 'absolute',
				top: '40px' // Height of top-bar
			});
			isFixed = false;
		}
	});
});