<?php /* 
    5may15 zig - remove comment count 
    12May15 zig - use comment place for author biline.
*/ ?>
<section class="full"><?php if (is_single()) : ?>
    <?php ale_part('postcontent');?>
    <div class="soclikesline cf">
        <div class="lefticons">
            <?php /* <div class="couintbox"><?php echo getPostLikeLink($post->ID); ?></div><div class="soctext"> &nbsp;<?php _e('likes', 'aletheme')?> / <?php printf(_n('One comment', '%1$s Comments', get_comments_number(), 'aletheme'), number_format_i18n(get_comments_number())); ?></div>
            */ ?>
            <?php 
            if (true /*  is_single() && get_the_author_meta( 'description' ) */ ) {
                echo '<!-- here2 -->'; ?>
               <div class="author-description">
                    <h3 class="author-title">
                        <a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
                            <?php echo get_the_author(); ?>
                        </a>
                    </h3>
                    <div class="author-bio">
                        <?php the_author_meta( 'description' ); ?>
                    </div><!-- .author-bio -->

                </div><!-- .author-description -->
           <?php }          ?>
        </div>
        <div class="righticons">
            <?php if (ale_get_option('social_sharing')) : ?>
            <div class="righticonstext">
                <?php _e('Share this post:', 'aletheme')?>
            </div>
            <div class="righticonsbuttons">
                <a href="<?php echo ale_get_share('fb'); ?>" class="fbicon" onclick="window.open(this.href, 'Share on Facebook', 'width=600,height=300'); return false">Facebook</a>
                <a href="<?php echo ale_get_share('twi'); ?>" class="twiicon" onclick="window.open(this.href, 'Share on Twitter', 'width=600,height=300'); return false">Twitter</a>
                <a href="<?php echo ale_get_share('goglp'); ?>" class="gooplus" onclick="window.open(this.href, 'Share on Google+', 'width=600,height=300'); return false">Google+</a>
            </div>
            <?php endif; ?>
        </div>
    </div>
	<?php comments_template(); ?>
<?php endif; ?></section>