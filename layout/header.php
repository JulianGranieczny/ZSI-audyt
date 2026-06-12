<?php
$mainMenu = [
        'content' => [
                'pl' => [
                        [
                                'link' => '/',
                                'title' => 'Strona Główna',
                        ],
                        [
                                'link' => 'offer',
                                'title' => 'Oferta',
                        ],
                        [
                                'link' => 'about',
                                'title' => 'O nas',
                        ],
                        [
                                'link' => 'contact',
                                'title' => 'Kontakt',
                        ],
                ],
                'en' => [
                        [
                                'link' => '/',
                                'title' => 'Home',
                        ],
                        [
                                'link' => 'offer',
                                'title' => 'Offer',
                        ],
                        [
                                'link' => 'about',
                                'title' => 'About Us',
                        ],
                        [
                                'link' => 'contact',
                                'title' => 'Contact',
                        ],
                ],
        ],
];
?>

<div class="container">
    <div class="header-top">
        <nav id="main-menu">
            <ul>
                <?php foreach (translatedText('content', $mainMenu) as $item) { ?>
                    <li class="<?php echo (
                            (isset($_GET['page']) && $_GET['page'] === $item['link']) ||
                            ($item['link'] === '/' && !isset($_GET['page']))
                    ) ? 'active' : ''; ?>">
                        <a href="<?php echo $item['link']; ?>">
                            <?php echo $item['title']; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
    <div class="header-bottom">
        <div class="header-left">
            <div class="logo">
                <a href="/">
                    Prime Selection
                </a>
            </div>
        </div>
        <div class="header-center">
            <form id="search-form">
                <div class="form-element-wrapper">
                    <input type="text" class="form-control-element"
                           placeholder="<?php echo translatedText('searchInput') ?>">
                </div>
            </form>
        </div>
        <div class="header-right">
            <button class="cart">
                <?php echo translatedText('cart') ?>
            </button>
            <button class="login">
                <?php echo translatedText('login') ?>
            </button>
            <?php include('modules/languageList.php') ?>

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
