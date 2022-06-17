<?php
/*
Template Name: Съемка и монтаж мероприятий и праздников
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
   <section id="portfolio" class="portfolio">
      <div class="container">
         <?php
         $qqq = new WP_Query('post_type=portfolio&category_name=semka-i-montazh-meropriyatij-i-prazdnikov');
         if ($qqq->have_posts()) { ?>
            <div class="title">ПОРТФОЛИО</div>
         <?php } else { ?>

         <?php } ?>


         <div class="slider02 swiper-container">
            <div class="swiper-wrapper">
               <?php
               $pc = new WP_Query('post_type=portfolio&category_name=semka-i-montazh-meropriyatij-i-prazdnikov'); ?>
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




<?php


endwhile;

get_sidebar();
get_footer();
