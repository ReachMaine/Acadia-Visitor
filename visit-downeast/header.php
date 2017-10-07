<?php /* 
*    mods: 
*    29Apr15 zig - add broadstreet init js 
*   5jun15 zig - add space for leaderboard ad 
*/ ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> <?php if(ale_get_option('sitecustomscrollbar') == 1) { echo 'style="overflow:hidden;" data-scroll="scroll" '; } else { echo 'data-scroll="hidescroll"';} ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <script data-cfasync="false" type="text/javascript" src="http://cdn.broadstreetads.com/init.js"></script>
<?php wp_head();?>
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8">
</head>
<body <?php body_class(); if(is_object($post)) { echo 'style="'; if(ale_get_meta('custompagebackground')){echo 'background-image:url('.ale_get_meta('custompagebackground').');';} if(ale_get_meta('custompagecss')){ echo ale_get_meta('custompagecss');}echo '"';} ?> >
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
<?php if(ale_get_option('preloader')){ ?><div id="pageloader" <?php if(ale_get_option('cusanimimg')){ echo 'style="background: #f9f9f9 url('.ale_get_option('cusanimimg').') 50% 50% no-repeat;"';} ?>></div><?php } ?>
<?php if(ale_get_option('siteselectcolorpreview') == "1") { ale_part('skinselector'); } ?>

    <?php if(is_page_template('template-home-1.php') or is_page_template('template-home-2.php') or is_page_template('template-home-3.php') or is_page_template('template-home-4.php') or is_page_template('template-home-5.php')){ ?>
        <div <?php if(ale_get_option('switcher')==1){echo'style="min-height:35px; line-height:35px;"';} ?>>
            <a id="rel-top"></a>
            <?php if(ale_get_option('switcher')==1){
                ale_part('switcher');
            } ?>
        </div>
    <?php } else { ?>
        <div class="topline" <?php if(ale_get_option('switcher')==1){echo'style="min-height:35px; line-height:35px;"';} ?>>
            <a id="rel-top"></a>
            <?php if(ale_get_option('switcher')==1){
                ale_part('switcher');
            } ?>
        </div>
    <?php } ?>

        <div id="content-main" role="main">
        <?php if (is_active_sidebar('leaderboard') && !is_home() && !is_front_page() ) { /* zig */ ?>
            <div id="leaderboard" >
                <?php dynamic_sidebar('leaderboard'); ?>
            </div>
        <?php } ?>
