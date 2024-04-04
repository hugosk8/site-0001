<?php
switch ($page) {
	case 'home':
		$metaDescription = "Agence web à Lille (Marquettes-Lez-Lille), sites internet, logiciels immobiliers, applications sur mesure, e-commerce, référencement, réseaux sociaux…";
		$title = "Accueil - 0001";
		break;
	case 'contact':
		$metaDescription = "Pour nous contacter, envoyez un message via notre site internet ou appelez nous directement au 06.42.65.00.83";
		$title = "Contac - 0001t";
		break;
	case 'marketing':
		$metaDescription = "Améliorez votre stratégie marketing grâce à notre expertise SEO, SEA ciblé et création de landing pages innovantes.";
		$title = "Marketing - 0001";
		break;
	case 'seo':
		$metaDescription = "Bienvenue chez 0001 | SEO";
		$title = "SEO - 0001";
		break;
	case '404':
		$metaDescription = "Oups, cette page est introuvable ! Explorez nos solutions SEO et SEA depuis la page d'accueil de l'Agence 0001.";
		$title = "404 - 0001";
		break;
	case 'mentions-legales':
		$metaDescription = "L'Agence 0001 s'engage pour la confiance numérique. Retrouvez nos mentions légales ici.";
		$title = "Mentions légales - 0001";
		break;
}

// $cssFiles = [
//     '/public/assets/vendors/liquid-icon/lqd-essentials/lqd-essentials.min.css',
//     '/public/assets/vendors/jquery-ui/jquery-ui.css',
//     '/public/assets/css/theme.min.css',
//     '/public/assets/css/utility.min.css',
//     '/public/assets/css/demo/start-hub-x.css',
//     '/public/assets/css/style.css',
//     '/public/assets/css/demo/start-hub-4/base.css',
//     '/public/assets/css/demo/start-hub-4/start-hub-4.css',
//     '/public/assets/css/demo/start-hub-5/base.css',
//     '/public/assets/css/demo/start-hub-5/start-hub-5.css',
//     '/public/assets/css/demo/start-hub-2.css',
//     '/public/assets/css/demo/start-hub-3/base.css',
//     '/public/assets/css/demo/start-hub-3/start-hub-3.css',
// ];
// $basePath = ROOT . "/0001New";
// $outputFile = $basePath . '/public/assets/css/combined.css';
// $output = fopen($outputFile, 'w');

// foreach ($cssFiles as $file) {
// 	$content = file_get_contents($basePath . $file);
// 	fwrite($output, $content);
// }

