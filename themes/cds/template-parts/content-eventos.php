<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cds
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('articulo_interior '); ?>>
<div class="leer_mas"><a href="#entry-content"><img src="<?php echo get_template_directory_uri(); ?>/images/leer_mas.svg" /></a></div>
<header id="img_header" class="entry-header" >
<div class="titulo_copete">
	<div class="copete">
		<?php the_title( '<div class="titulo">', '</div>' ); ?>
	</div>
</div>

<div class="img_color" style="background-color: <?php the_field("color_fondo"); ?>;"   ></div>
<div class="img_base" style="background-image: url('<?php the_field("imagen_cabecera"); ?>'); background-size: cover; background-repeat: no-repeat;background-position-y: center;" ></div>
</header><!-- .entry-header -->

	<div class="entry-content">
			<div id="entry-content"></div><?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

<h2 style="padding-left: 15px;margin-top: -45px;">Próximos eventos</h2>
<!-- categoria grid -->

  <?php
   $the_query = new WP_Query(array(
    'category_name' => 'proximos-eventos',
    'order' => 'DESC',
    'posts_per_page' => 3,
    ));
   while ( $the_query->have_posts() ) :
   $the_query->the_post();  ?>

	 <div class="flex list-eventos  <?php the_field('color_ods'); ?>">

			 <div class="fecha_evento"  ><?php the_field('fecha_evento');?> </div>

			 <div class="copeteloevento hover_toggled ">
					 <div class="tituloevento">	<?php the_title(); ?></div>
				 <?php if( get_field('copete') ): ?>
					 <?php the_field('copete');?>
					 <?php endif; ?>
					 <?php if( get_field('lugar') ): ?>
			 		 		<br><br>	<strong>Lugar:	<?php the_field('lugar');?></strong>
					 <?php endif; ?>
			</div>

		 </div>
	  <?php endwhile; wp_reset_postdata();  ?>


<h2 style="padding-left: 15px">Eventos pasados</h2>
<div class="grid-wrap not-loaded">
<div class="loading"></div>
  <?php
   $the_query = new WP_Query(array(
    'category_name' => 'eventos',
    'order' => 'DESC',
    'posts_per_page' => -1,
    ));
   while ( $the_query->have_posts() ) :
   $the_query->the_post();  ?>

    <?php  get_template_part( 'template-parts/content', 'eventocaja' , get_post_type() ); ?>
    <?php endwhile; wp_reset_postdata();  ?>
		</div>
