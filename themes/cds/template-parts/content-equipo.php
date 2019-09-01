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
 <header id="img_header" class="entry-header equipo" > 
 
		<?php the_title( '<div class="titulo">', '</div>' ); ?> 
 
</header><!-- .entry-header -->
 

	<div class="entry-content width_equipo"> 
	<?php if( have_rows('equipo') ): ?>
    <div class="wrapper" >
    <?php while( have_rows('equipo') ): the_row(); ?>
        <div class="item_equipo">
        	<div class="foto_avatar" style=" background-image: url('<?php the_sub_field('foto'); ?>');"></div>
        	<div class="nombre_equipo"><?php the_sub_field('nombre'); ?></div>
        	<div class="cargo_equipo"><?php the_sub_field('cargo'); ?></div>
        	<?php the_sub_field('texto_bio'); ?> 
        	<a href="<?php the_sub_field('cuenta_twitter'); ?>" target="_blank" >
        		<img src="<?php echo get_template_directory_uri(); ?>/images/tw2.svg" class="cuenta_twitter" />
        	</a>
        </div>
    <?php endwhile; ?> 
    </div> 
<?php endif; ?>
	</div><!-- .entry-content -->
  
</article><!-- #post-<?php the_ID(); ?> -->