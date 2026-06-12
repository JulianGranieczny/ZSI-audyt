<?php
ob_start();
ob_implicit_flush(0);
set_include_path(__DIR__ . PATH_SEPARATOR . get_include_path());
chdir(__DIR__);

include('layout/body.php');
$content = ob_get_contents();
ob_end_clean();
echo $content;

?>