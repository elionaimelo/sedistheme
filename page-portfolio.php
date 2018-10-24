<?php
/*
Template Name: portfólio
*/
?>

<?php get_header('interno'); ?>



       <div class="container">
          <div class="row">
                <div class="col-md-12">
							
									
                  <?php 
                        echo do_shortcode("[visual_portfolio id='134' class='']"); 
                        
                  ?>	


                </div>

          </div>
       </div>
        
        <?php get_template_part( 'content', 'footer' ); ?>
        
    </div>

  
  <?php get_footer(); ?>