<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cds
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cds' ); ?></a>
   <header id="masthead" class="site-header">

<?php
if ( get_field('mostrar_header','option') == true ) {
?>
		<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>

<div class="site-branding home">
<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" /></a></h1>
</div><!-- .site-branding -->
				<?php
			else :
				?>
<div class="site-branding home">
<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" /></a></h1>
</div><!-- .site-branding -->
			<?php endif; ?>


 <?php } else { ?>

<div class="site-branding">
		<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" /></a></p>

				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" /></a></p>

			<?php endif; ?>

		</div><!-- .site-branding -->
<?php } ?>

	 <div id="newsletter_menu">
			<div id="newsletter_text">NEWSLETTER </div>
		</div>
		<div id="red_menu">
			<div id="red_text"><a href="<?php echo esc_url( home_url( '/red/' ) ); ?>"  >RED</a></div>
		</div> <!-- -->
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<div id="menu_text">MENU</div>
					<?php echo file_get_contents( get_stylesheet_directory() . '/images/menu.svg' ); ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/cerrar.svg" id="cerrar" />
				<div id="closeNav"></div>
			</button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu'
			) );
			?>

		</nav><!-- #site-navigation -->

		 <div class="search"> <?php  echo file_get_contents( get_stylesheet_directory() . '/images/search.svg' ); ?> </div>

		 <div class="overlay">
		 	<img src="<?php echo get_template_directory_uri(); ?>/images/close2.svg" class="cerrar_search" />
			<form id="search-form">
				<input type="search" name="search" id="search">
			</form>

			<div id="results">
				<div class="results-container" id="container-general">
				<!-- 	<h2><a href="/#category-general">Resultados</a></h2> -->
					<ul id="results-general"></ul>
				</div>
			</div>
		 </div>

		<?php
			if ( is_front_page() && is_home() ) :
		?>
			<div class="sidebar">
					<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
				</div>
		<?php
			elseif ( is_page()  ) :
		?>
			<div class="sidebar">
					<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
				</div>
		<?php
			else :
		?>
		 <div class="sidebar <?php the_field('color_ods'); ?>">
		 <div class="breadcrumb">
<!--
<?php
$color_ods =  get_field('color_ods');
if($color_ods == 'ods1'){ ?>
1. Fin de la pobreza
<?php
} elseif($color_ods == 'ods2'){ ?>
2. Hambre cero
<?php
} elseif($color_ods == 'ods3'){ ?>
3. Salud y bienestar
<?php
} elseif($color_ods == 'ods4'){ ?>
4. Educación de calidad
<?php
} elseif($color_ods == 'ods5'){ ?>
5. Igualdad de género
<?php
} elseif($color_ods == 'ods6'){ ?>
6. Agua limpia y saneamiento
<?php
} elseif($color_ods == 'ods7'){ ?>
7. Energía asequible y no contaminante
<?php
} elseif($color_ods == 'ods8'){ ?>
8. Trabajo decente y crecimiento económico
<?php
} elseif($color_ods == 'ods9'){ ?>
9. Industria, innovación e infraestructura
<?php
} elseif($color_ods == 'ods10'){ ?>
10. Reducción de las desigualdades
<?php
} elseif($color_ods == 'ods11'){ ?>
11. Ciudades y comunidades sostenibles
<?php
} elseif($color_ods == 'ods12'){ ?>
12. Producción y consumo responsables
<?php
} elseif($color_ods == 'ods13'){ ?>
13. Acción por el clima
<?php
} elseif($color_ods == 'ods14'){ ?>
14. Vida submarina
<?php
} elseif($color_ods == 'ods15'){ ?>
15. Vida de ecosistemas terrestres
<?php
} elseif($color_ods == 'ods16'){ ?>
16. Paz, justicia e instituciones sólidas
<?php
} elseif($color_ods == 'ods17'){ ?>
17. Alianzas para lograr los objetivos
<?php
};
?>  -->
</div>
		</div>
			<?php endif; ?>


<div class="newsletter_container">
<div class="cerrar_newsletter">  <img src="<?php echo get_template_directory_uri(); ?>/images/cerrar.svg"  /> </div>

<!-- Begin Mailchimp Signup Form -->

<div id="mc_embed_signup">
<form action="https://uniandes.us19.list-manage.com/subscribe/post?u=0ef3ed799fae166f2157ad062&amp;id=2f698089be" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">


<div class="mc-field-group">
	<label for="mce-NOMBRE">Nombre </label>
	<input type="text" value="" name="NOMBRE" class="" id="mce-NOMBRE">
</div>
<div class="mc-field-group">
	<label for="mce-APELLIDO">Apellido </label>
	<input type="text" value="" name="APELLIDO" class="" id="mce-APELLIDO">
</div>
<div class="mc-field-group">
	<label for="mce-OCUPACION">Ocupación </label>
	<input type="text" value="" name="OCUPACION" class="" id="mce-OCUPACION">
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Correo </label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0ef3ed799fae166f2157ad062_2f698089be" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Enviar" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='NOMBRE';ftypes[1]='text';fnames[2]='APELLIDO';ftypes[2]='text';fnames[6]='OCUPACION';ftypes[6]='text'; /*
 * Translated default messages for the $ validation plugin.
 * Locale: ES
 */
