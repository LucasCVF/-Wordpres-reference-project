<?php
/* Template Name: Todas as Histórias */

get_header(); ?>

<section class="container">
    <div class="home-content">
        <div class="row">
            <?php
            // Query para buscar todos os posts do tipo 'historia'
            $args = array(
                'post_type' => 'historia',
                'posts_per_page' => -1, // Pega todas as histórias
                'orderby' => 'date',
                'order' => 'DESC'
            );

            $historias_query = new WP_Query($args);

            if ($historias_query->have_posts()) :
                while ($historias_query->have_posts()) : $historias_query->the_post(); ?>
                    <div class="col-md-4 mt-5 mb-2">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="">
                                <?php the_post_thumbnail( 'large', ['class' => 'img-fluid'] ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-8 mt-5">
                        <h2><?php the_title(); ?></h2>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="read-more">Leia mais</a>
                    </div>
                <?php endwhile;
            else : ?>
                <p>Nenhuma história encontrada.</p>
            <?php endif;

            wp_reset_postdata(); // Reseta a query para não interferir com outras partes da página
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
