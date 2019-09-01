<?php
/**
 * Template part for displaying singleposts
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cds
 */

$color_ods =  get_field('color_ods');
?>
 <script type="text/javascript">

 	jQuery(window.document).ready(function ($) {
		 var body = document.body;
		body.classList.add("MyClass");

 	// $("body").attr("class", "about");

    jQuery("body").addClass("blue");
  });

 </script>
<article id="post-<?php the_ID(); ?>" <?php post_class('articulo_interior '.$color_ods) ?>  >
<div class="leer_mas"><a href="#entry-content"><img src="<?php echo get_template_directory_uri(); ?>/images/leer_mas.svg" /></a></div>
	<header id="img_header" class="entry-header" >

<div class="titulo_copete">
	<div class="copete">
	<?php the_title( '<div class="titulo">', '</div>' ); ?>
	<?php if( get_field('copete') ): ?>
		<?php the_field('copete'); ?><br>
	<?php endif; ?>

	<?php if ( get_field( 'autor' ) ): ?>
		 <span style="font-size: 16px;line-height: 24px;"><?php the_field('autor'); ?></span><br>
	<?php else:   ?>
<!-- 	<br>	<span style="font-size: 16px;line-height: 24px;"><?php // echo get_the_author_meta('display_name', $author_id); ?></span>
		<br> -->
<?php endif;  ?>
	<span style="font-size: 16px;line-height: 24px;"><?php echo the_time('j/n/Y'); ?> </span>
	</div>
</div>

		<div class="img_color <?php the_field('color_ods'); ?>"   ></div>
		<div class="img_base" style="background-image: url('<?php the_field("imagen_cabecera"); ?> '); background-size: cover; background-repeat: no-repeat;background-position-y: center;" ></div>


	</header><!-- .entry-header -->


<div class="entry-content">

	<?php if( get_field('avatar_autor') ): ?>
		<div class="<?php the_field('color_ods'); ?> cabezote">
<img src="<?php the_field('avatar_autor'); ?> "> <span><?php the_field('autor'); ?></span>
			<?php //echo get_avatar( get_the_author_meta('user_email'), $size = '65'); ?>
			<?php //echo get_the_author_meta('display_name', $author_id); ?>
		</div>
	<?php endif; ?>
		<div class="views <?php the_field('color_ods'); ?>">
			<div class="number_views"><?php  echo most_and_least_read_posts_get_hits(get_the_ID()); ?></div>
			  <?php echo file_get_contents(get_stylesheet_directory() . '/images/views.svg' ); ?>
		</div>

	<div id="entry-content"></div>
	<div class="margin_content"></div><?php the_content(); ?>
</div>

  <div class="compartir <?php the_field('color_ods'); ?>">
  	COMPARTIR<br>

   			<a target="_blank" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Compartir en Facebook" class="fb"><?php echo file_get_contents(get_stylesheet_directory() . '/images/fb2.svg' ); ?></a>
   			<a target="_blank" href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Compartir en Twitter"><?php echo file_get_contents(get_stylesheet_directory() . '/images/tw2.svg' ); ?></a>
   			<style type="text/css">
   			.relleno_1 .st0, .relleno .st0{
				stroke: none!important;
			}
			.compartir .st0, .compartir .st1{
				stroke: none!important;
			}
			</style>
  </div>

</article>

<!-- RECOMENDADOS -->
 <?php if ( wp_is_mobile() ) : ?>

<div class="destacados"> <?php
$args = array( 'post__not_in' => array( $post->ID ), 'numberposts' => 3, 'order'=> 'ASC', 'orderby' => 'date',   'tag__not_in' => array( 19, 20 ));
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"  class="item_destacado <?php the_field('color_ods'); ?>"  >
        <?php the_title(); ?>

