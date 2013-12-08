<?php
global $fon_meta_boxes;
$fon_meta_boxes = array();
$prefix = '';

/* Meta box declarations
   ----------------------------- */


$fon_meta_boxes[] = array(
    'title' => 'Détails',
    'pages' => array( 'portfolio' ),
    'fields' => array(
        array(
            'name'  => 'Date début',
            'id'    => "period_start",
            'type'  => 'date',
        ),
        array(
            'name'  => 'Date fin',
            'id'    => "period_end",
            'type'  => 'date',
        ),

    )
);

$fon_meta_boxes[] = array(
    'title' => 'Coordonnées',
    'pages' => array( 'experience' ),
    'fields' => array(
        array(
            'name'  => 'X',
            'id'    => "position_x",
            'type'  => 'text',
        ),
        array(
            'name'  => 'Y',
            'id'    => "position_y",
            'type'  => 'text',
        )
    )
);




/**Supported fields Meta Box 4.3.3**

- button
- checkbox_list
- checkbox
- color
- date
- datetime
- divider
- email
- file
- file_advanced
- heading
- hidden
- image
- image_advanced
- map
- number
- oembed
- password
- plupload_image
- post
- radio
- range
- select
- select_advanced (uses [select2](http://ivaynberg.github.com/select2/))
- slider
- taxonomy
- text
- textarea
- thickbox_image
- time
- url
- wysiwyg
*/
