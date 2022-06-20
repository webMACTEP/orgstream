<?php
/*
Template Name: Главная страница
 */


get_header();
?>

<img class="in01" src="<?php echo get_image('in01.svg') ?>" alt="">
<img class="m01" src="<?php echo get_image('in01.svg') ?>" alt="">
<img class="m02" src="<?php echo get_image('in02.svg') ?>" alt="">
<img class="in02" src="<?php echo get_image('in02.svg') ?>" alt="">
<img class="in03" src="<?php echo get_image('in03.svg') ?>" alt="">
<img class="in04" src="<?php echo get_image('in04.svg') ?>" alt="">
<img class="in05" src="<?php echo get_image('in05.svg') ?>" alt="">
<img class="in06" src="<?php echo get_image('in06.svg') ?>" alt="">
<img class="in07" src="<?php echo get_image('in07.svg') ?>" alt="">
<img class="m07" src="<?php echo get_image('in07.svg') ?>" alt="">
<img class="in08" src="<?php echo get_image('in08.svg') ?>" alt="">
<img class="m09" src="<?php echo get_image('in10.svg') ?>" alt="">
<img class="in09" src="<?php echo get_image('in10.svg') ?>" alt="">
<img class="in10" src="<?php echo get_image('in10.svg') ?>" alt="">
<img class="m13" src="<?php echo get_image('in13.svg') ?>" alt="">
<img class="m14" src="<?php echo get_image('in14.svg') ?>" alt="">
<img class="m15" src="<?php echo get_image('in15.svg') ?>" alt="">
<section class="intro">
   <div class="container">
      <div class="titles">
         <h1>Видеопродакшн.
            Онлайн-трансляции.
            Вебинары.</h1>
         <div class="subtitle">
            <h2>
               Мы готовы выполнить любую задачу по созданию видеоконтента и организации трансляций событий: от
               вебинара до всероссийского форума!
            </h2>
         </div>
      </div>
      <a href="">
         <div class="button">ОСТАВИТЬ ЗАЯВКУ</div>
      </a>
   </div>
</section>
<section id="us" class="us">
   <div class="container">

      <div class="title"><span>Почему</span> мы?</div>
      <div class="wrap">
         <div class="item"><img src="<?php echo get_image('us01.svg') ?>" alt="">
            <p>Провели 2 000 онлайн-трансляций для 500 000 зрителей.</p>
         </div>
         <div class="item"><img src="<?php echo get_image('us02.svg') ?>" alt="">
            <p>15 лет создаем видеоконтент для крупных компаний.</p>
         </div>
         <div class="item"><img src="<?php echo get_image('us03.svg') ?>" alt="">
            <p>Работаем по всей России.
            </p>
         </div>
         <div class="item"><img src="<?php echo get_image('us04.svg') ?>" alt="">
            <p>Съемка и монтаж любой сложности по доступной цене.</p>
         </div>
      </div>

   </div>
</section>
<section id="services" class="services">
   <div class="container">
      <div class="title"><span>Что</span> мы делаем:</div>

      <div thumbsSlider="" class="myswiper swiper-container swiper">

         <div class="swiper-wrapper wrapper">
            <?php
            $pc = new WP_Query('post_type=services'); ?>
            <?php while ($pc->have_posts()) : $pc->the_post(); ?>

               <div class="swiper-slide item">

                  <?php the_title(); ?>

               </div>

            <?php endwhile; ?>
         </div>

      </div>



      <div class="slider01 swiper-container swiper">



         <div class="swiper-wrapper">
            <?php
            $pc = new WP_Query('post_type=services'); ?>
            <?php while ($pc->have_posts()) : $pc->the_post(); ?>

               <div class="swiper-slide slide">
                  <img src="<?php echo get_image('item01.jpg') ?>" alt="">
                  <h2><?php the_title(); ?></h2>
                  <?php the_excerpt(); ?>
                  <a href="<?php the_permalink(); ?>">
                     <div class="button">ПОДРОБНЕЕ</div>
                  </a>
               </div>

            <?php endwhile; ?>

         </div>




      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>


   </div>

</section>
<section id="hot" class="hot">
   <div class="container">
      <div class="title">Горящие предложения</div>
      <div class="wrapper">

         <?php
         $pc = new WP_Query('post_type=hot&category_name=glavnaya-stranicza'); ?>
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
<section id="prof" class="prof">
   <div class="container">
      <div class="wrapper">
         <div class="yellow">
            <h5>наш профиль</h5>
         </div>
         <h3>Решение для фармацевтических компаний и мед. организаций</h3>
         <a href="<?php echo get_home_url(); ?>/reshenie-dlya-farmaczevticheskih-kompanij-i-med-organizaczij">
            <div class="button">УЗНАТЬ</div>
         </a>
      </div>
   </div>
</section>
<section id="portfolio" class="portfolio">
   <div class="container">
      <div class="title">ПОРТФОЛИО</div>
      <div class="slider02 swiper-container">
         <div class="swiper-wrapper">
            <?php
            $pc = new WP_Query('post_type=portfolio&category_name=glavnaya-stranicza'); ?>
            <?php while ($pc->have_posts()) : $pc->the_post(); ?>

               <div class="swiper-slide slide">
                  <a href="<?php the_permalink(); ?>"><?php the_field('rolik'); ?></a>
               </div>

            <?php endwhile; ?>

         </div>

      </div>
      <div class="swiper-button-next2"></div>
      <div class="swiper-button-prev2"></div>
      <div class="swiper-pagination2"></div>
   </div>
</section>

<?php
get_footer();