$.extend($.validator.messages, {
  required: "Este campo es obligatorio.",
  remote: "Por favor, rellena este campo.",
  email: "Por favor, escribe una dirección de correo válida",
  url: "Por favor, escribe una URL válida.",
  date: "Por favor, escribe una fecha válida.",
  dateISO: "Por favor, escribe una fecha (ISO) válida.",
  number: "Por favor, escribe un número entero válido.",
  digits: "Por favor, escribe sólo dígitos.",
  creditcard: "Por favor, escribe un número de tarjeta válido.",
  equalTo: "Por favor, escribe el mismo valor de nuevo.",
  accept: "Por favor, escribe un valor con una extensión aceptada.",
  maxlength: $.validator.format("Por favor, no escribas más de {0} caracteres."),
  minlength: $.validator.format("Por favor, no escribas menos de {0} caracteres."),
  rangelength: $.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
  range: $.validator.format("Por favor, escribe un valor entre {0} y {1}."),
  max: $.validator.format("Por favor, escribe un valor menor o igual a {0}."),
  min: $.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
</div>

</header><!-- #masthead -->

<?php if ( is_front_page() && is_home() ) :
				?>
<?php
if ( get_field('mostrar_header','option') == true ) {
	$color_home = get_field('color_fondo', 'option');
?>

<article id="headerhome" class="articulo_interior"  >
<div class="mas_articulos"><a href="#entry-content"><img src="<?php echo get_template_directory_uri(); ?>/images/mas_articulos.svg" /></a></div>
<header id="img_header" class="entry-header" >

	<div  id="owl-demo" class="owl-carousel owl-theme "  >

	<?php if( get_field('titulo', 'option') ): ?>
	   <div class="slider_img " >

	   	<?php if( get_field('link', 'option') ){  ?>
			<a href="<?php the_field('link', 'option')  ?>" >
		 <?php } ?>
			<div class="titulo_copete">
				<div class="copete">
					<div class="titulo"><?php the_field('titulo', 'option');  ?></div>
						<?php if( get_field('copete', 'option') ){  ?>
							<?php the_field('copete', 'option'); ?><br>
						<?php } ?>
				</div>
			</div>
			<div class="img_color "style="background-color: <?php the_field('color_fondo', 'option'); ?>"></div>
			<div class="img_base " >
				<div  style="width:100%;height:100%;background-image: url('<?php the_field('imagen', 'option'); ?>'); background-size: cover; background-repeat: no-repeat;background-position-y: center;" >
				</div>
			</div>
			<?php if( get_field('link', 'option') ){ ?>
				</a>
			 <?php }?>
		</div>
	<?php endif; ?>

	  <?php
             $the_query = new WP_Query(array(
              'category_name' => 'destacada',
              'order' => 'ASC',
              'posts_per_page' => 3,
              ));
             while ( $the_query->have_posts() ) :
                 $the_query->the_post();  ?>
   <div class="slider_img " >

		<?php if( get_field('mostrar_link') ): ?>
			<a href="<?php the_permalink(); ?>" >
		 <?php endif; ?>
			<div class="titulo_copete">
				<div class="copete">
					<?php the_title( '<div class="titulo">', '</div>' ); ?>
						<?php if( get_field('copete') ): ?>
							<?php the_field('copete'); ?><br>
						<?php endif; ?>
				</div>
			</div>
			<div class="img_color  <?php the_field('color_ods'); ?>"></div>
			<div class="img_base " >  <!-- <?php //the_post_thumbnail_url("full"); ?> -->
				<div  style="width:100%;height:100%;background-image: url('<?php the_field("imagen_cabecera"); ?>'); background-size: cover; background-repeat: no-repeat;background-position-y: center;" >
				</div>
			</div>
		<?php if( get_field('mostrar_link') ): ?>
			</a>
		 <?php endif; ?>
	</div>

    <?php endwhile; wp_reset_postdata();  ?>

 	</div>
 <div class="owl-controls">
        <div id="customDots" class="owl-dots"></div>
 </div>

</header>
<!-- .home.conheader -->
</article>
<style type="text/css">
#main{
	    padding-top: 27px;
}
</style>
<script>
	jQuery(function($){
	    $(document).ready(function(){
	        var owl = $(".owl-carousel").owlCarousel({
	            items: 1,
	            pagination: true,
	            autoplay: true,
	            slideSpeed: 4000,
	            autoplaySpeed:3000,
	            autoplayTimeout:7000,
	            autoplayHoverPause: true,
	            addClassActive: true,
	            singleItem: true,
	            loop:true,
    			dotsContainer: '#customDots',
    			onInitialized: callback,
	        }).data('owlCarousel');

	 function callback(event) {
var items = event.item.count;
console.log(items);
if (items <= 1) {
$('#customDots').addClass("single");
}
}


	    });
	})
</script>
 <?php } else { ?>
<?php } ?>

 <?php
else :?>
<?php endif; ?>


 <div id="entry-content"></div>
	<div id="content" class="site-content">
