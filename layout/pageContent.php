<?php
chdir(__DIR__);

$file = '../views/index.php';

if(isset($_GET['page'])) {
    $pageName = basename($_GET['page']);

    $file2 = "../views/$pageName.php";
    if(file_exists($file2)) {
        $file = $file2;
    } else {
        $file = '../views/error/404.php';
    }
}

if (isset($_GET['postId'])) {
    $postId = $_GET['postId'];
    $file = '../views/post.php';
}
require_once $file;