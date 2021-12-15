<?php

// Docs: https://developer.wordpress.org/reference/functions/add_image_size/
// add_image_size( string $name, int $width, int $height, bool|array $crop = false )
// then call to get <img /> anywhere using: the_post_thumbnail('event_top'); 

add_theme_support('post-thumbnails');
add_image_size('name', 200, 200, true);