<div class="item_hover">
<?php if( get_field('mostrar_objetivo') ): ?>
<div class="objetivo">
OBJETIVO
#<?php
if($color_ods == 'ods1'){ ?>
1 <br>Fin de la pobreza
<?php
} elseif($color_ods == 'ods2'){ ?>
2 <br> Hambre cero
<?php
} elseif($color_ods == 'ods3'){ ?>
3 <br>Salud y bienestar
<?php
} elseif($color_ods == 'ods4'){ ?>
4 <br>Educación de calidad
<?php
} elseif($color_ods == 'ods5'){ ?>
5 <br>Igualdad de género
<?php
} elseif($color_ods == 'ods6'){ ?>
6 <br>Agua limpia y saneamiento
<?php
} elseif($color_ods == 'ods7'){ ?>
7 <br>Energía asequible y no contaminante
<?php
} elseif($color_ods == 'ods8'){ ?>
8 <br>Trabajo decente y crecimiento económico
<?php
} elseif($color_ods == 'ods9'){ ?>
9 <br>Industria, innovación e infraestructura
<?php
} elseif($color_ods == 'ods10'){ ?>
10 <br>Reducción de las desigualdades
<?php
} elseif($color_ods == 'ods11'){ ?>
11 <br>Ciudades y comunidades sostenibles
<?php
} elseif($color_ods == 'ods12'){ ?>
12 <br>Producción y consumo responsables
<?php
} elseif($color_ods == 'ods13'){ ?>
13 <br>Acción por el clima
<?php
} elseif($color_ods == 'ods14'){ ?>
14 <br>Vida submarina
<?php
} elseif($color_ods == 'ods15'){ ?>
15 <br>Vida de ecosistemas terrestres
<?php
} elseif($color_ods == 'ods16'){ ?>
16 <br>Paz, justicia e instituciones sólidas
<?php
} elseif($color_ods == 'ods17'){ ?>
17 <br>Alianzas para lograr los objetivos
<?php
};
?>
</div>
<?php endif; ?>

<div class="titulo">
 <?php the_title(); ?>
	<!-- <span><p><?php //the_field('copete'); ?></p></span>-->
</div>

</div>  </a>

	<?php endforeach; ?>

</div>
<?php
else :?>


<div class="destacados"> <?php
$args = array( 'post__not_in' => array( $post->ID ), 'numberposts' => 5, 'order'=> 'ASC', 'orderby' => 'date',   'tag__not_in' => array( 19, 20 ));
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"  class="item_destacado <?php the_field('color_ods'); ?>"  >
        <?php the_title(); ?>

<div class="item_hover">
<?php if( get_field('mostrar_objetivo') ): ?>
<div class="objetivo">
OBJETIVO
#<?php
if($color_ods == 'ods1'){ ?>
1 <br>Fin de la pobreza
<?php
} elseif($color_ods == 'ods2'){ ?>
2 <br> Hambre cero
<?php
} elseif($color_ods == 'ods3'){ ?>
3 <br>Salud y bienestar
<?php
} elseif($color_ods == 'ods4'){ ?>
4 <br>Educación de calidad
<?php
} elseif($color_ods == 'ods5'){ ?>
5 <br>Igualdad de género
<?php
} elseif($color_ods == 'ods6'){ ?>
6 <br>Agua limpia y saneamiento
<?php
} elseif($color_ods == 'ods7'){ ?>
7 <br>Energía asequible y no contaminante
<?php
} elseif($color_ods == 'ods8'){ ?>
8 <br>Trabajo decente y crecimiento económico
<?php
} elseif($color_ods == 'ods9'){ ?>
9 <br>Industria, innovación e infraestructura
<?php
} elseif($color_ods == 'ods10'){ ?>
10 <br>Reducción de las desigualdades
<?php
} elseif($color_ods == 'ods11'){ ?>
11 <br>Ciudades y comunidades sostenibles
<?php
} elseif($color_ods == 'ods12'){ ?>
12 <br>Producción y consumo responsables
<?php
} elseif($color_ods == 'ods13'){ ?>
13 <br>Acción por el clima
<?php
} elseif($color_ods == 'ods14'){ ?>
14 <br>Vida submarina
<?php
} elseif($color_ods == 'ods15'){ ?>
15 <br>Vida de ecosistemas terrestres
<?php
} elseif($color_ods == 'ods16'){ ?>
16 <br>Paz, justicia e instituciones sólidas
<?php
} elseif($color_ods == 'ods17'){ ?>
17 <br>Alianzas para lograr los objetivos
<?php
};
?>
</div>
<?php endif; ?>

<div class="titulo">
	<?php the_title(); ?>
	<!-- <span><p><?php //the_field('copete'); ?></p></span>-->
</div>

</div>
</a>

	<?php endforeach; ?>

</div>
<?php endif;?>
