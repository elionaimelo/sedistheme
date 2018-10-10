<?php get_header('interno'); ?>

       <div class="container">
          <div class="row">
                <div class="col-md-8">
							<div class="card">
								<div class="card-body">
									
									<?php 


												// Se houver algum post
												if(have_posts()) :
													// Enquanto houver algum post, chame o post de determinada maneira
													while (have_posts()) : the_post(); 

													?>

													<?php get_template_part( 'content', 'category' ); ?>

													
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