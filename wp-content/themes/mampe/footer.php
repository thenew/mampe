        </div><!-- .main -->
        <footer class="droits">
           <p><a href="<?php echo get_permalink(MENTIONSLEGALES_PAGEID); ?>">Copyright © Mathilde Ampe <?php echo date('Y'); ?></a></p> 
        </footer>
        
    </div><!-- #wrapper -->
    
    <!--[if lte IE 8]>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/selectivizr.js"></script>
    <![endif]-->
    <!--[if lt IE 7 ]>
        <script src="<?php bloginfo('template_url'); ?>/js/libs/dd_belatedpng.js"></script>
        <script> DD_belatedPNG.fix('img, .png_bg');</script>
    <![endif]-->
    <script>
        var _gaq=[['_setAccount','<?php echo get_option("tp_analytics"); ?>'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>