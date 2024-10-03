<?php

wp_enqueue_style(
    'bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css',
    [],
    '5.3.3',
    'all'
);

wp_enqueue_style( 
    'fontawesome', get_template_directory_uri() . '/assets/vendor/fontawesome/css/all.min.css', 
    array(), 
    '6.6.0',
    'all' 
);

wp_enqueue_style( 
    'theme-public', get_template_directory_uri() . '/assets/public/css/public.min.css', 
    array(), 
    '',
    'all' 
);

wp_enqueue_style( 
    'slick', get_template_directory_uri() . '/assets/vendor/slick/slick.css', 
    array(), 
    '',
    'all' 
);



