<?php
$languages = [
    'pl',
    'en',
];

if (isset($_GET['page'])) {
    $pageName = basename($_GET['page']);
} else {
    $pageName = 'index';
}
?>

<div class="header-languages-wrapper">
    <div class="header-languages">
        <?php foreach ($languages as $language) { ?>
            <a href="/<?php echo $language ?>/<?= $pageName ?>"
               class="<?php echo
               (isset($_COOKIE['language']) && $_COOKIE['language'] == $language && !isset($_SESSION['language'])) ||
               (isset($_SESSION['language']) && $_SESSION['language'] == $language)
                   ? 'active' : '' ?>"> <?php echo $language ?> </a>
        <?php } ?>
    </div>
</div>
