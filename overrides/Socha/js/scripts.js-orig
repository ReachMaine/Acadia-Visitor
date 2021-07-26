// add your custom scripts here
// as the page loads, call these scripts
jQuery(function($) {
    var scrollstatus = $('html').data('scroll');
    var getcolor = $('.topline #rel-top').css('background-color');

    /*Skin Selector*/
    $('.leftselectorbox').live('click',function(){
        $(this).addClass('boxeropened');
        $('.styleselectorbox').css('margin-right','0');

        $('.ckeckcol').live('click',function(){
            var curcolor = $(this).data('col');
            var curlink = $(this).data('link');
            $.cookie('sochacolor', curcolor, { path: '/' });

            $('#orange-css,#red-css,#black-css,#blue-css,#green-css,#purple-css,#asbestos-css,#sea-css,#nephritis-css').remove();
            $('head').append('<link rel=\'stylesheet\' id=\''+curcolor+'-css\'  href=\''+curlink+'/css/colors/'+curcolor+'.css?ver=1.0\' type=\'text/css\' media=\'all\' />')

            $('.ckeckcol').removeClass('active');
            $(this).addClass('active');
        });

        $('.ckeckpat').live('click',function(){
            var curpat = $(this).data('pat');
            var curlink = $(this).data('link');
            $.cookie('sochapat', curpat, { path: '/' });

            $('body').css('background','none');
            $('body').css('background','url('+curlink+'/css/images/patterns/'+curpat+'.png)');

            $('.ckeckpat').removeClass('active');
            $(this).addClass('active');
        });

        $('.boxeropened').live('click',function(){
            $('.styleselectorbox').css('margin-right','-227px');
            $(this).removeClass('boxeropened');
        });
    });

    $.fn.isOnScreen = function(){

        var win = $(window);

        var viewport = {
            top : win.scrollTop(),
            left : win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var bounds = this.offset();
        bounds.right = bounds.left + this.outerWidth();
        bounds.bottom = bounds.top + this.outerHeight();

        return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    };

    //Slider on shop
    $('.shopslider').flexslider({
        animation:"slide",
        controlNav:false,
        prevText:"",
        nextText:""
    });

    //Testimonials Widget slider
    $('.testimonials-slider-widget').flexslider({
        animation:"slide",
        controlNav:false,
        smoothHeight: true,
        prevText:"",
        nextText:""
    });

    //Hover Dir -> Home 2 Top
    $(' .three-boxes-cont > .item-col-3 ').each( function() { $(this).hoverdir(); } );

    //Popup video -> Home 2
    $(document).ready(function() {
        $('.popup-video').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
    });

        //Toggle Video on about page
        $('.videotitle').live('click',function(){
           $('.videocode').toggle();
            if(scrollstatus == 'scroll') {
                $("html").getNiceScroll().resize();
            }
        });

        //Toggle on About Three page
        $('.iconplu').live('click',function(){
            $(this).parent().next().toggle(300);
            var butstyle = $(this).text();
            if(butstyle == "-"){
                $(this).text("+");
            }
            else {
                $(this).text("-");
            }
        });

        //Toggle on About 6 page
        $('.toggle-title .toggle-head').on('click',function(){
            $(this).next().toggle(300);

            if($('.toggle-with-nav').length){
                var current_val = $(this).children('.toggle-with-nav').text();
                if(current_val == "+") {
                    $(this).children('.toggle-with-nav').text('-');
                } else {
                    $(this).children('.toggle-with-nav').text('+');
                }
            }
        });

        //About 4 BG height
        if($('.bg-about-4').length){
            $('.bg-about-4').css('min-height',$('.leftmenubox').height()-82);
        }

        //Pie on About Three page

        $(window).scroll(function(){
            if($('.chart').length > 0){
                if($('.chart').isOnScreen()){
                    if (jQuery.isFunction(jQuery.fn.easyPieChart)) {
                        $('.chart').easyPieChart({
                            animate:4000,
                            barColor: getcolor,
                            size: 150,
                            lineWidth:7,
                            trackColor:'#afafaf',
                            scaleColor: false,
                            easing: 'easeOutBounce',
                            onStep: function(from, to, percent) {
                                $(this.el).find('.percent').text(Math.round(percent)).css({'font-size':'37px','color':'#3e454d'});
                            }
                        });
                    }
                }
            }
        });


        //TOP Button speed
        var mode = (window.opera) ? ((document.compatMode == "CSS1Compat") ? $('html') : $('body')) : $('html,body');
        $('#gotop').click(function() {
            mode.animate({scrollTop:0},800);
            return false;
        });

        //Slider on inspiration page
        if (jQuery.isFunction(jQuery.fn.scrollable)) {
            $('#inspirationslider').scrollable({circular: true}).autoscroll({ autoplay: true });
        }


        //Social icons scroll
        var socialwidth = 33 * $('ul.socialicons li').length;
        $('ul.socialicons').css('width',socialwidth);

        var mobsocialwidth = 33 * $('ul.mobsocialicons li').length;
        $('ul.mobsocialicons').css('width',mobsocialwidth);

        $('.socialslider').jScrollPane({showArrows: true});

        //Select Navigation on Mobile Devices
        $('select.mobilemenu').change(function(){
            var url = $(this).val();
            if (url) {
                window.location = url;
            }
            return false;
        });

        //Main page slider
        $('#homepage .flexslider').flexslider(
            {
                animation:"slide",
                controlNav:false,
                prevText:"",
                nextText:""
                //smoothHeight: true
            }
        );
        if($('#homepage').data('slider')=="full"){ $('.flex-viewport').css('overflow','visible') };

        //New Home 1 / v.2.4
        $('.new-home-1-slider').flexslider(
            {
                animation:"slide",
                controlNav:false,
                prevText:"",
                nextText:""
                //smoothHeight: true
            }
        );
        $('.new-home-1-slider .flex-viewport').css('overflow','visible');

        //New Home 3 / v.2.4
        $('.new-home-3-slider').flexslider(
            {
                animation:"fade",
                controlNav:false,
                directionNav:false,
                start:  function(){
                    $('.new-home-3-slider ul.slides li').css('height',$('.boxes-home-three').height());
                    $(window).smartresize(function(){
                        $('.new-home-3-slider ul.slides li').css('height',$('.boxes-home-three').height());
                    });

                }
            }
        );
        $('.new-home-3-slider-sync').flexslider(
            {
                animation:"slide",
                controlNav:true,
                direction:"vertical",
                directionNav:false,
                sync: ".new-home-3-slider"
            }
        );

        //Inspirations Slider on Home 3 / v.2.4
        $('.ins-home3-slider').flexslider({
            animation:"slide",
            controlNav:false,
            prevText:"",
            nextText:""
        });

        //New Home 5
        $('.slider-home5').flexslider({
            animation:"fade",
            controlNav:false,
            prevText:"",
            nextText:"",
            start: function(){
                $('.home-5-top-data .center_h5_slider .slider-home5 ul.slides li figure figcaption .slider-desc-box').removeClass('slideUp');
                $('.home-5-top-data .center_h5_slider .slider-home5 ul.slides li:first figure figcaption .slider-desc-box').addClass('slideUp');
            },
            after: function(){
                $('.home-5-top-data .center_h5_slider .slider-home5 ul.slides li figure figcaption .slider-desc-box').removeClass('slideUp');
                $('.home-5-top-data .center_h5_slider .slider-home5 ul.slides li.flex-active-slide figure figcaption .slider-desc-box').addClass('slideUp');
            }
        });

        // Popup Images on New Home 5
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title');
                }
            }
        });

        //Slider on blog page
        $('.gallerypost').flexslider({
            animation:"slide",
            controlNav:false,
            prevText:"",
            nextText:""
        });

        //Scroll box About Box on Home Page
        $('.scrollbox').jScrollPane();
        $('.scrollcategory').jScrollPane();

        //Slider on Blog Preview
        $('.postslider').flexslider(
            {
                animation:"slide",
                controlNav:false,
                prevText:"Prev Image",
                nextText:"Next Image",
                slideshow:false,
                smoothHeight:true
            }
        );
        //Slider on About page
        $('.aboutslider').flexslider(
            {
                animation: "slide",
                controlNav: false,
                animationLoop: true,
                slideshow: false,
                smoothHeight:true,
                prevText:"Prev Image",
                nextText:"Next Image"
            }
        );

        //Slider on Gallery Page
        $('.carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            prevText:"Prev Image",
            nextText:"Next Image",
            itemWidth: 160,
            asNavFor: '.galleryslider'
        });

        $('.galleryslider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: true,
            slideshow: true,
            smoothHeight:true,
            prevText:"Prev Image",
            nextText:"Next Image",
            multipleKeyboard: true,
            sync: ".carousel"
        });


    $(window).resize(function(){
        //Scroll box About Box on Home Page
        $('.scrollbox').jScrollPane();
        $('.scrollcategory').jScrollPane();

        //Social icons scroll
        var socialwidth = 33 * $('ul.socialicons li').length;
        $('ul.socialicons').css('width',socialwidth);

        var mobsocialwidth = 33 * $('ul.mobsocialicons li').length;
        $('ul.mobsocialicons').css('width',mobsocialwidth);

        $('.socialslider').jScrollPane({showArrows: true});

    });

    $(window).load(function(){

        if (jQuery.isFunction(jQuery.fn.nivoSlider)) {
            $('#slider').nivoSlider({
                controlNav:false
            });
        }

        if (jQuery.isFunction(jQuery.fn.isotope)) {
            // initialize Isotope
            $('.blogpost').isotope({
                itemSelector : '.itemblog',
                transformsEnabled: false
            });
            $(window).smartresize(function(){
                $('.blogpost').isotope({
                    itemSelector : '.itemblog',
                    transformsEnabled: false
                });
            });

            $('.posts-boxes').isotope({
                itemSelector : '.post-newhome-top',
                resizable: false,
                transformsEnabled: false
            });
            $(window).smartresize(function(){
                $('.posts-boxes').isotope({
                    itemSelector : '.post-newhome-top',
                    transformsEnabled: false
                });
            });

            // initialize Isotope
            $('.galleryitems').isotope({
                itemSelector : '.gallbox'
            });
            $(window).smartresize(function(){
                $('.galleryitems').isotope({
                    itemSelector : '.gallbox'
                });
            });

            // initialize Isotope
            $('.pressarchive').isotope({
                itemSelector : '.pressstyle'
            });
            $(window).smartresize(function(){
                $('.pressarchive').isotope({
                    itemSelector : '.pressstyle'
                });
            });


            //Filtering on Gallery pages

            // cache container
            var $container = $('#galcontainer');
            // initialize isotope
            $container.isotope({});

            // filter items when filter link is clicked
            $('#filters a').click(function(){
                var selector = $(this).attr('data-filter');
                $container.isotope({ filter: selector });
                $('#filters li').removeClass('activefilter');
                $(this).parent().addClass('activefilter');
                return false;
            });
            $(window).smartresize(function(){
                $container.isotope({});
            });
        }




        if(scrollstatus == 'scroll') {
            //Textarea scroll
             $("textarea").niceScroll(
                {
                    cursorcolor: getcolor,
                    cursorborder:"0px",
                    cursorborderradius:"0px"
                });



            // Main window scroll
            $("html").niceScroll(
                {
                    cursorcolor: getcolor,
                    cursorborder:"0px",
                    horizrailenabled: false,
                    cursorborderradius:"0px"
                }
            );
        }
        $('#pageloader').fadeOut(1000);
    });

    $('.reset').click(function(){
        $('input.text,textarea').attr("value","");
    });
});

