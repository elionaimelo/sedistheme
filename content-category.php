
<article id="post-<?php the_ID(); ?>" class="postagem">
    <h5><?php the_title(); ?></h5>
    <p class="data"><?php echo get_the_date(); ?></p>
    <?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'kev-feature'); ?>
    <img src="<?php echo $img_url[0];?>" class="img-fluid postagem-pic"/>

    <?php $content = get_the_content();
        $trimmed_content = wp_trim_words( $content, 40, '<div class="clearfix"></div><p><a href="'. get_permalink() .'" class="btn btn-primary btn-round" role="button" aria-disabled="true">Saiba mais</a></p>' ); ?>
        <p><?php echo $trimmed_content; ?></p>
        <br>
    <p><?php the_tags('Tags: ', ', '); ?></p>
    <p> Categoria: <?php the_category(', '); ?></p>

    
</article>

												