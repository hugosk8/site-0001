<?php
$theme = [
	'google' => [
		1 => 'rgba(66, 133, 244, 0.6)',
		2 => 'rgba(52, 168, 83, 1)',
		3 => 'rgba(251, 188, 5, 0.6)',
		4 => 'rgba(234, 67, 53, 0.6)',
		'title' => 'Google Ads',
		'id' => 'google'
	],
	'youtube' => [
		1 => 'rgba(255, 0, 0, 0.6)',
		2 => 'rgba(196, 48, 43, 1)',
		3 => 'rgba(255, 110, 64, 0.6)',
		4 => 'rgba(255, 210, 210, 0.6)',
		'title' => 'Youtube Ads',
		'id' => 'youtube'
	],
	'facebook' => [
		1 => 'rgba(24, 119, 242, 0.6)',
		2 => 'rgba(59, 89, 152, 1)',
		3 => 'rgba(139, 157, 195, 0.6)',
		4 => 'rgba(223, 227, 238, 0.6)',
		'title' => 'Facebook Ads',
		'id' => 'facebook'
	],
];

switch ($page) {
	case 'googleAds':
		$pageTheme = $theme['google'];
		$metaDescription = "Boostez votre visibilité en ligne grâce à nos Google Ads sur-mesure. Expertise, stratégie et résultats pour votre entreprise.";
		$title = "Google Ads - 0001";
		break;
	case 'youtubeAds':
		$pageTheme = $theme['youtube'];
		$metaDescription = "Renforcez votre impact grâce à nos YouTube Ads. Création et gestion de campagnes vidéo ciblées pour captiver votre audience.";
		$title = "Youtube Ads - 0001";
		break;
	case 'facebookAds':
		$pageTheme = $theme['facebook'];
		$metaDescription = "Maximisez votre présence sur Facebook avec nos campagnes Ads créatives et personnalisées. Atteignez votre audience idéale efficacement.";
		$title = "Facebook Ads - 0001";
		break;
}
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
	<link rel="icon" type="image/ico" sizes="32x32" href="<?= URL ?>/public/assets/images/0001/logo/favicon0001.png">


	<link rel="stylesheet" type="text/css" href="<?= URL ?>/public/assets/css/combined.css">
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/public/assets/css/style.css">

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

