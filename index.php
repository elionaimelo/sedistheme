<?php get_header('interno'); ?>

       <div class="container">
          <div class="row">
                <div class="col-md-8">
							<div class="card">
								<div class="card-body">
									
									<?php 

											if ( !is_front_page() && is_home() ) {
												// Se houver algum post
												if(have_posts()) :
													// Enquanto houver algum post, chame o post de determinada maneira
													while (have_posts()) : the_post(); 

													?>

													<article id="post-<?php the_ID(); ?>" class="postagem">
														<h5><?php the_title(); ?></h5>
														<p class="data"><?php echo get_the_date(); ?></p>
														<?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'kev-feature'); ?>
														<img src="<?php echo $img_url[0];?>" class="img-fluid postagem-pic"/>

														<?php $content = get_the_content();
															$trimmed_content = wp_trim_words( $content, 40, '<div class="clearfix"></div><p><a href="'. get_permalink() .'" class="btn btn-primary btn-round" role="button" aria-disabled="true">Saiba mais</a></p>' ); ?>
															<p><?php echo $trimmed_content; ?></p>
															<br>
														<p><?php the_tags('Tags: ', ', '); ?></p>
														<p> Categoria: <?php the_category(', '); ?></p>

														
													</article>

													
													<?php 
														endwhile;

													?>
													<?php
														else:
													?>
															<p>Nao tem nada ainda pra mostrar</p>
													<?php 
														endif;
													?>




										<?php 
											}if (is_page( 'concursos' ) ): ?>
												
												<?php get_template_part( 'content', 'concursos' ); ?>

												<br>
										<?php
											endif;
											if (is_page( 'contato' ) ): 
												echo do_shortcode("[ninja_form id=2]"); 
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