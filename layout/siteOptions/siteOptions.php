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
