<?php
if(ale_get_option('headerfontex')){ $headerfontex = ":".ale_get_option('headerfontex'); } else {$headerfontex="";}
if(ale_get_option('mainfontex')){ $mainfontex = ":".ale_get_option('mainfontex'); } else {$mainfontex="";}
if(ale_get_option('bodyfont') or ale_get_option('headerfont')){ echo "<link href='//fonts.googleapis.com/css?family=".ale_get_option('headerfont').$headerfontex."|".ale_get_option('bodyfont').$mainfontex."' rel='stylesheet' type='text/css'>"; } else { echo "<link href=\"//fonts.googleapis.com/css?family=Oswald:700,400,300\" rel=\"stylesheet\" type=\"text/css\">"; } ?>
<?php
    $socha_background = ale_get_option('background');
    $socha_headerfont = ale_get_option('headerfont');
    $socha_bodyfont = ale_get_option('bodyfont');
    $socha_font = ale_get_option('bodystyle');
    $socha_h1 = ale_get_option('h1sty');
    $socha_h2 = ale_get_option('h2sty');
    $socha_h3 = ale_get_option('h3sty');
    $socha_h4 = ale_get_option('h4sty');
    $socha_h5 = ale_get_option('h5sty');
    $socha_h6 = ale_get_option('h6sty');
