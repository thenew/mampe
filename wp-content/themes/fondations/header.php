<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js" dir="ltr"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php echo get_bloginfo('rss2_url'); ?>" title="<?php echo esc_html(get_bloginfo('name'), 1); ?> - Flux RSS des articles" />
    <link rel="alternate" type="application/rss+xml" href="<?php echo get_bloginfo('comments_rss2_url'); ?>" title="<?php echo esc_html(get_bloginfo('name'), 1); ?> - Flux RSS des commentaires" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icons -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/fav/favicon.ico" sizes="16x16">
    <link rel="apple-touch-icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/fav/favicon114.png" sizes="114x114">
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.php">

    <?php include TEMPLATEPATH . '/tpl/metas/tpl_metas.php'; ?>
    <?php wp_head(); ?><!-- action hook wordpress : obligatory -->
</head>

<body <?php body_class(); ?>>
	
    <div id="wrapper">
        
        <header role="banner">
            
            <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
            <p><?php bloginfo('description'); ?></p>
            
            <nav role="navigation">
            </nav>
            
        </header>
        
				<div id="main" role="main">