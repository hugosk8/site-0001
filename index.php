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
        break;
    case 'seo':
        require 'views/seo.php';
        break;
    case 'marketing':
        require 'views/marketing.php';
        break;
    case '404':
        require 'views/404.php';
        break;
    case 'googleAds':
        require 'views/ads/googleAds.php';
        break;
    case 'youtubeAds':
        require 'views/ads/youtubeAds.php';
        break;
    case 'facebookAds':
        require 'views/ads/facebookAds.php';
        break;
    case 'contact':
        require 'views/contact.php';
        break;    
    case 'mentions-legales':
        require 'views/mentions-legales.php';
        break;
    case 'agence-web':
        require 'views/agence-web.php';
        break;
    default:
        require 'views/404.php';
        break;
}
$content = ob_get_clean();

if ($page === 'googleAds' || $page === 'youtubeAds' || $page === 'facebookAds') {
    require 'views/template/adsTemplate.php';
} else {
    require 'views/template/homeTemplate.php';
}