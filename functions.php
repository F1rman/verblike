<?php

add_filter('show_admin_bar', '__return_false');

add_theme_support( 'post-thumbnails' );
add_image_size( 'small', 250, 150, false );
add_image_size( 'medium', 900, 9999, false );
add_image_size( 'large', 1920, 1080, false );

?>