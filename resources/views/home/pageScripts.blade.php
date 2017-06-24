<script type="text/javascript">

  /**
   *  Reposicionamiento del navbar segun el scroll,
   *  solo se aplica en LARGE
   **/

  $(document).scroll(function(){

    /* Desktop navbar */
    if($(this).scrollTop() > (header.innerHeight() - desktopNav.innerHeight()) && desktopNavTrans == 1){
      // Give a color
      desktopNav.css({
        "position" : "fixed",
        "top" : "0",
        "background" : "rgba(20,20,20,.95)"
      });
      desktopNavTrans = 0;
    }else if($(this).scrollTop() < (header.innerHeight() - desktopNav.innerHeight()) && desktopNavTrans == 0){
      // Be transparent
      desktopNav.css({
        "position" : "absolute",
        "top" : "initial",
        "background" : "transparent",
        "bottom" : "0"
      });
      desktopNavTrans = 1;
    }

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
    }
  });

  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    pagination: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
  });

  // $('.slider-resp-img').css({"height": this.innerWidth + "px"})


</script>
