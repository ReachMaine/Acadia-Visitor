<?php /*
* 29Apr15 zig - add sidebar-right-all 
* 19May15 zig - use wp_is_mobile to re-order sidebars 
 */ ?>
<?php get_header(); ?>
<section class="singlepage">
    <div class="leftside">
        <?php get_sidebar('mainmenu'); ?>
        <?php if (!wp_is_mobile()) { ?>
            <?php if(ale_get_option('leftsidebargallery')==1){ include 'templates/sidebar-gallery.php'; } ?>
        <?php } ?>
    </div>
    <?php if (!wp_is_mobile()) { ?>
        <?php if(ale_get_option('rightsidebargallery')==1){ ?>
            <div class="rightsidebar">
                <?php include 'templates/sidebar-right-all.php'; ?>
                <?php include 'templates/sidebar-right-gallery.php'; ?>
            </div>
        <?php } ?>
    <?php } /* if not mobile */ ?>
    <div class="rightside <?php if(ale_get_option('rightsidebargallery')==1){ echo 'centerside'; } ?>">
        <div class="margincontentbox">
            <header class="page-title">
                <h2 class="a"><?php _e('Gallery', 'aletheme')?></h2>
                <div class="toppagination">
                    <?php posts_nav_link(' / ',__('NEWER'),__('OLDER')); ?>
                </div>
            </header>
            <div class="content cf">
                <div class="boxwithgalleries">
                    <div class="galleryitems">
                    <?php
                        global $query_string;
                        query_posts( $query_string . '&orderby=menu_order date&order=DESC');
                        if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="gallbox">
                            <figure>
                                <?php echo get_the_post_thumbnail($post->ID,'gallery-tumba'); ?>
                                <figcaption>
                                    <a href="<?php the_permalink(); ?>">
                                    <span class="title">
                                        <?php echo get_the_title(); ?>
                                    </span>
                                    <span class="category">
                                        <?php
                                        $current_category = wp_get_post_terms($post->ID, 'gallery-category', array("fields" => "all"));
                                        foreach($current_category as $curcat){
                                            echo $curcat->name.' ';
                                        }
                                        ?>
                                    </span>
                                    </a>
                                </figcaption>
                            </figure>
                        </div>
                    <?php endwhile;  else: ?>
                    <?php ale_part('notfound')?>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="cf"></div>
            </div>
        </div>
    </div>
    <?php if (wp_is_mobile()) { ?>
        <?php if(ale_get_option('leftsidebargallery')==1){ include 'templates/sidebar-gallery.php'; } ?>
        <?php if(ale_get_option('rightsidebargallery')==1){ ?>
            <div class="rightsidebar">
                <?php include 'templates/sidebar-right-all.php'; ?>
                <?php include 'templates/sidebar-right-gallery.php'; ?>
            </div>
        <?php } ?>
    <?php } /* if  mobile */ ?>
    <div class="cf"></div>
</section>
<?php get_footer(); ?>