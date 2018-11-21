<div class="card">
	<div class="card-body">
		<div class="pg-interna">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h5><?php the_title(); ?></h5>
				<p class="data"><?php echo get_the_date(); ?></p>
				<?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'kev-feature'); ?> 

				<?php
					if ( has_post_thumbnail() ) {
						$img_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'kev-feature'); ?>
											<img src="<?php echo $img_url[0];?>" class="img-fluid postagem-pic"/>
				<?php }
					else {
						
					}
					?>

				
				<p><?php the_content(); ?></p>

				
					<?php
						if(has_tag()) {
							?> <p><?php the_tags('Tags: ', ', '); ?></p>
					<?php	} else {
							
						}	
					?>

					<?php
						if(has_category()) {
							?> <?php pll_e('Categoria'); ?>: <?php the_category(', '); ?></p>
					<?php	} else {
							
						}	
					?>
					
			</article>
		</div>
	</div>
</div>