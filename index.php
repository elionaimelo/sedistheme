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

													<?php get_template_part( 'content', 'noticias' ); ?>

													
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
											}if (is_page( 'concursos' ) || is_page( 'concourse' ) ): ?>
												
												<?php get_template_part( 'content', 'concursos' ); ?>

												<br>
										<?php
											endif;

											?>
											
											<?php
											if (is_page( 'contato' ) || is_page( 'contact' ) ): 
							
												echo do_shortcode("[cf7-form cf7key='teste1']"); 


											?>
											<div class="clearfix"></div>
											<br>
											<h3><?php pll_e('Localização'); ?></h3>
											<?php

												if( is_active_sidebar('widget-5')) : ?> 
												<?php dynamic_sidebar('widget-5') ?>
											<?php endif;  	
												
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