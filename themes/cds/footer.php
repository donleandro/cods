<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cds
 */

?>

  </div><!-- #content -->
 <footer id="colophon" class="site-footer">
    <div class="site-info">
<!--  <div class="logo"><?php //echo file_get_contents( get_stylesheet_directory() . '/images/logo_test.svg' ); ?></div> -->
    </div>
  </footer>
</div><!-- #page -->

</div>

<div id="openModalhome" class="modalDialog_home"  >
 <div>
<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">

<div id="mc_embed_signup">
   <div id="cerrar_modal">  <img src="<?php echo get_template_directory_uri(); ?>/images/cerrar.svg"  /> </div>
<form action="https://uniandes.us19.list-manage.com/subscribe/post?u=0ef3ed799fae166f2157ad062&amp;id=2f698089be" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
  <label for="mce-EMAIL">NUESTRO NEWSLETTER</label>
  <div class="texto">¿Quiere estar al tanto de las convocatorias del CODS y de todo lo relacionado con los ODS en América Latina? Suscríbase aquí a nuestro newsletter mensual.</div>
 <div class="content_input">  <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="" required>
  <input type="submit" value="ENVIAR" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0ef3ed799fae166f2157ad062_2f698089be" tabindex="-1" value=""></div>
    <div class="clear"></div>

    </div>
</form>
</div>

<!--End mc_embed_signup-->
  </div>
</div>
<style type="text/css">
  #PopupSignupForm_0, #PopupSignupForm_0 > iframe {
    display: none!important;
}
</style>

<script src="<?php echo get_bloginfo('template_directory');?>/js/isotope.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>

<script type="text/javascript">




jQuery( function() {
    var $container = jQuery('.grid-wrap');

    $container.imagesLoaded( function() {
          $container.isotope({
              itemSelector: '.grid-item',
            masonry: {
            columnWidth: 10,
            gutter: 25,
            isFitWidth: true
          },
        });

        var interval;
        interval = setInterval( render, 500);
        function render(){
          jQuery(window).trigger('resize');
          $container.isotope('layout');
        };


 jQuery('.grid-wrap').removeClass('not-loaded');
        $container.isotope('layout');


        twttr.ready(
          function (twttr) {
            // console.log( "Twitter is ready");
            twttr.events.bind(
              'loaded',
              function (event) {
                event.widgets.forEach(function (widget) {
                  jQuery(window).trigger('resize');
                  $container.isotope('layout');
                  // console.log("Loaded widget", widget.id);
                  var timeout = setTimeout( function(){
                    $container.isotope('layout');
                  }, 1234);
                });
              }
            );
          }
        );

    });
});


</script>

<?php
if ( wp_is_mobile() ) {?>
<script type="text/javascript">

jQuery(function($){
$(document).ready(function(){

   if(localStorage.getItem('varNewsletter') != 'shown'){

    var count = 0;
    var body = $("body");
    body.addClass("no-scrolled");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 3000) {
            body.removeClass('no-scrolled').addClass("scrolled");
            console.log(count);
            if (count < 1) {
              $('#openModalhome').animate({left:'0'},500);

              localStorage.setItem('varNewsletter','shown')
               count++;
            }
        }
        else {
            body.removeClass("scrolled").addClass('no-scrolled');

        }
    });

   };

$('#cerrar_modal').click(function() {
               $('#openModalhome').animate({left:'100%'},500);
             });
 

  $('.search').click(function() {
   $('.overlay').css('display', 'block');

   $('#search').focus();

     });

   $('.search').click(function() {
   $('.overlay').css('display', 'block');

   $('#search').focus();

     });
   $('.cerrar_search').click(function() {
                $('.overlay').css('display', 'none');
                $('#results-general').empty();

   });

    $('#newsletter_menu').click(function() {
                $('.newsletter_container').css('display', 'block');
                $('#newsletter_menu').addClass("active");
          $('.menu-toggle').attr('aria-expanded','false');
          $('#primary-menu').attr('aria-expanded','false');
                $('#site-navigation').removeClass("toggled");
            //    $('.menu-menu-1-container').css('display', 'none');

        });


    $('#link_newsletter').click(function() {
                $('.newsletter_container').css('display', 'block');
          $('.menu-toggle').attr('aria-expanded','false');
          $('#primary-menu').attr('aria-expanded','false');
                $('#site-navigation').removeClass("toggled");

        });


    $('.cerrar_newsletter').click(function() {
                $('.newsletter_container').css('display', 'none');
                $('#newsletter_menu').removeClass("active");
        //        $('.main-navigation ul').css('display', 'block');
        });

    $('.menu-toggle').click(function() {
                $('.newsletter_container').css('display', 'none');
                $('#newsletter_menu').removeClass("active");
                //$('.menu-menu-1-container').css('display', 'block');
        });

     $('#cerrar').click(function() {
      //  $('.menu-toggle').attr('aria-expanded','false');
      //  $('.nav-menu').attr('aria-expanded','false');

              //  $('.menu-menu-1-container').css('display', 'none');
        });
  resizeDiv();
});
window.onresize = function(event) {
  resizeDiv();
}
function resizeDiv() {
}
$(".mas_articulos").click(function() {
    $('html, body').animate({
        scrollTop: $("#entry-content").offset().top
    }, 1000);
});
$(".leer_mas").click(function() {
    $('html, body').animate({
        scrollTop: $("#entry-content").offset().top
    }, 1000);
});



});
</script>
<style type="text/css">
.articulo_interior .copete,#headerhome #img_header,.slider_img,.img_color,.img_base  {
  height: 400px!important ;
}
</style>

