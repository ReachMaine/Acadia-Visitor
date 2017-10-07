<?php /*
* 18May15 zig - add sidebar-right-all 
 */ ?>
<?php get_header(); ?>
<section class="singlepage">
    <div class="leftside">
        <?php get_sidebar('mainmenu'); ?>
        <?php if(ale_get_option('leftsidebarcustom')==1){ include 'templates/sidebar-custom.php'; } ?>
    </div>
    <?php if(ale_get_option('rightsidebarcustom')==1){ ?>
    <div class="rightsidebar">
        <?php include 'templates/sidebar-right-all.php'; /* zig */?>
        <?php include 'templates/sidebar-right-custom.php'; ?>
    </div>
    <?php } ?>
    <div class="rightside <?php if(ale_get_option('rightsidebarcustom')==1){ echo 'centerside'; } ?>">
        <div class="margincontentbox">
            <div class="pagelayout cf">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php ale_part('pagehead');?>
                <section class="story cf">
                    <?php the_content();?>
                </section>
                <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="cf"></div>
</section>
<?php get_footer(); ?>