<?php
/*
Template Name: Телемосты
Template Post Type: services
*/

get_header();
$sp_obj = new SpClass();

while (have_posts()) : the_post(); ?>

   <img class="in05a" src="img/in05a.svg" alt="">
   <img class="in10" src="img/in10.svg" alt="">
   <section class="page">
      <div class="container">
         <h1><?php $sp_obj->get_title(); ?></h1>
         <?php the_content(); ?>
         <div class="button send-request">ОСТАВИТЬ ЗАЯВКУ</div>
      </div>
   </section>


   <?php
   $zzz = new WP_Query('post_type=hot&category_name=telemosty');
   if ($zzz->have_posts()) { ?>
      <section id="hot" class="hot">
         <div class="container">
            <!-- <div class="title">Горящие предложения</div> -->
            <div class="wrapper">

               <?php
               $pc = new WP_Query('post_type=hot&category_name=telemosty'); ?>
               <?php while ($pc->have_posts()) : $pc->the_post(); ?>

                  <div class="item">
                     <h3><?php the_title(); ?></h3>
                     <h4> <?php the_excerpt(); ?></h4>
                     <a href="<?php the_permalink(); ?>">
                        <div class="button send-request">Получить скидку</div>
                     </a>
                  </div>

               <?php endwhile; ?>



            </div>
         </div>
      </section>
   <?php } else { ?>
   <?php } ?>




   <?php
   $qqq = new WP_Query('post_type=portfolio&category_name=telemosty');
   if ($qqq->have_posts()) { ?>
      <section id="portfolio" class="portfolio">
         <div class="container">
            <div class="title">ПОРТФОЛИО</div>
            <div class="slider02 swiper-container">
               <div class="swiper-wrapper">
                  <?php
                  $pc = new WP_Query('post_type=portfolio&category_name=telemosty'); ?>
                  <?php while ($pc->have_posts()) : $pc->the_post(); ?>

                     <div class="swiper-slide slide">
                        <a href="<?php the_permalink(); ?>"><?php the_field('rolik'); ?></a>
                     </div>

                  <?php endwhile; ?>

               </div>

            </div>
            <div class="swiper-button-next2"></div>

            <div class="swiper-pagination2"></div>
         </div>
      </section>
   <?php } else { ?>
   <?php } ?>



<?php


endwhile;

get_sidebar();
get_footer();
