<?php /*
* 29Apr15 zig - add sidebar-right-all 
* 18May15 zig - use wp_is_mobile to re-order sidebars 
* 19May15 zig - move categories box for mobile too.
 */ ?>
<?php get_header(); ?>
<section class="singlepage">

    <div class="leftside">
        <?php get_sidebar('mainmenu'); ?>
        <?php if (!wp_is_mobile()) { ?>
            <?php if(ale_get_option('leftsidebarblog')==1){ get_sidebar(); } ?>
        <?php } ?>
    </div>
    <?php if (!wp_is_mobile()) { ?>
        <?php if(ale_get_option('rightsidebarblog')==1){ ?>
            <div class="rightsidebar">
                <?php include 'templates/sidebar-right-all.php'; /* zig */?>
                <?php include 'templates/sidebar-right-blog.php'; ?>
            </div>
        <?php } ?>
    <?php } /* if not mobile */ ?>
    <div class="rightside <?php if(ale_get_option('rightsidebarblog')==1){ echo 'centerside'; } ?>">
        <div class="margincontentbox">
            <?php if(ale_get_option('topblogbox')==1){ ?>
            <div class="postnavigation cf">
                <?php if (!wp_is_mobile()) { /* zig */ ?>
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
                <?php } ?>
                <div class="reachsinglbox">
                    <div class="title"><?php _e('SEARCH THE BLOG', 'aletheme')?>:</div>
                    <div class="searchform">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
            <?php } else { echo "<br />"; } ?>
            <div id="post" class="content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php ale_part('posthead');?>
                    <?php ale_part('postpreview' );?>
                    <?php ale_part('postfull');?>
                    <?php ale_part('postfooter');?>
                <?php endwhile; else: ?>
                    <?php ale_part('notfound')?>
                <?php endif; ?>
            </div>
            <?php if (wp_is_mobile() ) { ?> 
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
                </div>
            <?php } ?>
            <?php ale_part('archives'); ?>
        </div>
    </div>
    <?php if (wp_is_mobile()) { ?>
        <?php if(ale_get_option('leftsidebarblog')==1){ get_sidebar(); } ?>
        <?php if(ale_get_option('rightsidebarblog')==1){ ?>
            <div class="rightsidebar">
                <?php include 'templates/sidebar-right-all.php'; /* zig */?>
                <?php include 'templates/sidebar-right-blog.php'; ?>
            </div>
        <?php } ?>
     <?php } /* if  mobile */ ?>
    <div class="cf"></div>
</section>
<?php get_footer(); ?>