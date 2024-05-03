<?php
/* Theme function code */

function InnoVision_Studios_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri( .  '/assets/css/style.css'>
    ) );
}
add_action('wp_enqueue_scripts', 'InnoVision_Studios_scripts');



?>
