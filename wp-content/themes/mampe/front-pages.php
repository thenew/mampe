<?php /* Template Name: Pade d'attente */ ?>
<!doctype html>
<html lang="en-EN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathilde Ampe</title>
    <!-- Icons -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/fav/favicon.ico" sizes="16x16">
    <link rel="apple-touch-icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/fav/favicon114.png" sizes="114x114">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/styles/splash-page.css">

    <?php include TEMPLATEPATH . '/tpl/metas/tpl_metas.php'; ?>
    <?php wp_head(); ?><!-- action hook wordpress : obligatory -->

</head>
<body class="splash-page">
    <div class="container">
        <h1 class="page-title">Portfolio, Mathilde AMPE</h1>
        <h2 class="page-subhead">New design in progress</h2>
        <a href="<?php echo site_url( '/blog' ); ?>">Back to the old one</a>
        <a class="portfolio-link" target="_blank" href="<?php echo site_url( 'portfolio/AMPE_Mathilde_2013.pdf' ); ?>">Look at my portfolio</a>
    </div>

    <!--[if lte IE 8]>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/selectivizr.js"></script>
    <![endif]-->
    <script>
        var _gaq=[['_setAccount','<?php echo get_option("tp_analytics"); ?>'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>