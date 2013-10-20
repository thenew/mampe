<?php 
// Constantes des pages
// define('CONTACT_PAGEID',19);

// glob
// Inclure les fichiers dans le dossier inc/ et inc/*/
inc(get_template_directory().'/inc/');
// inclure les fichiers pour le theme enfant
inc(get_stylesheet_directory().'/inc/');


function inc($inc_path) {
	foreach (glob($inc_path.'*') as $inc_lvl1)
	{
		if(is_dir($inc_lvl1)){
			foreach (glob($inc_lvl1.'/*') as $inc_lvl2){
				if(!is_dir($inc_lvl2)){
		    		include $inc_lvl2;
				}
			}
		} else {
		    include $inc_lvl1;
		}
	}
}
