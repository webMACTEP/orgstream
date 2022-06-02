<?php
/*
 * The template for displaying all single posts
 */

get_header();

$sp_obj = new SpClass();

while (have_posts()) : the_post(); ?>
   <div class="container">

      <article id="post-<?php the_ID(); ?>">

         <div class="entry-header">
            <h1><?php $sp_obj->get_title(); ?></h1>
            <?php the_field('rolik'); ?>
         </div>

         <div class="entry-content">
            <?php the_content(); ?>

         </div>

      </article>

   </div>
<?php

endwhile;



get_footer();
