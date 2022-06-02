<?php
/*
 * The template for displaying all single posts
 */

get_header();
$sp_obj = new SpClass();

while (have_posts()) : the_post(); ?>



   <div class="container">
      <h1><?php $sp_obj->get_title(); ?></h1>


      <div class="entry-content">
         <?php the_content(); ?>
      </div>

   </div>

<?php


endwhile;

get_sidebar();
get_footer();
