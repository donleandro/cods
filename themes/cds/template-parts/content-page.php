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
	 	<?php the_field('fecha'); ?>
	</div>
</div>

<div class="img_color" style="background-color: <?php the_field("color_fondo"); ?>;"   ></div>
<div class="img_base" style="background-image: url('<?php the_field("imagen_cabecera"); ?>'); background-size: cover; background-repeat: no-repeat;background-position-y: center;" ></div>
</header><!-- .entry-header -->
 

	<div class="entry-content">
			<div id="entry-content"></div><?php the_content(); ?>
	</div><!-- .entry-content --> 

</article><!-- #post-<?php the_ID(); ?> -->

<!-- categoria grid -->
<?php if ( get_field('mostrar_categorias') == true ) { ?>

<div class="grid-wrap not-loaded">
<div class="loading"></div>
<?php  $categoriaGrid = get_field("categoria_a_mostrar"); 

$args1 = array(
	'post_type'		=> 'post',
 	'category_name' => $categoriaGrid,
	'showposts'		=> 1, 
	);
$q1 = new WP_query($args1);
if($q1->have_posts()) :

	$firstPosts = array();
    while($q1->have_posts()) : $q1->the_post();
					get_template_part( 'template-parts/content', get_post_type() );
	$firstPosts[]= $post->ID;
    endwhile;
endif;

$args2 = array('post__not_in' => $firstPosts,  'showposts' => -1,
 	'category_name' => $categoriaGrid, 'category__not_in' => array( 19, 20 ) );
$q2 = new WP_query($args2);

$twPosts = array();

if($q2->have_posts()) :
    while($q2->have_posts()) : $q2->the_post();
		if( ($q2->current_post) % 5 == 0 ){
			get_template_part( 'template-parts/content', 'categorias' , get_post_type() );
			$argstw = array(
				'category__in' => array( 19, 20 ),

			 	'category_name' => $categoriaGrid,

				'showposts' => 1,
				'post__not_in' => $twPosts
			);
			$qtw = new WP_query($argstw);
			while($qtw->have_posts()) : $qtw->the_post();
				$twPosts[]= $post->ID;
				get_template_part( 'template-parts/content', 'categorias' , get_post_type() );
			endwhile;
		}else{
			get_template_part( 'template-parts/content', 'categorias' , get_post_type() );
		}
    endwhile;
endif; 

?>

		</div>



<?php }  ?>
