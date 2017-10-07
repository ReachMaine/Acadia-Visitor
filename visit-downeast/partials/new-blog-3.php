<div class="blog-post cf">
    <div class="image-box">
        <?php if(get_the_post_thumbnail($post->ID)){?>
            <figure>
                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,'post-two-mini'); ?></a>
                <figcaption>
                    <a href="<?php the_permalink(); ?>"></a>
                </figcaption>
            </figure>
        <?php } ?>
    </div>
    <div class="post-data">
        <div class="post-data-text">
            <div class="title-post title"><a href="<?php the_permalink(); ?>"><?php echo ale_truncate(get_the_title(),20); ?></a></div>
            <div class="desc-post"><?php echo ale_truncate(get_the_excerpt(),100); ?></div>
            <div class="post-meta">
                <span class="date-box"><?php echo get_the_date(); ?></span>
                <span class="comm-box"><?php echo get_comments_number(); ?></span>
            </div>
        </div>
    </div>
</div>

