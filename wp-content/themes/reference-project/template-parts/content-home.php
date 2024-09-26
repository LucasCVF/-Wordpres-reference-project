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

        <div class="row borderrr">
            <div class="col-md-6">
                
                <?php
                // BUSCA DO POST MAIS RECENTE
                $most_recent_post = wp_get_recent_posts(array(
                    'numberposts' => 1, // Exibe apenas o post mais recente
                    'post_status' => 'publish' // Apenas posts publicados
                ));

                if (!empty($most_recent_post)) :
                    $post = $most_recent_post[0]; ?>
                    
                    <!-- EXIBE O POST MAIS RECENTE -->
                    <div class="most-recent-post">
                        <?php if ( has_post_thumbnail( $post['ID'] ) ) : ?><!-- EXIBE IMAGEM DESTACADA -->
                            <a href="<?php echo get_permalink($post['ID']); ?>">
                                <?php echo get_the_post_thumbnail( $post['ID'], 'large', ['class' => 'img-fluid image-custom']); ?>
                            </a>
                        <?php endif; ?>
                        
                        <a href="<?php echo get_permalink($post['ID']); ?>"><!-- EXIBE TITULO DO POST -->
                            <h3><?php echo esc_html($post['post_title']); ?></h3>
                        </a>
                        <!-- EXIBE DATA DO POST -->
                        <span class="post-date">
                            <?php echo get_the_date('d/m/Y', $post['ID']); ?> 
                            - <?php echo get_the_time('H:i', $post['ID']); ?>
                        </span>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="col-md-6">
                <ul class="recent-posts m-0 p-0">
                    <?php
                    // BUSCA DOS PRÓXIMOS 4 POSTS RECENTES (excluindo o primeiro)
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 3, // EXIBE OS 4 POSTS RECENTES
                        'offset' => 1, // IGNORA O PRIMEIRO POST EXIBIDO
                        'post_status' => 'publish' // APENAS POSTS PUBLICADOS
                    ));

                    foreach($recent_posts as $post) : ?>
                        <div class="mb-3"> <!-- Margem inferior para dar espaçamento -->
                            <div class="row">
                                <?php if ( has_post_thumbnail( $post['ID'] ) ) : ?><!-- EXIBE IMAGEM DESTACADA -->
                                    <div class="col-4"> <!-- Coluna para a imagem -->
                                        <a href="<?php echo get_permalink($post['ID']); ?>">
                                            <?php echo get_the_post_thumbnail( $post['ID'], 'thumbnail', ['class' => 'img-fluid three-images-custom'] ); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <div class="col-8"> <!-- Coluna para o texto -->
                                    <a href="<?php echo get_permalink($post['ID']); ?>" class="recent-post-title">
                                        <?php echo esc_html($post['post_title']); ?>
                                    </a>
                                    <br>
                                    <span class="post-date">
                                        <?php echo get_the_date('d/m/Y', $post['ID']); ?> - <?php echo get_the_time('H:i', $post['ID']); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </ul>
            </div>


        </div>

    </div>
</section>

