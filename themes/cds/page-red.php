<?php
/*
 Template Name: RED
 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cds
 */

get_header();
?>
 
<div id="red"> 
			<h2>RED</h2>
			<ul>  
				<li><a href="#">OBJETIVOS</a></li>
				<li><a href="#">INVESTIGADORES</a></li>
				<li><a href="#">INSTITUCIONES</a></li>
				<li><a href="#">PAPERS</a></li>
			</ul> 
</div>  
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );
 
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_footer();
