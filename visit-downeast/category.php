<? /* 
* mods:
    29Apr15 zig  show the archive title.
*   29Apr15 zig - add sidebar-right-all 
*   19May15 zig - use wp_is_mobile to re-order sidebars 
*/ ?>
<?php get_header(); ?>
<section class="singlepage zig-cat">
    <div class="leftside">
        <?php get_sidebar('mainmenu'); ?>
        <?php if (!wp_is_mobile()) { ?>
            <?php get_sidebar(); ?>
        <?php } ?>
    </div>
    <?php if (!wp_is_mobile()) { ?>
        <?php if(ale_get_option('rightsidebarblog')==1){ ?>
            
            <div class="rightsidebar">
                <?php include 'templates/sidebar-right-all.php'; ?>
                <?php include 'templates/sidebar-right-blog.php'; ?>
            </div>
        <?php } ?>
    <?php } /* if not mobile */ ?>
    <div class="rightside <?php if(ale_get_option('rightsidebarblog')==1){ echo 'centerside'; } ?>">
        <div class="margincontentbox">
            <?php if(ale_get_option('topblogbox')==1){ ?>
            <div class="postnavigation cf">
                <div class="categoriesbox">
                    
                    <div class="title"><?php _e('BLOG CATEGORIES', 'aletheme')?>:</div>
                    <div class="scrollcategory">
                        <ul class="categorieslist">
                            <?php
                            $catlist = get_categories();

                            echo '<li><a href="'.home_url().'/blog" >'.__('All').'</a></li>';
                            foreach($catlist as $cat){
                                echo '<li><a href="'.get_category_link( $cat->term_id ).'">'.$cat->cat_name.'</a></li>';
                            }
                            ?>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="reachsinglbox">
                    <div class="title"><?php _e('SEARCH THE BLOG', 'aletheme')?>:</div>
                    <div class="searchform">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
            <?php } else { ?>
                <header class="page-title">
                    <h2 class="a"><?php _e('BLOG CATEGORIES', 'aletheme')?></h2>
                </header>
            <?php } ?>
            <?php 
                $arch_cat_obj = get_category(get_query_var('cat'));
                if ($arch_cat_obj) { 
                    /* <div class="category-title">
                        <div class="title">
                            <?php  echo $arch_cat_obj->name;  ?>
                        </div>
                    </div> */ ?>
                     <header class="page-title">
                        <h2 class="category"><?  echo $arch_cat_obj->name;  ?></h2>
                    </header>

            <?php     }
            ?>
            
            <div class="blogpost content cf">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="itemblog">
                    <?php
                    if (has_post_format('gallery')){

                        include 'templates/blog_gallery.php';

                    } elseif(has_post_format('image')) {

                        include 'templates/blog_image.php';

                    } elseif(has_post_format('quote')) {

                        include 'templates/blog_quote.php';

                    } elseif(has_post_format('video')) {

                        include 'templates/blog_video.php';

                    } else {

                        include 'templates/blog_standart.php';

                    } ?>
                </div>
                <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
                <?php endif; ?>
            </div>
            <?php ale_part('archives'); ?>
        </div>
    </div>
    <?php if (wp_is_mobile()) { ?>
        <?php if(ale_get_option('rightsidebarblog')==1){ ?>
            <?php get_sidebar(); ?>
            <div class="rightsidebar">
                <?php include 'templates/sidebar-right-all.php'; ?>
                <?php include 'templates/sidebar-right-blog.php'; ?>
            </div>
        <?php } ?>
    <?php } /* if  mobile */ ?>
    <div class="cf"></div>
</section>
<?php get_footer(); ?>