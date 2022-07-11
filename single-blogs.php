<?php

get_header();
$sp_obj = new SpClass();

while (have_posts()) : the_post(); ?>




   <img class="in05a" src="img/in05a.svg" alt="">
   <img class="in10" src="img/in10.svg" alt="">
   <section class="blog">
      <div class="container">
         <h1><?php $sp_obj->get_title(); ?></h1>
         <p><?php the_excerpt(); ?></p>
         <div class="wrapper">
            <div class="item">
               <div class="num"><?php the_field('polnyh_dnya'); ?></div>
               <span><?php the_field('polnyh_dnya_t', 9); ?></span>
            </div>
            <div class="item">
               <div class="num"><?php the_field('uchastnikov'); ?></div>
               <span><?php the_field('uchastnikov_t'); ?></span>
            </div>
            <div class="item">
               <div class="num"><?php the_field('spikera'); ?></div>
               <span><?php the_field('spikera_t', 9); ?></span>
            </div>
            <div class="item">
               <div class="num"><?php the_field('professorov'); ?></div>
               <span><?php the_field('professorov_t', 9); ?></span>
            </div>
         </div>

      </div>
   </section>
   <section class="articles">
      <div class="container">
         <div class="row">
            <div class="cont">
               <?php the_content(); ?>
            </div>
            <div class="nav">
               <div class="title">
                  <h3>СТАТЬИ</h3>
                  <ul>
                     <?php $pc = new WP_Query('post_type=blogs'); ?>
                     <?php while ($pc->have_posts()) : $pc->the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                     <?php endwhile; ?>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>

<?php endwhile;

get_sidebar();
get_footer();