// fclose($output);
?>

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
		<meta property="og:image" content="<?= URL ?>/public/assets/images/common/og-image.jpg">

		<link rel="stylesheet" type="text/css" href="<?= URL ?>/public/assets/css/combined.css">
		<link rel="stylesheet" type="text/css" href="<?= URL ?>/public/assets/css/demo/start-hub-1/contact.css">

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
		<div id="wrap">
            <div class="lqd-sticky-placeholder hidden"></div>
			<header id="site-header" class="main-header main-header-overlay m-5" data-sticky-header="true" data-sticky-values-measured="false">
				<div class="w-full flex items-stretch justify-center px-10 md:hidden">
					<div class="w-960 flex items-stretch justify-center py-10">
						<div class="w-full statick flex items-center justify-between px-30 bg-white rounded-10 shadow-blue module-header-bottom">
							<div class="module-logo flex navbar-brand-plain">
								<a class="navbar-brand flex p-0 relative" href="/home" rel="home">
									<span class="navbar-brand-inner post-rel mw_100px">
										<img class="logo-default w-100p" src="<?= URL ?>/public/assets/images/0001/logo/logo0001.svg" alt="StartHub X">
									</span>
								</a>
							</div>
							<div class="module-primary-nav flex">
								<div class=" inline-flex p-0 lqd-submenu-default-style" aria-expanded="false" role="navigation">
									<ul class="main-nav flex reset-ul inline-ul lqd-menu-counter-right lqd-menu-items-inline main-nav-hover-fill link-13 link-black link-medium align-baseline" data-submenu-options='{"toggleType": "fade", "handler": "mouse-in-out"}' data-localscroll="true" data-localscroll-options='{"itemsSelector":"> li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'>
										<li>
											<a href="#">
												Agence Web
											</a>
										</li>
										<li class="header-li marketing">
											<a href="/marketing" class="toggle-submenu">
												Marketing
												<span class="link-icon inline-flex hide-if-empty right-icon">
													<ion-icon name="caret-up-outline" class="icon-ion-ios-arrow-down"></ion-icon>
												</span>
											</a>
											<ul class="sub-menu anim">
												<li><a href="/googleAds">Google Ads</a></li>
												<li><a href="/youtubeAds">Youtube Ads</a></li>
												<li><a href="/facebookAds">Facebook Ads</a></li>
											</ul>
										</li>
										<li>
											<a href="#">
												Situations immobilières 
											</a>
										</li>
										<li class="header-li">
											<a href="#">
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
				<div class="lqd-stickybar-wrap lqd-stickybar-right pointer-events-none items-end justify-center gap-10 px-10 md:hidden">
					<div class="flex flex-col transition-bg mr-65 mb-30 p-10">
						<span id="show-modal" class="btn-icon text-black btn btn-solid btn-custom-size btn-icon-block btn-icon-top w-60 h-60 bg-white rounded-full shadow-md p-0 text-black text-26 pointer-events-auto">
							<svg xmlns="http://www.w3.org/2000/svg" width="26.034" height="26.039" viewbox="0 0 26.034 26.039" style="margin-right: 3px;">
								<path d="M28.987,3.775a1.025,1.025,0,0,0-1.3-.739S3.646,11.521,3.642,11.524a1.018,1.018,0,0,0-.66.892,1.036,1.036,0,0,0,.574.954l9.312,4.347,4.545-4.545c.9-.9,2.337.492,1.414,1.414l-4.545,4.545s4.341,9.3,4.349,9.317a1.071,1.071,0,0,0,.9.573,1.033,1.033,0,0,0,.943-.667L28.962,4.312a.937.937,0,0,0,.025-.537Z" transform="translate(-2.981 -2.983)"></path>
							</svg>
						</span>
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
								<img class="logo-default w-100p" src="<?= URL ?>/public/assets/images/0001/logo/logo0001.svg" alt="StartHub X">
							</span>
						</a>
					</div>
					<div class="lqd-mobile-sec-nav w-full absolute z-10">
						<div class="mobile-navbar-collapse navbar-collapse collapse w-full bg-white" id="lqd-mobile-sec-nav" aria-expanded="false" role="navigation">
							<ul class="main-nav flex reset-ul inline-ul lqd-menu-counter-right lqd-menu-items-inline main-nav-hover-fill link-13 link-black link-medium flex-col" data-submenu-options='{"toggleType": "fade", "handler": "mouse-in-out"}' data-localscroll="true" data-localscroll-options='{"itemsSelector":"> li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'>
								<li class="header-li">
									<a href="#">
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
										<li><a href="/facebookAds">Facebook Ads</a></li>
									</ul>
								</li>
								<li class="header-li">
									<a href="#">
										Situations immobilières 
									</a>
								</li>
								<li class="header-li">
									<a href="#">
										E-commerce
									</a>
								</li>
								<li class="header-li">
									<a href="#">
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
														id="submit-button"
														class="has-spinner text-14 font-medium h-40 border-none bg-primary text-white">
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

            </main>

			<!-- Footer background : background: linear-gradient(335deg, rgba(201,159,201,0.4766281512605042) 23%, rgba(161,170,211,0.44861694677871145) 61%, rgba(0,212,255,0.4906337535014006) 100%); -->
			<footer id="site-footer" class="main-footer pt-45 pb-90" data-sticky-footer="true" data-sticky-footer-options='{"shadow": "2"}'>
				<div class="container">
					<div class="row justify-between items-center">
						<div class="col col-auto p-0">
							<div class="lqd-imggrp-single block relative module-logo">
								<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
									<figure class="w-full relative">
										<img width="75" height="18" src="<?= URL ?>/public/assets/images/0001/logo/logo0001.svg" alt="Start Hub Six">
									</figure>
								</div>
							</div>
						</div>
						<div class="col col-auto p-0 text-end">
							<div class="lqd-fancy-menu lqd-custom-menu relative right lqd-menu-td-none">
								<ul class="reset-ul inline-ul flex flex-wrap items-center sm:justify-end">
									<li class="mr-30">
										<a class="text-14 justify-end text-slate-500" href="https://www.linkedin.com/in/cyril-vieu-5b49a2182/?originalSubdomain=fr">
											<span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label">
												<svg xmlns="http://www.w3.org/2000/svg" width="13.125" height="13.125" viewBox="0 0 13.125 13.125">
													<path d="M5.625-12.187H-5.628a.942.942,0,0,0-.935.946V-.009a.942.942,0,0,0,.935.946H5.625a.944.944,0,0,0,.937-.946V-11.241A.944.944,0,0,0,5.625-12.187ZM-2.6-.937H-4.541V-7.2h1.948V-.937Zm-.973-7.119A1.128,1.128,0,0,1-4.7-9.185a1.128,1.128,0,0,1,1.128-1.128A1.13,1.13,0,0,1-2.44-9.185,1.127,1.127,0,0,1-3.568-8.057ZM4.7-.937H2.751V-3.984c0-.727-.015-1.661-1.011-1.661C.727-5.646.571-4.854.571-4.037v3.1H-1.374V-7.2H.492v.855H.519A2.049,2.049,0,0,1,2.361-7.356c1.969,0,2.335,1.3,2.335,2.985Z" transform="translate(6.563 12.187)" fill="#6a7a90"></path>
												</svg>
											</span>
											<span>Linkedin</span>
										</a>
									</li>
									<li class="mr-30">
										<a class="text-14 justify-end text-slate-500" href="https://www.facebook.com/0001.fr/">
											<span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label">
												<img src="<?= URL ?>/public/assets/images/0001/home/fb-icon.svg" alt="" class="w-20">
											</span>
											<span>Facebook</span>
										</a>
									</li>
									<li class="mr-30">
										<a class="text-14 justify-end text-slate-500" href="/mentions-legales">
											<span>Mentions legales</span>
										</a>
									</li>
									<li class="mr-30">
										<a class="text-14 justify-end text-slate-500" href="/contact">
											<span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label"></span>
											<span>Contact</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col col-12 p-0">
							<div class="divider w-full py-30">
								<span class="separator w-full border-top border-lightgray"></span>
							</div>
						</div>
						<div class="col col-12 col-md-7">
							<div class="ld-fancy-heading relative module-text">
								<p class="ld-fh-element inline-block relative mb-0/5em text-12 leading-20">Ces conditions seront pleinement appliquées et affecteront votre utilisation de ce site Web. En utilisant ce site Web, vous avez accepté tous les termes et conditions écrits ici. Vous ne devez pas utiliser ce site Web si vous n'êtes pas d'accord avec l'une de ces normes de site Web.</p>
							</div>
						</div>
						<div class="col col-12 col-md-5 sm:text-start">
							<ul class="icon-list-items inline-items flex flex-wrap justify-end list-none pl-0 mb-0 sm:justify-start">
								<li class=" icon-list-item inline-item flex justify-end text-end mx-10">
									<span class="icon-list-icon text-start">
										<svg class="w-30 h-30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="#6A7A90">
											<path d="M180.5,74.262C80.813,74.262,0,155.633,0,256S80.819,437.738,180.5,437.738,361,356.373,361,256,280.191,74.262,180.5,74.262Zm288.25,10.646c-49.845,0-90.245,76.619-90.245,171.095s40.406,171.1,90.251,171.1,90.251-76.619,90.251-171.1H559C559,161.5,518.6,84.908,468.752,84.908Zm139.506,17.821c-17.526,0-31.735,68.628-31.735,153.274s14.2,153.274,31.735,153.274S640,340.631,640,256C640,171.351,625.785,102.729,608.258,102.729Z" />
										</svg>
									</span>
									<span class="icon-list-text self-center pl-5"></span>
								</li>
								<li class="icon-list-item inline-item flex justify-end text-end mx-10">
									<span class="icon-list-icon text-start">
										<svg class="w-30 h-30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#6A7A90">
											<path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
										</svg>
									</span>
									<span class="icon-list-text self-center pl-5"></span>
								</li>
								<li class="icon-list-item inline-item flex justify-end text-end mx-10">
									<span class="icon-list-icon text-start">
										<svg class="w-30 h-30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#6A7A90">
											<path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
										</svg>
									</span>
									<span class="icon-list-text self-center pl-5"></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
        </div>
		
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>		
	<script src="<?= URL ?>/public/assets/js/video-lazyload.js"></script>
	<script src="<?= URL ?>/public/assets/js/mailer.js"></script>
	<script src="<?= URL ?>/public/assets/js/iss.js"></script>
	<script src="<?= URL ?>/public/assets/js/modal.js"></script>
	<script src="<?= URL ?>/public/assets/js/toggle-header.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/jquery.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/fastdom/fastdom.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/fresco/js/fresco.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/lity/lity.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/gsap/minified/gsap.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/gsap/utils/CustomEase.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/gsap/minified/DrawSVGPlugin.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/gsap/minified/ScrollTrigger.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/draw-shape/liquidDrawShape.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/animated-blob/liquidAnimatedBlob.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/fontfaceobserver.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/tinycolor-min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/gsap/utils/SplitText.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/matter/matter.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/throwable/liquidThrowable.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/flickity/flickity.pkgd.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/flickity/flickity-fade.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/lottie/lottie.min.js"></script>
	<script src="<?= URL ?>/public/assets/js/liquid-gdpr.min.js"></script>
	<script src="<?= URL ?>/public/assets/js/theme.js"></script>
	<script src="<?= URL ?>/public/assets/js/liquid-ajax-contact-form.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/isotope/isotope.pkgd.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/isotope/packery-mode.pkgd.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/imagesloaded.pkgd.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/draggabilly.pkgd.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/particles.min.js"></script>
	<script src="<?= URL ?>/public/assets/js/demo/start-hub-x.js"></script>
	<script src="<?= URL ?>/public/assets/js/demo/start-hub-4.js"></script>
    </body>
</html>