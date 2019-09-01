<article id="streaming" class="grid-item horizontal post-1121 post type-post status-publish format-standard has-post-thumbnail hentry category-eventos">
	<div class="iframe_container">
		<?php
			$provider = get_field('proveedor_de_streaming','option');
			if( $provider == 'facebook' ){
		?>
			<iframe src="<?php the_field('url_streaming','option'); ?>" width="560" height="315px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
		<?php }else{ ?>
			<iframe width="560" height="315" src="<?php the_field('url_streaming','option'); ?>?rel=0&modestbranding=1&autohide=1&showinfo=0&controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<?php
			}
		?>
	</div>
</article>
