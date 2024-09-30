<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Reference_project
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="container">
        <div class="home-content">
            <div class="row">
                <?php if ( has_post_thumbnail() ) : ?> <!-- VERIFICA SE TEM IMAGEM DESCTACADA -->
                    <div class="col-md-4">
                        <!-- IMAGEM DESTACADA -->
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'large', ['class' => 'img-fluid'] ); ?>
                            </a>
                        </div>
                    </div>
                <?php endif; ?> <!-- SE TRUE TODO BLOCO IF É EXECUTADO SE FALSE É DESCONSIDERADO -->

				<!-- SE BÃO TIVER IMAGEM DESCTACADA = COL-MD-12 -->
                <div class="<?php echo has_post_thumbnail() ? 'col-md-8' : 'col-md-12'; ?>">
                    <!-- TITULO DO POST -->
                    <h2><?php the_title(); ?></h2>
                    <!-- CONTEUDO DO POST -->
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                    <!-- BOTAO "LEIA MAI"S" QUE DIRECIONA PARA O POST INDIVIDUAL-->
                    <a href="<?php echo get_permalink(); ?>" class="btn btn-primary m-3">Leia mais</a>
                </div>
            </div>
        </div>
    </section>

</article><!-- #post-<?php the_ID(); ?> -->






