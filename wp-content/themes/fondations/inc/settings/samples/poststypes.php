	<?php
// Custom post types
add_action('init', 'custom_posts_types');
 	
function custom_posts_types() {

	/**
	 * Portfolio
	 */

	$portfolioLabels = array(
		'name' => 'Portfolio',
		'singular_name' => 'Projet',
		'add_new' => 'Ajouter un projet',
		'add_new_item' => 'Ajouter un projet',
		'edit_item' => 'Modifier un projet',
		'new_item' => 'Nouveau projet',
		'view_item' => 'Afficher un projet',
		'search_items' => 'Chercher un projet',
		'not_found' =>  'Rien trouvé',
		'not_found_in_trash' => 'Rien trouvé dans la corbeille'
	);

	$portfolioArgs = array(
		'labels' => $portfolioLabels,
        'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		//'menu_icon' => get_stylesheet_directory_uri() . '/icon_projet.png',
		'rewrite' => true,
		'has_archive' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','author','thumbnail','excerpt','custom-fields','revisions'),
		'taxonomies' => array('categories')
	); 

	register_post_type('portfolio', $portfolioArgs);

}