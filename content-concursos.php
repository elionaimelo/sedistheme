 <?php 
                                  $args = array( 'post_type' => 'concursos', 'posts_per_page' => 4 );

                                          $the_query = new WP_Query( $args ); 

                                          ?>

                                          <?php if ( $the_query->have_posts() ) : ?>
                                          

                                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                                                
                                            ?>
                                            <div class="edital">

                                            
                                            <h5><a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

                                            <p class="data">Postado em: <?php the_time('j \d\e F \d\e Y') ?></p>
                                            

                                            <p><?php remove_filter( 'the_content', 'wpautop' ); the_content(); ?></p>

                                            <div class="box-icones">


                                                <?php 

                                                    if (!empty(get_cfc_field('concursosbox', 'edital'))) {
                                                    ?>
                                                    <a href="<?php echo the_cfc_field('concursosbox', 'edital');?>" target="_blank">
                                                            <span class="arrow_triangle-right_alt"></span> Edital
                                                        </a>
                                                    <?php
                                                    } 

                                                ?>

                                                <?php 

                                                    if (!empty(get_cfc_field('concursosbox', 'resultado'))) {
                                                    ?>
                                                       <a href="<?php the_cfc_field('concursosbox', 'resultado');?>" target="_blank">
                                                            <span class="arrow_triangle-right_alt"></span> Resultado
                                                        </a>
                                                    <?php
                                                    } 

                                                ?>
                                            </div>

                                    </div>
                                <?php wp_reset_postdata(); ?>
                                            <?php endwhile; ?>
                                            <?php else:  ?>
                                                <p><?php _e( 'Houve um erro! Desculpe!' ); ?></p>
                                            <?php endif; ?>
                                        