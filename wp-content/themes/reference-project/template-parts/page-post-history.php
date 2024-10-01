<?php
/* Template Name: Histórias */

get_header(); ?>

<h1>Histórias</h1>
<h1>Histórias</h1>
<h1>Histórias</h1>
<h1>Histórias</h1>
<h1>Histórias</h1>
<h1>Histórias</h1>

<?php
$args = array(
    'post_type' => 'historia',
    'posts_per_page' => 10, // Quantidade de histórias a exibir
);
$query = new WP_Query($args);

if ($query->have_posts()) : ?>
    <ul>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php the_excerpt(); ?>
            </li>
        <?php endwhile; ?>
    </ul>
<?php else : ?>
    <p>Nenhuma história encontrada.</p>
<?php endif; ?>

<?php
wp_reset_postdata(); // Limpar o loop
get_footer();
