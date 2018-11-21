<?php
/*
Template Name: Home
*/
?>


<?php get_header(); ?>

<div class="wrapper">
    
    <section id="destaques" class="remove-padding">
      <div class="container">
        <div id="carouselDestaque" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); 
              $c++;
              if ( $c == 1 ) $class .= ' active';
              else $class = '';
            ?>
            
            <div class="carousel-item <?php echo $class; ?>">
              <article>
                <p class="categoria">
                  <?php the_category(', '); ?>
                </p>
                <h2><?php the_title(); ?></h2>
  
              </article>
                <a href="<?php the_permalink() ?>" class="btn btn-sem-bg btn-round btn-lg" role="button" aria-disabled="true"><?php pll_e('Saiba mais'); ?></a>
            </div>
            <?php 
            endwhile;
            wp_reset_postdata();
            ?>
          </div>
          <a class="carousel-control-prev" href="#carouselDestaque" role="button" data-slide="prev">
            <span class="arrow_carrot-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselDestaque" role="button" data-slide="next">
            <span class="arrow_carrot-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <section id="ambientes-virtuais" class="remove-padding">
        <div class="container">
          <div class="row">
              <h6 class="ambientes"><?php pll_e('Ambientes virtuais de aprendizagem'); ?></h6>
          </div>
          <div class="row">
            <?php 
                $args = array( 'post_type' => 'ambientesvirtuais', 'posts_per_page' => 4 );

                        $the_query = new WP_Query( $args ); 

                        ?>

                        <?php if ( $the_query->have_posts() ) : ?>

                          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
              <div class="col-lg-3 col-md-6">
                  <div class="card">
                      <a  href="<?php echo the_cfc_field('ambientesbox', 'link');?>" target="_blank">
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
        </div>
    </section>
  
    <section id="sobre">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title-pg"><?php pll_e('Sobre'); ?></h3>
          </div>
          
        </div>

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

    <section id="editais">
      <img src="<?php echo get_template_directory_uri(); ?>/images/bg-editais-top.png" class="img-fluid" alt="">
      <div class="content">
          <div class="container">
              <h3 class="title-pg"><?php pll_e('Últimos editais e concursos'); ?></h3>
      
              <div class="row">
                <div class="col-md-7">
                  <div class="card">
                    <div class="card-body">
                       
                        <?php get_template_part( 'content', 'concursos' ); ?>
      
                        <a href="<?php echo home_url('/concursos'); ?>" class="btn btn-primary btn-round btn-lg float-right" role="button" aria-disabled="true"><?php pll_e('Saiba mais'); ?></a>
                    </div>
                  </div>  
                </div>
                <div class="col-md-5 reveal8">
      
                    <div class="h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-12 mx-auto form-home">
                                    <h3 class="title-2 text-center"><?php pll_e('Contato'); ?></h3>
                                    <?php if( is_active_sidebar('widget-6') ) : ?>
                                        <?php dynamic_sidebar('widget-6') ?>
                                    <?php endif;  ?>
                      
                                    <?php echo do_shortcode("[cf7-form cf7key='teste1']");  ?>
      
                            </div>
                        </div>
                    </div>
      
                    <div>
                        
                    </div>
                </div>
              </div>
            </div>
      </div>

      <img src="<?php echo get_template_directory_uri(); ?>/images/bg-editais-bottom.png" class="img-fluid" alt="">
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

            <div class="text-center"><a href="sobre" class="btn btn-primary btn-round btn-lg" role="button" aria-disabled="true"><?php pll_e('Saiba mais'); ?></a></div>

                <?php else : ?>
                   
        <?php endif;  ?>
      </div>
    </section>
    
    <section id="noticias">
      <div class="noticias-topo">
            <div class="container">
            
                <div class="txts d-md-none d-lg-block">
                    <h3 class="text-center title-2"><?php pll_e('Notícias'); ?></h3>
                </div>

            </div>
            
      </div>

      <div class="content">
          <div class="container">
          <div class="row">
  
              
          <?php 
                $args = array('posts_per_page' => 3 );

                        $the_query = new WP_Query( $args ); 

                        ?>

                        <?php if ( $the_query->have_posts() ) : ?>

                          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            $category = get_the_category();
                          ?>

              <div class="col-md-4 reveal-new1">
                <a href="<?php the_permalink() ?>">
                  <div class="box-noticia" style="background: url(<?php echo $url ?>)">
                    <div class="mask h-100">
                      <div class="categoria-noticia d-inline-block"><?php echo $category[0]->cat_name; ?></div>
                      <article>
                        <p class="data-postagem"><?php the_time(__('j \d\e M \d\e Y', 'kubrick')) ?></p>
                        <p class="titulo-noticia text-truncate text-nowrap"><?php the_title(); ?></p>
                      </article>
                    </div>
                  </div>
                </a>
              </div>

                <?php wp_reset_postdata(); ?>
                            <?php endwhile; ?>
                            <?php else:  ?>
                                <p><?php _e( 'Houve um erro! Desculpe!' ); ?></p>
                            <?php endif; ?>
          </div>
          

          <div class="row">
            <div class="col-md-12">
            <br>
              <a href="<?php echo home_url('/noticias'); ?>" class="btn btn-primary btn-round text-uppercase" role="button" aria-disabled="true">+ <?php pll_e('Notícias'); ?></a>
            </div>
          </div>

            
          </div>
      </div>

      <img src="<?php echo get_template_directory_uri(); ?>/images/bg-noticias-bottom.png" alt="" class="img-fluid">
    </section>

    <?php get_template_part( 'content', 'footer' ); ?>
    
</div>


<?php get_footer(); ?>