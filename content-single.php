<div class="card">
	<div class="card-body">
		<div class="pg-interna">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
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

				
				<p>

					<?php
						if(has_tag()) {
							?> <p><?php the_tags('Tags: ', ', '); ?>
					<?php	} else {
							
						}	
					?>
					</p>

					<p>

					<?php
						if(has_category()) {
							?> <?php pll_e('Categoria'); ?>: <?php the_category(', '); ?>
					<?php	} else {
							
						}	
					?>   
					</p>      
					
			</article>
		</div>
	</div>
</div>