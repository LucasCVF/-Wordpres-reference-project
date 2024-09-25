<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reference_project
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside id="secondary" class="widget-area">
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
</aside><!-- #secondary -->

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->	



