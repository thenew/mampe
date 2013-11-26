<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6 lt_ie7 lt_ie8 lt_ie9 lt_ie10" <?php language_attributes(); ?> dir="ltr"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 lt_ie8 lt_ie9 lt_ie10" <?php language_attributes(); ?> dir="ltr"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 lt_ie9 lt_ie10" <?php language_attributes(); ?> dir="ltr"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9 lt_ie10" <?php language_attributes(); ?> dir="ltr"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js" dir="ltr"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> <?php wp_title('-') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php echo get_bloginfo('rss2_url'); ?>" title="<?php echo esc_html(get_bloginfo('name'), 1); ?> - Flux RSS des articles" />
    <link rel="alternate" type="application/rss+xml" href="<?php echo get_bloginfo('comments_rss2_url'); ?>" title="<?php echo esc_html(get_bloginfo('name'), 1); ?> - Flux RSS des commentaires" />

    <?php include TEMPLATEPATH . '/tpl/header/metas.php'; ?>
    <?php wp_head(); ?>
</head>

<?php
$fon_body_class = '';
if(is_home()) {
    $fon_body_class = "theme-black";
}
?>

<body <?php body_class($fon_body_class); ?>>
    <header class="header">
        <nav class="main-nav">
            <ul class="cf">
                <li class="item home-item"><h1 class="home-title"><a class="link" href="<?php echo site_url(); ?>">Ampe Mathilde</a></h1></li>
                <li class="item"><a class="link" href="">About</a></li>
                <li class="item"><a class="link" href="">Contact</a></li>
                <li class="item"><a class="link" href="/blog">Blog</a></li>
            </ul>
        </nav>
    </header>
    <div class="main">