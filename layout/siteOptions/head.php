<head>
    <?php
    // Fonts
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900;9..40,1000&display=swap"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/e35d2cc7f7.js" crossorigin="anonymous"></script>
    <?php
    // Basic
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    // Scripts


    // Style
    ?>
    <link rel="stylesheet" href="<?php echo $rootFolder ?>style/style.css">
    <link rel="stylesheet" href="<?php echo $rootFolder ?>style/responsive.css">
    <link rel="stylesheet" media="print" href="<?php echo $rootFolder ?>style/animations.css">
    <?php
    //  <link rel="stylesheet" href="/style/animations.css">
    ?>

    <?php
    // Page info
    ?>

    <title><?php echo $siteOptions['title'] ?></title>
    <meta name="description" content="<?php echo $siteDescriptions[$page] ?? $siteDescriptions['default'] ?? ''; ?>">
    <meta name="keywords" content="<?php echo $siteOptions['keywords'] ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo $rootFolder ?>img/favicon.svg">

</head>

