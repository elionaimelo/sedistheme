<?php
/*
Template Name: modelo1
*/
?>

<?php get_header('interno'); ?>

<div class="wrapper">
    

    <section id="sobre">
      <div class="container">
        <div class="row">

                  <?php if( is_active_sidebar('widget-2') ) : ?>
                         <div class="col-md-6 reveal6">
                        <article>
                          <?php dynamic_sidebar('widget-1') ?>
                        </article>

                       <a href="<?php echo esc_url( home_url( '/sobre' ) ); ?>" class="btn btn-primary btn-round btn-lg" role="button" aria-disabled="true"><?php pll_e('Saiba mais'); ?></a>

                      </div>
                      <div class="col-md-6 reveal7">
              
                          <div class="play-video">
                            <!-- <div class="video-button"></div> -->
                            
                            <?php if ( dynamic_sidebar('widget-2') ) : else : endif;  ?>   
                          </div>
                      </div>
                  
                <?php else : ?>
                   
                    <div class="col-md-12 reveal6">
                      <article>
                        <?php dynamic_sidebar('widget-1') ?>
                      </article>

                     <a href="<?php echo esc_url( home_url( '/sobre' ) ); ?>" class="btn btn-primary btn-round btn-lg" role="button" aria-disabled="true"><?php pll_e('Saiba mais'); ?></a>

                <?php endif;  ?>
                  


          </div>
      </div>
    </section>



    <section id="portfolio">
      <div class="container">
      <h3 class="title-pg"><?php pll_e('Serviço'); ?></h3>

        
        <div class="row">
        <?php 
                $args = array( 'post_type' => 'servicos');

                        $the_query = new WP_Query( $args ); 

                        ?>

                        <?php if ( $the_query->have_posts() ) : ?>

                          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
              <div class="col-lg-3 col-md-6">
                  <div class="card">
                      <a  href="<?php echo the_cfc_field('servicesbox', 'linkservico');?>" target="_blank">
                        <div class="card-body">
                            <div class="row altura-card">
                              <div class="col-4 mx-auto align-self-center remove-margem">
                                  <span class="pe-7s-study float-md-right"></span> 
                              </div>
                                <div class="col-8 mx-auto align-self-center">
                                    <p class="text-center nome-plataforma float-md-left"> <?php the_title(); ?></p>
                                </div>
                              </div>
                        </div>
                      </a>
                  </div>
              </div>

                 <?php wp_reset_postdata(); ?>
                            <?php endwhile; ?>
                            <?php else:  ?>
                                <p><?php _e( 'Houve um erro! Desculpe!' ); ?></p>
                            <?php endif; ?>


          </div>

        <?php if( is_active_sidebar('widget-4') ) : ?>
          
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="subtitle"><?php pll_e('Materiais de educação e comunicação'); ?></h5>
                    </div>
                </div>

                <?php dynamic_sidebar('widget-4') ?>

                    <?php else : ?>
                        
            <?php endif;  ?>
      </div>
    </section>

    <section id="polos-apoio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                            <h3 class="title-pg"><?php pll_e('Polos de apoio'); ?></h3>

                            <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse rotate-icon-acordion">
                            <?php 
                                        $args = array( 'post_type' => 'polos');

                                        $the_query = new WP_Query( $args ); 
                                        if ( $the_query->have_posts() ) :
                                            while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>


                                        <div class="card card-plain">
                                          <div class="card-header" role="tab" id="heading-<?php the_ID(); ?>">
                                              <a data-toggle="collapse" data-parent="#acordion2" href="#collapse-<?php the_ID(); ?>" aria-expanded="true" aria-controls="collapse-<?php the_ID(); ?>">
                                                <strong><?php the_title(); ?></strong>
                                      
                                            <i class="now-ui-icons arrows-1_minimal-down float-right"></i>
                                              </a>
                                          </div>
                                      
                                          <div id="collapse-<?php the_ID(); ?>" class="collapse" role="tabpanel" aria-labelledby="heading-<?php the_ID(); ?>">
                                            <div class="card-body">
                                                <?php the_content(); ?>
                                            </div>
                                          </div>
                                        </div>

                                <?php wp_reset_postdata(); ?>
                                <?php endwhile; ?>
                                <?php else:  ?>
                                    <p><?php _e( 'Houve um erro! Desculpe!' ); ?></p>
                                <?php endif; ?>

                        
                    </div>
                </div>
            </div>
        </section>

     <section id="cursos">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
    
                                <h3 class="title-pg"><?php pll_e('Cursos'); ?></h3>
    
                                <div id="acordion2" role="tablist" aria-multiselectable="true" class="card-collapse rotate-icon-acordion">
                                <?php 
                                        $args = array( 'post_type' => 'cursos');

                                        $the_query = new WP_Query( $args ); 
                                        if ( $the_query->have_posts() ) :
                                            while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>


                                        <div class="card card-plain">
                                          <div class="card-header" role="tab" id="heading-<?php the_ID(); ?>">
                                              <a data-toggle="collapse" data-parent="#acordion2" href="#collapse-<?php the_ID(); ?>" aria-expanded="true" aria-controls="collapse-<?php the_ID(); ?>">
                                                <strong><?php the_title(); ?></strong>
                                      
                                            <i class="now-ui-icons arrows-1_minimal-down float-right"></i>
                                              </a>
                                          </div>
                                      
                                          <div id="collapse-<?php the_ID(); ?>" class="collapse" role="tabpanel" aria-labelledby="heading-<?php the_ID(); ?>">
                                            <div class="card-body">
                                                <?php the_content(); ?>
                                            </div>
                                          </div>
                                        </div>

                                <?php wp_reset_postdata(); ?>
                                <?php endwhile; ?>
                                <?php else:  ?>
                                    <p><?php _e( 'Houve um erro! Desculpe!' ); ?></p>
                                <?php endif; ?>

                                </div>
                            
                        </div>
                    </div>
                </div>
        </section>
        <section id="duvidas-frequentes">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
    
                                <h3 class="title-pg"><?php pll_e('Dúvidas frequentes'); ?></h3>
    
                                <div id="acordion3" role="tablist" aria-multiselectable="true" class="card-collapse rotate-icon-acordion">
                                        <?php 
                                                $args = array( 'post_type' => 'duvidasfrequentes');

                                                $the_query = new WP_Query( $args ); 
                                                if ( $the_query->have_posts() ) :
                                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                        ?>


                                                <div class="card card-plain">
                                                <div class="card-header" role="tab" id="heading-<?php the_ID(); ?>">
                                                    <a data-toggle="collapse" data-parent="#acordion2" href="#collapse-<?php the_ID(); ?>" aria-expanded="true" aria-controls="collapse-<?php the_ID(); ?>">
                                                        <strong><?php the_title(); ?></strong>
                                            
                                                    <i class="now-ui-icons arrows-1_minimal-down float-right"></i>
                                                    </a>
                                                </div>
                                            
                                                <div id="collapse-<?php the_ID(); ?>" class="collapse" role="tabpanel" aria-labelledby="heading-<?php the_ID(); ?>">
                                                    <div class="card-body">
                                                        <?php the_content(); ?>
                                                    </div>
                                                </div>
                                                </div>

                                        <?php wp_reset_postdata(); ?>
                                        <?php endwhile; ?>
                                        <?php else:  ?>
                                            <p><?php _e( 'Houve um erro! Desculpe!' ); ?></p>
                                        <?php endif; ?>
                                </div>
                            
                        </div>
                    </div>
                </div>
        </section>

    

    <?php get_template_part( 'content', 'footer' ); ?>
    
</div>


<?php get_footer(); ?>