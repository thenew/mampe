<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js lt_ie7"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt_ie8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt_ie9"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php bloginfo('name'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php echo get_bloginfo('rss2_url'); ?>" title="<?php echo esc_html(get_bloginfo('name'), 1); ?> - Flux RSS des articles" />
    <link rel="alternate" type="application/rss+xml" href="<?php echo get_bloginfo('comments_rss2_url'); ?>" title="<?php echo esc_html(get_bloginfo('name'), 1); ?> - Flux RSS des commentaires" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icons -->
    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.php">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.php">

    <?php include TEMPLATEPATH . '/tpl/metas/tpl_metas.php'; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
    <div id="wrapper">
        
        <header id="site-title">
            <?php //if (is_home()): ?>
                <!-- <h1><a href="#home" class="smoothScroll"><?php bloginfo('name'); ?></a></h1> -->
            <?php //else: ?>
                <h1><a class="smoothScroll" data-anchor="home" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php //endif; ?>
            <p><?php bloginfo('description'); ?></p>
        </header>
            
        <nav role="navigation" id="main-nav">
            <?php get_template_part('tpl', 'nav'); ?>
        </nav>
        
    
		<div class="main" role="main">