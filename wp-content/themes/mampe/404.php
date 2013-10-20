<?php
get_header();
the_post();
?>
<div class="content cf">
    <div class="content-part">
        <div class="content-centric cf">
            <div class="main-column scrollme" id="container">
                <div id="container-content" class="post-content">
                    <a class="quatrecentquatre" href="<?php bloginfo('wpurl') ?>/portfolio">
                        <img src="<?php echo get_bloginfo('stylesheet_directory').'/img/quatrecentquatre.png'; ?>" alt="Page not found" />
                    </a>
                </div>
            </div>
            <div id="scrollbar" class="scrollbar-vert hideme"><div id="handle" class="handle-vert"></div></div>
        </div>
    </div>

    <aside class="sidebar">
        <?php get_sidebar('portfolio'); ?>
    </aside>
</div>
<?php 
get_footer();