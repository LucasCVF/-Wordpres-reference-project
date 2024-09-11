<?php

wp_enqueue_script(
    'bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.min.js',
    ['jquery-theme'],
    '5.3.3',
    true
);

wp_enqueue_script(
    'jquery-theme', get_template_directory_uri().'/assets/vendor/jquery/jquery.min.js',
    [],
    '3.7.1',
    true
);
