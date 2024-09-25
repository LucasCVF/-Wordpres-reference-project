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
				<div class="home-content">
					<?php
						the_title( '<h1 class="entry-title">', '</h1>' ); // TITULO DO POST

						// VERIFICA SE TEM IMAGEM DESTACADA
						if ( has_post_thumbnail() ) : ?>
							<div class="text-center mb-4"> <!-- CENTRALIZA A IMAGEM -->
								<?php the_post_thumbnail( 'large', ['class' => 'img-fluid'] ); // EXIBE IMAGEM DESTACADA ?>
							</div>
						<?php endif; ?>

					<div class="entry-content">
						<?php
							the_content(); // CONTEUDO DO POST

							// SE O CONTEUDO FOR GRANDE EXIBE A PAGINAÇÃO
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Páginas:', 'reference_project' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->
				</div>
			</section>
		</article><!-- #post-<?php the_ID(); ?> -->

	 </main><!-- #main -->
 
 <?php
 get_footer();

 
	
 
