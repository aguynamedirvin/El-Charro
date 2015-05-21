/**

	This script makes a navigation menu with the dropdown 'hamburger'

**/

(function($) {

	$.fn.dropMenu = function(options) {
			
			// Options
			var cssmenu = $(this), settings = $.extend({
				title: "Menu",
				format: "dropdown",
				sticky: false
			}, options);

			return this.each(function() {
				cssmenu.prepend('<div id="menu-hamburger">' + settings.title + '</div>');
				$(this).find("#menu-hamburger").on('click', function(){


					$(this).toggleClass('menu-opened');

					// Define the menu
					var mainmenu = $('.navigation');


					if (mainmenu.hasClass('open')) { 
						//mainmenu.hide().removeClass('open');
						mainmenu.slideToggle().removeClass('open');
					}
					else {
						//mainmenu.show().addClass('open');
						mainmenu.slideToggle().addClass('open');
						if (settings.format === "dropdown") {
							mainmenu.find('ul').show();

						}
					}   
				});

				if (settings.sticky === true) cssmenu.css('position', 'fixed');


				resizeFix = function() {
					var breakpoint = 868;
					
					if ($( window ).width() > breakpoint) {
						cssmenu.find('ul').show();
					}

					if ($(window).width() <= breakpoint) {
						cssmenu.find('ul').hide().removeClass('open');
					}
				};
				resizeFix();
				return $(window).on('resize', resizeFix);

			});
	};
})(jQuery);


(function($){
	$(document).ready(function(){

		$(".site-navigation").dropMenu({
			title: "Menu",
			format: "multitoggle",
		});

	});
})(jQuery);