Modernizr.addTest('ipad', function () {
  return !!navigator.userAgent.match(/iPad/i);
});

Modernizr.addTest('iphone', function () {
  return !!navigator.userAgent.match(/iPhone/i);
});

Modernizr.addTest('ipod', function () {
  return !!navigator.userAgent.match(/iPod/i);
});

Modernizr.addTest('appleios', function () {
  return (Modernizr.ipad || Modernizr.ipod || Modernizr.iphone);
});

Modernizr.addTest('positionfixed', function () {
    var test    = document.createElement('div'),
        control = test.cloneNode(false),
        fake = false,
        root = document.body || (function () {
            fake = true;
            return document.documentElement.appendChild(document.createElement('body'));
        }());

    var oldCssText = root.style.cssText;
    root.style.cssText = 'padding:0;margin:0';
    test.style.cssText = 'position:fixed;top:42px'; 
    root.appendChild(test);
    root.appendChild(control);
    
    var ret = test.offsetTop !== control.offsetTop;

    root.removeChild(test);
    root.removeChild(control);
    root.style.cssText = oldCssText;
    
    if (fake) {
        document.documentElement.removeChild(root);
    }
    
    /* Uh-oh. iOS would return a false positive here.
     * If it's about to return true, we'll explicitly test for known iOS User Agent strings.
     * "UA Sniffing is bad practice" you say. Agreeable, but sadly this feature has made it to
     * Modernizr's list of undectables, so we're reduced to having to use this. */
    return ret && !Modernizr.appleios;
});


