<script type="text/javascript">

  $(document).ready(function(){
    @if (count($errors->all()) > 0)
      @foreach ($errors->all() as $err)
        Materialize.toast('{{ $err }}', 3000, 'blue darken-2')
      @endforeach
    @endif
  });


  /* Document ready */
  $(document).ready(function(){
    setTimeout(function(){
      $('.collection-header').next($('.category-items')).toggle('fast');
      $('.collection-header').children('span').html('+');
    }, 500)
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


  /* Document scroll */
  $(document).scroll(function(){
    /* Shopping cart */
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
   *  Inicializacion de componentes
   **/

   $('.button-collapse').sideNav();
   $('.parallax').parallax();
   $('select').material_select();
   $('.materialboxed').materialbox();

</script>
