<section class="container">
    <div class="home-content">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <!-- BOTOES DE CONTROLE DO CARROSEL -->
            <div class="custom-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="custom-carousel-button active" aria-current="true" aria-label="Slide 1"></button>
                <br>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class="custom-carousel-button" aria-label="Slide 2"></button>
                <br>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" class="custom-carousel-button" aria-label="Slide 3"></button>
            </div>

            <!-- CONTEUDO CARROSEL -->
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image_banner1.jpeg"alt="Imagem 1">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image_banner2.jpeg" alt="Imagem 2">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image_banner3.png" alt="Imagem 3">
                </div>
            </div>
        </div>
        <div>
            <h2 class="widget-title">Posts Recentes</h2>
            <ul class="recent-posts">
                <?php
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 5, // NUMERO DE POSTS RECENTES QUE VAI SER EXIBIDO
                    'post_status' => 'publish' // DEFINE APENAS OS POSTS PUBLICADOS
                ));
                foreach($recent_posts as $post) : ?>
                    <li>
                        <a href="<?php echo get_permalink($post['ID']); ?>">
                            <?php echo esc_html($post['post_title']); ?>
                        </a>
                        <span class="post-date"><?php echo get_the_date('F j, Y', $post['ID']); ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

