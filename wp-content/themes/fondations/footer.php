        </div><!-- #main -->

        <footer>
            <?php get_template_part('tpl', 'footer'); ?>
        </footer>
        
    </div><!-- #container -->
    
    <?php if(DEV === true): ?>
        <!-- DEVELOPMENT ONLY -->
        <div id="debug-footer">
            <p><?php echo get_num_queries(); ?> queries | <?php timer_stop(1); ?>  seconds</p>
            <pre><?php
            if(defined('SAVEQUERIES') && SAVEQUERIES){
                $topreq = array();
                $reql = array();
                foreach($wpdb->queries as $req){
                    $reql[] = trim(str_replace(array("\n","\t"),' ',$req[0]));
                }

                asort($reql);
                print_r($reql);
            }
            ?></pre>
        </div>
        <!-- END DEVELOPMENT ONLY -->
    <?php endif; ?>
    <!--[if lte IE 8]>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/selectivizr.js"></script>
    <![endif]-->
    <!--[if lt IE 7 ]>
        <script src="<?php bloginfo('template_url'); ?>/js/libs/dd_belatedpng.js"></script>
        <script> DD_belatedPNG.fix('img, .png_bg');</script>
    <![endif]-->
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>