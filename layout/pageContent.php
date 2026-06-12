<?php
chdir(__DIR__);

$file = '../subpages/index.php';

if(isset($_GET['page'])) {
    $pageName = basename($_GET['page']);

    $file2 = "../subpages/$pageName.php";
    if(file_exists($file2)) {
        $file = $file2;
    } else {
        $file = '../subpages/error/404.php';
    }
}

if (isset($_GET['postId'])) {
    $postId = $_GET['postId'];
    $file = '../subpages/post.php';
}
require_once $file;