// Modernizr.load loading the right scripts only if you need them
Modernizr.load([
	{
		// Let's see if we need to load selectivizr
		test : Modernizr.borderradius,
		// Modernizr.load loads selectivizr and Respond.js for IE6-8
		nope : [ale.template_dir + '/js/libs/selectivizr.min.js', ale.template_dir + '/js/libs/respond.min.js']
	},{
		test: Modernizr.touch,
		yep:ale.template_dir + '/css/touch.css'
	}
]);



jQuery(function($) {
	var is_single = $('#post').length;
	var posts = $('article.post');
	var is_mobile = parseInt(ale.is_mobile);
	
	var slider_settings = {
		animation: "slide",
		slideshow: false,
		controlNav: false
	}
	
    $(document).ajaxComplete(function(){
        try{
			if (!posts.length) {
				return;
			}
            FB.XFBML.parse(); 
            gapi.plusone.go();
            twttr.widgets.load();
			pin_load();
        }catch(ex){}
    });
	
    // open external links in new window
    $("a[rel$=external]").each(function(){
        $(this).attr('target', '_blank');
    });
	
	$.fn.init_posts = function() {
		var init_post = function(data) {
            // close other posts
            data.post.siblings('.open-post').find('a.toggle').trigger('click', {
                hide:true
            });
			
			var loading = data.post.find('span.loading');
			
			if (data.more.is(':empty')) {
				data.post.addClass('post-loading');
				loading.css('visibility', 'visible');
                data.more.load(ale.ajax_load_url, {
                    'action':'aletheme_load_post',
                    'id':data.post.data('post-id')
                }, function(){
                    loading.remove();
                    data.more.slideDown(400, function(){
                        data.post.addClass('open-post');
                        data.toggler.text('Close Post');
						$('.video', data.more).fitVids();
                        if (data.scroll) {
                            data.scroll.scrollTo('fast');
                        }
                    });
					init_comments(data.post);
                });
            } else {
                data.more.slideDown(400, function(){
                    data.post.addClass('open-post');
                    data.toggler.text('Close Post');
                    if (data.scroll) {
                        data.scroll.scrollTo('fast');
                    }
                });
            }
		}

		var load_post = function(e, _opts) {
			e.preventDefault();
            var data  = {
                toggler:$(this),
                scroll:false
            };
            var opts = $.extend({
                comments:false,
                hide:false,
                add_comment:false
            }, _opts);
            data.post = data.toggler.parents('article.post');
            data.more = data.post.find('.full');
			
            if (data.more.is(':visible')) {
                if (opts.hide == true) {
					// quick hide for multiple posts
                    data.more.hide();
                } else {
                    data.more.slideUp(400);
                }
                data.toggler.text('Open Post');
                data.post.removeClass('open-post');
            } else {
                if (typeof(e.originalEvent) != 'undefined' ) {
                    data.scroll = data.post;
                }
                init_post(data);
            }
		}
		
		var init_comments = function(post) {
			var respond = $('section.respond', post);
			var respond_form = $('form', respond);
			var respond_form_error = $('p.error', respond_form);
			//var respond_cancel = $('.cancel-comment-reply a', respond);
			var comments = $('section.comments', post);
			
			/*$('a.comment-reply-link', post).on('click', function(e){
				e.preventDefault();
				var comment = $(this).parents('li.comment');
				comment.find('>div').append(respond);
				respond_cancel.show();
				respond.find('input[name=comment_post_ID]').val(post.data('post-id'));
				respond.find('input[name=comment_parent]').val(comment.data('comment-id'));
				respond.find('input:first').focus();
			}).attr('onclick', '');

			respond_cancel.on('click', function(e){
				e.preventDefault();
				comments.after(respond);
				respond.find('input[name=comment_post_ID]').val(post.data('post-id'));
				respond.find('input[name=comment_parent]').val(0);
				$(this).hide();
			});
			*/
			respond_form.ajaxForm({
				'beforeSubmit':function(){
					respond_form_error.text('').hide();
				},
				'success':function(_data){
					var data = $.parseJSON(_data);
					if (data.error) {
						respond_form_error.html(data.msg).slideDown('fast');
						return;
					}
					var comment_parent_id = respond.find('input[name=comment_parent]').val();
					var _comment = $(data.html);
					var list;
					_comment.hide();
					
					if (comment_parent_id == 0) {
						list = comments.find('ol');
						if (!list.length) {
							list = $('<ol class="commentlist "></ol>');
							comments.find('.scrollbox .jspContainer .jspPane').append(list);
						}
					} else {
						list = $('#comment-' + comment_parent_id).parent().find('ul');
						if (!list.length) {
							list = $('<ul class="children"></ul>');
							$('#comment-' + comment_parent_id).parent().append(list);
						}
						respond_cancel.trigger('click');
					}
					list.append(_comment);
					_comment.fadeIn('fast');
							//.scrollTo();

                    var pane2api = post.find('.scrollbox').data('jsp');
                    pane2api.reinitialise();
                    pane2api.scrollToElement(_comment.filter('li:last'));
                    $('.commenttextarea span').html('Thank you for your comment!').attr('style','color:#000000;');

					respond.find('textarea').clearFields();
				},
				'error':function(response){
					var error = response.responseText.match(/\<p\>(.*)<\/p\>/)[1];
					if (typeof(error) == 'undefined') {
						error = 'Something went wrong. Please reload the page and try again.';
					}
					respond_form_error.html(error).slideDown('fast');
				}
			});
		}
		$(this).each(function(){
			var post = $(this);
			// init post galleries 
			$(window).load(function(){
				$('.preview .flexslider', post).flexslider(slider_settings);
			});
			// do not init ajax posts & comments for mobile
			if (!is_mobile) {
				// ajax posts enabled
                if (ale.ajax_posts) {
                    $('a.toggle', post).click(load_post);
					$('.video', post).fitVids();
					$('.preview figure a', post).click(function(e){
						e.preventDefault();
						$(this).parents('article.post').find('a.toggle').trigger('click');
					});
                }
			}
		});
		// init ajax comments on a single post if ajax comments are enabled
		if (is_single && parseInt(ale.ajax_comments)) {
			init_comments(posts);	
		}
		// open single post on page
		if (parseInt(ale.ajax_open_single) && !is_single && posts.length == 1) {
			posts.find('a.toggle').trigger('click');
		}
	}
	posts.init_posts();
	
	$.fn.init_gallery = function() {
		$(this).each(function(){
			var gallery = $(this);
			$(window).load(function(){
				$('.flexslider', gallery).flexslider(slider_settings);
			});
			
		})
	}
	$('#gallery').init_gallery();

    $.fn.init_archives = function()
    {
        $(this).each(function(){
            var archives = $(this);
            var year = $('#archives-active-year');
            var months = $('div.months div.year-months', archives);
            var arrows = $('a.up, a.down', archives);
            var activeMonth;
            var current, active;
            var animated = false;
			if (months.length == 1) {
				arrows.remove();
				activeMonth = months.filter(':first').addClass('year-active').show();
				year.text(activeMonth.attr('id').replace(/[^0-9]*/, ''));
				return;
			}
            arrows.click(function(e){
                e.preventDefault();
                if (animated) {
                    return;
                }
                var fn = $(this);
                animated = true;
                arrows.css('visibility', 'visible');
                var current = months.filter('.year-active');
                if (fn.hasClass('up')) {
                    active = current.prev();
                    if (!active.length) {
                        active = months.filter(':last');
                    }
                } else {
                    active = current.next();
                    if (!active.length) {
                        active = months.filter(':first');
                    }
                }
                current.removeClass('year-active').fadeOut(150, function(){
                    active.addClass('year-active').fadeIn(150, function(){
                        animated = false;
                    });
                    year.text(active.attr('id').replace(/[^0-9]*/, ''));

                    if (fn.hasClass('up')) {
                        if (!active.prev().length) {
                            arrows.filter('.up').css('visibility', 'hidden');
                        }
                    } else {
                        if (!active.next().length) {
                            arrows.filter('.down').css('visibility', 'hidden');
                        }
                    }
                });
            });
            activeMonth = months.filter(':first').addClass('year-active').show();
            year.text(activeMonth.attr('id').replace(/[^0-9]*/, ''));
            arrows.filter('.up').css('visibility', 'hidden');
        });
    }
    $('#archives .ale-archives').init_archives();
	
	
	
	

	
});

// HTML5 Fallbacks for older browsers
jQuery(function($) {
    // check placeholder browser support
    if (!Modernizr.input.placeholder) {
        // set placeholder values
        $(this).find('[placeholder]').each(function() {
            $(this).val( $(this).attr('placeholder') );
        });
 
        // focus and blur of placeholders
        $('[placeholder]').focus(function() {
            if ($(this).val() == $(this).attr('placeholder')) {
                $(this).val('');
                $(this).removeClass('placeholder');
            }
        }).blur(function() {
            if ($(this).val() == '' || $(this).val() == $(this).attr('placeholder')) {
                $(this).val($(this).attr('placeholder'));
                $(this).addClass('placeholder');
            }
        });
 
        // remove placeholders on submit
        $('[placeholder]').closest('form').submit(function() {
            $(this).find('[placeholder]').each(function() {
                if ($(this).val() == $(this).attr('placeholder')) {
                    $(this).val('');
                }
            });
        });
    }
});

