<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Reference_project
 */

 get_header();
 ?>

<main id="primary" class="site-main">
    <article class="home-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section class="container">
            <div class="">
                <div style="position: relative; text-align: center;"> <!-- Contêiner para imagem e título -->
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width: 100%; max-width: 900px; max-height: 600px;" class="img-fluid">

                    <h2 class="entry-title" style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); color: white; background-color: rgba(0, 0, 0, 0.5); padding: 10px; width: 800px;"> <!-- Título sobre a imagem -->
                        <?php the_title(); ?>
                    </h2>
                </div>

                <div class="entry-content">
                    <?php
                        the_content(); // Exibe o conteúdo completo do post

                        // Exibe a paginação se houver
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Páginas:', 'reference_project'),
                            'after' => '</div>',
                        ));
                    ?>
                </div><!-- .entry-content -->
            </div>
        </section>
    </article><!-- #post-<?php the_ID(); ?> -->
</main><!-- #main -->





 
 <?php
 get_footer();

 
	
 
