<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $site_name = 'Sunday Works';
        $base_path = $_SERVER['HTTP_HOST'];
        $site_path = $_SERVER['REQUEST_URI'];
    ?>
    
    <title><?php echo $site_name; ?></title>
    
    <meta charset="utf-8">
    <meta name="description" content="Shopify Theme Development">
    <meta name="keywords" content="shopify web design, web development, graphi design, ecommerce">
    <meta name="author" content="Denis Leblanc">
    <meta name="viewport" content="width=device-width; height=device-height;initial-scale=1.0; maximum-scale=1.0;">
    
    <link rel="stylesheet" href="assets/reset.css">
    <link rel="stylesheet" href="assets/base.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="manifest" href="assets/site.webmanifest">

</head>
<body class="<?php echo $page; ?>"> 
    <a class="slide-nav-toggle">
        <img class="open" src="assets/icon-menu-burger.4.svg" alt="Open Menu">
        <img class="close" src="assets/icon-delete-disabled.svg" alt="Close Menu">
    </a>
    <nav class="slide-nav">
        <ul>
            <li><a class="item" href="/">home</a></li>
            <li><a class="item" href="hello.php">hello</a></li>
            <li><a class="item" href="contact.php">connect</a></li>
        </ul>
    </nav>

    <main id="main" class="main_wrap">

    <div class="top_border">
        <div class="gradient"></div>
    </div>

        <header class="header_wrap">
            <h1>
                <a href="/" title="<?php echo $site_name; ?>">
                    <img src="assets/sunday-works.svg" srcset="assets/sunday-works.svg" alt="<?php echo $site_name; ?>" width="300" height="138"> 
                </a>
            </h1>
        </header>
        