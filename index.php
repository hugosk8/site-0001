<?php
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
define('ROOT', dirname(__DIR__));

if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

ob_start();
switch ($page) {
    case 'home':
        require 'views/home.php';
		$title = "Accueil | 0001";
		$metaDescription = "Agence web à Lille (Marquettes-Lez-Lille), sites internet, logiciels immobiliers, applications sur mesure, e-commerce, référencement, réseaux sociaux…";
        break;
    case 'marketing':
        require 'views/marketing.php';
		$metaDescription = "Améliorez votre stratégie marketing grâce à notre expertise SEO, SEA ciblé et création de landing pages innovantes.";
		$title = "Marketing | 0001";
        break;
    case 'googleAds':
        require 'views/ads/googleAds.php';
		$metaDescription = "Maximisez vos campagnes publicitaires avec Google Ads grâce à 0001 Communication. Stratégies SEA efficaces, ciblage précis et optimisation des coûts.";
		$title = "Google Ads | 0001";
        break;
    case 'youtubeAds':
        require 'views/ads/youtubeAds.php';
		$metaDescription = "Augmentez l'impact de votre marque avec des publicités YouTube engageantes. 0001 Communication, votre partenaire pour des campagnes YouTube Ads réussies.";
		$title = "Youtube Ads | 0001";
        break;
    case 'facebookAds':
        require 'views/ads/facebookAds.php';
		$metaDescription = "Boostez votre visibilité sur Facebook avec des campagnes publicitaires ciblées. 0001 Communication, spécialiste en Facebook Ads pour des résultats mesurables.";
		$title = "Facebook Ads | 0001";
        break;
    case 'contact':
        require 'views/contact.php';
		$metaDescription = "Pour nous contacter, envoyez un message via notre site internet ou appelez nous directement au 06.42.65.00.83";
		$title = "Contact | 0001";
        break;    
    case 'mentions-legales':
        require 'views/mentions-legales.php';
		$metaDescription = "L'Agence 0001 s'engage pour la confiance numérique. Retrouvez nos mentions légales ici.";
		$title = "Mentions légales | 0001";
        break;
    case 'agency':
        require 'views/agence-web.php';
		$metaDescription = "0001, votre agence web à Lille. Conception de sites internet, développement d'applications sur mesure et solutions digitales innovantes.";
		$title = "Agence web | 0001";
        break;
    case 'e-commerce':
        require 'views/e-commerce.php';
		$metaDescription = "Découvrez nos solutions e-commerce sur mesure : boutiques en ligne, gestion de catalogues produits, intégrations de paiement sécurisées. Agence 0001, votre expert e-commerce à Lille.";
		$title = "E-commerce | 0001";
        break;
    default:
        require 'views/404.php';
		$metaDescription = "Oups, cette page est introuvable ! Explorez nos solutions SEO et SEA depuis la page d'accueil de l'Agence 0001.";
		$title = "404 | 0001";
        break;
}
$content = ob_get_clean();

if ($page == 'contact') {
    require 'views/templates/contact-template.php';
} else {
    require 'views/templates/template.php';
}