<?php } else {?>
<script type="text/javascript">

jQuery(function($){
$(document).ready(function(){

   if(localStorage.getItem('varNewsletter') != 'shown'){

    var count = 0;
    var body = $("body");
    body.addClass("no-scrolled");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 3000) {
            body.removeClass('no-scrolled').addClass("scrolled");
            console.log(count);
            if (count < 1) {
              $('#openModalhome').animate({left:'0'},500);

              localStorage.setItem('varNewsletter','shown')
               count++;
            }
        }
        else {
            body.removeClass("scrolled").addClass('no-scrolled');

        }
    });

   };

       $('#cerrar_modal').click(function() {
               $('#openModalhome').animate({left:'100%'},500);
             });



  $('.search').click(function() {
   $('.overlay').css('display', 'block');

   $('#search').focus();

     });

   $('.search').click(function() {
   $('.overlay').css('display', 'block');

   $('#search').focus();

     });
   $('.cerrar_search').click(function() {
                $('.overlay').css('display', 'none');
                $('#results-general').empty();

   });

    $('#newsletter_menu').click(function() {
                $('.newsletter_container').css('display', 'block');
                $('#newsletter_menu').addClass("active");
          $('.menu-toggle').attr('aria-expanded','false');
          $('#primary-menu').attr('aria-expanded','false');
                $('#site-navigation').removeClass("toggled");
            //    $('.menu-menu-1-container').css('display', 'none');

        });


    $('#link_newsletter').click(function() {
                $('.newsletter_container').css('display', 'block');
          $('.menu-toggle').attr('aria-expanded','false');
          $('#primary-menu').attr('aria-expanded','false');
                $('#site-navigation').removeClass("toggled");

        });


    $('.cerrar_newsletter').click(function() {
                $('.newsletter_container').css('display', 'none');
                $('#newsletter_menu').removeClass("active");
        //        $('.main-navigation ul').css('display', 'block');
        });

    $('.menu-toggle').click(function() {
                $('.newsletter_container').css('display', 'none');
                $('#newsletter_menu').removeClass("active");
                //$('.menu-menu-1-container').css('display', 'block');
        });

     $('#cerrar').click(function() {
      //  $('.menu-toggle').attr('aria-expanded','false');
      //  $('.nav-menu').attr('aria-expanded','false');

              //  $('.menu-menu-1-container').css('display', 'none');
        });
  resizeDiv();
});
window.onresize = function(event) {
  resizeDiv();
}
function resizeDiv() {
  vpw = $(window).width();
  vph = $(window).height();
  $("#img_header").css({"height": vph - 60 + "px"});
  $(".img_color").css({"height": vph - 60 + "px"});
  $(".img_base").css({"height": vph - 60 + "px"});
  $(".slider_img").css({"height": vph - 60 + "px"});
  $(".leer_mas").css({"top": vph - 120 + "px"});
  $(".mas_articulos").css({"top": vph - 120 + "px"});
}
$(".mas_articulos").click(function() {
    $('html, body').animate({
        scrollTop: $("#entry-content").offset().top
    }, 1000);
});
$(".leer_mas").click(function() {
    $('html, body').animate({
        scrollTop: $("#entry-content").offset().top
    }, 1000);
});



});
</script>
<?php }
?>

<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/0ef3ed799fae166f2157ad062/50fda5b2b8c73260cec3a4b1b.js");</script>

<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>

<?php wp_footer(); ?>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-137422233-1', 'auto');
ga('send', 'pageview');
</script>

</body>
</html>
