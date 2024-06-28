<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="HTML Template, site template, seo, marketing, creative, corporate, modern, multipurpose, one page, business, responsive, minimal, saas, startup">
		<meta name="author" content="LiquidThemes">
		<meta name="description" content="<?= (isset($metaDescription)) ? $metaDescription : "Bienvenue chez 0001" ?>">
		<meta property="og:title" content="Hub HTML template">
		<meta property="og:description" content="Hub is a HTML template with high performance, and award-winning design collection.">
		<meta property="og:type" content="website">
		<link rel="icon" href="<?= URL ?>public/assets/images/logo/favicon.ico" type="image/x-icon">

		<link rel="stylesheet" type="text/css" href="<?= URL ?>public/assets/css/combined.css">
		<link rel="stylesheet" type="text/css" href="<?= URL ?>public/assets/css/demo/start-hub-1/contact.css">
		<link rel="stylesheet" type="text/css" href="<?= URL ?>public/assets/css/demo/base.css">
		<!-- <link rel="stylesheet" type="text/css" href="<?= URL ?>public/assets/css/demo/start-hub-8.css"> -->
		<link rel="stylesheet" type="text/css" href="<?= URL ?>public/assets/vendors/liquid-icon/lqd-essentials/lqd-essentials.min.css">
		<link rel="stylesheet" type="text/css" href="<?= URL ?>public/assets/css/utility.min.css">

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-P4DQ9P38');</script>
		<!-- End Google Tag Manager -->

		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;500;600;700&display=swap" rel="stylesheet">

		<title><?= (isset($title)) ? $title : "0001" ?></title>
	</head>
    
    <body class="lqd-preloader-activated lqd-preloader-style-spinner" data-localscroll-offset="120" data-mobile-nav-breakpoint="1199" data-mobile-nav-style="minimal" data-mobile-nav-scheme="light" data-mobile-nav-trigger-alignment="right" data-mobile-header-scheme="light" data-mobile-logo-alignment="default" data-overlay-onmobile="false">
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4DQ9P38"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		
		<div class="lqd-preloader-wrap lqd-preloader-spinner" data-preloader-options='{"animationType": "fade" }'>
			<div class="lqd-preloader-inner">
				<div class="lqd-preloader-el inline-flex">
					<svg class="lqd-spinner-circular" height="64" width="64">
						<circle cx="32" cy="32" r="28" fill="none" stroke-width="5" stroke-miterlimit="10"></circle>
					</svg>
				</div>
			</div>
		</div>
		<div class="lqd-stickybar-wrap lqd-stickybar-right pointer-events-none items-end justify-center gap-10 px-10 md:hidden">
			<div class="flex flex-col transition-bg mr-65 mb-30 p-10">
				<span id="show-modal" class="btn-icon text-black btn btn-solid btn-custom-size btn-icon-block btn-icon-top w-60 h-60 bg-white rounded-full shadow-md p-0 text-black text-26 pointer-events-auto">
					<svg xmlns="http://www.w3.org/2000/svg" width="26.034" height="26.039" viewbox="0 0 26.034 26.039" style="margin-right: 3px;">
						<path d="M28.987,3.775a1.025,1.025,0,0,0-1.3-.739S3.646,11.521,3.642,11.524a1.018,1.018,0,0,0-.66.892,1.036,1.036,0,0,0,.574.954l9.312,4.347,4.545-4.545c.9-.9,2.337.492,1.414,1.414l-4.545,4.545s4.341,9.3,4.349,9.317a1.071,1.071,0,0,0,.9.573,1.033,1.033,0,0,0,.943-.667L28.962,4.312a.937.937,0,0,0,.025-.537Z" transform="translate(-2.981 -2.983)"></path>
					</svg>
				</span>
			</div>
		</div>
		<div id="wrap">
            <div class="lqd-sticky-placeholder hidden"></div>
			<header id="site-header" class="main-header main-header-overlay m-5" data-sticky-header="true" data-sticky-values-measured="false">
				<div class="w-full flex items-stretch justify-center px-10 md:hidden" id="desktop-header">
					<div class="w-960 flex items-stretch justify-center py-10">
						<div class="w-full statick flex items-center px-30 bg-white rounded-10 shadow-blue module-header-bottom">
							<div class="module-logo flex navbar-brand-plain">
								<a class="navbar-brand flex p-0 relative" href="/home" rel="home">
									<span class="navbar-brand-inner post-rel mw_100px">
										<img class="logo-default w-100p" src="<?= URL ?>public/assets/images/logo/logo0001.svg" alt="StartHub X">
									</span>
								</a>
							</div>
							<div class="module-primary-nav flex m-auto">
								<div class=" inline-flex p-0 lqd-submenu-default-style" aria-expanded="false" role="navigation">
									<ul class="main-nav flex reset-ul inline-ul lqd-menu-counter-right lqd-menu-items-inline main-nav-hover-fill link-13 link-black link-medium align-baseline" data-submenu-options='{"toggleType": "fade", "handler": "mouse-in-out"}' data-localscroll="true" data-localscroll-options='{"itemsSelector":"> li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'>
										<li>
											<a href="/agency">
												Agence Web
											</a>
										</li>
										<li class="header-li" id="arrowed">
											<a href="/marketing">
												Marketing
												<span class="link-icon inline-flex hide-if-empty right-icon toggle-submenu">
													<i aria-hidden="true" class="lqd-icn-ess icon-md-arrow-forward"></i>
												</span>
											</a>
											<ul class="sub-menu anim">
												<li class="google">
													<a href="/googleAds">
														<div class="li-wrapper">
															<div class="icon">
																<img src="<?= URL ?>public/assets/images/template/google-logo.svg" alt="">
															</div>
															<div class="text">
																<p>Google Ads</p>
																<span>Toutes les informations par rapport aux Google ads</span>
															</div>
														</div>
													</a>
												</li>
												<li class="youtube">
													<a href="/youtubeAds">
														<div class="li-wrapper">
															<div class="icon">
																<img src="<?= URL ?>public/assets/images/template/youtube-logo.svg" alt="">
															</div>
															<div class="text">
																<p>Youtube Ads</p>
																<span>Toutes les informations par rapport aux Youtube ads</span>
															</div>
														</div>
													</a>
												</li>
												<li class="facebook">
													<a href="/facebookAds">
														<div class="li-wrapper">
															<div class="icon">
																<img src="<?= URL ?>public/assets/images/template/facebook-logo.svg" alt="">
															</div>
															<div class="text">
																<p>facebook Ads</p>
																<span>Toutes les informations par rapport aux Facebook ads</span>
															</div>
														</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="header-li">
											<a href="/e-commerce">
												E-commerce
											</a>
										</li>
										<li>
											<a href="/contact">
												Contact
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="lqd-mobile-sec relative shadow-blue rounded-10">
					<div class="lqd-mobile-sec-inner navbar-header flex items-stretch w-full rounded-10">
						<div class="lqd-mobile-modules-container empty"></div>
						<button type="button" class="navbar-toggle collapsed nav-trigger style-mobile flex relative items-center justify-end border-none bg-transparent p-0" data-ld-toggle="true" data-bs-toggle="collapse" data-bs-target="#lqd-mobile-sec-nav" aria-expanded="false" data-bs-toggle-options='{"changeClassnames":  {"html": "mobile-nav-activated"} }'>
							<span class="sr-only">Menu</span>
							<span class="bars inline-block relative z-1">
								<span class="bars-inner flex flex-col w-full h-full">
									<span class="bar inline-block"></span>
									<span class="bar inline-block"></span>
									<span class="bar inline-block"></span>
								</span>
							</span>
						</button>
						<a class="navbar-brand flex relative" href="/home">
							<span class="navbar-brand-inner">
								<img class="logo-default w-100" src="<?= URL ?>public/assets/images/logo/logo0001.svg" alt="StartHub X">
							</span>
						</a>
					</div>
					<div class="lqd-mobile-sec-nav w-full absolute z-10">
						<div class="mobile-navbar-collapse navbar-collapse collapse w-full bg-white" id="lqd-mobile-sec-nav" aria-expanded="false" role="navigation">
							<ul class="main-nav flex reset-ul inline-ul lqd-menu-counter-right lqd-menu-items-inline main-nav-hover-fill link-13 link-black link-medium flex-col" data-submenu-options='{"toggleType": "fade", "handler": "mouse-in-out"}' data-localscroll="true" data-localscroll-options='{"itemsSelector":"> li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'>
								<li class="header-li">
									<a href="/agency">
										Agence Web
									</a>
								</li>
								<li class="header-li">
									<a href="/marketing">
										Marketing
									</a>
									<ul class="sub-menu-mobile anim-mobile">
										<li><a href="/googleAds">Google Ads</a></li>
										<li><a href="/youtubeAds">Youtube Ads</a></li>
										<li><a href="/metaAds">Meta Ads</a></li>
									</ul>
								</li>
								<li class="header-li">
									<a href="/e-commerce">
										E-commerce
									</a>
								</li>
								<li class="header-li">
									<a href="/contact">
										Contact
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>

			<!-- Contact Modal -->
			<div class="lity lity-opened lity-inline pos-fix to-left hidden" id="modal" role="dialog" aria-label="Dialog Window (Press escape to close)" tabindex="-1" data-modal-type="box" style="bottom: 245px; right: 40px">
				<div class="lity-backdrop"></div>
				<div class="lity-wrap" data-lity-close="" role="document">
					<div class="lity-container">
						<div class="lity-content">
							<div id="modal-mini" class="lqd-modal modal-mini" data-modal-type="box" style="max-height: 823px;">
								<div class="lqd-modal-inner">
									<div class="lqd-modal-head">
										<h2>Contact</h2>
									</div>
									<div class="lqd-modal-content p-10">
										<div class="lqd-contact-form lqd-contact-form-inputs-circle lqd-contact-form-inputs-sm">
											<div role="form" lang="en-US">
												<div class="screen-reader-response">
													<p role="status" aria-live="polite" aria-atomic="true"></p>
												</div>
												<form action="<?= URL ?>public/assets/php/phpMailer.php" method="post" id="contact-form" class="lqd-cf-form contact-form-page" novalidate="novalidate" data-status="init">
													<p>
														<span class="lqd-form-control-wrap m-0">
															<input class="text-gray-700 text-13 font-medium border-black-10 px-2em text-black-80" 	
																type="text" 	
																name="name" 	
																value="" 	
																size="40" 	
																aria-required="true" 	
																aria-invalid="false" 	
																placeholder="Votre nom">
														</span>
														<span class="lqd-form-control-wrap m-0">
															<input class="text-gray-700 text-13 font-medium border-black-10 px-2em text-black-80" 	
																type="email" 	
																name="email" 	
																value="" 	
																size="40" 	
																aria-required="true" 	
																aria-invalid="false" 	
																placeholder="Votre e-mail">
														</span>
														<span class="lqd-form-control-wrap m-0">
															<input class="text-gray-700 text-13 font-medium border-black-10 px-2em text-black-80" 	
																type="text" name="subject" 	
																value="" 	
																size="40" 	
																aria-required="true" 	
																aria-invalid="false" 	
																placeholder="Sujet">
														</span>
														<span class="lqd-form-control-wrap m-0">
															<textarea class="text-gray-700 text-13 font-medium border-black-10 px-2em text-black-80" 	
																name="message" 	
																cols="10" r	
																ows="3" 	
																aria-invalid="false" 	
																placeholder="Message"></textarea>
														</span>
													</p>
													<div class="mb-1/5em">
														<p class="text-14 font-medium leading-1em mt-1/5em text-gray-300">En envoyant un message, vous acceptez les conditions de confidentialité</p>
													</div>
													<p>
														<input 
															type="submit" 
															value="Envoyer message"
															class="has-spinner text-14 font-medium h-40 border-none bg-primary text-grey submit-button">
													</p>
												</form>
												<div id="form-success" class="alert-success d-none"></div>
												<div id="form-error" class="alert-danger d-none"></div>
											</div>
										</div>
									</div>
									<div class="lqd-modal-foot"></div>
								</div>
							</div>
						</div>
					</div>
					<button class="lity-close" id="modal-closer" type="button" aria-label="Close (Press escape to close)" data-lity-close="">×</button>
				</div>
			</div>
			<!-- Contact Modal -->

            <main class="content" id="lqd-site-content">

                <?= $content ?>

				<!-- Start Testimonials  -->
				<section class="lqd-section testimonials pt-90 pb-50 bg-transparent transition-all z-1 relative">
					<div class="container">
						<div class="row">
							<div class="col col-12 col-xl-4 module-col" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element, h2, p, img", "ease": "power4.out", "initValues": {"y": "45px", "rotationY" : 65, "opacity" : 0, "transformOrigin": "100% 50% 0px"} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1, "transformOrigin": "50% 50% 80px"}}'>
								<div class="mb-30 iconbox flex flex-grow-1 relative flex-wrap items-center animation-element">
									<div class="iconbox-icon-wrap mr-5">
										<div class="iconbox-icon-container inline-flex relative z-1 rounded-full text-20 w-40 h-40 text-blue-300 bg-blue-100">
											<svg class="w-1em absolute-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
												<path d="M144 208C126.3 208 112 222.2 112 239.1C112 257.7 126.3 272 144 272s31.1-14.25 31.1-32S161.8 208 144 208zM256 207.1c-17.75 0-31.1 14.25-31.1 32s14.25 31.1 31.1 31.1s31.1-14.25 31.1-31.1S273.8 207.1 256 207.1zM368 208c-17.75 0-31.1 14.25-31.1 32s14.25 32 31.1 32c17.75 0 31.99-14.25 31.99-32C400 222.2 385.8 208 368 208zM256 31.1c-141.4 0-255.1 93.12-255.1 208c0 47.62 19.91 91.25 52.91 126.3c-14.87 39.5-45.87 72.88-46.37 73.25c-6.624 7-8.373 17.25-4.624 26C5.818 474.2 14.38 480 24 480c61.49 0 109.1-25.75 139.1-46.25c28.87 9 60.16 14.25 92.9 14.25c141.4 0 255.1-93.13 255.1-207.1S397.4 31.1 256 31.1zM256 400c-26.75 0-53.12-4.125-78.36-12.12l-22.75-7.125L135.4 394.5c-14.25 10.12-33.87 21.38-57.49 29c7.374-12.12 14.37-25.75 19.87-40.25l10.62-28l-20.62-21.87C69.81 314.1 48.06 282.2 48.06 240c0-88.25 93.24-160 207.1-160s207.1 71.75 207.1 160S370.8 400 256 400z" />
											</svg>
										</div>
									</div>
									<h3 class="lqd-iconbox-heading text-18 font-normal text-dark m-0 flex">
										<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 1em; height: 1em;">
											<path fill="rgb(245, 209, 66)" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
										</svg>
										<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 1em; height: 1em;">
											<path fill="rgb(245, 209, 66)" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
										</svg>
										<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 1em; height: 1em;">
											<path fill="rgb(245, 209, 66)" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
										</svg>
										<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 1em; height: 1em;">
											<path fill="rgb(245, 209, 66)" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
										</svg>
										<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 1em; height: 1em;">
											<path fill="rgb(245, 209, 66)" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
										</svg>
										<span>&nbsp;&nbsp; de satisfaction client</span>
									</h3>
									<p></p>
								</div>
								<div class="ld-fancy-heading relative inline-block">
									<h2 class="ld-fh-element relative text-36 leading-1/15em m-0">Les clients</h2>
								</div>
								<div class="ld-fancy-heading relative inline-block">
									<h2 class="ld-fh-element relative ld-gradient-heading text-36 bg-transparent leading-1/15em mr-0/2em mb-0 ml-0/2em" style="background-image: linear-gradient(0deg, #749FEF 0%, #4452F2 100%);">satisfaits</h2>
								</div>
								<div class="ld-fancy-heading relative inline-block">
									<h2 class="ld-fh-element relative text-36 mb-0 leading-1/15em">sont notre meilleure récompense.</h2>
								</div>
								<div class="ld-fancy-heading relative">
									<p class="ld-fh-element relative text-18 leading-1/25em mt-1em mb-0/75em">Depuis 10 ans, nous accompagnons nos clients dans la concrétisation digitale de leurs idées.</p>
								</div>
							</div>
							<div class="col col-12 col-xl-8 relative" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "startDelay" : 200, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
								<div class="ml-5percent lg:m-0">
									<div class="carousel-container lqd-carousel-stack animation-element">
										<div class="carousel-items" data-lqd-flickity='{ "watchCSS":  true }'>
											<div class="carousel-item w-full">
												<span class="lqd-carousel-handle"></span>
												<div class="lqd-testi relative lqd-testi-style-18 pt-2/5em pb-1/5em lqd-testi-shadow-sm2 lqd-testi-details-sm lqd-testi-quote-18 lqd-testi-avatar-68 text-center module-line-1">
													<div class="icon-text-nightblue flex justify-center mb-4">
														<ul class="lqd-star-rating lqd-star-rating-shaped lqd-star-rating-outline">
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
														</ul>
													</div>
													<div class="lqd-testi-quote mb-1/5em px-1em">
														<blockquote>
															<p>
																<span style="font-weight: 500;">
																	<span>Je recommande a 100%, équipe vraiment sympa!!! La prestation est aux niveaux même plus que nos attentes (fleur.d'elixir cbd)!!!</span>
																</span>
															</p>
														</blockquote>
													</div>
													<div class="lqd-testi-info flex flex-col flex-wrap justify-between">
														<div class="lqd-testi-details flex items-center justify-center">
															<figure class="lqd-testi-avatar rounded-full overflow-hidden">
																<img class="rounded-full" src="<?= URL ?>public/assets/images/template/avatars/avatar4.webp" alt="Ray Charles">
															</figure>
															<div class="lqd-testi-np text-start pl-1/5em">
																<h3 class="uppercase tracking-0/1em font-bold">Odiot Kevin</h3>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="carousel-item w-full">
												<span class="lqd-carousel-handle"></span>
												<div class="lqd-testi relative lqd-testi-style-18 pt-2/5em pb-1/5em lqd-testi-shadow-sm2 lqd-testi-details-sm lqd-testi-quote-18 lqd-testi-avatar-68 text-center module-line-2">
													<div class="flex justify-center mb-4">
														<ul class="lqd-star-rating lqd-star-rating-shaped lqd-star-rating-outline">
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
														</ul>
													</div>
													<div class="lqd-testi-quote mb-1/5em px-1em">
														<blockquote>
															<p>
																<span style="font-weight: 500;">
																	<span>Super, franchement ravie, moi qui n'y connais rien , j ai reçu une aide précieuses et de très bons conseils. Les retombées sont positives, le site que j'ai…</span>
																</span>
															</p>
														</blockquote>
													</div>
													<div class="lqd-testi-info flex flex-col flex-wrap justify-between">
														<div class="lqd-testi-details flex items-center justify-center">
															<figure class="lqd-testi-avatar rounded-full overflow-hidden">
																<img class="rounded-full" src="<?= URL ?>public/assets/images/template/avatars/avatar1.webp" alt="Markfortez">
															</figure>
															<div class="lqd-testi-np text-start pl-1/5em">
																<h3 class="uppercase tracking-0/1em font-bold">Pollet Suzanne</h3>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="carousel-item w-full">
												<span class="lqd-carousel-handle"></span>
												<div class="lqd-testi relative lqd-testi-style-18 pt-2/5em pb-1/5em lqd-testi-shadow-sm2 lqd-testi-details-sm lqd-testi-quote-18 lqd-testi-avatar-68 text-center module-line-3">
													<div class="flex justify-center mb-4">
														<ul class="lqd-star-rating lqd-star-rating-shaped lqd-star-rating-outline">
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
														</ul>
													</div>
													<div class="lqd-testi-quote mb-1/5em px-1em">
														<blockquote>
															<p>
																<span style="font-weight: 500;">
																	<span>Franchement j'étais assez méfiant (nouvelle boîte toussa) mais m'a fait un site de recueil de données rapidement et il marche sans problème (y'a juste eu un mini bug une fois mais il a réagit et corrigé en 5 minutes j'étais pas prêt)</span>
																</span>
															</p>
														</blockquote>
													</div>
													<div class="lqd-testi-info flex flex-col flex-wrap justify-between">
														<div class="lqd-testi-details flex items-center justify-center">
															<figure class="lqd-testi-avatar rounded-full overflow-hidden">
																<img class="rounded-full" src="<?= URL ?>public/assets/images/template/avatars/avatar2.webp" alt="Divinginwonderland">
															</figure>
															<div class="lqd-testi-np text-start pl-1/5em">
																<h3 class="uppercase tracking-0/1em font-bold">Raphaël Bentégeac</h3>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="carousel-item w-full">
												<span class="lqd-carousel-handle"></span>
												<div class="lqd-testi relative lqd-testi-style-18 pt-2/5em pb-1/5em lqd-testi-shadow-sm2 lqd-testi-details-sm lqd-testi-quote-18 lqd-testi-avatar-68 text-center module-line-4">
													<div class="flex justify-center mb-4">
														<ul class="lqd-star-rating lqd-star-rating-shaped lqd-star-rating-outline">
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
														</ul>
													</div>
													<div class="lqd-testi-quote mb-1/5em px-1em">
														<blockquote>
															<p>
																<span style="font-weight: 500;">
																	<span>Très serviable Très bon travail fait dans les délais à recommander</span>
																</span>
															</p>
														</blockquote>
													</div>
													<div class="lqd-testi-info flex flex-col flex-wrap justify-between">
														<div class="lqd-testi-details flex items-center justify-center">
															<figure class="lqd-testi-avatar rounded-full overflow-hidden">
																<img class="rounded-full" src="<?= URL ?>public/assets/images/template/avatars/avatar5.webp" alt="Brukmaxwell">
															</figure>
															<div class="lqd-testi-np text-start pl-1/5em">
																<h3 class="uppercase tracking-0/1em font-bold">Françoise Van de wiele</h3>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="carousel-item w-full">
												<span class="lqd-carousel-handle"></span>
												<div class="lqd-testi relative lqd-testi-style-18 pt-2/5em pb-1/5em lqd-testi-shadow-sm2 lqd-testi-details-sm lqd-testi-quote-18 lqd-testi-avatar-68 text-center module-line-4">
													<div class="flex justify-center mb-4">
														<ul class="lqd-star-rating lqd-star-rating-shaped lqd-star-rating-outline">
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
															<li>
																<svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
																	<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
																</svg>
															</li>
														</ul>
													</div>
													<div class="lqd-testi-quote mb-1/5em px-1em">
														<blockquote>
															<p>
																<span style="font-weight: 500;">
																	J'ai acheté un site web que je me suis moi-même vendu, j'en suis très satisfait !</span>
																</span>
															</p>
														</blockquote>
													</div>
													<div class="lqd-testi-info flex flex-col flex-wrap justify-between">
														<div class="lqd-testi-details flex items-center justify-center">
															<figure class="lqd-testi-avatar rounded-full overflow-hidden">
																<img class="rounded-full" src="<?= URL ?>public/assets/images/template/avatars/avatar3.webp" alt="Brukmaxwell">
															</figure>
															<div class="lqd-testi-np text-start pl-1/5em">
																<h3 class="uppercase tracking-0/1em font-bold">Cyril Vieu</h3>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="lqd-carousel-stack-nav">
											<button class="lqd-carousel-stack-btn lqd-carousel-stack-prev rounded-100">
												<svg width="6" height="10" viewbox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
													<path d="M5.863 8.387L4.75 9.5L0 4.75L4.75 0L5.863 1.113L2.229 4.75L5.863 8.387Z"></path>
												</svg>
											</button>
											<button class="lqd-carousel-stack-btn lqd-carousel-stack-next rounded-100">
												<svg width="6" height="10" viewbox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
													<path d="M-2.43187e-05 8.387L1.11298 9.5L5.86298 4.75L1.11298 0L-2.43187e-05 1.113L3.63398 4.75L-2.43187e-05 8.387Z"></path>
												</svg>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Testimonials  -->

				<!-- Start contact Us -->
				<section class="lqd-section contact-us py-80 bg-transparent" id="contact" data-custom-animations="true" data-ca-options='{"animationTarget": ".module-first, .module-last", "ease": ["power4.out"], "initValues": {"y": "30px", "scaleX": 0.5, "scaleY": 0.5, "opacity": 0}, "animations": {"y": "0px", "scaleX": 1, "scaleY": 1, "opacity": 1}}'>
					<div class="container">
						<div class="row items-center">
							<div class="module-first w-50percent flex flex-col items-start pr-15percent lg:w-45percent sm:w-full" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element, h2, h6, p, .btn", "duration": 750, "delay": 55, "ease": "expo.out", "initValues": {"y": "70px", "scaleX": 0.5, "scaleY": 0.5, "opacity": 0}, "animations": {"y": "0px", "scaleX": 1, "scaleY": 1, "opacity": 1}}'>
								<div class="ld-fancy-heading relative mb-15 py-5 rounded-100 bg-white-10">
									<h6 class="ld-fh-element m-0 inline-block relative text-12 font-bold uppercase tracking-1 text-grey">Contact</h6>
								</div>
								<div class="ld-fancy-heading relative">
									<h2 class="ld-fh-element mb-0/75em inline-block relative text-34 text-grey">
										<span class="text-grey">Venez avec votre vision et échangeons.</span><br>
										<span> Nous trouverons la solution</span>
									</h2>
								</div>
								<div class="w-full max-w-full flex flex-col items-start transition-all rounded-12" style="background: linear-gradient(to right, #17C0EE, #70E77C);">
									<div class="w-full rounded-12 rounded-bottom-0 animation-element">
										<div class="ld-gmap-container relative h-130">
											<div class="ld-gmap w-full h-full" data-plugin-map="true" data-plugin-options='{"style": "wy", "address": "7420 Shore Rd, Brooklyn, NY 11209, USA", "marker_style": "html", "markers": null, "map": {"zoom": 16, "mapTypeId": "roadmap", "zoomControl": true}}'></div>
										</div>
									</div>
									<div class="ld-fancy-heading relative mt-20 mx-30 mb-0">
										<a href="mailto:Cyril@0001.fr">
											<p class="ld-fh-element mb-0/5em inline-block relative text-slate-200">E-mail : Cyril@0001.fr</p>
										</a>
									</div>
									<div class="ld-fancy-heading relative mx-30">
										<a href="tel:0642650083">
											<p class="ld-fh-element mb-0/5em inline-block relative text-slate-200">Telephone : 06 42 65 00 83</p>
										</a>
									</div>
									<a href="#" class="btn btn-naked btn-icon-right btn-hover-swp mx-30 mb-25 text-transparent" target="_blank">
										<span class="btn-txt" data-text="Show on map">Show on map</span>
										<span class="btn-icon">
											<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
										</span>
										<span class="btn-icon">
											<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
										</span>
									</a>
								</div>
							</div>
							<div class="module-last w-50percent flex flex-col box-shadow-blue rounded-20 transition-all py-30 px-35 lg:w-55percent sm:w-full animation-element" data-custom-animations="true" data-ca-options='{"animationTarget": "h3, .lqd-contact-form", "duration": 750, "startDelay": 500, "delay": 55, "ease": "expo.out", "initValues": {"y": "50px", "scaleX": 0.5, "scaleY": 0.5, "opacity": 0}, "animations": {"y": "0px", "scaleX": 1, "scaleY": 1, "opacity": 1}}'>
								<div class="ld-fancy-heading relative">
									<h3 class="ld-fh-element mb-0/65em inline-block relative text-grey">Un projet en tête ? <span class="ld-fh-element inline-block relative ld-gradient-heading -mt-0/2em bg-transparent" style="background-image: linear-gradient(0deg, rgb(116, 159, 239) 0%, rgb(68, 82, 242) 100%);">Contactez-nous</span></h3>
								</div>
								<div class="lqd-contact-form lqd-contact-form-inputs-circle lqd-contact-form-button-block">
									<div role="form" lang="en-US">
										<div class="screen-reader-response absolute overflow-hidden p-0 border-0">
											<p role="status" aria-live="polite" aria-atomic="true"></p>
										</div>
										<form action="<?= URL ?>/public/assets/php/phpMailer.php" method="POST" class="lqd-cf-form" novalidate="novalidate" data-status="init">
											<div class="row -mr-15 -ml-15">
												<div class="col col-12 col-md-6 px-15">
													<span class="lqd-form-control-wrap" data-name="name">
														<input class="lqd-cf-form-control text-grey border-1 border-grey bg-transparent px-2em" type="text" name="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Nom" required>
													</span>
												</div>
												<div class="col col-12 col-md-6 px-15">
													<span class="lqd-form-control-wrap" data-name="email">
														<input class="lqd-cf-form-control text-grey border-1 border-grey bg-transparent px-2em" type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="E-mail" required>
													</span>
												</div>
												<div class="col col-12 col-md-12 px-15">
													<span class="lqd-form-control-wrap" data-name="subject">
														<input class="lqd-cf-form-control text-grey border-1 border-grey bg-transparent px-2em" type="text" name="subject" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Sujet" required>
													</span>
												</div>
												<div class="col col-12 px-15">
													<span class="lqd-form-control-wrap" data-name="message">
														<textarea class="text-grey border-1 border-grey bg-transparent px-2em" name="message" cols="10" rows="4" aria-required="true" aria-invalid="false" placeholder="Votre message" required></textarea>
													</span>
												</div>
												<div class="col col-12 text-grey px-15">
													<span class="lqd-form-control-wrap" data-name="acceptance">
														<span class="lqd-cf-form-control lqd-cf-acceptance">
															<span class="lqd-cf-list-item">
																<label class="mb-5">
																	<input class="border-grey text-grey" type="checkbox" name="your-acceptance" value="1" aria-invalid="false" required>
																	<span class="lqd-cf-list-item-label">J'ai lu et accepté la Politique de Confidentialité</span>
																</label>
															</span>
														</span>
													</span>
												</div>
												<div class="col col-12 px-15">
													<input type="submit" value="Envoyer le message" class="lqd-cf-form-control has-spinner lqd-cf-submit">
												</div>
											</div>
										</form>
										<div class="lqd-cf-response-output"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End contact Us -->
            </main>

			<!-- Footer background : background: linear-gradient(335deg, rgba(201,159,201,0.4766281512605042) 23%, rgba(161,170,211,0.44861694677871145) 61%, rgba(0,212,255,0.4906337535014006) 100%); -->
			<footer id="site-footer" class="main-footer">
				<section class="lqd-section footer-content pt-270 pb-100 relative bg-transparent transition-all" style="background-image: linear-gradient(to right, rgba(23, 192, 238, 0.3), rgba(112, 231, 124, 0.3));">
					<div class="lqd-shape lqd-shape-top" data-negative="false">
						<svg class="lqd-custom-shape -rotate-180 h-220" fill="none" height="461" viewbox="0 0 1440 461" width="1440" xmlns="http://www.w3.org/2000/svg" preserveaspectratio="none">
							<defs>
								<linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="0%">
									<stop offset="0%" style="stop-color:#17C0EE;stop-opacity:1" />
									<stop offset="100%" style="stop-color:#70E77C;stop-opacity:1" />
								</linearGradient>
							</defs>
							<path fill="url(#gradient1)" class="lqd-shape-fill" d="m0 131.906 34.4-20.017c34.4-19.9 103.2-59.936 171.68-82.979 68.64-23.043 136.8-29.328003 205.44-4.306 68.48 25.022 137.28 81.35 205.76 80.768 68.64-.582 136.8-58.074 205.44-84.608 68.48-26.535 137.28-22.345 205.76-16.06 68.64 6.168 136.8 14.315 205.44 22.811 68.48 8.612 137.28 17.457 171.68 22l34.4 4.422v396.851h-1440z" fill-opacity=".09">
								<animate repeatcount="indefinite" fill="freeze" attributename="d" dur="10s" values="M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z; M0 122.906L36.5 109C71.5 96.372 102.52 67.98 171 44.937C239.64 21.894 354.36 51.478 423 76.5C491.48 101.522 546.52 19.097 615 18.515C683.64 17.933 799.36 58.534 868 32C936.48 5.46499 1039.52 54.715 1108 61C1176.64 67.168 1190.36 -6.996 1259 1.5C1327.48 10.112 1371.2 35.972 1405.6 40.515L1440 44.937V441.788H0L0 122.906Z; M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z">
								</animate>
							</path>
							<path fill="#fff" class="lqd-shape-fill" d="M0 154.75L34.4 142.201C68.8 129.53 137.6 104.433 206.08 99.072C274.72 93.833 342.88 108.453 411.52 122.099C480 135.622 548.8 148.293 617.28 142.811C685.92 137.329 754.08 113.693 822.72 113.693C891.2 113.693 960 137.329 1028.48 152.68C1097.12 168.153 1165.28 175.463 1233.92 184.966C1302.4 194.591 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z" fill-opacity=".28">
								<animate repeatcount="indefinite" fill="freeze" attributename="d" dur="8s" values="M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 33.4 177.201 55 176.5C76.6 175.799 137.52 110.361 206 105C274.64 99.761 332.86 141.104 401.5 154.75C469.98 168.273 527.52 206.982 596 201.5C664.64 196.018 747.86 75 816.5 75C884.98 75 956.52 118.149 1025 133.5C1093.64 148.973 1163.36 87.497 1232 97C1300.48 106.625 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z">
								</animate>
							</path>
							<path fill="#fff" class="lqd-shape-fill" d="M0 340.22L34.4 333.92C68.8 327.52 137.6 314.92 206.08 312.22C274.72 309.52 342.88 316.92 411.52 319.72C480 322.52 548.8 320.92 617.28 318.92C685.92 316.92 754.08 314.52 822.72 316.02C891.2 317.52 960 322.92 1028.48 309.42C1097.12 295.92 1165.28 263.52 1233.92 251.02C1302.4 238.52 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z">
								<animate repeatcount="indefinite" fill="freeze" attributename="d" dur="6.5s" values="M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z; M0 340.22L37.5 323C71.9 316.6 137.52 336.62 206 333.92C274.64 331.22 339.86 272.2 408.5 275C476.98 277.8 551.02 304 619.5 302C688.14 300 759.36 266.5 828 268C896.48 269.5 962.02 336.5 1030.5 323C1099.14 309.5 1156.36 232.5 1225 220C1293.48 207.5 1364.1 249.62 1398.5 253.22L1440 253.22V453.22H0L0 340.22Z; M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z">
								</animate>
							</path>
							<path fill="#fff" class="lqd-shape-fill" d="M1440 337.719L1405.6 340.219C1371.2 342.719 1302.4 347.719 1233.92 350.419C1165.28 353.019 1097.12 353.419 1028.48 352.219C960 351.019 891.2 348.419 822.72 357.019C754.08 365.719 685.92 385.719 617.28 395.919C548.8 406.019 480 406.419 411.52 395.919C342.88 385.419 274.72 364.019 206.08 359.419C137.6 354.719 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z">
								<animate repeatcount="indefinite" fill="freeze" attributename="d" dur="5.5s" values="M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1295.98 326.3 1227.5 329C1158.86 331.6 1081.64 391.2 1013 390C944.52 388.8 874.48 364.119 806 372.719C737.36 381.419 675.14 296.3 606.5 306.5C538.02 316.6 471.48 383.219 403 372.719C334.36 362.219 272.64 320.6 204 316C135.52 311.3 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z">
								</animate>
							</path>
						</svg>
					</div>
					<div class="container">
						<div class="row items-center">
							<div class="col col-12 col-md-3 flex items-center justify-start">
								<img width="145" height="21" src="<?= URL ?>public/assets/images/logo/logo0001.svg" alt="logo hub">
							</div>
							<div class="col col-12 col-md-9">
								<div class="flex flex-wrap alogn-items-center justify-end">
									<div class="flex justify-end text-end lqd-fancy-menu lqd-custom-menu relative text-end lqd-menu-td-none link-bold link-10 link-black-80 lg:w-full sm:text-start module-menu">
										<ul class="reset-ul inline-ul uppercase flex"> 
											<li class="tracking-1 mr-35">
												<a class="uppercase tracking-1/5" href="https://www.linkedin.com/in/cyril-vieu-5b49a2182/?originalSubdomain=fr">
													<span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label">
														<svg xmlns="http://www.w3.org/2000/svg" width="13.125" height="13.125" viewBox="0 0 13.125 13.125">
															<path d="M5.625-12.187H-5.628a.942.942,0,0,0-.935.946V-.009a.942.942,0,0,0,.935.946H5.625a.944.944,0,0,0,.937-.946V-11.241A.944.944,0,0,0,5.625-12.187ZM-2.6-.937H-4.541V-7.2h1.948V-.937Zm-.973-7.119A1.128,1.128,0,0,1-4.7-9.185a1.128,1.128,0,0,1,1.128-1.128A1.13,1.13,0,0,1-2.44-9.185,1.127,1.127,0,0,1-3.568-8.057ZM4.7-.937H2.751V-3.984c0-.727-.015-1.661-1.011-1.661C.727-5.646.571-4.854.571-4.037v3.1H-1.374V-7.2H.492v.855H.519A2.049,2.049,0,0,1,2.361-7.356c1.969,0,2.335,1.3,2.335,2.985Z" transform="translate(6.563 12.187)" fill="#6a7a90"></path>
														</svg>
													</span>
													Linkedin
												</a>
											</li>
											<li class="tracking-1 mr-35">
												<a class="uppercase tracking-1/5" href="https://www.facebook.com/0001.fr?_rdc=1&_rdr">
													<span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label w-15">
														<img src="<?= URL ?>public/assets/images/template/fb-icon.svg" alt="" class="w-20">
													</span>
													Facebook
												</a>
											</li>
											<li class="tracking-1 mr-35">
												<a class="uppercase tracking-1/5" href="/mentions-legales">
													<span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label"></span>
													Mentions légales
												</a>
											</li>
											<li class="tracking-1 mr-35">
												<a class="uppercase tracking-1/5" href="/contact">
													<span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label"></span>
													Contact
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col col-12 mt-5 p-15">
								<span class="divider w-full flex border-top border-lightgray"></span>
							</div>
							<div class="col col-12 col-md-8">
								<div class="ld-fancy-heading relative">
									<p class="ld-fh-element mb-0/5em inline-block relative text-12 leading-1/75em">Ces conditions seront pleinement appliquées et affecteront votre utilisation de ce site Web. En utilisant ce site Web, vous avez accepté tous les termes et conditions écrits ici. Vous ne devez pas utiliser ce site Web si vous n'êtes pas d'accord avec l'une de ces normes de site Web.</p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</footer>
		</div>
		
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>		
	<script src="<?= URL ?>public/assets/js/video-lazyload.js"></script>
	<script src="<?= URL ?>public/assets/js/iss.js"></script>
	<script src="<?= URL ?>public/assets/js/modal.js"></script>
	<script src="<?= URL ?>public/assets/js/toggle-header.js"></script>
	<script src="<?= URL ?>public/assets/vendors/jquery.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/fastdom/fastdom.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/fresco/js/fresco.js"></script>
	<script src="<?= URL ?>public/assets/vendors/lity/lity.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/gsap/minified/gsap.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/gsap/utils/CustomEase.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/gsap/minified/DrawSVGPlugin.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/gsap/minified/ScrollTrigger.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/draw-shape/liquidDrawShape.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/animated-blob/liquidAnimatedBlob.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/fontfaceobserver.js"></script>
	<script src="<?= URL ?>public/assets/vendors/tinycolor-min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/gsap/utils/SplitText.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/matter/matter.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/throwable/liquidThrowable.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/flickity/flickity.pkgd.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/flickity/flickity-fade.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/lottie/lottie.min.js"></script>
	<script src="<?= URL ?>public/assets/js/liquid-gdpr.min.js"></script>
	<script src="<?= URL ?>public/assets/js/theme.min.js"></script>
	<script src="<?= URL ?>public/assets/js/liquid-ajax-contact-form.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/isotope/isotope.pkgd.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/isotope/packery-mode.pkgd.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/imagesloaded.pkgd.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/draggabilly.pkgd.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/particles.min.js"></script>
	<script src="<?= URL ?>public/assets/js/demo/start-hub-x.js"></script>
	<script src="<?= URL ?>public/assets/js/demo/start-hub-4.js"></script>
	<script src="<?= URL ?>public/assets/js/demo/start-hub-8.js"></script>
	<script src="<?= URL ?>public/assets/vendors/section-flow/liquidSectionFlow.min.js"></script>
	<script src="<?= URL ?>public/assets/vendors/draw-shape/liquidDrawShape.min.js"></script>
    </body>
</html>