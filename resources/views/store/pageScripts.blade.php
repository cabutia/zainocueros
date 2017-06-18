<script type="text/javascript">

   /* Inicializacion de componentes */


   $(document).scroll(function(){
     /* Mobile navbar */
     if($(this).scrollTop() > (header.innerHeight() - mobileNav.innerHeight()) && mobileNavTrans == 1){
       // Give a color
       mobileNav.css({ "background" : "black" });
       mobileNavLogo.css({ "opacity" : "1" });
       mobileNavTrans = 0;
     }else if($(this).scrollTop() < (header.innerHeight() - mobileNav.innerHeight()) && mobileNavTrans == 0){
       // Be transparent
       mobileNav.css({ "background" : "transparent" });
       mobileNavLogo.css({ "opacity" : "0" });
       mobileNavTrans = 1;
     }else if($(this).scrollTop() == 0 && mobileNavTrans == 0){
       mobileNav.css({ "background" : "transparent" });
       mobileNavLogo.css({ "opacity" : "0" });
       mobileNavTrans = 1;
     }
   });

   $(document).ready(function(){
     // Give a color
     desktopNav.css({
       "position" : "relative",
       "top" : "0",
       "background" : "rgb(20,20,20)"
     });
     desktopNavTrans = 0;
     $('.category-items a:nth-last-child(1)').css({ "border-bottom" : "1px solid #e0e0e0" })
   });

  /**
   *  Funcion para desplegar o colapsar los <li> < <ul>
   **/

  $('.collection-header').on('click', function(){
   $('.category-items').hide('fast');
   $(this).next($('.category-items')).toggle('fast');
  });

  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // And if we need scrollbar
    // scrollbar: '.swiper-scrollbar',// If we need pagination
    pagination: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
  })

</script>
