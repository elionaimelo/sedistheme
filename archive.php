<?php get_header('interno'); ?>

       <div class="container">
          <div class="row">
                <div class="col-md-8">
							<div class="card">
								<div class="card-body">
									
								<?php
								 if ( have_posts() ) :
									/* Start the Loop */
									while ( have_posts() ) :
										the_post();

										/*
										* Include the Post-Type-specific template for the content.
										* If you want to override this in a child theme, then include a file
										* called content-___.php (where ___ is the Post Type name) and that will be used instead.
										*/
										?>
										<article id="post-<?php the_ID(); ?>" <?php post_class(array('post-format-padrao')); ?>>
											<h1><a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
											<?php if(has_post_thumbnail()): the_post_thumbnail(array(175,175)); endif; ?>
											<p>Publicado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
											<p>Categorias: <?php the_category(' '); ?></p>
											<p><?php the_tags('Tags: ', ', '); ?></p>
											<p><?php the_content(); ?></p>
										</article>

										<?php

									endwhile;

									the_posts_navigation();

								else :

									get_template_part( 'template-parts/content', 'none' );

								endif;
								?>

								</div>
							</div>
							<?php wpex_pagination(); ?>
			
							

                </div>

                <div class="col-md-4">
                <?php get_sidebar(); ?>
                </div>
          </div>
       </div>
        
        <?php get_template_part( 'content', 'footer' ); ?>
        
    </div>

  
  <?php get_footer(); ?>


