<?php get_header('interno'); ?>

       <div class="container">
          <div class="row">
                <div class="col-md-8">
							<div class="card">
								<div class="card-body">
									
								<?php get_template_part( 'content', 'category' ); ?>

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