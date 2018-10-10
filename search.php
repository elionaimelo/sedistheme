<?php get_header('interno'); ?>

       <div class="container">
          <div class="row">
                <div class="col-md-8">
		
				<?php 

					while(have_posts()): the_post();

						// O conteúdo do template em si estará em content-single.php
						get_template_part('content', 'search');

					
					endwhile;

					wpex_pagination();

					?>

                </div>

                <div class="col-md-4">
                <?php get_sidebar(); ?>
                </div>
          </div>
       </div>
        
        <?php get_template_part( 'content', 'footer' ); ?>
        
    </div>

  
  <?php get_footer(); ?>