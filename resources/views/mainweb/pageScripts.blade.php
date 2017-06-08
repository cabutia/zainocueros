{{-- Page scripts --}}

<script type="text/javascript">
  $(document).ready(function(){
    @if (count($errors->all()) > 0)
      @foreach ($errors->all() as $err)
        Materialize.toast('{{ $err }}', 3000, 'brown darken-2')
      @endforeach
    @endif
  });

  // Variables
  var desktopNav = $('#desktop-nav'),
      desktopNavTrans = 1;
  var floatingCart = $('.cs-absolute-shopping'),
      floatingCartTrans = 1;
  var mobileNav = $('#mobile-nav'),
      mobileNavTrans = 1,
      mobileNavLogo = $('.mobile-nav-logo');
  var header = $('header');




  /**
   *  Inicializacion de componentes
   **/

   $('.button-collapse').sideNav();
   $('.parallax').parallax();



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

    /* Shopping cart */
    // Temporally disabled
    if($(this).scrollTop() > 0 && floatingCartTrans == 1){
      floatingCart.css({ "display" : "block" });
      floatingCart.animate({ opacity : "1" });
      floatingCartTrans = 0;
    }else if($(this).scrollTop() == 0 && floatingCartTrans == 0){
      floatingCart.animate({ opacity : "0" }, function(){floatingCart.css({ "display" : "none" })});
      floatingCartTrans = 1;
    }
  });




  /**
   *  Bloqueando la rotacion de la pantalla
   **/

   $(window).bind('orientationchange resize', function(event){
     if (event.orientation) {
       if (event.orientation == 'landscape') {
         if (window.rotation == 90) {
           rotate(this, -90);
         } else {
           rotate(this, 90);
         }
       }
     }
   });

</script>
