<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<header style="height: 81px; min-height: unset;">
    <nav class="navbar navbar-expand-lg color-nav">
        <div class="container">
            <div class="content logo-and-togle">
                <a class="navbar-brand-logo" href="">
                    <img class="logo-nav" src="<?php echo get_template_directory_uri(); ?>/images/fisio_logo.png" alt="Logo">
                </a>
            </div>
            <div class="content">
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="nav-menu">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'menu-header',
                                    'container' => false,
                                    'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                                    'fallback_cb' => false,
                                    'depth' => 2
                                ));
                                
                                if (!has_nav_menu('menu-header')) {
                                    echo '<p>Menu não está definido.</p>';
                                }
                            ?>
                        </div>
                        <a href="#"><i class="fa-solid fa-magnifying-glass fa-xl p-3 search"></i></a>

                        <a class="bg bg-phone" href="#"><i class="fa-solid fa-phone phone"></i> (84) 3663-4664 </a>
                    </div>  
                </div>
            </div>
        </div>
    </nav>
</header>
