<?php session_start();
require_once('skeleton/siteOptions/siteOptions.php');
if (!isset($_SESSION['language'])) {
    $_SESSION['language'] = 'pl';
}

if (isset($_GET['lang'])) {
    $_SESSION['language'] = $_GET['lang'];
}

setcookie("language", $_SESSION['language'], time() + (86400 * 30), "/");

$lang = $_SESSION['language'];
if (isset($_GET['page'])) {
    $pageName = basename($_GET['page']);
} else {
    $pageName = 'index';
}


?>

<!DOCTYPE html>
<html lang="<?php echo isset($_SESSION['language']) ? $_SESSION['language'] : $_COOKIE['language'] ?>">

<?php
$bodyClass = 'subpage ';

if (isset($_GET['page']) && $_GET['page'] !== 'index' || isset($_GET['postId'])) {
    if (isset($_GET['postId'])) {
        $page = htmlspecialchars($_GET['postId'], ENT_QUOTES, 'UTF-8');
    } else {
        $page = htmlspecialchars($_GET['page'], ENT_QUOTES, 'UTF-8');
    }

    $bodyClass .= $page;
} else {
    $page = 'index';
    $bodyClass = 'mainpage';
}
include('skeleton/siteOptions/head.php');

?>
<body class="<?php echo $bodyClass; ?>">

<div id="page">
    <header>
        <?php require('skeleton/header.php'); ?>
    </header>
    <div id="page-content">

        <?php require('skeleton/pageContent.php'); ?>
    </div>
</div>
<footer>
    <?php require('skeleton/footer.php'); ?>
</footer>


</body>
</html>
