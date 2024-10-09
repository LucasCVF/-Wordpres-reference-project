<section class="container">
    <div class="home-content">
        <div id="carouselExampleDark" class="carousel carousel-dark slide pb-4" data-bs-ride="carousel">
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

        <div class="container-history row">
            <div class="col-12 p-0">
                <div class="square"></div>
                <div class="single-item content-relative">
                    <?php
                        // Loop para exibir as 3 histórias mais recentes
                        for ($i = 0; $i < 4; $i++) :
                            $args = array(
                                'post_type'      => 'historia',
                                'posts_per_page' => 1, // Pega apenas uma história por vez
                                'offset'         => $i, // Define o deslocamento para pegar diferentes histórias
                                'orderby'        => 'date', // Ordena pela data
                                'order'          => 'DESC' // Exibe a mais recente primeiro
                            );

                            $recent_historia = new WP_Query($args);

                            if ($recent_historia->have_posts()) :
                                while ($recent_historia->have_posts()) : $recent_historia->the_post(); ?>
                                    <div class="content-history">
                                        <div class="row">
                                            <div class="col-md-5 container-img-history">
                                                <?php
                                                    if (has_post_thumbnail()) {
                                                        echo get_the_post_thumbnail(0, '', ['class' => 'img-history']);
                                                    }
                                                ?>
                                            </div>
                                            <div class="col-md-7 container-content-history margin">
                                                <h2 class="history-title"><?php the_title(); ?></h2>
                                                <div class="history-text"><?php the_content(); ?></div>
                                                <div class="row margin">
                                                    <div class="col-6">
                                                        <a class="button-1" href="">Saiba mais <i class="fa-solid fa-arrow-right arrows"></i></a>
                                                    </div>
                                                    <div class="col-6">
                                                        <a class="button-2" href="">Agendar agora! <i class="fa-solid fa-arrow-right arrows"></i></a>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>                   
                                <?php endwhile;
                            else : ?>
                                <p>Nenhuma história encontrada.</p>
                            <?php endif;

                            wp_reset_postdata(); // Reseta os dados do post para não interferir em outras partes da página
                        endfor;
                    ?>
                </div>
            </div>
            <div class="mb-5">
                <button class="list-cs btn-previus arrows-next-previus">
                    <i class="fa-solid fa-chevron-left fa-beat fa-lg"></i>
                </button>
                <button class="list-cs btn-next arrows-next-previus">
                    <i class="fa-solid fa-chevron-right fa-beat fa-lg"></i>
                </button>
            </div>
        </div>


        <div class="row">
            <div class="col-md-5">
                
                <?php
                // BUSCA DO POST MAIS RECENTE
                $most_recent_post = wp_get_recent_posts(array(
                    'numberposts' => 1, // Exibe apenas o post mais recente
                    'post_status' => 'publish' // Apenas posts publicados
                ));

                if (!empty($most_recent_post)) :
                    $post = $most_recent_post[0]; ?>
                    
                    <!-- EXIBE O POST MAIS RECENTE -->
                    <div class="most-recent-post position-relative">
                        <?php if ( has_post_thumbnail( $post['ID'] ) ) : ?><!-- EXIBE IMAGEM DESTACADA -->
                            <a href="<?php echo get_permalink($post['ID']); ?>">
                                <?php echo get_the_post_thumbnail( $post['ID'], 'large', ['class' => 'img-fluid image-custom']); ?>
                            </a>
                        <?php endif; ?>
                        <div class="image-text">
                            <a class="edit-text-title" href="<?php echo get_permalink($post['ID']); ?>"><!-- EXIBE TITULO DO POST -->
                                <?php echo esc_html($post['post_title']); ?>
                            </a><br>
                            <!-- EXIBE DATA DO POST -->
                            <span class="post-date edit-text">
                                <?php echo get_the_date('d/m/Y', $post['ID']); ?> 
                                - <?php echo get_the_time('H:i', $post['ID']); ?>
                            </span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="col-md-7">
                <ul class="recent-posts m-0 p-0">
                    <?php
                    // BUSCA DOS PRÓXIMOS 3 POSTS RECENTES (excluindo o primeiro)
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 3, // EXIBE OS 3 POSTS RECENTES
                        'offset' => 1, // IGNORA O PRIMEIRO POST EXIBIDO
                        'post_status' => 'publish' // APENAS POSTS PUBLICADOS
                    ));

                    foreach($recent_posts as $post) : ?>
                        <div class="mb-3">
                            <div class="row">
                                <?php if ( has_post_thumbnail( $post['ID'] ) ) : ?><!-- EXIBE IMAGEM DESTACADA -->
                                    <div class="col-md-5">
                                        <a class="img-fluid three-img" href="<?php echo get_permalink($post['ID']); ?>">
                                            <?php echo get_the_post_thumbnail( $post['ID'], 'thumbnail', ['class' => 'img-fluid three-images-custom'] ); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <div class="col-md-7">
                                    <a href="<?php echo get_permalink($post['ID']); ?>" class="three-recent-post-title three-edit-text-title">
                                        <?php echo esc_html($post['post_title']); ?>
                                    </a>
                                    <span class="post-date">
                                        <?php echo get_the_date('d/m/Y', $post['ID']); ?> - <?php echo get_the_time('H:i', $post['ID']); ?>
                                    </span>
                                    <div class="entry-content three-recent-post-content m-0">
                                        <?php
                                            echo wp_trim_words( get_the_content(null, false, $post['ID']), 30, '...' );
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

