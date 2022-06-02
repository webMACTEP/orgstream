<?php
/*
 * The template for displaying all single posts
 */

get_header();
$sp_obj = new SpClass();

while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

		<div class="entry-header">
			<h1><?php $sp_obj->get_title(); ?></h1>
		</div>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>

	</article>

<?php


endwhile;

get_sidebar();
get_footer();
