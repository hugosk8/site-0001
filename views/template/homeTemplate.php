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
		<link rel="stylesheet" type="text/css" href="<?= URL ?>/public/assets/css/demo/base.css">
		<link rel="stylesheet" type="text/css" href="<?= URL ?>/public/assets/css/demo/start-hub-8.css">
		<link rel="stylesheet" type="text/css" href="<?= URL ?>/public/assets/vendors/liquid-icon/lqd-essentials/lqd-essentials.min.css">

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
											<li><a href="/googleAds">Google Ads</a></li>
											<li><a href="/youtubeAds">Youtube Ads</a></li>
											<li><a href="/facebookAds">Facebook Ads</a></li>
										</ul>
									</li>
									<li>
										<a href="/immo">
											Situations immobilières 
										</a>
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

                <?= $content ?>

            </main>

			<!-- Footer background : background: linear-gradient(335deg, rgba(201,159,201,0.4766281512605042) 23%, rgba(161,170,211,0.44861694677871145) 61%, rgba(0,212,255,0.4906337535014006) 100%); -->
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
														<img src="<?= URL ?>/public/assets/images/0001/home/fb-icon.svg" alt="" class="w-20">
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
	<script src="<?= URL ?>/public/assets/vendors/isotope/isotope.pkgd.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/isotope/packery-mode.pkgd.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/imagesloaded.pkgd.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/draggabilly.pkgd.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/particles.min.js"></script>
	<script src="<?= URL ?>/public/assets/js/demo/start-hub-x.js"></script>
	<script src="<?= URL ?>/public/assets/js/demo/start-hub-4.js"></script>
	<script src="<?= URL ?>/public/assets/js/demo/start-hub-8.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/section-flow/liquidSectionFlow.min.js"></script>
	<script src="<?= URL ?>/public/assets/vendors/draw-shape/liquidDrawShape.min.js"></script>
    </body>
</html>