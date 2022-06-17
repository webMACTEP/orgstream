jQuery(document).ready(function ($) {


   $(function () {
      window.addEventListener("scroll", function (event) {

         var top = this.scrollY;

         var layers = $(".in01");
         var speed = 10;
         layers.each(function () {
            var yPos = -(top * speed / 10);
            $(this).attr('style', 'top: ' + yPos + 'px');
         });

         var layers = $(".in02");
         var speed = 10;
         layers.each(function () {
            var yPos = -(top * speed / 15);
            $(this).attr('style', 'top: ' + (230 + yPos) + 'px');
         });

         var layers = $(".in03");
         var speed = 10;
         layers.each(function () {
            var yPos = -(top * speed / 50);
            $(this).attr('style', 'top: ' + (-100 + yPos) + 'px');
         });

         var layers = $(".in04");
         var speed = 10;
         layers.each(function () {
            var yPos = -(top * speed / 50);
            $(this).attr('style', 'top: ' + (10 + yPos) + 'px');
         });



         var layers = $(".in05");
         var speed = 10;
         layers.each(function () {
            var yPos = -(top * speed / 50);
            $(this).attr('style', 'top: ' + (1000 + yPos) + 'px');
         });




         var layers = $(".in06");
         var speed = 10;
         layers.each(function () {
            var yPos = -(top * speed / 50);
            $(this).attr('style', 'top: ' + (1800 + yPos) + 'px');
         });




         var layers = $(".in07");
         var speed = 10;
         layers.each(function () {
            var yPos = -(top * speed / 100);
            $(this).attr('style', 'top: ' + (2400 + yPos) + 'px');
         });


         var layers = $(".in08");
         var speed = 10;
         layers.each(function () {
            var yPos = -(top * speed / 100);
            $(this).attr('style', 'top: ' + (3000 + yPos) + 'px');
         });


         var layers = $(".in09");
         var speed = 10;
         layers.each(function () {
            var yPos = -(top * speed / 50);
            $(this).attr('style', 'top: ' + (3000 + yPos) + 'px');
         });











      });
   });

   $('.header__burger, .header__list').click(function (event) {
      $('.header__burger, .header__menu').toggleClass('active');
      $('body').toggleClass('lock');

   });



   $('.burger, .mnav').click(function (event) {
      $('.mmenu').toggleClass('active');
      $('body').toggleClass('lock');

   });
   $('.close').click(function (event) {
      $('.mmenu').removeClass('active');
      $('body').removeClass('lock');

   });




   var swiper7 = new Swiper(".myswiper", {
      //loop: true,
      spaceBetween: 20,
      slidesPerView: 1,
      freeMode: true,
      // autoWidth: true,
      // freeMode: true,
      watchSlidesProgress: true,
   });

   var swiper1 = new Swiper('.slider01', {
      //direction: 'horizontal',
      speed: 400,
      spaceBetween: 35,
      navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
      },
      pagination: {
         el: ".swiper-pagination",
         clickable: true,
         renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
         },
      },

      thumbs: {
         swiper: swiper7,
      },


      //centeredSlides: true,
      slidesPerView: 1.3,
      autoplay: false,
      //freeMode: true,
      //centerInsufficientSlides: true,
      breakpoints: {
         320: {
            slidesPerView: 1.1,
            spaceBetween: 5
         },
         415: {
            slidesPerView: 1.1,
            spaceBetween: 15
         },
         900: {
            slidesPerView: 1.15,
            spaceBetween: 15
         },
         1120: {
            slidesPerView: 1.3,
            spaceBetween: 35
         },
         1340: {
            slidesPerView: 1.3,
            spaceBetween: 35
         },
         1570: {
            slidesPerView: 1.3,
            spaceBetween: 35
         },
         1630: {
            slidesPerView: 1.3,
            spaceBetween: 35
         },
         7000: {
            slidesPerView: 1.3,
            spaceBetween: 35
         }

      },
   });



   var swiper2 = new Swiper('.slider02', {
      navigation: {
         nextEl: '.swiper-button-next2',
         prevEl: '.swiper-button-prev2',
      },
      pagination: {
         el: ".swiper-pagination2",
         clickable: true,
         renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
         },
      },
      breakpoints: {
         320: {
            slidesPerView: 1,
            spaceBetween: 5
         },
         415: {
            slidesPerView: 1.1,
            spaceBetween: 15
         },
         900: {
            slidesPerView: 1.15,
            spaceBetween: 15
         },
         1120: {
            slidesPerView: 1.3,
            spaceBetween: 35
         },
         1340: {
            slidesPerView: 1.3,
            spaceBetween: 35
         },
         1570: {
            slidesPerView: 1.3,
            spaceBetween: 35
         },
         1630: {
            slidesPerView: 1.3,
            spaceBetween: 35
         },
         7000: {
            slidesPerView: 1.3,
            spaceBetween: 35
         }

      },
   });


   swiper.on("transitionEnd", function (swiper) {
      var currentSlide, slideType, player, command;
      currentSlide = $('.swiper-container').find(".swiper-slide-active");
      previousSlide = $('.swiper-container').find(".swiper-slide-prev");

      slideType = currentSlide.attr("class").split(" ")[1];
      player = currentSlide.find("iframe").get(0);
      command = {
         "event": "command",
         "func": "playVideo"
      };
      if (player != undefined) {
         player.contentWindow.postMessage(JSON.stringify(command), "*");
      }

      slideType = previousSlide.attr("class");
      if (slideType != undefined) {
         slideType = slideType.split(" ")[1];
         player = previousSlide.find("iframe").get(0);
         command = {
            "event": "command",
            "func": "pauseVideo"
         };
         // If you don't using autoplay you should use "stopVideo" instead of "pauseVideo"
         if (player != undefined) {
            player.contentWindow.postMessage(JSON.stringify(command), "*");
         }
      }
   });

















});