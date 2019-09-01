<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cds
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<div class="grid-wrap not-loaded">
			<div class="loading"></div>
			<?php
				if( get_field('activar_streaming','option') == true ){
					get_template_part( 'template-parts/content', 'streaming' );
				}
			?>
<?php
$args1 = array(
	'post_type'		=> 'post',
	'category__not_in' => array(31),
	'showposts'		=> 1,
		'meta_query'	=> array(
		'relation'		=> 'OR',
		array(
			'key'		=> 'imagen',
			'value'		=> 'grande',
			'compare'	=> '='
		),
		array(
			'key'		=> 'imagen',
			'value'		=> 'grande_completa',
			'compare'	=> '='
		),
		array(
			'key'		=> 'imagen',
			'value'		=> 'horizontal',
			'compare'	=> '='
		)
	)
	);
$q1 = new WP_query($args1);
if($q1->have_posts()) :

	$firstPosts = array();
    while($q1->have_posts()) : $q1->the_post();
					get_template_part( 'template-parts/content', get_post_type() );
	$firstPosts[]= $post->ID;
    endwhile;
endif;

$args2 = array('post__not_in' => $firstPosts,  'showposts' => -1, 'category__not_in' => array(31, 19, 20, 47 ) ); //ocultar y destacado
$q2 = new WP_query($args2);

$twPosts = array();

if($q2->have_posts()) :
    while($q2->have_posts()) : $q2->the_post();
		if( ($q2->current_post) % 5 == 0 ){
			get_template_part( 'template-parts/content', 'samesize' , get_post_type() );
			$argstw = array(
				'category__in' => array(19, 20),
				 'category__not_in' => array(31,47), //ocultar y destacado
				'showposts' => 1,
				'post__not_in' => $twPosts
			);
			$qtw = new WP_query($argstw);
			while($qtw->have_posts()) : $qtw->the_post();
				$twPosts[]= $post->ID;
				get_template_part( 'template-parts/content', 'samesize' , get_post_type() );
			endwhile;
		}else{
			get_template_part( 'template-parts/content', 'samesize' , get_post_type() );
		}
    endwhile;
endif;


?>

		</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
