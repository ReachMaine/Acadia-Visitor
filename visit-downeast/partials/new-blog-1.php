<div class="blog-post cf">
    <div class="part-left">
        <?php if(get_the_post_thumbnail($post->ID)){?>
            <figure>
                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,'post-fullwidth'); ?></a>
                <figcaption>
                    <a href="<?php the_permalink(); ?>"></a>
                </figcaption>
            </figure>
        <?php } ?>
    </div>
    <div class="part-right <?php if(get_the_post_thumbnail($post->ID)==false){ echo 'part-full';} ?>">
        <div class="post-conteiner">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
            <div class="the-excerpt">
                <p><?php echo ale_truncate(get_the_excerpt(),350); ?></p>
            </div>
            <div class="post-data">
                <span class="datebox"><?php echo get_the_date(); ?></span> |
                <span class="authorbox"><?php the_author(); ?></span>
            </div>
        </div>
    </div>
</div>