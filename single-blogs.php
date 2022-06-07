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
               <div class="num">2</div>
               <span>Полных дня онлайн</span>
            </div>
            <div class="item">
               <div class="num">1000+</div>
               <span>Участников</span>
            </div>
            <div class="item">
               <div class="num">24</div>
               <span>Спикера</span>
            </div>
            <div class="item">
               <div class="num">8</div>
               <span>Профессоров</span>
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
                  <?php
                  wp_nav_menu(array(
                     'menu'            => 'blogs',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
                     // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                     'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                     'container_class' => '',              // (string) class контейнера (div тега)
                     'container_id'    => '',              // (string) id контейнера (div тега)
                     'menu_class'      => 'menu',          // (string) class самого меню (ul тега)
                     'menu_id'         => '',              // (string) id самого меню (ul тега)
                     'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                     'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
                     'before'          => '',              // (string) Текст перед <a> каждой ссылки
                     'after'           => '',              // (string) Текст после </a> каждой ссылки
                     'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
                     'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
                     'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                     'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
                     'theme_location'  => ''               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                  ));
                  ?>
               </div>
            </div>
         </div>
      </div>
   </section>

<?php endwhile;

get_sidebar();
get_footer();
