<?php

/**
 * The template for displaying the footer
 */

wp_footer(); ?>

</main>
<footer id="footer" class="footer">
   <div class="container">
      <div class="m10"><img src="<?php echo get_image('in10.svg') ?>" alt=""></div>
      <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_image('logo.svg') ?>" alt=""></a>
      <div class="wrapper">
         <div class="col">Студия “Оргстрим” - ООО “Медконгресс” <br>
            107076, г. Москва, ул. Краснобогатырская, д.89, стр.1<br>
            <a href="tel:+74994442813">+7 499 444-28-13</a><br>
            <a href="mailto:videostudio@orgstream.ru"> videostudio@orgstream.ru</a>
         </div>


         <div class="col">Обращаем ваше внимание, данный интернет-сайт, а также вся информация о товарах и ценах,
            предоставленная
            на нём, носит исключительно информационный характер и ни при каких условиях не является публичной
            офертой, определяемой положениями Статьи 437 Гражданского кодекса Российской Федерации.<br><br>
            <a href="<?php echo get_home_url(); ?>/privacy-policy">Политика конфиденциальности</a>
         </div>

      </div>
   </div>
</footer>
</body>

</html>