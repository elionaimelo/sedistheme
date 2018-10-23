<div class="card">
	<div class="card-body">
		<div class="pg-interna">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h5><?php the_title(); ?></h5>
				<p class="data"><?php echo get_the_date(); ?></p>
				<?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'kev-feature'); ?>
				<img src="<?php echo $img_url[0];?>" class="img-fluid postagem-pic"/>

				<?php 
                //Verifica o idioma atual para setar o botão saiba mais de acordo com a língua
                if (get_locale() == 'en_US'): 
                    $content = get_the_content();
       
                    $trimmed_content = wp_trim_words( $content, 40, '<div class="clearfix"></div><p><a href="'. get_permalink() .'" class="btn btn-primary btn-round" role="button" aria-disabled="true">Show more</a></p>' ); ?>
                    <p><?php echo $trimmed_content; ?></p>
                    <br>

                    <?php
                        if(has_tag()) {
                            ?> <p><?php the_tags('Tags: ', ', '); ?></p>
                    <?php	} else {
                            
                        }	
                    ?>
                
                    <p>  <?php pll_e('Categoria'); ?>: <?php the_category(', '); ?></p>
        
        <?php   
                else:
                    $content = get_the_content();
       
                    $trimmed_content = wp_trim_words( $content, 40, '<div class="clearfix"></div><p><a href="'. get_permalink() .'" class="btn btn-primary btn-round" role="button" aria-disabled="true">Saiba mais</a></p>' ); ?>
                    <p><?php echo $trimmed_content; ?></p>
                    <br>

                    <?php
                        if(has_tag()) {
                            ?> <p><?php the_tags('Tags: ', ', '); ?></p>
                    <?php	} else {
                            
                        }	
                    ?>
                
                    <p> <?php pll_e('Categoria'); ?>: <?php the_category(', '); ?></p>          
    
        <?php 
                endif; 
        ?>
        
					
			</article>
		</div>
	</div>
</div>