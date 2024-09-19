<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css" type="text/css"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<header style="height: 81px; min-height: unset;">
    <nav class="navbar navbar-expand-lg logo-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-3 p-2">
                    <a class="navbar-brand-logo" href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fisio_logo.png" alt="Logo">
                    </a>
                </div>
                <div class="col-md-6">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-header',
							'container' => false,
							'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
							'fallback_cb' => false,
							'depth' => 2
						));
						
						// Adicione isso para depuração
						if (!has_nav_menu('menu-header')) {
							echo '<p>Menu não está definido.</p>';
						}
						?>
					</div>
                </div>
                <div class="col-md-3 p-2">
                    Contato e barra de pesquisa
                </div>
            </div>
        </div>
    </nav>
</header>
