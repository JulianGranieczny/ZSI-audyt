<?php
$rootFolder = '/';
$siteOptions = [
    'title' => 'Audyt ZSI',
];
$siteDescriptions = [

];
$staticTexts = [
    'searchInput' => [
        'pl' => 'Szukaj produktu',
        'en' => 'Search product',
    ],
    'cart' => [
        'pl' => 'koszyk',
        'en' => 'cart',
    ],
    'login' => [
        'pl' => 'zaloguj się',
        'en' => 'login',
    ],
    'footer_brand_desc' => [
        'pl' => 'Twój sklep premium z wyselekcjonowaną modą, elektroniką, wystrojem wnętrz i sprzętem sportowym — wszystko w bezkonkurencyjnych cenach.',
        'en' => 'Your premium destination for curated fashion, electronics, home decor, and sports gear — all at unbeatable prices.',
    ],
    'footer_shop' => [
        'pl' => 'SKLEP',
        'en' => 'SHOP',
    ],
    'shop_fashion' => [
        'pl' => 'Moda',
        'en' => 'Fashion',
    ],
    'shop_electronics' => [
        'pl' => 'Elektronika',
        'en' => 'Electronics',
    ],
    'shop_home' => [
        'pl' => 'Dom i styl życia',
        'en' => 'Home & Living',
    ],
    'shop_sports' => [
        'pl' => 'Sport i fitness',
        'en' => 'Sports & Fitness',
    ],
    'shop_new' => [
        'pl' => 'Nowości',
        'en' => 'New Arrivals',
    ],
    'shop_sale' => [
        'pl' => 'Wyprzedaż',
        'en' => 'Sale',
    ],
    'footer_support' => [
        'pl' => 'WSPARCIE',
        'en' => 'SUPPORT',
    ],
    'support_help' => [
        'pl' => 'Centrum pomocy',
        'en' => 'Help Center',
    ],
    'support_track' => [
        'pl' => 'Śledź zamówienie',
        'en' => 'Track My Order',
    ],
    'support_returns' => [
        'pl' => 'Zwroty i reklamacje',
        'en' => 'Returns & Refunds',
    ],
    'support_shipping' => [
        'pl' => 'Polityka wysyłek',
        'en' => 'Shipping Policy',
    ],
    'support_size' => [
        'pl' => 'Tabela rozmiarów',
        'en' => 'Size Guide',
    ],
    'support_contact' => [
        'pl' => 'Kontakt',
        'en' => 'Contact Us',
    ],
    'footer_contact_title' => [
        'pl' => 'KONTAKT',
        'en' => 'CONTACT',
    ],
    'newsletter' => [
        'pl' => 'Newsletter',
        'en' => 'Newsletter',
    ],
    'email_placeholder' => [
        'pl' => 'Twój email',
        'en' => 'Your email',
    ],
    'all_rights_reserved' => [
        'pl' => 'Wszelkie prawa zastrzeżone.',
        'en' => 'All rights reserved.',
    ],
    'privacy_policy' => [
        'pl' => 'Polityka prywatności',
        'en' => 'Privacy Policy',
    ],
    'terms_of_service' => [
        'pl' => 'Regulamin',
        'en' => 'Terms of Service',
    ],
    'cookie_policy' => [
        'pl' => 'Polityka Cookies',
        'en' => 'Cookie Policy',
    ],
];

function translatedText($text, $array = null)
{
    global $staticTexts;
    $array = $array ?? $staticTexts;
    $lang = 'pl';

    if (isset($_SESSION['language'])) {
        $lang = $_SESSION['language'];
    } else if (isset($_COOKIE['language'])) {
        $lang = $_COOKIE['language'];
    }

    return $array[$text][$lang] ?? $array[$text]['pl'] ?? '';
}


function clean($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

function database_connect()
{
    $host = '127.0.0.1';
    $usr = 'root';
    $pass = '';
    $db = '';
    $connect = mysqli_connect("$host", "$usr", "$pass", "$db");
    if ($connect->connect_error) {
        die("Błąd połączenia: " . $connect->connect_error);
    }
    return $connect;
}


if ((isset($_COOKIE['debug']) && $_COOKIE['debug']) || (isset($_GET['debug']) && $_GET['debug'])) {
    $siteOptions['debug'] = true;
    if (isset($_GET['debug'])) {
        setcookie('debug', $_GET['debug'] ?? $_COOKIE['debug'], time() + (86400 * 30));
    }

} else {
    $siteOptions['debug'] = false;
}


?>
