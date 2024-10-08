<?php get_header(); ?>

<h1><?php the_title(); ?></h1>
<div><?php the_content(); ?></div>

<?php if (has_post_thumbnail()) : ?>
    <div><?php the_post_thumbnail(); ?></div>
<?php endif; ?>

<?php get_footer(); ?>
