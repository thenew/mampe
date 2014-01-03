    </div><?php /* .main */ ?>
    <footer class="footer">
        &copy; AMPE Mathilde
    </footer>

    <?php if(!ENV_DEV): ?>
        <script>
            var _gaq=[['_setAccount','UA-30625675-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    <?php endif; ?>
    <?php wp_footer(); ?>
</body>
</html>