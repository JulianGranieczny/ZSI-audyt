<?php
$mainMenu = [
    'pl' => [
        [
            'link' => 'offer',
            'title' => 'Oferta',
        ],
        [
            'link' => 'subscription',
            'title' => 'Subskrypcje',
        ],
        [
            'link' => 'aboutUs',
            'title' => 'O nas',
        ],
        [
            'link' => 'contact',
            'title' => 'Kontakt',
        ],
        [
            'link' => 'blog',
            'title' => 'Blog',
        ],
    ],
    'en' => [
        [
            'link' => 'offer',
            'title' => 'Offer',
        ],
        [
            'link' => 'subscription',
            'title' => 'Subscriptions',
        ],
        [
            'link' => 'aboutUs',
            'title' => 'About Us',
        ],
        [
            'link' => 'contact',
            'title' => 'Contact',
        ],
        [
            'link' => 'blog',
            'title' => 'Blog',
        ],
    ],
];
?>

<div class="container">
    <div class="header-inner">
        <div class="header-left">
            <div class="logo">

            </div>
        </div>
        <div class="header-center">
            <nav id="main-menu">
                    <?php include('modules/mainmenu.php') ?>
            </nav>
        </div>
        <div class="header-right">

            <?php include('modules/languageList.php') ?>
            <?php include('modules/socialList.php') ?>

            <div class="mobile-only">
                <div class="mobile-menu-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="mobile-menu">
                    <nav id="mobile-main-menu">
                        <?php include('modules/mainmenu.php') ?>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>
