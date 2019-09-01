<?php
/**
 * Template part for displaying posts2
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cds
 */

?>

<?php
$color_ods =  get_field('color_ods');
$imagenpos =  get_field('imagen');

if( in_category('twitter') ){ ?>
<article id="post-<?php the_ID(); ?>"  <?php post_class('grid-item '.$imagenpos) ?>> 
		<?php the_content(); ?>
	</article>

<?php
}   
 else if( $imagenpos == 'link' ) { ?>

<a href="<?php the_field('url_link_externo');?>" title="<?php the_title_attribute(); ?>" target="_blank">
 <article id="post-<?php the_ID(); ?>"  <?php post_class( $color_ods.' grid-item '.$imagenpos ) ?>>
<header class="entry-header <?php the_field('imagen');?> ">
		<h2><?php the_title(); ?></h2>
		<?php the_field('autor');?>
</header>
</article>
</a>
<?php
} 

 else if( $imagenpos == 'quote' ) { ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<article id="post-<?php the_ID(); ?>"  <?php post_class( $color_ods.' grid-item '.$imagenpos ) ?>>
<header class="entry-header <?php the_field('imagen');?> ">
		<h3> <?php
		$categories = get_the_category();
		$separator = ' ';
		$output = '';
		if($categories){
		    foreach($categories as $category) {
		if($category->name !== 'Sin categoría') 
		if($category->name !== 'Uncategorized')
		{
		        $output .= ''.$category->cat_name.''.$separator; }
		    }
		echo trim($output, $separator);
		}
		?></h3>
		<h2>"<?php the_title(); ?>"</h2>
		<span><?php the_field('autor');?></span>
</header>
</article>
</a>
<?php
} 



else if( $imagenpos == 'completa' ) {
?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item '.$color_ods) ?>>
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
			<h2><?php the_title(); ?></h2> 
			<?php if( get_field('copete') ): ?>
			<span><p><?php the_field('copete');?></p></span>
			<?php endif; ?>
</div>

</div>

	<header class="entry-header <?php the_field('imagen');?> ">
	<?php
	//$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	//get_the_post_thumbnail( $post_id, 'thumbnail' );
	?>
 	<?php $thumb_id = get_post_thumbnail_id( $id );
        if ( '' != $thumb_id ) {
        $thumb_url  = wp_get_attachment_image_src( $thumb_id, 'large', true );
        $image      = $thumb_url[0];
    }?>
	<div class="thumbnail"
 		style="background-image: url('<?php echo $image ?>');
    background-size: cover;background-position: center center;background-repeat: no-repeat;" >
	</div>
</header>

</article>	</a>



<?php
} else if( $imagenpos == 'arriba' ) {
?>
 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

<article id="post-<?php the_ID(); ?>"  <?php post_class('grid-item '.$color_ods) ?>>
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
			<h2><?php the_title(); ?></h2>
			<?php if( get_field('copete') ): ?>
			<span><p><?php the_field('copete');?></p></span>
			<?php endif; ?>
</div>

</div>

<header class="entry-header <?php the_field('imagen');?> ">
	<?php
	//$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	//get_the_post_thumbnail( $post_id, 'thumbnail' );
	?>
 	<?php $thumb_id = get_post_thumbnail_id( $id );
        if ( '' != $thumb_id ) {
        $thumb_url  = wp_get_attachment_image_src( $thumb_id, 'large', true );
        $image      = $thumb_url[0];
    }?>
	<div class="thumbnail arriba"
 		style="background-image: url('<?php echo $image ?>');
    background-size: cover;background-position: center center;" >
	</div>
<h3><?php
			$categories = get_the_category();
			$separator = ' ';
			$output = '';
			if($categories){
			    foreach($categories as $category) {
			if($category->name !== 'Sin categoría') 
			if($category->name !== 'Uncategorized')
			{
			        $output .= ''.$category->cat_name.''.$separator; }
			    }
			echo trim($output, $separator);
			}
			?>
				
			</h3> 
 			<?php if( get_field('copete') ): ?>
			<span><p><?php the_field('copete');?></p></span>
			<?php endif; ?>
			
		<h2><?php the_title(); ?></h2>
	</header>
</article>
	</a>
<?php

}   else{
?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

	<article id="post-<?php the_ID(); ?>"  <?php post_class('grid-item '.$color_ods) ?>>
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
			<h2><?php the_title(); ?></h2>
			<?php if( get_field('copete') ): ?>
			<span><p><?php the_field('copete');?></p></span>
			<?php endif; ?>
</div>

</div>

<header class="entry-header <?php the_field('imagen');?> ">
		
			<h3><?php
			$categories = get_the_category();
			$separator = ' ';
			$output = '';
			if($categories){
			    foreach($categories as $category) {
			if($category->name !== 'Sin categoría') 
			if($category->name !== 'Uncategorized')
			{
			        $output .= ''.$category->cat_name.''.$separator; }
			    }
			echo trim($output, $separator);
			}
			?></h3>
			<h2><?php the_title(); ?></h2>
			<?php if( get_field('copete') ): ?>
			<span><p><?php the_field('copete');?></p></span>
			<?php endif; ?>
 	<?php
	//$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	//get_the_post_thumbnail( $post_id, 'thumbnail' );
	?>
 	<?php $thumb_id = get_post_thumbnail_id( $id );
        if ( '' != $thumb_id ) {
        $thumb_url  = wp_get_attachment_image_src( $thumb_id, 'large', true );
        $image      = $thumb_url[0];
    }?>
	<div class="thumbnail abajo"
 		style="background-image: url('<?php echo $image ?>');
    background-size: cover;background-position: center center;" >
	</div>
		</header><!-- .entry-header -->

</article></a><!-- #post-<?php the_ID(); ?> -->
<?php
}
?>
