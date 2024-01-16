<!DOCTYPE html>
<html>
<head>
    <title>Sunday Works</title>
    <meta charset="utf-8">
    <meta name="description" content="Shopify Theme Development">
    <meta name="keywords" content="shopify web design, web development, graphi design, ecommerce">
    <meta name="author" content="Denis Leblanc">
    <meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" href="assets/reset.css">
    <link rel="stylesheet" href="assets/base.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="manifest" href="assets/site.webmanifest">
    <?php
        $base_path = $_SERVER['HTTP_HOST'];
        $site_path = $_SERVER['REQUEST_URI'];

    ?>
</head>
<body class="<?php echo $page; ?>"> 
<a class="slide-nav-toggle">
            <img class="open" src="assets/icon-menu-burger.4.svg" alt="Open Menu">
            <img class="close" src="assets/icon-delete-disabled.svg" alt="Close Menu">
        </a>
    <nav class="slide-nav">
        <ul>
            <li><a class="item" href="/">home</a></li>
            <li><a class="item" href="details.php">details</a></li>
            <li><a class="item" href="contact.php">connect</a></li>
        </ul>
    </nav>

    <main id="main" class="main_wrap">

    <header class="header_wrap">
        <h1>
            <a href="/">
                <img src="assets/sunday-works.svg" alt="Sunday Works">
                <span class="visually-hidden">Sunday Works</span>
            </a>
        </h1>
    </header>
        