<?php if(!is_home()): ?>
<ul>
	<li><a href="<?php bloginfo('wpurl') ?>/blog#portfolio" id="portfolio_link">Portfolio</a></li>
    <li><a href="<?php bloginfo('wpurl') ?>/blog#about" id="about_link">About</a></li>
	<li><a href="<?php bloginfo('wpurl') ?>/blog#contact" id="contact_link">Contact</a></li>
</ul>
<?php else: ?>
<ul>
	<li><a class="smoothScroll" data-anchor="portfolio" id="portfolio_link" href="<?php bloginfo('wpurl') ?>/blog#portfolio">Portfolio</a></li>
	<li><a class="smoothScroll" data-anchor="about" id="about_link" href="<?php echo get_permalink(get_option('about_pageid')); ?>">About</a></li>
	<li><a class="smoothScroll" data-anchor="contact" id="contact_link" href="<?php echo get_permalink(get_option('contact_pageid')); ?>">Contact</a></li>
</ul>
<?php endif; ?>