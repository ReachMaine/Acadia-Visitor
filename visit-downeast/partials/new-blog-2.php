<div class="blog-post cf">
    <div class="post-data  <?php if(get_the_post_thumbnail($post->ID)==false){ echo 'part-full';} ?>">
        <div class="post-data-text">
            <div class="title-post title"><a href="<?php the_permalink(); ?>"><?php echo ale_truncate(get_the_title(),20); ?></a></div>
            <div class="category-post title"><?php the_category(', '); ?></div>
            <div class="desc-post"><?php echo ale_truncate(get_the_excerpt(),110); ?></div>
        </div>
    </div>
    <div class="image-box <?php if(get_the_post_thumbnail($post->ID)==false){ echo 'no-triangle';} ?>">
        <?php if(get_the_post_thumbnail($post->ID)){?>
            <figure>
                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,'post-new-home'); ?></a>
                <figcaption>
                    <a href="<?php the_permalink(); ?>"></a>
                </figcaption>
            </figure>
        <?php } ?>
    </div>
</div>