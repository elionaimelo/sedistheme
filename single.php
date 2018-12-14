<?php get_header('interno'); ?>

       <div class="container">
          <div class="row">
                <div class="col-md-12">
                    <?php 
                              while(have_posts()): the_post();
                                // O conteúdo do template em si estará em content-single.php
                                get_template_part('content', 'single');
                              ?>
                          <div class="paginacao float-left col-md-6 col-sm-6 col-xs-6"><?php previous_post_link(); ?></div>
                          <div class="paginacao float-right text-right col-md-6 col-sm-6 col-xs-6"><?php next_post_link(); ?></div>
                      <?php	
                      endwhile;
                      ?>
                </div>

                <!-- <div class="col-md-4">
                <?php /* get_sidebar();*/ ?>
                </div> -->
          </div>
       </div>
        
        <?php get_template_part( 'content', 'footer' ); ?>
        
    </div>

  
  <?php get_footer(); ?>