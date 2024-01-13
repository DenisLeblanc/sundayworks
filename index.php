<!DOCTYPE html>
<html>
<head>
    <title>Sunday Works</title>
    <meta charset="utf-8">
    <meta name="description" content="Shopify Theme Development">
    <meta name="keywords" content="shopify web design, web development, graphi design, ecommerce">
    <meta name="author" content="Denis Leblanc">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/reset.css">
    <link rel="stylesheet" href="assets/base.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="manifest" href="assets/site.webmanifest">


</head>
<body>
    <main id="main" class="body_wrap">
        
        
        <header class="header_wrap">
            <h1>
                <img src="assets/sunday-works.svg" alt="Sunday Works">
                <span class="visually-hidden">Sunday Works</span>
            </h1>
        </header>
    </main>

    <script> 
        // just plain javascript!!!
        const button = document.querySelector('.slide-nav-toggle');
        const pane = document.querySelector('.slide-nav');
        button.addEventListener('click', () => {
            pane.classList.toggle('open');
        });
    </script>
</body>
</html>
