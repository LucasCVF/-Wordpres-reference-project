<?php
wp_enqueue_script(
    'jquery-theme', get_template_directory_uri().'/assets/vendor/jquery/jquery.min.js',
    [],
    '3.7.1',
    true
);

wp_enqueue_script(
    'bootstrap-js', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.js',
    ['jquery-theme'],
    '5.3.3',
    true
);

wp_enqueue_script(
    'carousel', get_template_directory_uri().'/assets/public/js/public.min.js',
    ['jquery-theme'],
    '',
    true
);

wp_enqueue_script(
    'slick', get_template_directory_uri().'/assets/vendor/slick/slick.js',
    ['jquery-theme'],
    '',
    true
);
