
<?php include 'sections/header.php'; ?>

<main id="page_wrap" class="container grid">

    <sidebar class="toolbar toolbar_bg grid_item">
        <?php include 'components/toolbar-background.php'; ?>
    </sidebar><!-- .toolbar -->

    <section id="content_wrap" class="grid_item">
        <?php include 'snippets/graphic.php'; ?>
        <button id="randomizeButton">Randomize</button>
        <p id="color_result">T-shirt: <span class="bg_color"><?php echo $randomBgColorValue; ?></span><span>&nbsp;|&nbsp;</span>Graphic: <span class="graphic_color"><?php echo $randomGraphicColorValue; ?></span></p>
        
        <button id="copyButton">Copy Text</button>

    </section>

    <sidebar class="toolbar toolbar_swatches grid_item">
        <?php include 'components/toolbar-swatches.php'; ?>
    </sidebar><!-- .toolbar -->

</main><!-- .content_wrap -->


<?php include 'sections/footer.php'; ?>