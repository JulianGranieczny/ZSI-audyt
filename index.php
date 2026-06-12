<?php

session_start();

ob_start();
ob_implicit_flush(0);

set_include_path(__DIR__ . PATH_SEPARATOR . get_include_path());
chdir(__DIR__);

$allowedLanguages = ['pl', 'en'];


if (isset($_GET['lang']) && in_array($_GET['lang'], $allowedLanguages, true)) {
    $lang = $_GET['lang'];
} else if (isset($_SESSION['language']) && in_array($_SESSION['language'], $allowedLanguages, true)) {
    $lang = $_SESSION['language'];
} else if (isset($_COOKIE['language']) && in_array($_COOKIE['language'], $allowedLanguages, true)) {
    $lang = $_COOKIE['language'];
} else {
    $lang = 'pl';
}

$_SESSION['language'] = $lang;

setcookie("language", $lang, time() + (86400 * 30), "/");
$_COOKIE['language'] = $lang;



if (isset($_GET['page'])) {
    $pageName = basename($_GET['page']);
} else {
    $pageName = 'index';
}

$requestPath = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$firstSegment = explode('/', $requestPath)[0] ?? '';

$isPrettyUrl = in_array($firstSegment, $allowedLanguages, true);


if (!$isPrettyUrl) {
    header('Location: /' . $lang . '/', true, 302);
    exit;
}

include('layout/body.php');

$content = ob_get_contents();
ob_end_clean();

echo $content;