?>
<style type='text/css'>
    body {
    <?php
    if($socha_background['color']){ echo "background-color:".$socha_background['color'].";"; }
    if($socha_background['image']){ echo "background-image: url(".$socha_background['image'].");"; }
    if($socha_background['repeat']){ echo "background-repeat:".$socha_background['repeat'].";"; }
    if($socha_background['position']){ echo "background-position:".$socha_background['position'].";"; }
    if($socha_background['attachment']){ echo "background-attachment:".$socha_background['attachment'].";"; }
    if($socha_font['size']){ echo "font-size:".$socha_font['size'].";"; }
    if($socha_font['style']){ echo "font-style:".$socha_font['style'].";"; }
    if($socha_font['color']){ echo "color:".$socha_font['color'].";"; }
    if($socha_font['face']){ $fontfamily =  str_replace ('+',' ',$socha_font['face']); echo "font-family:".$fontfamily.";"; }
    ?>
    }
    h1,h2,h3,h4,h5,h6,input[type="submit"],input[type="button"],#footer-main,.galleriestitle,.rightboxtitle,.followtitle,ul.leftmenu,.mainslidertitle,.sliderlinkmore,.title,.boxtitle,figure.imageformat span,figure.galleryformat span,.leftdatablog,.readmoreblog,span.day,span.month,div.black,header.comment-author,cite.fn,.commenttextarea textarea,input.submit,input.reset,.area1 input,a.prev,a.next,.righticonstext,span.count,.soctext,.rightblogpagination,.postprevtop,.year,.months,span.title,span.category,.thetitlegallery,.goback,.gallerydata,.righticonstext,.notumbinspiration figcaption a,.view a.info,.videotitle .text,.videotitle .plus,header.page-title,.toppagination,.formbox input,.formbox,.contactformtitle,.pressstyle figcaption span,p.er404,.error a,p.comment-form-author,p.comment-form-url,p.comment-form-email,p.comment-form-comment,h3#reply-title,.comment-author,.story-pages p,dl.gallery-item dt,nav.prev-next-links,.filtertitle,.element figcaption span,.titleitem,figcaption .name,figcaption .profession,nav#mobilenav select,
    .testimonials-slider-widget ul.slides li .author, section#new-home-1-content section.home-one-content .center-section section.story .sub-title,
    section#new-home-1-content section.home-one-content .center-section section.story .home-title,
    section#new-home-1-content section.home-one-content .center-section .three-boxes .col-item-3 .box-contener .title-box,
    section#new-home-1-content section.home-one-content .center-section .bottom-about-descr .bottom-content-about .about-box-conteiner .box-title,
    section#new-home-1-content section.home-one-content .center-section .bottom-about-descr .bottom-content-about .about-box-conteiner .read-more-but a,
    section#new-home-two .new-home-2-top .three-boxes-cont .item-col-3 figure .mask-text .mask-title, .count-font,
    .map-about-box .conteiner-map .one-half-box .about-title, .map-about-box .conteiner-map .one-half-box .about-link a,
    .map-about-box .conteiner-map .one-half-box .video-embed-box .video-text span.title-video,
    .collections-box .col-conteiner .item-box .info-box .title-info,.collections-box .col-conteiner .item-box .info-box .loc-info,
    .home-3-syncbox .home-3-sliderdata .sliderhtml,.home-3-syncbox .home-3-sliderdata .slidertitle,
    .inspirations-box-home3 .ins-slider-conteiner .ins-home3-slider ul.slides li .ins-title,
    .inspirations-box-home3 .ins-slider-conteiner .ins-home3-slider ul.slides li .read-more a,.subscribe-plugin-box .form-desc,
    .subscribe-plugin-box .form-conteiner input[type="submit"],.home-4-top-posts .posts-boxes .post-newhome-top .post-data-text .title-post,
    .home-4-top-posts .posts-boxes .post-newhome-top .post-data-text .category-post, .adventures-box .map-adv-conteiner .half-box .info-adv .info-title,
    .adventures-box .map-adv-conteiner .half-box .info-adv .info-link a,.our-team-box .list-team .item-member .name-box,
    .home-4-top-posts .mobile-posts-list .mobile-post .post-data-text .title-post,.home-4-top-posts .mobile-posts-list .mobile-post .post-data-text .category-post,
    .home-5-top-data .center_h5_slider .slider-home5 ul.slides li figure figcaption .title-box,.home-5-top-data .right_article .box-info .box-title,
    .home-5-top-data .right_article .box-info .box-link a,.inspire-list .block-insp .title-box,.bottom-timeline .blog-items-conteiner .line-post .white-box-post .title-box,
    .bottom-timeline .blog-items-conteiner .line-post .white-box-post a,.video-embed-box .video-text span.title-video {
        <?php  if($socha_headerfont){  $fontheadfamily =  str_replace ('+',' ',$socha_headerfont); echo "font-family:".$fontheadfamily.";"; } else { echo "font-family: 'Oswald', sans-serif";} ?>
    }
    .widget_nav_menu,.widget_categories,.widget_archive,.widget_meta,.widget_pages,.widget_recent_comments,.widget_recent_entries,.centeredpost .newtitle a,.centeredpost .newdate,.ale-team .testititle,.lefttestimonialpart .testititle,.aboutthree .abouttoggle .itemtoggle .titletog,.aboutthreeteam .itemteam .teamdesc .prof,.pieboxes .pieitem .pietitle,
    .woocommerce ul.cart_list li a, .woocommerce-page ul.cart_list li a, .woocommerce ul.product_list_widget li a, .woocommerce-page ul.product_list_widget li a,
    .widget_product_categories {
    <?php  if($socha_headerfont){  $fontheadfamily =  str_replace ('+',' ',$socha_headerfont); echo "font-family:".$fontheadfamily.";"; } else { echo "font-family: 'Oswald', sans-serif";} ?>
    }
    h1 {
    <?php
    if($socha_h1['size']){ echo "font-size:".$socha_h1['size'].";"; };
    if($socha_h1['style']){ echo "font-style:".$socha_h1['style'].";"; };
    if($socha_h1['color']){ echo "color:".$socha_h1['color'].";"; };
    if($socha_h1['face']){ $h1family =  str_replace ('+',' ',$socha_h1['face']); echo "font-family:".$h1family.";"; };
    ?>
    }
    h2 {
    <?php
    if($socha_h2['size']){ echo "font-size:".$socha_h2['size'].";"; };
    if($socha_h2['style']){ echo "font-style:".$socha_h2['style'].";"; };
    if($socha_h2['color']){ echo "color:".$socha_h2['color'].";"; };
    if($socha_h2['face']){ $h2family =  str_replace ('+',' ',$socha_h2['face']); echo "font-family:".$h2family.";"; };
    ?>
    }
    h3 {
    <?php
    if($socha_h3['size']){ echo "font-size:".$socha_h3['size'].";"; };
    if($socha_h3['style']){ echo "font-style:".$socha_h3['style'].";"; };
    if($socha_h3['color']){ echo "color:".$socha_h3['color'].";"; };
    if($socha_h3['face']){ $h3family =  str_replace ('+',' ',$socha_h3['face']); echo "font-family:".$h3family.";"; };
    ?>
    }
    h4 {
    <?php
    if($socha_h4['size']){ echo "font-size:".$socha_h4['size'].";"; };
    if($socha_h4['style']){ echo "font-style:".$socha_h4['style'].";"; };
    if($socha_h4['color']){ echo "color:".$socha_h4['color'].";"; };
    if($socha_h4['face']){ $h4family =  str_replace ('+',' ',$socha_h4['face']); echo "font-family:".$h4family.";"; };
    ?>
    }
    h5 {
    <?php
    if($socha_h5['size']){ echo "font-size:".$socha_h5['size'].";"; };
    if($socha_h5['style']){ echo "font-style:".$socha_h5['style'].";"; };
    if($socha_h5['color']){ echo "color:".$socha_h5['color'].";"; };
    if($socha_h5['face']){ $h5family =  str_replace ('+',' ',$socha_h5['face']); echo "font-family:".$h5family.";"; };
    ?>
    }
    h6 {
    <?php
    if($socha_h6['size']){ echo "font-size:".$socha_h6['size'].";"; };
    if($socha_h6['style']){ echo "font-style:".$socha_h6['style'].";"; };
    if($socha_h6['color']){ echo "color:".$socha_h6['color'].";"; };
    if($socha_h6['face']){ $h6family =  str_replace ('+',' ',$socha_h6['face']); echo "font-family:".$h6family.";"; };
    ?>
    }

    <?php
     if(!isset($_COOKIE["sochapat"])){
        if(ale_get_option('sitepat')){
            if($socha_background['image']){ echo "background-image: url(".$socha_background['image'].");"; }?>
        <?php }
     } else { ?>
        body { background:transparent url(<?php echo get_template_directory_uri() ?>/css/images/patterns/<?php echo $_COOKIE["sochapat"]; ?>.png); }
     <?php }  ?>

    /*WooCommerce Styles*/
    .woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
        width: 32%;
        margin: 0 2% 3em 0;
        background: #eeeeee;
    }
    .woocommerce ul.products li.last, .woocommerce-page ul.products li.last {
        margin-right: 0;
    }
    .woocommerce ul.products li.product .onsale, .woocommerce-page ul.products li.product .onsale {
        top:10px;
        right:10px;
        margin: 0;
    }
    .woocommerce span.onsale, .woocommerce-page span.onsale {
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
        line-height: 35px;
        font-size: 16px;
        text-transform: uppercase;
        color:#ffffff;
        text-shadow: none;
        box-shadow: none;
        font-weight: normal;
        min-height: 35px;
        min-width: 65px;
        padding: 0;
        -webkit-transition: all 350ms ease-in-out;
        -moz-transition: all 350ms ease-in-out;
        -ms-transition: all 350ms ease-in-out;
        -o-transition: all 350ms ease-in-out;
        transition: all 350ms ease-in-out;
    }
    .woocommerce span.onsale:hover, .woocommerce-page span.onsale:hover {
        background: #333333!important;
        -webkit-transition: all 350ms ease-in-out;
        -moz-transition: all 350ms ease-in-out;
        -ms-transition: all 350ms ease-in-out;
        -o-transition: all 350ms ease-in-out;
        transition: all 350ms ease-in-out;
    }
    .woocommerce ul.products li.product a img, .woocommerce-page ul.products li.product a img,
    .woocommerce ul.products li.product a img:hover, .woocommerce-page ul.products li.product a img:hover,
    .woocommerce ul.products li.product a:hover img, .woocommerce-page ul.products li.product a:hover img {
        box-shadow: none;
        margin-bottom: 0px;
    }
    .woocommerce ul.products li.product h3, .woocommerce-page ul.products li.product h3 {
        display: block;
        margin: 0;
        padding: 0;
        width: 65%;
        height: 60px;
        line-height: 60px;
        float: left;
        font-size: 12px;
        text-align: left;
        overflow: hidden;
        text-indent: 10px;
    }
    .woocommerce ul.products li.product h3:hover, .woocommerce-page ul.products li.product h3:hover {
        opacity:0.6!important;
        -webkit-transition: all 350ms ease-in-out;
        -moz-transition: all 350ms ease-in-out;
        -ms-transition: all 350ms ease-in-out;
        -o-transition: all 350ms ease-in-out;
        transition: all 350ms ease-in-out;
    }
    .woocommerce ul.products li.product .price, .woocommerce-page ul.products li.product .price {
        display: block;
        margin: 0;
        padding: 0;
        width: 35%;
        height: 60px;
        line-height: 60px;
        float: left;
        text-align: center;
        font-size: 18px;
        background: #a2a2a2;
        color:#ffffff;
    }
    .woocommerce ul.products li.product .price del, .woocommerce-page ul.products li.product .price del {
        color:#ffffff;
    }
    .woocommerce ul.products li.product .price ins, .woocommerce-page ul.products li.product .price ins {
        text-decoration: none;
    }
    .woocommerce ul.products li.product a, .woocommerce-page ul.products li.product a {
        width: 100%;
        padding: 0;
        margin: 0;
        border: none;
        text-align: center;
        line-height: 45px;
        font-size: 14px;
        text-transform: uppercase;
        min-height: 45px;
        text-shadow: none;
        box-shadow: none;
        color:#ffffff;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
    }
    .woocommerce ul.products li.product a:hover, .woocommerce-page ul.products li.product a:hover,
    .woocommerce ul.products li.product a.added_to_cart:hover, .woocommerce-page ul.products li.product a.added_to_cart:hover{
        background: #333333!important;
        -webkit-transition: all 350ms ease-in-out;
        -moz-transition: all 350ms ease-in-out;
        -ms-transition: all 350ms ease-in-out;
        -o-transition: all 350ms ease-in-out;
        transition: all 350ms ease-in-out;
    }
    .woocommerce a.button.added:before, .woocommerce-page a.button.added:before, .woocommerce button.button.added:before, .woocommerce-page button.button.added:before, .woocommerce input.button.added:before, .woocommerce-page input.button.added:before, .woocommerce #respond input#submit.added:before, .woocommerce-page #respond input#submit.added:before, .woocommerce #content input.button.added:before, .woocommerce-page #content input.button.added:before {
        content: '';
        display: none;
    }
    .woocommerce ul.products li.product a.added_to_cart, .woocommerce-page ul.products li.product a.added_to_cart {
        height: 20px;
        line-height: 20px;
        font-size: 12px;
        min-height: 20px;
        background: #7f8c8d!important;
        position: absolute;
        left:0;
        top:100%;
    }
    .woocommerce div.product div.summary, .woocommerce-page div.product div.summary, .woocommerce #content div.product div.summary, .woocommerce-page #content div.product div.summary {
        background: #ffffff;
        width: 49%;
    }
    .woocommerce div.product div.images, .woocommerce-page div.product div.images, .woocommerce #content div.product div.images, .woocommerce-page #content div.product div.images {
        width: 49%;
    }
    .padsummary {
        margin: 20px;
    }
    .woocommerce div.product span.price, .woocommerce-page div.product span.price, .woocommerce #content div.product span.price, .woocommerce-page #content div.product span.price, .woocommerce div.product p.price, .woocommerce-page div.product p.price, .woocommerce #content div.product p.price, .woocommerce-page #content div.product p.price {
        display: inline-block;
        padding: 10px 15px 10px 15px;
        background: #a2a2a2;
        color:#ffffff;
        font-size: 18px;
    }
    .woocommerce div.product span.price del, .woocommerce-page div.product span.price del, .woocommerce #content div.product span.price del, .woocommerce-page #content div.product span.price del, .woocommerce div.product p.price del, .woocommerce-page div.product p.price del, .woocommerce #content div.product p.price del, .woocommerce-page #content div.product p.price del {
        color:#ffffff;
    }
    .woocommerce div.product span.price ins, .woocommerce-page div.product span.price ins, .woocommerce #content div.product span.price ins, .woocommerce-page #content div.product span.price ins, .woocommerce div.product p.price ins, .woocommerce-page div.product p.price ins, .woocommerce #content div.product p.price ins, .woocommerce-page #content div.product p.price ins {
        text-decoration: none;
    }
    .woocommerce div.product div.images img, .woocommerce-page div.product div.images img, .woocommerce #content div.product div.images img, .woocommerce-page #content div.product div.images img {
        box-shadow: none;
    }
    .woocommerce div.product div.images div.thumbnails a, .woocommerce-page div.product div.images div.thumbnails a, .woocommerce #content div.product div.images div.thumbnails a, .woocommerce-page #content div.product div.images div.thumbnails a {
        width: 24%;
        margin-right: 1.3%;
        margin-bottom: 5px;
        overflow: hidden;
    }
    .woocommerce div.product div.images div.thumbnails a:hover img, .woocommerce-page div.product div.images div.thumbnails a:hover img, .woocommerce #content div.product div.images div.thumbnails a:hover img, .woocommerce-page #content div.product div.images div.thumbnails a:hover img {
        -moz-opacity: 0.6;
        -khtml-opacity: 0.6;
        -webkit-opacity: 0.6;
        opacity: 0.6;
        -webkit-transform:scale(1.4);
        -moz-transform:scale(1.4);
        transform:scale(1.4);
        -webkit-transition: all 250ms ease-in-out;
        -moz-transition: all 250ms ease-in-out;
        -ms-transition: all 250ms ease-in-out;
        -o-transition: all 250ms ease-in-out;
        transition: all 250ms ease-in-out;
    }
    div.pp_overlay {
        background: #000;
    }
    div.pp_woocommerce div.ppt {
        color:#f5f5f5;
    }
    .woocommerce div.product form.cart .button, .woocommerce-page div.product form.cart .button, .woocommerce #content div.product form.cart .button, .woocommerce-page #content div.product form.cart .button,
    .woocommerce .cart .button, .woocommerce-page .cart .button, .woocommerce .cart input.button, .woocommerce-page .cart input.button,
    .woocommerce #payment #place_order, .woocommerce-page #payment #place_order {
        border: none;
        text-shadow: none;
        font-size: 14px;
        height: 30px;
        text-transform: uppercase;
        color:#ffffff;
        box-shadow: none;
        padding-left: 10px;
        padding-right: 10px;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
        -webkit-transition: all 250ms ease-in-out;
        -moz-transition: all 250ms ease-in-out;
        -ms-transition: all 250ms ease-in-out;
        -o-transition: all 250ms ease-in-out;
        transition: all 250ms ease-in-out;
    }
    .woocommerce div.product form.cart .button:hover, .woocommerce-page div.product form.cart .button:hover, .woocommerce #content div.product form.cart .button:hover, .woocommerce-page #content div.product form.cart .button:hover,
    .woocommerce .cart .button:hover, .woocommerce-page .cart .button, .woocommerce .cart input.button:hover, .woocommerce-page .cart input.button:hover,
    .woocommerce #payment #place_order:hover, .woocommerce-page #payment #place_order:hover,
    p.buttons a.button:hover,
    .woocommerce .widget_price_filter .price_slider_amount .button:hover, .woocommerce-page .widget_price_filter .price_slider_amount .button:hover {
        background: #333333!important;
        text-shadow: none;
        -webkit-transition: all 250ms ease-in-out;
        -moz-transition: all 250ms ease-in-out;
        -ms-transition: all 250ms ease-in-out;
        -o-transition: all 250ms ease-in-out;
        transition: all 250ms ease-in-out;
    }
    .woocommerce .quantity .plus, .woocommerce-page .quantity .plus, .woocommerce #content .quantity .plus, .woocommerce-page #content .quantity .plus,
    .woocommerce .quantity .minus, .woocommerce-page .quantity .minus, .woocommerce #content .quantity .minus, .woocommerce-page #content .quantity .minus {
        font-size: 20px;
        font-weight: normal;
    }
    .sku_wrapper,.posted_in,.tagged_as {
        display: block;
        width: 100%;
        height: 25px;
        line-height: 25px;
        background: #f5f5f5;
        margin-bottom: 2px;
        text-indent: 10px;
    }
    .sku_wrapper a:hover,.posted_in a:hover,.tagged_as a:hover {
        -moz-opacity: 0.5;
        -khtml-opacity: 0.5;
        -webkit-opacity: 0.5;
        opacity: 0.5;
        -webkit-transition: all 250ms ease-in-out;
        -moz-transition: all 250ms ease-in-out;
        -ms-transition: all 250ms ease-in-out;
        -o-transition: all 250ms ease-in-out;
        transition: all 250ms ease-in-out;
    }
    .woocommerce div.product .woocommerce-tabs .panel, .woocommerce-page div.product .woocommerce-tabs .panel, .woocommerce #content div.product .woocommerce-tabs .panel, .woocommerce-page #content div.product .woocommerce-tabs .panel {
        background: #ffffff;
        padding: 20px;
    }
    .woocommerce div.product .woocommerce-tabs ul.tabs, .woocommerce-page div.product .woocommerce-tabs ul.tabs, .woocommerce #content div.product .woocommerce-tabs ul.tabs, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs {
        margin-bottom: 0;
    }
    .woocommerce .related ul.products li.product, .woocommerce-page .related ul.products li.product, .woocommerce .upsells.products ul.products li.product, .woocommerce-page .upsells.products ul.products li.product, .woocommerce .related ul li.product, .woocommerce-page .related ul li.product, .woocommerce .upsells.products ul li.product, .woocommerce-page .upsells.products ul li.product {
        width: 32%;
        margin-right: 2%;
    }
    .woocommerce ul.products li.last, .woocommerce-page ul.products li.last {
        margin-right: 0!important;
    }
    .related .price {
        padding: 0!important;
    }
    .woocommerce table.shop_table, .woocommerce-page table.shop_table {
        background: #f5f5f5;
        border-collapse: collapse;
    }
    .woocommerce .cart-collaterals .cart_totals table, .woocommerce-page .cart-collaterals .cart_totals table {
        border-collapse: collapse;
        width: 100%;
        background: #f5f5f5;
        border-color: #ffffff!important;
    }
    .woocommerce #payment ul.payment_methods li, .woocommerce-page #payment ul.payment_methods li {
        list-style: none;
    }
    .woocommerce ul.cart_list li img, .woocommerce-page ul.cart_list li img, .woocommerce ul.product_list_widget li img, .woocommerce-page ul.product_list_widget li img {
        width: 70px;
        box-shadow: none;
        float: left;
        margin-right: 5px;
    }
    .woocommerce section.singlepage .sidebar a:hover {
        -moz-opacity: 1;
        -khtml-opacity: 1;
        -webkit-opacity: 1;
        opacity: 1;
        -webkit-transition: all 250ms ease-in-out;
        -moz-transition: all 250ms ease-in-out;
        -ms-transition: all 250ms ease-in-out;
        -o-transition: all 250ms ease-in-out;
        transition: all 250ms ease-in-out;
    }
    .woocommerce section.singlepage .sidebar ins {
        text-decoration: none!important;
    }
    .woocommerce ul.cart_list li a, .woocommerce-page ul.cart_list li a, .woocommerce ul.product_list_widget li a, .woocommerce-page ul.product_list_widget li a {
        color:#333333!important;
        font-size: 16px;
        font-weight: 300;
        text-transform: uppercase;
        margin-bottom: 8px;
    }
    .woocommerce ul.cart_list li, .woocommerce-page ul.cart_list li, .woocommerce ul.product_list_widget li, .woocommerce-page ul.product_list_widget li {
        color:#6a6a6a;
    }
    .woocommerce .widget_shopping_cart .total, .woocommerce-page .widget_shopping_cart .total {
        border: none;
        display: block;
        width: 100%;
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 15px;
        text-align: center;
    }
    p.buttons a.button,.woocommerce .widget_price_filter .price_slider_amount .button, .woocommerce-page .widget_price_filter .price_slider_amount .button {
        width: 100%;
        border: none;
        text-shadow: none;
        font-size: 14px;
        line-height: 30px;
        text-transform: uppercase;
        color:#ffffff!important;
        box-shadow: none;
        padding: 0;
        text-align: center;
        margin-bottom: 5px;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
        -webkit-transition: all 250ms ease-in-out;
        -moz-transition: all 250ms ease-in-out;
        -ms-transition: all 250ms ease-in-out;
        -o-transition: all 250ms ease-in-out;
        transition: all 250ms ease-in-out;
    }
    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle {
        border: none;
        box-shadow: none;
        width: 1.3em;
        height: 1.3em;
        top:-0.5em;
    }
    .woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range, .woocommerce-page .widget_price_filter .ui-slider-horizontal .ui-slider-range {
        background: #909090;
        border: none;
        box-shadow: none;
    }
    .price_label {
        display: block;
        width: 100%;
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 15px;
        color:#909090;
        text-align: center;
    }
    .cart_list .empty {
        text-align: center;
    }
    .widget_product_categories ul ul {
        margin-left: 15px;
    }
    .widget_product_categories ul ul li a {
        font-size: 12px;
    }
    .widget_product_categories ul li {
        text-transform: uppercase;
        position: relative;
        width: 100%;
    }
    .widget_product_categories ul li a {
        padding: 6px 0px 6px 5px;
        display: block;
        font-size: 14px;
        color: #000000!important;
    }
    .widget_product_categories ul li a:hover {
        -moz-opacity: 0.6!important;
        -khtml-opacity: 0.6!important;
        -webkit-opacity: 0.6!important;
        opacity: 0.6!important;
        -webkit-transition: all 250ms ease-in-out;
        -moz-transition: all 250ms ease-in-out;
        -ms-transition: all 250ms ease-in-out;
        -o-transition: all 250ms ease-in-out;
        transition: all 250ms ease-in-out;
    }
    .woocommerce table.cart td.actions .coupon .input-text, .woocommerce-page table.cart td.actions .coupon .input-text, .woocommerce #content table.cart td.actions .coupon .input-text, .woocommerce-page #content table.cart td.actions .coupon .input-text {
        height: 30px!important;
        line-height: 30px!important;
        width: 85px;
    }
</style>