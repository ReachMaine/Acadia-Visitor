<?php /*
mods:  
    29Apr15 zig - display featured image caption 
                - remove the "Tags" caption
*/ ?>
<header class="preview">
    <div class="titleline cf">
        <div class="datebox">
            <span class="day"><?php echo get_the_time('d') ?></span><br />
            <span class="month"><?php echo get_the_time('M-Y') ?></span>
        </div>
        <div class="title cf">
            <h2><?php the_title();?></h2>
            <div class="meta ta">
                <span class="categories"><?php the_category(', '); ?> &nbsp; / &nbsp; <?php the_tags( '', ', ');?> </span>
            </div>
            <div class="author-title">By:
                <a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
                    <?php echo get_the_author(); ?>
                </a>
            </div>
        </div>
    </div>
    <?php if (ale_get_meta('featuredonsigle') == 'on' and has_post_format('gallery') == false and has_post_format('image') == false and has_post_format('video') == false) : ?>
        <figure class="tubmapost">
            <?php echo get_the_post_thumbnail($post->ID, 'post-paper'); ?>
            <p class="wp-caption-text"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
        </figure>
    <?php endif; ?>
	<?php if (has_post_format('gallery')) : ?>
		<div class="postslider ta">
			<ul class="slides">
				<?php foreach(ale_get_attached_images() as $image):?>
					<li><?php echo wp_get_attachment_image($image->ID, 'post-paper')?></li>
				<?php endforeach;?>
			</ul>
		</div>
    <?php elseif (has_post_format('image')): ?>
    <figure class="tubmapost">
        <?php echo get_the_post_thumbnail($post->ID, 'post-paper'); ?>
    </figure>
    <?php elseif (has_post_format('video')): ?>
        <div class="siglepostvide">
            <?php echo wp_oembed_get(ale_get_meta('videopostlink'), array('width'=>1000)); ?>
        </div>
    <?php endif; ?>

</header>