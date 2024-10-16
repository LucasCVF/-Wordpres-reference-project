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
 
		 <?php
			 get_template_part( 'template-parts/content', get_post_type() );
		 ?>
 
	 </main><!-- #main -->
 
 <?php
 get_footer();
