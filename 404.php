<?php get_header('interno'); ?>

       <div class="container">
          <div class="row">
                <div class="col-md-8">
							<div class="card">
								<div class="card-body">
									
								<p><?php esc_html_e( 'Parece que nada foi encontrado neste local. Talvez tente um dos links abaixo ou uma pesquisa?', 'sedis' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Categorias mais usadas', 'sedis' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->

				

								</div>
							</div>
						
			
							

                </div>

                <div class="col-md-4">
                <?php get_sidebar(); ?>
                </div>
          </div>
       </div>
        
        <?php get_template_part( 'content', 'footer' ); ?>
        
    </div>

  
  <?php get_footer(); ?>

  