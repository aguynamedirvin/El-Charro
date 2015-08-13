<?php

include_once  'includes/common.php';

/**
 * This script obfuscates an email adress to protect
 * it from spam bots.
 * 
 * @param 	mixed - Email adress
 */
function emailencode($emailaddress){
	
	$email = $emailaddress;                
	$length = strlen($email);    
	$obfuscatedEmail = ''; 
	
	for ($i = 0; $i < $length; $i++){                
		$obfuscatedEmail .= "&#" . ord($email[$i]) . ";";
	}

	return $obfuscatedEmail;
}

$lan = 'en';

if ($_SESSION['lang'] == 'es') {
	$lan = 'es';
} else {
	$lan = 'en';
}

?>
<!doctype html>
<html class="no-js" lang="<?php echo $lan ?>">
	<head>
		
		<!-- Force IE to use the latest rendering engine -->
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<meta charset="utf-8">

		<title>El Charro - Income Tax Services</title>

		<meta name="description" content="">
		<meta name="keywords" content="" />
		<meta name="author" content="">

		<!-- Mobile specific metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="build/css/normalize.css">
		<link rel="stylesheet" href="build/css/main.css">

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,600|Open+Sans:400,300">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		
		<!--[if lte IE 8]>
		<script src="build/js/svg4everybody.ie.min.js"></script>
		<![endif]-->
		
		<!-- Modernizer -->
		<script src="build/js/vendor/modernizr.min.js"></script>
		<script>
			Modernizr.load([
				{
					// If Media Queries not supported
					test: Modernizr.mq('only all'),
					nope: 'build/js/respond.min.js'
				},
				{
					// If SVGs not supported
					test: Modernizr.svg,
					nope: ['build/js/svg4everybody.min.js', 'build/js/svg4everybody.ie.min.js']
				},
			]);
		</script>

	</head>
	<body>

		<!--[if lt IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->


		<!-- Info Bar -->
		<div id="top-bar">
			<div class="wrap">
				<div class="alignleft">
					<span class="phone"><i class="fa fa-phone"></i> <span class="hide-md"><?php echo $menu['call_us']; ?>: </span><a href="tel: 9154878699">(915) 487 - 8699</a></span>
					<span class="email hide-sm"><i class="fa fa-envelope"></i> <a href="mailto: contact@elcharro.com">contact@elcharro.com</a></span>
				</div>
				<div class="alignright">
					<span><i class="fa fa-globe"></i></span>
					<span class="language<?php if ($lan == 'en') echo ' selected' ?>"><a href="index.php?lang=en">English</a></span>
					<span class="language<?php if ($lan == 'es') echo ' selected' ?>"><a href="index.php?lang=es">Español</a></span>
				</div>
			</div>
		</div>


		<!-- Header -->
		<div id="header">
			<div class="wrap">
				
				<!-- Logo -->
				<a href="index.php" class="logo alignleft"></a>
				
				<!-- Main navigation menu -->
				<nav class="site-navigation alignright" role="navigation">
					<ul class="navigation">
						<li><a href="#why-us"><?php echo $menu['MENU_WHY_US']; ?></a></li>
						<li><a href="#services"><?php echo $menu['MENU_SERVICES']; ?></a></li>
						<li><a href="#contact"><?php echo $menu['MENU_CONTACT']; ?></a></li>
						<li><a href="#money-transfers"><?php echo $menu['MENU_MONEY_TRANSFERS']; ?></a>
						<li><a href="#tax-services"><?php echo $menu['MENU_TAX_SERVICES']; ?></a></li>
						<li><a href="#visit"><?php echo $menu['MENU_VISIT']; ?></a></li>
					</ul>
				</nav>

			</div>
		</div>


		<!-- Slider -->
		<div id="main-slider">
			<div class="slide-container">
				
				<div class="slide" style="background-image: url(build/img/obama.png);">
					<div class="slide-content wrap">
						<div class="slide-meta">
							<h2 class="title"><?php echo $slide['1']['title']; ?></h2>
							<p class="summary"><?php echo $slide['1']['summary']; ?></p>
							<a href="#contact" class="button green"><?php echo $slide['1']['button']; ?></a>
							<a class="img-credit" href="https://www.flickr.com/photos/jurvetson/2422297334/in/photostream/">"Open Source Politics" by Steve Juvertson is licensed under CC by 2.0</a>
						</div>
					</div>
				</div>

				<div class="slide" style="background-image: url(build/img/1040_form.png);">
					<div class="slide-content wrap">
						<div class="slide-meta">
							<h2 class="title"><?php echo $slide['2']['title']; ?></h2>
							<a href="#contact" class="button green"><?php echo $slide['2']['button']; ?></a>
							<a class="img-credit" href="http://www.stockmonkeys.com">"Personal Income Taxes Ver8" by StockMonkeys.com is licensed under CC by 2.0</a>
						</div>
					</div>
				</div>

				<div class="slide" style="background-image: url(build/img/sigue_slide.png); background-color: #ffe512">
					<div class="slide-content wrap">
						<div class="slide-meta">
							<h2 class="title"><?php echo $slide['3']['title']; ?></h2>
							<p class="summary"><?php echo $slide['3']['summary']; ?></p>
							<a href="#money-transfers" class="button green">Learn More</a>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Featured Boxes -->
		<div id="featured_boxes">
			<div class="featured_boxes_wrap">
				<div class="featured_box">

					
					<div class="icon-container">
						<svg class="icon" role="image" title="<?php echo $futured_box['1']['title']; ?>">
							<use xlink:href="build/img/svg-sprite.svg#icon-thumbs"></use>
						</svg>
					</div>
					<h2 class="title"><?php echo $futured_box['1']['title']; ?></h2>
					<div class="desc">
						<p><?php echo $futured_box['1']['summary']; ?></p>
					</div>
				</div>
				<div class="featured_box">

					<div class="icon-container">
						<svg class="icon" role="img" title="<?php echo $futured_box['2']['title']; ?>">
							<use xlink:href="build/img/svg-sprite.svg#icon-clock"></use>
						</svg>
					</div>

					<h2 class="title"><?php echo $futured_box['2']['title']; ?></h2>
					<div class="desc">
						<p><?php echo $futured_box['2']['summary']; ?></p>
					</div>
				</div>
				<div class="featured_box">

					<div class="icon-container">
						<svg class="icon" role="image" title="<?php echo $futured_box['3']['title']; ?>">
							<use xlink:href="build/img/svg-sprite.svg#icon-piggy_bank"></use>
						</svg>
					</div>
					<h2 class="title"><?php echo $futured_box['3']['title']; ?></h2>
					<div class="desc">
						<p><?php echo $futured_box['3']['summary']; ?></p>
					</div>
				</div>
			</div>
		</div>

		<!-- Why choose us -->
		<section id="why-us" class="section">
			<div class="wrap">
				<div class="section_meta">
					<h2><?php echo $section['WHY_US'][0] ?></h2>
					<p><?php echo $section['WHY_US'][1] ?></p>
				</div>

				<ul class="section_wrap">
					<li class="section_item">
						<svg class="icon" role="image">
							<use xlink:href="build/img/svg-sprite.svg#icon-professionals"></use>
						</svg>
						<h3 class="title"><?php echo $why_us[1] ?></h3>
					</li>
					<li class="section_item">
						<svg class="icon" role="image">
							<use xlink:href="build/img/svg-sprite.svg#icon-piggy_bank"></use>
						</svg>
						<h3 class="title"><?php echo $why_us[2] ?></h3>
					</li>
					<li class="section_item">
						<svg class="icon" role="image">
							<use xlink:href="build/img/svg-sprite.svg#icon-calculator"></use>
						</svg>
						<h3 class="title"><?php echo $why_us[3] ?></h3>
					</li>
				</ul>
			</div>
		</section>

		<!-- Our services -->
		<section id="services" class="section">
			<div class="wrap">
				
				<div class="section_meta">
					<h2><?php echo $section['SERVICES'][0] ?></h2>
				</div>
				
				<ul>
					<li class="section_item">
						<svg class="icon" role="image" title="<?php echo $service['translations'][0] ?>">
							<use xlink:href="build/img/svg-sprite.svg#icon-translate"></use>
						</svg>
						<h3 class="title"><?php echo $service['translations'][0] ?></h3>
						<p><?php echo $service['translations'][1] ?></p>
					</li>
					<li class="section_item">
						<svg class="icon" role="image" title="<?php echo $service['accounting'][0] ?>">
							<use xlink:href="build/img/svg-sprite.svg#icon-calculator"></use>
						</svg>
						<h3 class="title"><?php echo $service['accounting'][0] ?></h3>
						<p><?php echo $service['accounting'][1] ?></p>
					</li>
					<li class="section_item">
						<svg class="icon" role="image" title="<?php echo $service['taxes'][0]; ?>">
							<use xlink:href="build/img/svg-sprite.svg#icon-taxes"></use>
						</svg>
						<h3 class="title"><?php echo $service['taxes'][0]; ?></h3>
						<p><?php echo $service['taxes'][1]; ?></p>
					</li>
					<li class="section_item">
						<svg class="icon" role="image" title="<?php echo $service['money_transfer'][0]; ?>">
							<use xlink:href="build/img/svg-sprite.svg#icon-money_transfer"></use>
						</svg>
						<h3 class="title"><?php echo $service['money_transfer'][0]; ?></h3>
						<p><?php echo $service['money_transfer'][1]; ?></p>
					</li>
					<li class="section_item">
						<svg class="icon" role="image" title="<?php echo $service['state_tax_reporting'][0]; ?>">
							<use xlink:href="build/img/svg-sprite.svg#icon-texas"></use>
						</svg>
						<h3 class="title"><?php echo $service['state_tax_reporting'][0]; ?></h3>
						<p><?php echo $service['state_tax_reporting'][1]; ?></p>
					</li>
				</ul>
			</div>
		</section>

		<!-- Money Transfers -->
		<section id="money-transfers" class="section">
			<div class="wrap">
				<div class="section_meta">
					<img src="build/img/sigue_logo_white.png" alt="Sigue Money Transfers" width="350px">
					<h2><?php echo $section['MONEY_TRANSFERS'][0] ?></h2>
					<p><?php echo $section['MONEY_TRANSFERS'][1] ?></p>
				</div>

			</div>
		</section>

		<!-- Get in touch -->
		<section id="contact" class="section">
			<div class="wrap">
				<div class="section_meta">
					<h2><?php echo $section['CONTACT'][0]; ?></h2>
					<p><?php echo $section['CONTACT'][1]; ?></p>
				</div>

				<div id="success">
					<p><?php echo $alerts['success']; ?></p>
				</div>
				<div id="error">
					<p><?php echo $alerts['error']; ?></p>
				</div>


				<!-- Contact Form -->
				<form id="contact-form" name="contact-form" method="POST" novalidate="novalidate">
					<div class="field">
						<input type="text" placeholder="<?php echo $first_name; ?>" name="first_name">
					</div>
					<div class="field">
						<input type="text" placeholder="<?php echo $last_name; ?>" name="last_name">
					</div>
					<div class="field">
						<input type="text" placeholder="<?php echo $phone; ?>" name="phone">
					</div>
					<div class="field">
						<input type="text" placeholder="<?php echo $email; ?>" name="email">
					</div>
					<textarea class="fullwidth" placeholder="<?php echo $message; ?>" name="message"></textarea>
					<input class="button fullwidth" type="submit" name="submit" value="<?php echo $send_message; ?>">
				</form>

			</div>
		</section>


		<!-- Tax Services -->
		<section id="tax-services" class="section">
			<div class="wrap">
				<div class="section_meta">
					<h2><?php echo $section['TAX_SERVICES'][0]; ?></h2>
				</div>

				

				<div class="section_wrap">

					<?php

						// Get the count of tax services
						$count = count($tax_service);

					?>

					<ul class="tax-service-list">
						<?php for ($i = 1; $i <= $count; $i++): ?>
						<li<?php if($i == 1) echo ' class="current"'; ?> data-tab="tab-<?php echo $i ?>"><?php echo $tax_service[$i]['title'] ?></li>
						<?php endfor ?>
					</ul>

					<?php for ($i = 1; $i <= $count; $i++): ?>
					<div class="tab-content<?php if($i == 1) echo ' current' ?>" id="tab-<?php echo $i ?>">
						<div>
							<h3><?php echo $tax_service[$i]['title'] ?></h3>
							<?php if($tax_service[$i]['summary'] != ''): ?>
							<p><?php echo $tax_service[$i]['summary'] ?></p>
							<?php else: ?>
							<a class="button green" href="#contact">Contact Us For More Information on: <?php echo $tax_service[$i]['title'] ?></a>
							<?php endif ?>
						</div>
						<!-- <div class="col-4 last">
							Image should go here
						</div> -->
					</div>
					<?php endfor ?>

				</div><!-- /.section-wrap -->

			</div>
		</section>


		<!-- Visit Us -->
		<section id="visit" class="section">
			<div class="section_meta">
				<h2><?php echo $section['VISIT'][0]; ?></h2>
				<p><?php echo $section['VISIT'][1]; ?></p>
			</div>

			<!-- Map -->
			<div id="map-canvas"></div>

		</section>



		<!-- Footer -->
		<footer id="footer" role="footer">
			
			<!-- Footer widgets -->
			<div class="footer-widgets wrap">

				<div class="widget contact-info">
					<h3><?php echo $widget['contact']['title']; ?></h3>
					<ul>
						<li><i class="fa fa-map-marker"></i><b><?php echo $contact['info']['address']; ?>:</b> <a href="">14291 Montana Avenue El Paso, TX 79938</a></li>
						<li><i class="fa fa-envelope"></i><b><?php echo $contact['info']['email']; ?>:</b> <a href="mailto: <?php echo emailencode('contact@elcharro.com') ?>"><?php echo emailencode('contact@elcharro.com') ?></a></li>
						<li><i class="fa fa-phone"></i><b><?php echo $contact['info']['phone']; ?>:</b> <a href="tel: 9154878699">(915) 487 - 8699</a></li>
					</ul>
				</div>

			</div>


			<!-- Website info -->
			<div class="footer-note">
				<div class="wrap">
					<div class="site-info alignleft">&copy; <?php echo date('Y') ?> <a href="index.html">El Charro</a>. All Rights Reserved. Proudly crafted by <a href="http://squarepixl.com"><span class="squarepixl">&#9632;</span> SquarePixl</a>.</div>

					<!-- Footer nav menu -->
					<div class="footer-navigation alignright hide-sm">
						<ul>
							<li><a href="#why-us"><?php echo $menu['MENU_WHY_US']; ?></a></li>
							<li><a href="#services"><?php echo $menu['MENU_SERVICES']; ?></a></li>
							<li><a href="#contact"><?php echo $menu['MENU_CONTACT']; ?></a></li>
							<li><a href="#money-transfers"><?php echo $menu['MENU_MONEY_TRANSFERS']; ?></a>
							<li><a href="#tax-services"><?php echo $menu['MENU_TAX_SERVICES']; ?></a></li>
							<li><a href="#visit"><?php echo $menu['MENU_VISIT']; ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>


		<!-- JavaScript -->
		<script>
			Modernizr.load([
				{
					load: 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
					complete: function () {
						if ( !window.jQuery ) {
							Modernizr.load('build/js/vendor/jquery-1.11.3.min.js');
						}
					}
				},
				// All other neccesary scrips
				{
					load: [
						'build/js/form.min.js',
						'http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js',
						'build/js/main.min.js',

					]
				},
				// If the device is mobile
				{
					test: Modernizr.mq('only all and (max-width: 868px)'),
					yep: 'build/js/fastclick.min.js',
					complete: function() { 
						FastClick.attach(document.body); 
					}
				},
			]);
		</script>

		<!-- Google Maps -->
		<script>
			function initialize() {
				var myLatlng = new google.maps.LatLng(31.81882, -106.1845761);
				var mapOptions = {
					zoom: 15,
					draggable: false,
					center: myLatlng,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};

				var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					title: 'El Charro'
				});
				
				marker.setMap(map);
			}
			function loadScript() {
				var script = document.createElement('script');
				script.type = 'text/javascript';
				script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp' +
				'&signed_in=true&callback=initialize';
				document.body.appendChild(script);
			}
			window.onload = loadScript;
		</script>


		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='https://www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-XXXXX-X','auto');ga('send','pageview');
		</script>

	</body>
</html>
