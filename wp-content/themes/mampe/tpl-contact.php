<?php 
	// "name", "day", "month" & "year" are protected POST names
	$host  = $_SERVER['HTTP_HOST'];
	$page  = $_SERVER['REQUEST_URI'];
	if('/' == $page) {
		$address = "http://".$host.$page."#contact";
	} else {
		$address = "http://".$host.$page;
	}
	include('mail.php');
?>
<div class="content cf">
	<div class="content-part">
		<div class="content-centric cf">
			<div class="main-column scrollme" id="container_c">
				<div id="container-content_c">
					<?php
					$contact_args = array(
						'post_type'   => 'page',
						'p' => get_option('contact_pageid')
					);
					query_posts($contact_args);
					while ( have_posts() ) : the_post();
						the_content();
					endwhile;
					wp_reset_query();
					?>

 			    	<form id="contact_form" class="cssn_form block_form contact_form" action="<?php echo $address; ?>" method="POST">
						<fieldset>
							<ul>
								<li>
									<label for="email">Name</label>
									<input type="text" id="email" name="email" placeholder="Name" tabindex="1"/>
								</li>
								<li>
									<label for="firstname">Firstame</label>
									<input type="text" id="firstname" name="firstname" placeholder="Firstame" tabindex="2"/>
								</li>
								<li>
									<label for="lastname">Email</label>
									<input type="email" id="lastname" name="lastname" placeholder="Email" tabindex="3" required />
								</li>
								<li>
									<label for="message">Your message</label>
									<textarea id="message" name="message" tabindex="4" required></textarea>
								</li>
							</ul>
						</fieldset>
						<ul>
							<li>
								<button type="submit" tabindex="5">Send</button>
							</li>
						</ul>
					</form>

				</div>
			</div>
			<div id="scrollbar_c" class="scrollbar-vert hideme"><div id="handle_c" class="handle-vert"></div></div>
		</div>
	</div>
	<aside class="sidebar">
		<?php the_widget('social_Widget'); ?>
	</aside>
</div>
<script type="text/javascript">
	mampeScroll('_c');
</script>
