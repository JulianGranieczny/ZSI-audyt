<?php session_start();
require_once 'siteOptions/siteOptions.php';

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
include('layout/siteOptions/head.php');

?>
<body class="<?php echo $bodyClass; ?>">

<div id="page">
    <header>
        <?php require('layout/header.php'); ?>
    </header>
    <div id="page-content">

        <?php require('layout/pageContent.php'); ?>
    </div>
</div>
<footer>
    <?php require('layout/footer.php'); ?>
</footer>


</body>
</html>