<body class="lqd-preloader-activated lqd-preloader-style-spinner" data-localscroll-offset="120"
	data-mobile-nav-breakpoint="1199" data-mobile-nav-style="minimal" data-mobile-nav-scheme="light"
	data-mobile-nav-trigger-alignment="right" data-mobile-header-scheme="light" data-mobile-logo-alignment="default"
	data-overlay-onmobile="false">
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
										<a href="/agence-web">
											Agence Web
										</a>
									</li>
									<li class="header-li">
										<a href="/marketing">
											Marketing
											<span class="link-icon inline-flex hide-if-empty right-icon toggle-submenu">
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
														class="has-spinner text-14 font-medium h-40 border-none bg-primary text-white submit-button">
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
			<!-- Header Banner -->
			<section
				class="lqd-section banner min-h-100vh flex flex-wrap flex-row items-center justify-around transition-all bg-no-repeat bg-center bg-cover"
				id="banner" style="background-image: url(<?= URL ?>/public/assets/images/demo/start-hub-5/banner-bg.svg);">
				<div class="lqd-shape lqd-shape-bottom rotate-180 module-shape" data-negative="false">
					<svg class="lqd-custom-shape h-420 -z-1 left-50percent" fill="none" height="461"
						viewBox="0 0 1440 461" width="1440" xmlns="http://www.w3.org/2000/svg"
						preserveAspectRatio="none">
						<path class="lqd-shape-fill"
							d="m0 131.906 34.4-20.017c34.4-19.9 103.2-59.936 171.68-82.979 68.64-23.043 136.8-29.328003 205.44-4.306 68.48 25.022 137.28 81.35 205.76 80.768 68.64-.582 136.8-58.074 205.44-84.608 68.48-26.535 137.28-22.345 205.76-16.06 68.64 6.168 136.8 14.315 205.44 22.811 68.48 8.612 137.28 17.457 171.68 22l34.4 4.422v396.851h-1440z"
							fill-opacity=".09" fill="<?= $pageTheme[3] ?>">
							<animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="10s"
								values="M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z; M0 122.906L36.5 109C71.5 96.372 102.52 67.98 171 44.937C239.64 21.894 354.36 51.478 423 76.5C491.48 101.522 546.52 19.097 615 18.515C683.64 17.933 799.36 58.534 868 32C936.48 5.46499 1039.52 54.715 1108 61C1176.64 67.168 1190.36 -6.996 1259 1.5C1327.48 10.112 1371.2 35.972 1405.6 40.515L1440 44.937V441.788H0L0 122.906Z; M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z">
							</animate>
						</path>
						<path class="lqd-shape-fill"
							d=" M0 154.75L34.4 142.201C68.8 129.53 137.6 104.433 206.08 99.072C274.72 93.833 342.88 108.453 411.52 122.099C480 135.622 548.8 148.293 617.28 142.811C685.92 137.329 754.08 113.693 822.72 113.693C891.2 113.693 960 137.329 1028.48 152.68C1097.12 168.153 1165.28 175.463 1233.92 184.966C1302.4 194.591 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z"
							fill="<?= $pageTheme[2] ?>" fill-opacity="1">
							<animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="8s"
								values="M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 33.4 177.201 55 176.5C76.6 175.799 137.52 110.361 206 105C274.64 99.761 332.86 141.104 401.5 154.75C469.98 168.273 527.52 206.982 596 201.5C664.64 196.018 747.86 75 816.5 75C884.98 75 956.52 118.149 1025 133.5C1093.64 148.973 1163.36 87.497 1232 97C1300.48 106.625 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z">
							</animate>
						</path>
						<path class="lqd-shape-fill"
							d=" M0 340.22L34.4 333.92C68.8 327.52 137.6 314.92 206.08 312.22C274.72 309.52 342.88 316.92 411.52 319.72C480 322.52 548.8 320.92 617.28 318.92C685.92 316.92 754.08 314.52 822.72 316.02C891.2 317.52 960 322.92 1028.48 309.42C1097.12 295.92 1165.28 263.52 1233.92 251.02C1302.4 238.52 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z"
							fill="<?= $pageTheme[1] ?>" fill-opacity="1">
							<animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="6.5s"
								values="M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z; M0 340.22L37.5 323C71.9 316.6 137.52 336.62 206 333.92C274.64 331.22 339.86 272.2 408.5 275C476.98 277.8 551.02 304 619.5 302C688.14 300 759.36 266.5 828 268C896.48 269.5 962.02 336.5 1030.5 323C1099.14 309.5 1156.36 232.5 1225 220C1293.48 207.5 1364.1 249.62 1398.5 253.22L1440 253.22V453.22H0L0 340.22Z; M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z">
							</animate>
						</path>
						<path class="lqd-shape-fill"
							d=" M1440 337.719L1405.6 340.219C1371.2 342.719 1302.4 347.719 1233.92 350.419C1165.28 353.019 1097.12 353.419 1028.48 352.219C960 351.019 891.2 348.419 822.72 357.019C754.08 365.719 685.92 385.719 617.28 395.919C548.8 406.019 480 406.419 411.52 395.919C342.88 385.419 274.72 364.019 206.08 359.419C137.6 354.719 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z"
							fill="#fff" fill-opacity="1">
							<animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="5.5s"
								values="M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1295.98 326.3 1227.5 329C1158.86 331.6 1081.64 391.2 1013 390C944.52 388.8 874.48 364.119 806 372.719C737.36 381.419 675.14 296.3 606.5 306.5C538.02 316.6 471.48 383.219 403 372.719C334.36 362.219 272.64 320.6 204 316C135.52 311.3 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z">
							</animate>
						</path>
					</svg>
				</div>
				<div class="module-img-1 absolute w-130 top-60percent" data-parallax="true"
					data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
					data-parallax-from='{"y": "136px", "rotationZ" : 0}'
					data-parallax-to='{"y": "-205px", "rotationZ" : 80}' data-custom-animations="true"
					data-ca-options='{"animationTarget": ".animation-element", "startDelay" : 1000, "ease" : ["power4.out"], "initValues": {"x": "100px", "opacity" : 0}, "animations": {"x": "0px", "opacity" : 1}}'>
					<div class="lqd-imggrp-single block relative w-full max-w-full">
						<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
							<figure class="w-full relative animation-element">
								<img width="260" height="297"
									src="<?= URL ?>/public/assets/images/demo/start-hub-5/shape-circle-green.png" alt="shape">
							</figure>
						</div>
					</div>
				</div>
				<div class="container min-h-100vh flex flex-wrap justify-around">
					<div class="w-full relative flex flex-col items-center justify-end module-middle sm:flex-wrap"
						data-custom-animations="true"
						data-ca-options='{"animationTarget": "h1, p, .btn, figure", "duration" : 1000, "startDelay" : 50, "delay" : 65, "ease": "expo.out", "initValues": {"y": "100px", "scaleX" : 1.5, "scaleY" : 1.5, "opacity" : 0}, "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
						<div class="module-img-2 absolute w-75 top-55percent z-1" data-parallax="true"
							data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
							data-parallax-from='{"y": "200px"}' data-parallax-to='{"y": "-350px"}'>
							<div class="lqd-imggrp-single block relative" data-float="ease-in-out">
								<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
									<figure class="w-full relative">
										<img width="150" height="138"
											src="<?= URL ?>/public/assets/images/demo/start-hub-5/shape-crown.png" alt="shape">
									</figure>
								</div>
							</div>
						</div>
						<div class="module-img-3 absolute w-110 -top-10percent sm:hidden" data-parallax="true"
							data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
							data-parallax-from='{"y": "150px"}' data-parallax-to='{"y": "-150px"}'>
							<div class="lqd-imggrp-single block relative" data-float="ease-in-out">
								<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
									<figure class="w-full relative">
										<img width="222" height="290"
											src="<?= URL ?>/public/assets/images/demo/start-hub-5/shape-person.png" alt="shape">
									</figure>
								</div>
							</div>
						</div>
						<div class="ld-fancy-heading relative w-full max-w-full text-center">
							<h1 class="ld-fh-element mb-0/25em inline-block relative lqd-highlight-custom lqd-highlight-custom-2 lqd-split-lines text-82 leading-1em text-white"
								data-inview="true" data-transition-delay="true"
								data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'
								data-split-text="true" data-split-options='{"type": "lines"}'>
								<mark class="lqd-highlight">
									<span class="lqd-highlight-txt">
										<?= $pageTheme['title'] ?>
									</span>
									<span class="lqd-highlight-inner left-0 -bottom-0/1em">
										<svg class="lqd-highlight-brush-svg lqd-highlight-brush-svg-1"
											xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504"
											viewBox="0 0 235.509 13.504" aria-hidden="true" preserveAspectRatio="none">
											<path
												d="M163, .383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0, .088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1, .618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1, .206.889q0, .444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1, .185.011,1.226,1.226,0,0,1, .33-.1,3.656,3.656,0,0,0, .515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1, .821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0, .309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1, .137.07Z"
												transform="translate(0 0.002)" />
										</svg>
										<svg class="lqd-highlight-pen" width="51" height="51" viewBox="0 0 51 51"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M36.204 1.044C32.02 2.814 5.66 31.155 4.514 35.116c-.632 2.182-1.75 5.516-2.483 7.409-3.024 7.805-1.54 9.29 6.265 6.265 1.893-.733 5.227-1.848 7.41-2.477 3.834-1.105 4.473-1.647 19.175-16.27 0 0 10.63-10.546 15.21-15.125C53 8.997 42.021-1.418 36.203 1.044Zm7.263 5.369c3.56 3.28 4.114 4.749 2.643 6.995l-1.115 1.7-4.586-4.543-4.585-4.544 1.42-1.157C39.311 3.18 40.2 3.4 43.467 6.413ZM37.863 13.3l4.266 4.304-11.547 11.561-11.547 11.561-4.48-4.446-4.481-4.447 11.404-11.418c6.273-6.28 11.566-11.42 11.762-11.42.197 0 2.277 1.938 4.623 4.305ZM12.016 39.03l3.54 3.584-3.562 1.098-5.316 1.641c-1.665.516-1.727.455-1.211-1.21l1.614-5.226c1.289-4.177.685-4.191 4.935.113Z" />
										</svg>
										<svg id="<?= $pageTheme['id'] ?>"
											class="lqd-highlight-brush-svg lqd-highlight-brush-svg-2" width="233"
											height="13" viewBox="0 0 233 13" xmlns="http://www.w3.org/2000/svg"
											aria-hidden="true" preserveAspectRatio="none" fill="currentColor">
											<path
												d="m.624 9.414-.312-2.48C0 4.454.001 4.454.002 4.454l.035-.005.102-.013.398-.047c.351-.042.872-.102 1.557-.179 1.37-.152 3.401-.368 6.05-.622C13.44 3.081 21.212 2.42 31.13 1.804 50.966.572 79.394-.48 113.797.24c34.387.717 63.927 2.663 84.874 4.429a1048.61 1048.61 0 0 1 24.513 2.34 641.605 641.605 0 0 1 8.243.944l.432.054.149.02-.318 2.479-.319 2.48-.137-.018c-.094-.012-.234-.03-.421-.052a634.593 634.593 0 0 0-8.167-.936 1043.26 1043.26 0 0 0-24.395-2.329c-20.864-1.76-50.296-3.697-84.558-4.413-34.246-.714-62.535.332-82.253 1.556-9.859.612-17.574 1.269-22.82 1.772-2.622.251-4.627.464-5.973.614a213.493 213.493 0 0 0-1.901.22l-.094.01-.028.004Z" />
										</svg>
										<svg class="lqd-highlight-brush-svg lqd-highlight-brush-svg-3"
											aria-hidden="true" preserveAspectRatio="none" width="198" height="73"
											viewBox="0 0 198 73" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path>
												p="M2.01552 34.4474C2.47578 34.6889 2.50693 34.5903 2.16023
												34.1233C1.43556 33.1192 0.0859359 27.4895 0.559288 27.3889C0.774448
												27.3431 0.83309 27.0373 0.700676 26.679C0.568262 26.3208 0.771476
												26.0506 1.1747 26.0528C1.57327 26.0764 1.82588 25.8366 1.75995
												25.5266C1.69401 25.2165 1.47155 25.0165 1.25248 25.0631C1.0334 25.1097
												0.834346 24.9475 0.775482 24.6708C0.716618 24.394 1.10706 24.1678 1.6498
												24.1291C2.63867 24.0731 3.05732 22.7635 2.17693 22.4836C1.9012 22.4032
												2.06656 22.229 2.5556 22.0964C3.11954 21.9458 3.42557 22.1158 3.39771
												22.5664C3.36736 23.0053 3.65609 23.2526 4.12825 23.1992C5.29377 23.075
												5.61444 23.5782 4.906 24.424C4.65184 24.7544 4.34369 25.0394 3.99456
												25.267C3.82555 25.3183 3.74367 25.5677 3.77733 25.8846C3.7977 26.3381
												3.734 26.7915 3.58945 27.2218C3.42894 27.8231 3.39405 28.4509 3.48696
												29.0663C3.58253 29.63 3.48825 30.2095 3.21892 30.7139C2.9406 31.0971
												2.94306 31.2673 3.24428 31.2032C3.70688 31.1048 4.72117 32.9132 4.80429
												33.9913C4.82912 34.3724 5.00368 34.6645 5.16505 34.6302C5.32642 34.5958
												5.7821 34.9937 6.1968 35.5689C6.62228 36.1276 6.74531 36.4561 6.50306
												36.3216C6.2608 36.187 6.25164 36.5141 6.48173 37.0672C6.71182 37.6204
												7.07155 37.8843 7.30909 37.6794C7.54663 37.4745 8.00577 37.6243 8.37519
												38.0394C8.7446 38.4546 8.90305 38.7767 8.72016 38.8156C8.55879 38.8499
												8.88485 39.1669 9.42779 39.4992C9.9588 39.8151 10.37 40.2982 10.597
												40.8728C10.6664 41.0876 10.8047 41.2735 10.9906 41.4017C11.1764 41.5298
												11.3994 41.593 11.6248 41.5814C11.9474 41.6377 12.2542 41.7625 12.5244
												41.9475C12.7946 42.1326 13.0219 42.3734 13.191 42.6539C13.5597 43.2246
												13.9597 43.5719 14.0402 43.3688C14.1348 43.179 14.9022 43.5095 15.7511
												44.1171C16.9235 45.0576 18.2163 45.8374 19.5951 46.4358C20.3026 46.7484
												20.8941 47.2564 20.9139 47.5609C20.9306 47.8507 21.6753 48.2331 22.5899
												48.4096C23.6677 48.6128 24.2941 49.0204 24.4166 49.5964C24.5863 50.3944
												24.5433 50.4036 24.0652 49.7948C23.5733 49.1737 23.5264 49.1836 23.6961
												49.9817C23.9193 51.0311 24.3702 51.0895 24.8044 50.117C24.9078 49.9458
												25.0668 49.8152 25.255 49.7471C25.4431 49.679 25.6489 49.6775 25.838
												49.7429C26.531 49.9348 26.5361 50.0115 25.8602 50.5876C25.4219 50.9589
												25.2635 51.4301 25.4904 51.7325C25.7644 52.1219 25.9195 52.0583 26.086
												51.4668C26.2694 50.887 26.4001 50.8285 26.6297 51.2734C26.8764 51.7464
												27.0593 51.7075 27.5656 51.0744C27.9725 50.5554 28.3213 50.4506 28.5763
												50.7511C28.8312 51.0297 29.176 51.2096 29.5503 51.2595C30.3668 51.482
												31.147 51.8207 31.867 52.2654C32.4737 52.6661 33.1345 52.9782 33.8295
												53.1922C35.8327 53.7636 37.7963 54.4657 39.7076 55.294C40.0627 55.4539
												40.4483 55.5351 40.8377 55.532C41.5926 55.6364 42.3308 55.8378 43.0342
												56.1311C46.6557 57.3817 50.3413 58.4388 54.0752 59.2979C54.2796 59.2544
												54.7311 59.4978 55.1775 59.8812C55.624 60.2647 56.0582 60.3737 56.2249
												60.1532C56.3917 59.9327 56.8596 60.0183 57.2878 60.3443C57.7159 60.6703
												58.1392 60.8583 58.259 60.7868C58.6639 60.7479 59.0724 60.8038 59.4519
												60.9502C59.9257 61.1043 60.4246 61.1658 60.9216 61.1314C61.6531 60.9758
												63.7635 61.9632 63.5808 62.3731C63.4862 62.5629 63.7368 62.525 64.1249
												62.2881C64.967 61.7532 67.7859 62.2659 67.937 62.9759C67.9967 63.2566
												68.2276 63.2852 68.4126 63.0445C68.6525 62.7307 68.7594 62.8777 68.721
												63.49C68.692 64.2526 68.7769 64.2816 69.2401 63.6576C69.6699 63.0878
												70.4171 63.0056 72.5246 63.3455C74.0148 63.5847 75.2012 63.9815 75.1437
												64.24C75.1329 64.2982 75.1361 64.3581 75.153 64.4147C75.1699 64.4714
												75.2001 64.5232 75.2411 64.5659C75.282 64.6085 75.3326 64.6408 75.3885
												64.66C75.4444 64.6792 75.5041 64.6848 75.5626 64.6764C75.8409 64.6632
												76.5085 64.6296 77.0577 64.6211C77.6068 64.6127 78.3066 64.5722 78.6356
												64.5329C79.2789 64.524 79.9212 64.5841 80.5516 64.7122C81.4985 64.8819
												81.8566 65.1911 81.8242 65.8318C81.7854 66.4421 81.889 66.5591 82.1444
												66.2268C82.6475 65.579 85.959 64.9371 86.3656 65.4067C86.4511 65.5152
												86.5584 65.6046 86.6806 65.6691C86.8027 65.7336 86.9371 65.7718 87.0749
												65.7813C87.2995 65.7795 88.1796 65.7937 89.0563 65.7922C89.9727 65.823
												90.8557 66.1434 91.5786 66.7074C92.5226 67.6035 93.1018 67.789 92.5291
												67C92.3234 66.7197 92.6558 66.4323 93.3443 66.2859C93.9898 66.1486
												94.5534 66.2608 94.6131 66.5415C94.6697 66.8075 95.2086 66.9096 95.7723
												66.758C97.0616 66.4225 101.054 66.793 101.151 67.2497C101.195 67.457
												102.013 67.4987 103.012 67.3477C104.01 67.1967 104.966 67.2867 105.158
												67.5555C105.336 67.8111 106.016 67.8844 106.665 67.7135C107.258 67.5487
												107.887 67.5713 108.467 67.7781C108.909 67.9854 109.397 68.0782 109.885
												68.0479C112.431 67.6694 115.008 67.5507 117.578 67.6935C118.601 67.8213
												119.632 67.8601 120.662 67.8096C121.483 67.7586 122.81 67.7084 123.566
												67.7174C125.899 67.7465 133.92 67.4462 136.632 67.2406C138.042 67.145
												139.624 67.0366 140.173 67.0281C140.723 67.0197 142.563 66.8439 144.276
												66.6503C145.989 66.4567 148.72 66.1837 150.331 66.0423C152.472 65.8364
												154.601 65.5229 156.71 65.1028C158.02 64.7423 159.384 64.6198 160.737
												64.7411C160.898 64.8286 161.086 64.8501 161.263 64.8012C161.439 64.7522
												161.589 64.6366 161.682 64.4788C161.873 64.1601 164.294 63.3825 167.074
												62.7606C168.909 62.433 170.706 61.9213 172.439 61.2332C172.616 61.0104
												172.834 61.2421 172.944 61.7595C173.123 62.6015 173.166 62.5924 173.43
												61.7175C173.642 61.0232 174.531 60.4949 176.437 59.8891C177.459 59.6281
												178.446 59.2466 179.378 58.7526C180.024 58.3283 180.724 57.9924 181.459
												57.7538C182.508 57.3607 183.504 56.8374 184.422 56.1964C185.283 55.535
												185.702 55.4458 186.242 55.8707C186.815 56.2896 186.884 56.2453 186.58
												55.6599C186.147 54.8411 187.679 53.586 188.529 54.04C188.797 54.1876
												188.852 54.0796 188.654 53.7814C188.338 53.3538 189.823 52.0342 190.545
												52.0974C190.716 52.1071 190.785 51.9072 190.72 51.5972C190.704 51.5274
												190.703 51.4552 190.716 51.385C190.729 51.3148 190.757 51.2481 190.797
												51.1889C190.837 51.1297 190.889 51.0793 190.949 51.0409C191.009 51.0025
												191.077 50.9768 191.147 50.9654C191.825 50.8213 193.319 47.4297 193.648
												45.2744C194.298 41.1199 191.318 36.5943 184.205 30.9084C183.488 30.3353
												182.994 29.6522 183.105 29.3812C183.223 29.0932 183.182 29.058 182.982
												29.2836C182.809 29.4748 180.918 28.6718 178.837 27.5073C177.591 26.9064
												176.421 26.1602 175.351 25.2843C175.546 25.2427 174.36 24.6455 172.691
												23.9343C171.411 23.4152 170.17 22.8068 168.975 22.1137C168.651 21.8497
												168.256 21.685 167.84 21.6396C167.398 21.6959 166.95 21.6014 166.569
												21.3714C166.187 21.1415 165.894 20.7895 165.738 20.3725C165.625 19.8404
												165.339 19.7157 164.882 19.9983C164.674 20.1102 164.435 20.1493 164.202
												20.1093C163.97 20.0693 163.757 19.9525 163.598 19.7776C163.263 19.4165
												162.887 19.3156 162.704 19.5355C162.52 19.7554 162.007 19.5907 161.467
												19.1648C160.926 18.739 160.564 18.5687 160.608 18.776C160.65 18.9716
												160.222 18.9193 159.696 18.6633C159.161 18.4214 158.56 18.2916 158.402
												18.3977C158.245 18.5037 157.921 18.1443 157.691 17.5911C157.437 16.9806
												157.084 16.747 156.796 16.978C156.226 17.4703 152.17 16.5869 152.032
												15.9365C151.978 15.6852 151.665 15.536 151.321 15.6093C150.686 15.7443
												145.726 14.5748 143.393 13.7574C142.191 13.382 140.965 13.0906 139.722
												12.8852C138.15 12.6327 137.289 12.2292 137.179 11.7119C137.054 11.1251
												136.882 11.0593 136.496 11.5176C135.922 12.1806 125.958 10.3446 124.792
												9.35764C124.009 8.69001 123.626 8.6786 124.102 9.33486C124.307 9.61514
												124.176 9.73617 123.794 9.63237C123.412 9.52856 123.181 9.23721 123.239
												8.97864C123.289 8.73583 123.026 8.71727 122.666 8.93069C122.068 9.28997
												118.527 8.97692 116.534 8.38166C116.135 8.26348 115.721 8.20578 115.305
												8.21049C112.808 8.30931 99.8959 6.49821 99.4183 5.99767C99.0798 5.62193
												98.7673 5.58005 98.7055 5.87123C98.5979 6.32652 96.1061 6.28505 86.0379
												5.63053C84.7716 5.54513 73.6532 5.50444 65.8819 5.5462C65.2189 5.54818
												63.1165 5.65592 61.1525 5.77923C59.1884 5.90254 57.2121 5.96815 56.718
												5.91886C54.6288 6.04988 52.5476 6.28778 50.4827 6.63164C47.5472 7.05152
												44.7804 7.36599 44.3334 7.32613C42.6128 7.16663 25.8045 11.1431 21.4751
												12.7284C17.1146 14.3355 16.9521 14.3548 16.565 13.4333C16.2509 12.6966
												15.9689 12.5869 15.2898 12.9889C15.1696 13.0774 15.0325 13.14 14.8869
												13.1728C14.7414 13.2057 14.5906 13.208 14.4441 13.1798C14.2976 13.1515
												14.1585 13.0932 14.0357 13.0085C13.9128 12.9238 13.8088 12.8147 13.7302
												12.6878C13.1443 11.9947 13.1347 11.9497 13.7167 12.4127C14.274 12.8656
												14.4722 12.7927 14.8686 12.0133C15.8626 10.0252 27.7222 5.72632 35.0839
												4.68607C35.3453 4.64583 35.7251 5.16304 35.8796 5.78341C36.1539 6.91494
												36.1647 6.91265 36.1848 5.57948C36.2104 4.43116 36.2654 4.37244 36.5225
												5.24493C36.7851 6.16226 36.8152 6.14052 36.8037 4.98069C36.7979 4.26635
												36.9261 3.81178 37.0821 3.96363C39.3031 3.87683 41.5125 3.59814 43.6855
												3.13067C51.0682 1.83856 50.1603 1.95804 55.2788 1.54516C64.3348 0.824345
												67.6766 0.622705 68.271 0.774321C69.3049 0.830904 70.3419 0.781627
												71.3658 0.627257C72.3124 0.457587 73.2785 0.424245 74.2346
												0.528242C74.8495 0.681042 75.4868 0.723424 76.1165 0.653413C76.8783
												0.599373 77.6427 0.591449 78.4054 0.629692C78.864 0.67118 80.3191
												0.639758 81.6972 0.563382C82.764 0.419993 83.8496 0.578682 84.8307
												1.02142C85.1644 1.32152 85.5938 1.38455 85.7295 1.12364C85.8652 0.862742
												88.0846 0.777115 90.6421 0.958983C93.1867 1.13336 97.0388 1.37518
												99.1675 1.49696C104.25 1.7603 116.16 3.1986 117.539 3.70681C118.165
												3.93644 118.826 4.05696 119.493 4.06311C121.269 4.00934 125.365 4.86887
												125.462 5.32657C125.522 5.60726 125.678 5.65185 125.844 5.43038C126.144
												5.04256 130.388 5.69987 130.845 6.20694C131.06 6.39529 131.333 6.5057
												131.62 6.5205C135.384 6.77084 136.141 6.94911 137.095 7.75017C137.682
												8.23859 138.068 8.36098 137.999 8.03628C137.93 7.71158 138.115 7.57911
												138.43 7.74001C138.739 7.90538 139.078 8.00708 139.427 8.0391C142.822
												8.63915 146.171 9.47525 149.45 10.5413C149.618 10.6652 149.81 10.7534
												150.013 10.8005C150.216 10.8476 150.427 10.8526 150.633 10.8152C151.265
												10.8411 151.864 11.1057 152.308 11.5557C152.84 12.0448 153.237 12.2229
												153.181 11.9569C153.124 11.6909 153.791 11.8118 154.637 12.2493C155.331
												12.5278 155.924 13.0106 156.337 13.6337C156.419 14.018 156.523 13.9805
												156.626 13.5109C156.756 12.9579 157.229 12.981 158.762 13.6128C159.589
												13.975 160.445 14.2682 161.321 14.4895C161.485 14.5127 161.643 14.5695
												161.785 14.6564C161.926 14.7432 162.048 14.8582 162.144 14.9942C162.225
												15.123 162.344 15.2236 162.484 15.2823C162.625 15.341 162.78 15.3548
												162.929 15.322C163.23 15.2579 163.428 15.4479 163.374 15.7221C163.312
												16.0133 163.578 16.0497 163.97 15.8274C164.361 15.6052 164.73 15.6503
												164.793 15.9457C164.856 16.241 165.15 16.3022 165.42 16.0904C165.687
												15.864 165.984 15.9398 166.05 16.2499C166.119 16.5746 165.989 16.8648
												165.774 16.9106C165.559 16.9563 165.52 17.1966 165.715 17.4792C165.91
												17.7618 166.282 17.7133 166.611 17.3663C166.752 17.2127 166.926 17.0923
												167.119 17.0137C167.312 16.9351 167.521 16.9003 167.729 16.9119C168.105
												16.9864 168.046 17.2922 167.564 17.8272C167.153 18.275 166.888 18.8377
												166.805 19.4401C166.79 20.0567 166.895 20.023 167.232 19.2257C167.982
												17.5214 169.644 17.2447 171.053 18.5827C171.532 19.0369 172.096 19.2564
												172.247 19.0698C172.417 18.864 172.607 18.9627 172.673 19.2727C172.739
												19.5827 172.939 19.6791 173.121 19.4555C173.29 19.2497 173.488 19.3314
												173.554 19.6414C173.62 19.9515 173.802 20.0671 173.942 19.8828C174.086
												19.7132 174.644 19.9033 175.135 20.309C176.869 21.7322 178.975 22.8748
												179.599 22.7421C179.806 22.729 180.012 22.7806 180.188 22.8896C180.365
												22.9986 180.503 23.1597 180.583 23.3506C180.79 23.7391 181.095 23.9062
												181.254 23.7027C181.432 23.4799 181.737 23.7543 182.001 24.3615C182.252
												24.9574 182.561 25.2464 182.738 25.0227C182.896 24.8041 184.546 25.7504
												186.386 27.109C189.931 29.7531 192.963 33.0231 195.332 36.7578C196.413
												38.7216 197.581 42.3658 197.258 42.8045C197.147 43.3124 197.208 43.8429
												197.433 44.312C197.981 45.831 196.722 50.8582 195.754 51.0641C195.558
												51.1232 195.391 51.2541 195.287 51.4309C195.182 51.6077 195.149 51.8173
												195.192 52.0178C195.194 52.3304 195.129 52.6399 195.002 52.9254C194.875
												53.211 194.688 53.466 194.454 53.6734C193.941 54.17 193.501 54.7367
												193.148 55.3568C193.079 55.5519 192.948 55.7194 192.776 55.834C192.603
												55.9486 192.399 56.0042 192.192 55.9924C191.895 55.9166 191.663 56.0436
												191.71 56.2646C191.908 57.1957 186.504 60.8629 184.002 61.4726C183.438
												61.6232 183.099 61.8813 183.243 62.0817C183.387 62.2822 182.909 62.57
												182.177 62.7256C181.445 62.8811 180.752 62.8437 180.608 62.6423C180.477
												62.4532 180.491 62.6212 180.634 62.9761C180.841 63.4727 180.607 63.6461
												179.72 63.6499C179.046 63.6542 178.573 63.8631 178.627 64.1144C178.677
												64.3511 177.863 64.6479 176.776 64.7707C175.689 64.8936 174.77 65.2279
												174.698 65.5195C174.625 65.811 172.575 66.4821 170.135 67.0151C167.696
												67.5482 164.58 68.2274 163.217 68.5326C160.09 69.2129 147.087 71.3138
												144.715 71.5251C143.754 71.6058 141.962 71.6935 140.769 71.7153C139.584
												71.7504 138.236 71.8216 137.813 71.8808C135.225 72.2461 131.702 72.1765
												131.617 71.7775C131.61 71.7182 131.592 71.661 131.562 71.6092C131.532
												71.5574 131.492 71.5121 131.445 71.476C131.397 71.4399 131.343 71.4138
												131.285 71.3992C131.227 71.3846 131.167 71.3819 131.108 71.3911C130.893
												71.4369 130.885 71.7166 131.101 71.9946C131.352 72.3277 131.202 72.468
												130.712 72.3841C128.928 72.2122 127.133 72.1908 125.346 72.3201C123.371
												72.513 121.386 72.574 119.403 72.5026C118 72.3744 116.592 72.318 115.184
												72.3337C113.631 72.3574 112.079 72.2693 110.54 72.0701C109.719 71.785
												108.853 71.6549 107.984 71.6865C106.732 71.6134 106.408 71.3573 106.184
												70.3079C106.039 69.6233 105.778 69.1892 105.627 69.3768C105.557 69.6038
												105.533 69.8424 105.557 70.0787C105.58 70.315 105.65 70.5443 105.762
												70.7535C106.255 71.9622 105.716 72.2312 104.797 71.2369C104.642 71.0569
												104.447 70.915 104.229 70.8222C104.01 70.7294 103.773 70.6881 103.536
												70.7016C103.069 70.8316 103.126 70.9431 103.769 71.1631C104.759 71.4933
												104.118 71.8452 103.055 71.5623C102.504 71.4015 102.428 71.201 102.672
												70.5009C102.917 69.8008 102.824 69.7734 102.105 70.374C101.534 70.819
												100.846 71.0889 100.124 71.1512C99.4919 71.1926 98.5118 71.2896 97.8929
												71.3936C96.9335 71.5353 96.7807 71.3981 96.6925 70.2434C96.6447 69.538
												96.4688 69.0857 96.325 69.2553C96.1625 69.5675 96.1193 69.928 96.2033
												70.2697C96.2851 70.6541 95.9696 70.9685 95.459 70.9994C94.9913 71.0212
												94.3486 71.0659 94.0873 71.1061C93.8121 71.134 93.5775 70.9825 93.5659
												70.7693C93.4503 69.697 93.163 69.4034 92.99 70.1762C92.8271 70.8907
												92.7088 70.9158 91.9522 70.3192C91.645 70.113 91.2937 69.9815 90.9266
												69.9353C90.5594 69.8892 90.1866 69.9296 89.8379 70.0534C88.9093 70.2705
												87.9397 70.2368 87.0284 69.9557C86.5318 69.7631 86.0131 69.633 85.4843
												69.5686C85.5315 69.7906 82.311 69.6107 81.4559 69.3438C80.986 69.1964
												79.4771 68.8692 78.1084 68.6195C76.9935 68.4719 75.9244 68.0825 74.9758
												67.4784C74.6297 67.1196 74.3862 67.0324 74.4459 67.3131C74.6032 68.0524
												71.088 68.0732 69.3771 67.3249C68.6343 67.0045 67.9836 66.9057 67.8853
												67.1311C67.7908 67.3209 67.641 67.1984 67.5755 66.8903C67.5031 66.5499
												67.027 66.3732 66.4891 66.4876C65.2734 66.7461 59.976 65.6637 59.6604
												65.098C59.5455 64.8751 58.9776 64.7955 58.3644 64.9259C57.7512 65.0563
												57.1394 64.982 56.9685 64.7598C56.556 64.4569 56.0609 64.2872 55.5494
												64.2734C54.7385 64.183 53.937 64.0228 53.1537 63.7944C52.5841 63.6127
												52.0019 63.4731 51.4119 63.3767C50.4041 63.1392 49.4105 62.845 48.4358
												62.4957C47.0694 62.0452 44.321 61.1771 42.4093 60.5952C40.49 60.0302
												38.8518 59.3595 38.8015 59.1228C38.7543 58.9008 38.4553 58.764 38.1434
												58.8304C38.0032 58.8645 37.8552 58.8441 37.7295 58.7733C37.6038 58.7025
												37.5097 58.5865 37.4663 58.449C37.4066 58.1683 37.1586 58.1126 36.8812
												58.3413C36.3478 58.7942 34.0011 57.5943 34.1413 56.9317C34.1857 56.7178
												33.8571 56.6528 33.4038 56.7952C32.5514 57.0695 28.3664 55.5798 27.9772
												54.8601C27.8484 54.6248 27.6607 54.588 27.5123 54.7893C27.3792 54.9566
												27.224 54.5439 27.1668 53.9049C27.1096 53.2659 27.0257 52.9771 26.9843
												53.311C26.8668 54.2008 24.7161 53.8547 24.4934 52.9136C24.3992 52.4705
												23.9928 52.3045 23.5146 52.488C22.9633 52.6982 22.6302 52.5064 22.4768
												51.8909C22.322 51.3217 22.217 51.251 22.1898 51.7046C22.1647 52.221
												21.7035 52.1146 20.5844 51.3662C20.0155 50.9235 19.3702 50.5888 18.6806
												50.3788C18.4977 50.4177 17.7986 49.9326 17.1914 49.3513C16.5843 48.77
												15.9211 48.4009 15.7849 48.5536C15.6487 48.7062 14.8855 48.1315 14.1222
												47.2389C13.363 46.3658 12.5382 45.6601 12.2984 45.6957C11.6207 45.8399
												9.5306 44.2604 9.36732 43.4927C9.33933 43.3219 9.24905 43.1675 9.11391
												43.0594C8.97877 42.9512 8.80837 42.897 8.63559 42.9072C8.28822 42.9657
												8.00778 42.5459 7.91701 41.8548C7.80054 40.937 7.61992 40.7751 7.03751
												41.084C6.64 41.2769 6.35291 41.2296 6.417 40.9686C6.48188 40.6921
												6.01007 40.1126 5.35729 39.634C4.27596 38.8755 3.55542 37.8235 4.43209
												38.2974C4.62174 38.3961 4.73138 38.1714 4.65296 37.8027C4.64231 37.7179
												4.61364 37.6363 4.56887 37.5634C4.5241 37.4906 4.46428 37.4281 4.39341
												37.3803C4.32254 37.3324 4.24225 37.3003 4.15794 37.286C4.07363 37.2717
												3.98724 37.2756 3.90456 37.2974C3.56654 37.4 3.22542 37.1178 3.12495
												36.6454C2.93378 36.0218 2.60824 35.4476 2.17123 34.9633C1.5425 34.2853
												1.5097 34.184 2.01552 34.4474ZM125.821 7.86924C125.713 7.89212 125.599
												8.14845 125.536 8.48593C125.469 8.80678 125.582 9.01701 125.818
												8.96668C126.055 8.91634 126.169 8.66002 126.106 8.36466C126.04 8.05464
												125.929 7.84636 125.821 7.86924ZM157.795 15.2342C156.991 14.8184 156.969
												14.8385 157.415 15.6706C157.625 16.0738 157.949 16.2217 158.112
												15.9856C158.309 15.7271 158.2 15.4568 157.795 15.2342ZM158.43
												14.0954C158.204 14.1434 158.072 14.2644 158.104 14.4121C158.207 14.6215
												158.382 14.7871 158.596 14.8787C158.849 15.01 158.989 14.873 158.923
												14.562C158.856 14.251 158.643 14.05 158.428 14.0958L158.43
												14.0954ZM160.296 15.6601C160.212 15.7807 160.155 15.9176 160.127
												16.0619C160.1 16.2061 160.103 16.3546 160.137 16.4975C160.199 16.7909
												160.37 16.959 160.563 16.9178C160.757 16.8767 160.825 16.5066 160.737
												16.0929C160.649 15.6792 160.442 15.4748 160.29 15.6614L160.296
												15.6601ZM177.025 22.5749C176.328 21.7808 175.984 21.5912 176.082
												22.0499C176.305 22.368 176.596 22.6332 176.933 22.8267C177.663 23.3347
												177.668 23.3031 177.019 22.5764L177.025 22.5749ZM107.077 70.755C107.34
												70.884 107.484 70.7461 107.418 70.4351C107.348 70.1094 107.137 69.9081
												106.907 69.957C106.677 70.0058 106.553 70.1407 106.581 70.2737C106.679
												70.4896 106.853 70.6616 107.07 70.7565L107.077 70.755ZM74.7299
												66.1732C74.8445 66.2437 74.9798 66.2728 75.1133 66.2556C75.2468 66.2383
												75.3703 66.1759 75.4632 66.0786C75.7407 65.8499 75.6294 65.7498 75.1713
												65.8166C74.7719 65.8709 74.5604 66.0395 74.7241 66.1744L74.7299
												66.1732ZM35.5765 57.5853C36.0094 58.4051 36.4087 57.9031 36.3754
												56.5353C36.3589 55.6116 36.2689 55.5541 35.7971 56.1952C35.6433 56.3881
												35.5421 56.6175 35.5034 56.8612C35.4648 57.1048 35.4899 57.3543 35.5765
												57.5853V57.5853ZM17.3373 46.2689C17.7043 45.7738 17.6284 45.6815 16.937
												45.8286C16.4744 45.927 16.1267 46.2483 16.1864 46.529C16.3237 47.1601
												16.7432 47.0709 17.3373 46.2689ZM12.3394 44.9224C12.4999 45.0426 12.6554
												44.7162 12.6714 44.1567C12.713 43.3914 12.6522 43.3266 12.3857
												43.924C12.1946 44.347 12.175 44.7836 12.3386 44.9185L12.3394
												44.9224ZM1.48174 28.2895C1.61974 28.238 1.74129 28.1502 1.83362
												28.0354C1.92595 27.9206 1.98565 27.783 2.00643 27.6372C2.07321 27.453
												2.18575 27.2889 2.33345 27.1602C2.48115 27.0315 2.65917 26.9425 2.85074
												26.9015C3.34561 26.7963 3.45664 26.5253 3.17921 26.0139C2.67944 25.0386
												2.41866 25.1871 1.71094 26.8823C1.35902 27.7125 1.26658 28.3353 1.48174
												28.2895ZM14.9726 14.5304C14.9067 14.2204 13.0512 14.5373 11.6191
												15.1046C11.3488 15.2081 11.2308 15.682 11.3563 16.195C11.5633 17.0628
												11.5848 17.0583 11.7696 16.0765C11.9276 15.2864 12.1162 15.1686 12.6331
												15.5371C13.1534 15.9212 13.2576 15.8827 13.1445 15.3506C13.0344 14.8333
												13.126 14.7831 13.542 15.1577C14.0991 15.6577 15.1172 15.2101 14.9724
												14.5295L14.9726 14.5304ZM10.0679 17.1642C9.83777 16.611 9.58648 16.1697
												9.50042 16.188C9.41435 16.2063 9.45048 16.6934 9.57299 17.2694C9.6955
												17.8455 9.94367 18.2721 10.1373 18.2309C10.331 18.1897 10.3028 17.7163
												10.0679 17.1642V17.1642ZM90.653 70.387C90.7562 70.5965 90.9311 70.762
												91.1458 70.8536C91.3986 70.9849 91.5382 70.8479 91.472 70.5369C91.4059
												70.2259 91.1944 70.0245 90.9792 70.0703C90.764 70.116 90.6234 70.243
												90.6538 70.3858L90.653 70.387Z" />
										</svg>
										<svg class="lqd-highlight-brush-svg lqd-highlight-brush-svg-4"
											aria-hidden="true" preserveAspectRatio="none" width="136" height="16"
											viewBox="0 0 136 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M36.937 3.319C37.8108 3.27525 38.6865 3.35706 39.5371 3.56198C40.3102 3.74109 40.9877 4.20428 41.4352 4.85965C41.8828 5.51502 42.0676 6.31472 41.9531 7.10001C41.8869 7.83996 41.7186 8.5672 41.4531 9.26102C41.2001 9.91102 41.439 10.016 42.028 9.94901C44.594 9.65601 47.1281 9.19202 49.6721 8.74002C60.1611 6.87302 70.715 5.464 81.29 4.189C93.69 2.689 106.155 1.81201 118.596 0.71701C123.274 0.30501 127.959 0.0339836 132.656 0.00198364C133.231 0.00198364 133.807 0.0539822 134.383 0.0879822C134.76 0.110982 135.136 0.197999 135.154 0.654999C135.171 1.065 134.813 1.17902 134.487 1.26102C132.487 1.76102 130.459 2.09401 128.428 2.42001C121.567 3.52001 114.645 4.10298 107.745 4.87698C100.078 5.73765 92.4117 6.58869 84.7451 7.43002C76.6701 8.33002 68.6071 9.32999 60.5681 10.507C55.4091 11.264 50.2611 12.097 45.1061 12.884C43.7246 13.1186 42.3224 13.2104 40.9221 13.158C40.4991 13.1938 40.074 13.123 39.6855 12.9521C39.297 12.7811 38.9574 12.5154 38.6982 12.1793C38.4389 11.8432 38.2681 11.4475 38.2014 11.0284C38.1346 10.6092 38.1741 10.18 38.3161 9.78C38.4911 8.948 38.644 8.108 38.882 7.293C39.12 6.478 38.7271 6.26602 38.0331 6.21902C36.5228 6.14716 35.0092 6.26201 33.527 6.561C24.1073 8.16425 14.8703 10.6997 5.95209 14.13C4.73009 14.613 3.5521 15.206 2.3581 15.762C1.9581 15.948 1.57112 16.081 1.23212 15.7C1.08506 15.5325 1.00071 15.3192 0.993593 15.0965C0.986479 14.8737 1.05698 14.6555 1.19306 14.479C1.54614 13.9517 2.0137 13.5111 2.56098 13.19C5.02189 11.6317 7.67039 10.3915 10.4431 9.49899C18.455 6.70599 26.7164 4.68875 35.114 3.47501C35.743 3.38201 36.377 3.366 36.937 3.319Z" />
										</svg>
										<svg class="lqd-highlight-brush-svg lqd-highlight-brush-svg-5"
											aria-hidden="true" preserveAspectRatio="none" width="102" height="11"
											viewBox="0 0 102 11" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M38.449 3.99298C39.7937 3.40715 41.2115 3.00645 42.6639 2.80194C46.4444 2.35238 50.2637 2.332 54.0489 2.74102C62.1929 3.42202 70.2009 5.00203 78.2239 6.47003C84.3759 7.59603 90.505 8.84394 96.647 10.0259C97.7084 10.2479 98.7895 10.3603 99.8738 10.361C100.182 10.3521 100.49 10.3216 100.794 10.27C101.069 10.227 101.32 10.1009 101.361 9.79693C101.407 9.45493 101.061 9.53194 100.894 9.45294C98.5 8.47686 96.0235 7.71756 93.494 7.18402C86.604 5.25302 79.533 4.21597 72.512 2.93097C67.533 2.01997 62.543 1.15894 57.512 0.608945C52.7749 -0.0377262 47.98 -0.149748 43.2178 0.27496C40.4234 0.479879 37.7365 1.43634 35.441 3.04303C35.3299 3.1135 35.2049 3.15894 35.0745 3.17621C34.9441 3.19347 34.8114 3.18213 34.6859 3.143C28.2142 2.15437 21.669 1.72974 15.1238 1.87396C10.9846 1.95518 6.87755 2.61973 2.92389 3.84796C2.08151 4.11969 1.27843 4.50066 0.534978 4.98101C0.215978 5.19001 -0.139946 5.42504 0.0630542 5.88104C0.266054 6.33704 0.69899 6.32296 1.09699 6.19696C3.03281 5.57759 5.00733 5.08686 7.00788 4.72796C12.0709 3.87671 17.2154 3.61326 22.3389 3.94293C25.9819 4.14293 29.615 4.44296 33.233 4.92596C33.825 5.00496 34.212 5.105 34.223 5.862C34.2578 6.25207 34.3855 6.62811 34.5955 6.95868C34.8055 7.28924 35.0917 7.56473 35.43 7.76202C36.7813 8.75095 38.4314 9.24515 40.1038 9.16192C40.4951 9.18625 40.8845 9.09155 41.2208 8.89019C41.5571 8.68884 41.8245 8.39033 41.9879 8.03399C42.1247 7.66786 42.1526 7.26994 42.0679 6.88836C41.9833 6.50679 41.7899 6.1579 41.5111 5.88397C40.9197 5.22115 40.1802 4.70723 39.3528 4.38397C39.1078 4.27197 38.868 4.17198 38.449 3.99298ZM39.5699 6.95099C38.422 6.93626 37.3262 6.46903 36.5208 5.65094C37.636 5.79826 38.6898 6.24786 39.5679 6.95099H39.5699Z" />
										</svg>
									</span>
								</mark>
							</h1>
						</div>
						<div class="ld-fancy-heading relative text-center w-390 sm:w-full">
							<p class="ld-fh-element mb-1/5em inline-block relative text-18 font-medium leading-1/3em text-white-40 module-text"
								data-split-text="true" data-split-options='{"type": "lines"}'>0001, la communication au
								service des pros</p>
						</div>
						<a href="/contact"
							class="btn btn-solid btn-md btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y text-purple-500 bg-white rounded-100 hover:text-black"
							data-lity="#contact-modal">
							<span class="btn-txt" data-text="Prendre rendez-vous !" data-split-text="true"
								data-split-options='{"type":  "chars, words"}'>Prendre rendez-vous !</span>
						</a>
					</div>
					<div class="w-full flex flex-row items-center justify-between flex-nowrap gap-2percent sm:flex-wrap mt-25"
						data-custom-animations="true"
						data-ca-options='{"animationTarget": ".iconbox", "duration" : 1000, "startDelay" : 1500, "delay" : 50, "ease": "expo.out", "initValues": {"y": "50px", "scaleX" : 0, "scaleY" : 0}, "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1}}'>
						<div class="w-33percent sm:w-full mb-30">
							<div class="iconbox flex flex-grow-1 relative iconbox-side" style="align-items:center;">
								<div class="iconbox-icon-wrap">
									<div
										class="iconbox-icon-container inline-flex w-30 text-30 text-primary transition-all">
										<svg xmlns="http://www.w3.org/2000/svg" width="26.981" height="26.981"
											viewBox="0 0 26.981 26.981">
											<g transform="translate(-6.745 -6.745)">
												<path
													d="M10.529,8h6.745A2.529,2.529,0,0,1,19.8,10.529v1.686a2.529,2.529,0,0,1-2.529,2.529H10.529A2.529,2.529,0,0,1,8,12.216V10.529A2.529,2.529,0,0,1,10.529,8ZM25.706,28.236h6.745a2.529,2.529,0,0,1,2.529,2.529v1.686a2.529,2.529,0,0,1-2.529,2.529H25.706a2.529,2.529,0,0,1-2.529-2.529V30.765A2.529,2.529,0,0,1,25.706,28.236Z"
													transform="translate(-1.255 -1.255)" fill="#fff"
													fill-rule="evenodd"></path>
												<path
													d="M10.529,18.118h6.745A2.529,2.529,0,0,1,19.8,20.647v11.8a2.529,2.529,0,0,1-2.529,2.529H10.529A2.529,2.529,0,0,1,8,32.452v-11.8A2.529,2.529,0,0,1,10.529,18.118ZM25.706,8h6.745a2.529,2.529,0,0,1,2.529,2.529v11.8a2.529,2.529,0,0,1-2.529,2.529H25.706a2.529,2.529,0,0,1-2.529-2.529v-11.8A2.529,2.529,0,0,1,25.706,8Z"
													transform="translate(-1.255 -1.255)" fill="#fff" fill-rule="evenodd"
													opacity="0.3"></path>
											</g>
										</svg>
									</div>
								</div>
								<h3
									class="lqd-iconbox-heading text-17 font-medium leading-1/2em mt-0/2em text-slate-200">
									<span class="text-white">Newsletter</span> Build email lists, bigger, faster and
									more targeted.
								</h3>
							</div>
						</div>
						<div class="w-33percent sm:w-full mb-30">
							<div class="iconbox flex flex-grow-1 relative iconbox-side">
								<div class="iconbox-icon-wrap">
									<div
										class="iconbox-icon-container inline-flex w-30 text-30 text-primary transition-all">
										<svg xmlns="http://www.w3.org/2000/svg" width="28.251" height="25.955"
											viewBox="0 0 28.251 25.955">
											<g transform="translate(-3.246 -4.11)">
												<path
													d="M27.265,18.588l-1,5.991,0, .021A1.432,1.432,0,0,1,24.6,25.752L8.322,22.793A1.432,1.432,0,0,1,7.2,21.778L4.589,12.634a1.432,1.432,0,0,1,1.377-1.825H25.617l.878-3.762A1.689,1.689,0,0,1,28.14,5.741H31.1a1.689,1.689,0,0,1,0,3.378H29.48Z"
													transform="translate(-1.289 -1.632)" fill="#fff" fill-rule="evenodd"
													opacity="0.3"></path>
												<path
													d="M12.147,40.295a2.147,2.147,0,1,1,2.147-2.147A2.147,2.147,0,0,1,12.147,40.295Zm12.885,0a2.147,2.147,0,1,1,2.147-2.147A2.147,2.147,0,0,1,25.032,40.295Z"
													transform="translate(-2.842 -10.23)" fill="#fff"
													fill-rule="evenodd"></path>
											</g>
										</svg>
									</div>
								</div>
								<h3
									class="lqd-iconbox-heading text-17 font-medium leading-1/2em mt-0/2em text-slate-200">
									<span class="text-white">SEO Friendly</span> Hub helps you rank higher in Google and
									on web.
								</h3>
							</div>
						</div>
						<div class="w-33percent sm:w-full mb-30">
							<div class="iconbox flex flex-grow-1 relative iconbox-side">
								<div class="iconbox-icon-wrap">
									<div
										class="iconbox-icon-container inline-flex w-30 text-30 text-primary transition-all">
										<svg xmlns="http://www.w3.org/2000/svg" width="29.729" height="24.525"
											viewBox="0 0 29.729 24.525">
											<g transform="translate(-4.955 -8.258)">
												<path
													d="M24.494,9.848a30.811,30.811,0,0,1,2.96,3.554s-6.757,9.91-14.864,9.91q-.77,0-1.494-.065Z"
													transform="translate(7.23 6.417)" fill="#fff"></path>
												<path
													d="M22,6.817l-4.137,4.137A4.955,4.955,0,0,0,12.91,15.91L7.173,21.646A18.035,18.035,0,0,1,3,15.91S7.054,6,17.864,6A11.478,11.478,0,0,1,22,6.817Z"
													transform="translate(1.955 3.91)" fill="#fff"></path>
												<rect width="31.38" height="3.303"
													transform="translate(8.423 30.447) rotate(-45)" fill="#fff"
													opacity="0.3"></rect>
											</g>
										</svg>
									</div>
								</div>
								<h3
									class="lqd-iconbox-heading text-17 font-medium leading-1/2em mt-0/2em text-slate-200">
									<span class="text-white">SEO Friendly</span> Social Add an Instagram Feed to your
									website or share content.
								</h3>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Header Banner -->

			<?= $content ?>

			<!-- Start contact Us -->
			<section class="lqd-section contact-us py-80 bg-transparent" id="contact"
				style="background-image: linear-gradient(180deg, #35575C 0%, <?= $pageTheme[2] ?> 100%);"
				data-custom-animations="true"
				data-ca-options='{"animationTarget": ".module-first, .module-last", "ease" : ["power4.out"], "initValues": {"y": "30px", "scaleX" : 0.5, "scaleY" : 0.5, "opacity" : 0}, "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
				<div class="lqd-shape lqd-shape-top module-shape-1" data-negative="false">
					<svg class="lqd-custom-shape h-full left-50percent" xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 1440 100" preserveAspectRatio="none">
						<path class="lqd-shape-fill" data-name="Row Separator" d="M1440,0Q1080,99,720,99T0,0V100H1440Z"
							fill="#fff" id="Row_Separator-2" />
					</svg>
				</div>
				<div class="lqd-shape lqd-shape-bottom rotate-180 module-shape-2" data-negative="false">
					<svg class="lqd-custom-shape h-250 left-50percent" fill="none" height="461" viewBox="0 0 1440 461"
						width="1440" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
						<path class="lqd-shape-fill"
							d="m0 131.906 34.4-20.017c34.4-19.9 103.2-59.936 171.68-82.979 68.64-23.043 136.8-29.328003 205.44-4.306 68.48 25.022 137.28 81.35 205.76 80.768 68.64-.582 136.8-58.074 205.44-84.608 68.48-26.535 137.28-22.345 205.76-16.06 68.64 6.168 136.8 14.315 205.44 22.811 68.48 8.612 137.28 17.457 171.68 22l34.4 4.422v396.851h-1440z"
							fill-opacity=".09" fill="<?= $pageTheme[1] ?>">
							<animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="10s"
								values="M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z; M0 122.906L36.5 109C71.5 96.372 102.52 67.98 171 44.937C239.64 21.894 354.36 51.478 423 76.5C491.48 101.522 546.52 19.097 615 18.515C683.64 17.933 799.36 58.534 868 32C936.48 5.46499 1039.52 54.715 1108 61C1176.64 67.168 1190.36 -6.996 1259 1.5C1327.48 10.112 1371.2 35.972 1405.6 40.515L1440 44.937V441.788H0L0 122.906Z; M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z">
							</animate>
						</path>
						<path class="lqd-shape-fill opacity-100"
							d="M0 154.75L34.4 142.201C68.8 129.53 137.6 104.433 206.08 99.072C274.72 93.833 342.88 108.453 411.52 122.099C480 135.622 548.8 148.293 617.28 142.811C685.92 137.329 754.08 113.693 822.72 113.693C891.2 113.693 960 137.329 1028.48 152.68C1097.12 168.153 1165.28 175.463 1233.92 184.966C1302.4 194.591 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z"
							fill-opacity="1" fill="<?= $pageTheme[3] ?>">
							<animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="8s"
								values="M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 33.4 177.201 55 176.5C76.6 175.799 137.52 110.361 206 105C274.64 99.761 332.86 141.104 401.5 154.75C469.98 168.273 527.52 206.982 596 201.5C664.64 196.018 747.86 75 816.5 75C884.98 75 956.52 118.149 1025 133.5C1093.64 148.973 1163.36 87.497 1232 97C1300.48 106.625 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z">
							</animate>
						</path>
						<path class="lqd-shape-fill opacity-100"
							d="M0 340.22L34.4 333.92C68.8 327.52 137.6 314.92 206.08 312.22C274.72 309.52 342.88 316.92 411.52 319.72C480 322.52 548.8 320.92 617.28 318.92C685.92 316.92 754.08 314.52 822.72 316.02C891.2 317.52 960 322.92 1028.48 309.42C1097.12 295.92 1165.28 263.52 1233.92 251.02C1302.4 238.52 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z"
							fill-opacity="1" fill="<?= $pageTheme[2] ?>">
							<animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="6.5s"
								values="M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z; M0 340.22L37.5 323C71.9 316.6 137.52 336.62 206 333.92C274.64 331.22 339.86 272.2 408.5 275C476.98 277.8 551.02 304 619.5 302C688.14 300 759.36 266.5 828 268C896.48 269.5 962.02 336.5 1030.5 323C1099.14 309.5 1156.36 232.5 1225 220C1293.48 207.5 1364.1 249.62 1398.5 253.22L1440 253.22V453.22H0L0 340.22Z; M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z">
							</animate>
						</path>
						<path class="lqd-shape-fill opacity-100"
							d="M1440 337.719L1405.6 340.219C1371.2 342.719 1302.4 347.719 1233.92 350.419C1165.28 353.019 1097.12 353.419 1028.48 352.219C960 351.019 891.2 348.419 822.72 357.019C754.08 365.719 685.92 385.719 617.28 395.919C548.8 406.019 480 406.419 411.52 395.919C342.88 385.419 274.72 364.019 206.08 359.419C137.6 354.719 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z"
							fill-opacity="1" fill="<?= $pageTheme[1] ?>">
							<animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="5.5s"
								values="M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1295.98 326.3 1227.5 329C1158.86 331.6 1081.64 391.2 1013 390C944.52 388.8 874.48 364.119 806 372.719C737.36 381.419 675.14 296.3 606.5 306.5C538.02 316.6 471.48 383.219 403 372.719C334.36 362.219 272.64 320.6 204 316C135.52 311.3 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z">
							</animate>
						</path>
					</svg>
				</div>
				<div class="container">
					<div class="row items-center">
						<div class="module-first w-50percent flex flex-col items-start pr-15percent lg:w-45percent sm:w-full "
							data-custom-animations="true"
							data-ca-options='{"animationTarget": ".animation-element, h2, h6, p, .btn", "duration" : 750, "delay" : 55, "ease": "expo.out", "initValues": {"y": "70px", "scaleX" : 0.5, "scaleY" : 0.5, "opacity" : 0}, "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
							<div class="ld-fancy-heading relative mb-15 py-5 px-15 rounded-100 bg-white-10">
								<h6
									class="ld-fh-element m-0 inline-block relative text-12 font-bold uppercase tracking-1 text-white">
									Contact
								</h6>
							</div>
							<div class="ld-fancy-heading relative">
								<h2 class="ld-fh-element mb-0/75em inline-block relative text-34 text-white">
									<span>Ne perdons pas le fil !</span>
								</h2>
							</div>
							<div class="w-full max-w-full flex flex-col items-start transition-all rounded-12"
								style="background-color: <?= $pageTheme[3] ?>;">
								<div class="w-full rounded-12 rounded-bottom-0 animation-element">
									<div class="ld-gmap-container relative h-130">
										<div class="ld-gmap w-full h-full" data-plugin-map="true"
											data-plugin-options='{"style": "wy", "address": "7420 Shore Rd, Brooklyn, NY 11209, USA", "marker_style": "html", "markers" : null, "map": {"zoom" : 16, "mapTypeId": "roadmap", "zoomControl": true}}'>
										</div>
									</div>
								</div>
								<div class="ld-fancy-heading relative mt-20 mx-30 mb-0">
									<p class="ld-fh-element mb-0/5em inline-block relative text-white">15 rue du bas de l'enfer, 59790, Marquettes-lez-Lille</p>
								</div>
								<div class="ld-fancy-heading relative mx-30">
									<p class="ld-fh-element mb-0/5em inline-block relative text-white">06 99 26 37 37</p>
								</div>
								<div class="ld-fancy-heading relative mx-30">
									<p class="ld-fh-element mb-0/5em inline-block relative text-white">hello@0001.fr</p>
								</div>
								<a href="#" class="btn btn-naked btn-icon-right btn-hover-swp mx-30 mb-25 text-white"
									target="_blank">
									<span class="btn-txt" data-text="Show on map">Montrer sur la carte</span>
									<span class="btn-icon">
										<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
									</span>
									<span class="btn-icon">
										<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
									</span>
								</a>
							</div>
						</div>
						<div class="module-last w-50percent flex flex-col border-1 border-white-40 rounded-20 transition-all py-30 px-35 lg:w-55percent sm:w-full animation-element"
							data-custom-animations="true"
							data-ca-options='{"animationTarget": "h3, .lqd-contact-form", "duration" : 750, "startDelay" : 500, "delay" : 55, "ease": "expo.out", "initValues": {"y": "50px", "scaleX" : 0.5, "scaleY" : 0.5, "opacity" : 0}, "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
							<div class="ld-fa
							ncy-heading relative">
								<h3 class="ld-fh-element mb-0/65em inline-block relative text-white">Contactez nous</h3>
							</div>
							<div class="lqd-contact-form lqd-contact-form-inputs-circle lqd-contact-form-button-block">
								<div role="form" lang="en-US">
									<div class="screen-reader-response absolute overflow-hidden p-0 border-0">
										<p role="status" aria-live="polite" aria-atomic="true"></p>
									</div>
									<form action="<?= URL ?>/public/assets/php/phpMailer.php" id="contact-form" method="POST" class="lqd-cf-form"
										novalidate="novalidate" data-status="init">
										<div class="row -mr-15 -ml-15">
											<div class="col col-12 col-md-6 px-15">
												<span class="lqd-form-control-wrap" data-name="name">
													<input
														class="lqd-cf-form-control text-white-80 border-1 border-white-10 bg-transparent px-2em"
														type="text" 
														name="name" 
														value="" 
														size="40" 
														aria-required="true"
														aria-invalid="false" 
														placeholder="Votre nom">
												</span>
											</div>
											<div class="col col-12 col-md-6 px-15">
												<span class="lqd-form-control-wrap" data-name="email">
													<input
														class="lqd-cf-form-control text-white-80 border-1 border-white-10 bg-transparent px-2em"
														type="email" 
														name="email" 
														value="" 
														size="40"
														aria-required="true" 
														aria-invalid="false" 
														placeholder="E-mail">
												</span>
											</div>
											<div class="col col-12 col-md-12 px-15">
												<span class="lqd-form-control-wrap" data-name="sujet">
													<input
														class="lqd-cf-form-control text-white-80 border-1 border-white-10 bg-transparent px-2em"
														type="text" 
														name="sujet" 
														value="" 
														size="40"
														aria-required="true" 
														aria-invalid="false" 
														placeholder="Sujet">
												</span>
											</div>
											<div class="col col-12 px-15">
												<span class="lqd-form-control-wrap" data-name="message">
													<textarea
														class="text-white-80 border-1 border-white-10 bg-transparent px-2em"
														name="message" 
														cols="10" 
														rows="4" 
														aria-required="true"
														aria-invalid="false" 
														placeholder="Votre message">
													</textarea>
												</span>
											</div>
											<div class="col col-12 text-white-50 px-15">
												<span class="lqd-form-control-wrap" data-name="acceptance">
													<span class="lqd-cf-form-control lqd-cf-acceptance">
														<span class="lqd-cf-list-item">
															<label class="mb-5">
																<input 
																	class="border-white-10 text-white-80"
																	type="checkbox" 
																	name="your-acceptance" 
																	value="1"
																	aria-invalid="false">
																<span class="lqd-cf-list-item-label">j'ai lu et accepte la politique de confidentialité</span>
															</label>
														</span>
													</span>
												</span>
											</div>
											<div class="col col-12 px-15">
												<input 
													type="submit" 
													value="Envoyer le message"
													class="lqd-cf-form-control has-spinner lqd-cf-submit">
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

		<footer id="site-footer" class="main-footer">
			<section class="lqd-section footer-content pt-270 pb-100 relative bg-transparent transition-all" style="background-image: linear-gradient(180deg, #E5DFFC 0%, #fff 100%);">
				<div class="lqd-shape lqd-shape-top" data-negative="false">
					<svg class="lqd-custom-shape -rotate-180 h-220" fill="none" height="461" viewbox="0 0 1440 461" width="1440" xmlns="http://www.w3.org/2000/svg" preserveaspectratio="none">
						<path fill="#fff" class="lqd-shape-fill" d="m0 131.906 34.4-20.017c34.4-19.9 103.2-59.936 171.68-82.979 68.64-23.043 136.8-29.328003 205.44-4.306 68.48 25.022 137.28 81.35 205.76 80.768 68.64-.582 136.8-58.074 205.44-84.608 68.48-26.535 137.28-22.345 205.76-16.06 68.64 6.168 136.8 14.315 205.44 22.811 68.48 8.612 137.28 17.457 171.68 22l34.4 4.422v396.851h-1440z" fill-opacity=".09">
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
							<img width="145" height="21" src="<?= URL ?>/public/assets/images/0001/logo/logo0001.svg" alt="logo hub">
						</div>
						<div class="col col-12 col-md-9">
							<div class="flex flex-wrap alogn-items-center justify-end">
								<div class="flex justify-end text-end lqd-fancy-menu lqd-custom-menu relative text-end lqd-menu-td-none link-bold link-10 link-black-80 lg:w-full sm:text-start module-menu">
									<ul class="reset-ul inline-ul uppercase flex">
										<li class="tracking-1 mr-35">
											<a class="uppercase tracking-1/5" href="#">
												<span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label">
													<svg xmlns="http://www.w3.org/2000/svg" width="13.125" height="13.125" viewBox="0 0 13.125 13.125">
														<path d="M5.625-12.187H-5.628a.942.942,0,0,0-.935.946V-.009a.942.942,0,0,0,.935.946H5.625a.944.944,0,0,0,.937-.946V-11.241A.944.944,0,0,0,5.625-12.187ZM-2.6-.937H-4.541V-7.2h1.948V-.937Zm-.973-7.119A1.128,1.128,0,0,1-4.7-9.185a1.128,1.128,0,0,1,1.128-1.128A1.13,1.13,0,0,1-2.44-9.185,1.127,1.127,0,0,1-3.568-8.057ZM4.7-.937H2.751V-3.984c0-.727-.015-1.661-1.011-1.661C.727-5.646.571-4.854.571-4.037v3.1H-1.374V-7.2H.492v.855H.519A2.049,2.049,0,0,1,2.361-7.356c1.969,0,2.335,1.3,2.335,2.985Z" transform="translate(6.563 12.187)" fill="#6a7a90"></path>
													</svg>
												</span>
												Linkedin
											</a>
										</li>
										<li class="tracking-1 mr-35">
											<a class="uppercase tracking-1/5" href="#">
												<span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label w-15">
													<img src="<?= URL ?>/public/assets/images/0001/home/fb-icon.svg" alt="" class="w-20">
												</span>
												Facebook
											</a>
										</li>
										<li class="tracking-1 mr-35">
											<a class="uppercase tracking-1/5" href="#">
												<span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label"></span>
												Mentions légales
											</a>
										</li>
										<li class="tracking-1 mr-35">
											<a class="uppercase tracking-1/5" href="#">
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
	<script src="<?= URL ?>/public/assets/js/theme.min.js"></script>
	<script src="<?= URL ?>/public/assets/js/liquid-ajax-contact-form.min.js"></script>
	<script src="<?= URL ?>/public/assets/js/demo/start-hub-x.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/isotope/isotope.pkgd.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/isotope/packery-mode.pkgd.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/imagesloaded.pkgd.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/draggabilly.pkgd.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/particles.min.js"></script>
	<script src="<?= URL ?>/public/assets/js/demo/start-hub-4.js"></script>
</body>

</html>