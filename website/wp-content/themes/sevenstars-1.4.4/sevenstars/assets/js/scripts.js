
function parallax() {
	if( jQuery('.page-title > .container').length && jQuery('#tt-slider').length<1 ){
		var scrollPosition = jQuery(window).scrollTop();
		if( jQuery('.page-title > .container').eq(0).offset().top<120 ){
			jQuery('.page-title > .container').eq(0).css('opacity',((100 - scrollPosition) *0.01));
		}
	}
}



jQuery(document).ready(function($) {

	jQuery('p').each(function(){
		if( $(this).html()=='' ){ $(this).remove(); }
	});

	/* Fixing Header when has Top Slider */
	var $top_slider = jQuery('.slider-fullscreen');
	var has_topslider = false;
	if( $top_slider.length>0 ){
		has_topslider = true;
		jQuery('#header').css({'position': 'static'});

		jQuery('#header_spacing').height(0);
		jQuery('.admin-bar #header').css({ 'margin-top': '0px' });
	}
	else{
		
		/*	Header height calculator
		================================================== */
		if( $('.header-transparent').length>0 ){
			$('#header_spacing').remove();
			$('#header+section.section').eq(0).css({
				'padding-top': +parseInt($('section.section').eq(0).css('padding-top'))+$('#header').height()+'px'
			});

			/** It will works when enabled sticky menu. */
			if( $('.header-transparent').hasClass('navbar-fixed-top') ){
				$(window).on('scroll', function(){
					var scrollTop = $(window).scrollTop();
					if( scrollTop > $('#header').height()+50 ){
						if( !$('#header').hasClass('stickymenu') ){
							$('#header').hide();
							$('#header').addClass('stickymenu');
							$('#header').fadeIn();
						}
					}
					else{
						if( $('#header').hasClass('stickymenu') ){
							$('#header').removeClass('stickymenu');
						}
					}
				});
			} // end sticky transparent menu
			
		}
		else{
			if( $('.navbar-fixed-top').length>0 ){
				jQuery('#header_spacing').height( jQuery('#header').height()-1 );
				jQuery(window).resize(function(){
					jQuery('#header_spacing').height( jQuery('#header').height());
				});
			}
			else{
				$('#header_spacing').height(0);
			}
		}
		
	}


	$(window).on('scroll', function() {
		parallax();

		var scrollTop = $(window).scrollTop();
		var topbar_h = $('#top-bar').length>0 ? $('#top-bar').outerHeight() : 0;
		if( $(window).width()>600 && $('.navbar-fixed-top').length>0 ){
			if( has_topslider ){
				var wpbarh = $('#wpadminbar').length>0 ? $('#wpadminbar').height() : 0;
				var diff_wpbar_topbar = topbar_h-wpbarh;
				if( $top_slider.height()+diff_wpbar_topbar < scrollTop-wpbarh ){
					/* in here */
					jQuery('#header_spacing').height( jQuery('#header').height() );
					jQuery('#header').css({'position': 'fixed', 'margin-top': -diff_wpbar_topbar+'px' });
				}
				else{
					/* out of scroll */
					jQuery('#header_spacing').height(0);
					jQuery('#header').css({'position': 'static', 'margin-top': '0px' });
				}
			}
			else{
				if( scrollTop < topbar_h )
					$('#header').css({ 'top': -scrollTop+'px' });
				else
					$('#header').css({ 'top': -topbar_h+'px' });
			}
		}
		else{
			$('#header').css({ 'top': '0px' });
		}
	});


	/* Mobile Menu */
	if( $('#mobile-menu-wrapper nav').length<1 && $('nav.mainmenu .navmenu-cell').length>0 ){
		var $navmenu = $('nav.mainmenu .navmenu-cell').clone();
		if( $('#bullet-menu').length>0 ){
			$navmenu = jQuery('#one_page_menu').clone().wrapInner('<ul></ul>');
		}
		
		$navmenu.attr('class', '').attr('role', '').attr('id', 'mobile-menu').attr('style','');
		$navmenu.find('.header-search').remove();
		$navmenu.find('ul').attr('class', '');

		$navmenu.find('li.mega-menu').each(function(){
			var $li = $(this);
			var $megamenu_item = $li.find('>ul');
			$li.find('.menu-column').each(function(){
				$megamenu_item.append('<li><a href="javascript:;"><b>'+ $(this).find('>h3').html() +'</b></a></li>');
				$(this).find('.menu-item').each(function(){
					$megamenu_item.append('<li>'+ $(this).html() +'</li>');
				});
				$(this).remove();
			});
			$li.find('>ul > li').eq(0).remove();
		});

		$('#mobile-menu-wrapper .mobile-menu-content').append($navmenu);
	}
	var mm_skin = parseInt($('#mobile-menu-wrapper').attr('data-skin'))==1 ? 'mm-dark' : 'mm-light';
	$('#mobile-menu').mmenu({
			position	: 'right',
			classes		: mm_skin,
			dragOpen	: true
		})
		.on('opened.mm', function(){
			$('#bullet-menu').fadeOut();
		})
		.on('closed.mm', function(){
			$('#bullet-menu').fadeIn();
		});


	/* Mobile Shopping Cart */
	if( $('#mobile-cart-wrapper').length>0 ){
		var $ul = $('#mobile-cart-wrapper').find('.cart_list');
		var $li1 = $('<li class="total"></li>').append( $ul.parent().find('.total') );
		var $li2 = $('<li class="buttons"></li>').append( $ul.parent().find('.buttons') );
		$ul.append($li1).append($li2);
		$('#mobile-cart-wrapper').find('.mobile-cart-tmp nav').append($ul);

		$('#mobile-cart-wrapper nav').mmenu({
			position	: 'right',
			classes		: 'mm-light',
			dragOpen	: true
		})
		.on('opened.mm', function(){
			$('#bullet-menu').fadeOut();
		})
		.on('closed.mm', function(){
			$('#bullet-menu').fadeIn();
		});
	}


	/* Search icon event */
	$('#header .header-search .search-icon').click(function(){
		$(this).parent().find('.search-form').show();
		$(this).parent().find('.search-form input[type=text]').focus();
	});
	$(document).click(function(event){
		var $target = $(event.target);
		var $p = $target.parent();
		if( $p.hasClass('search-icon') || $p.hasClass('header-search') || $p.hasClass('input-group') ){ }
		else{
			$('#header .header-search .search-form').hide();
		}
	});
	
	

	/*	Onepage Local Scroll
	================================================== */
	if( $('#bullet-menu').length>0 ){
		
		$('#header').find('ul.navbar-nav').html( jQuery('#one_page_menu').html() ).fadeIn('fast').attr('id', 'one-page-menu');

		$('#bullet-menu').find('a').tooltip({
			'selector': '',
			'placement': 'left',
			'container':'body'
		});

		$('#bullet-menu,#one-page-menu:not(.custom),.page-template-page-one-page #mobile-menu').find('a').click(function(){
			var $this = $(this);
			var id = '#post-'+$this.data('id');
			if( $('#post-title-'+$this.data('id')).length>0 ){
				id = '#post-title-'+$this.data('id');
			}
			var $wpbar = $('#wpadminbar').length >0 ? $('#wpadminbar').height() : 0;
			$.scrollTo( $(id), 500, { offset: -($('#header').height()-$wpbar)+10 } );
		});

		setTimeout(function(){
			$('#bullet-menu').find('a').parent().removeClass('selected');
			$('#bullet-menu').find('a').eq(0).parent().addClass('selected');
		}, 1000);

		$(window).scroll(function () {

			var $wpbar = $('#wpadminbar').length >0 ? $('#wpadminbar').height() : 0;
			var header_offset = $('#header').height()-$wpbar;

			$('#bullet-menu').find('a').each(function(){
				var data_id = $(this).data('id');
				var $target = $('#post-'+data_id);
				$target = $('#post-title-'+data_id).length>0 ? $('#post-title-'+data_id) : $target;
				if( $target.offset().top-header_offset < $(window).scrollTop() ){
					$('#bullet-menu').find('a').parent().removeClass('selected');
					$(this).parent().addClass('selected');
				}
				
			});

			
		});
	}
	

	/*	Active Menu
	================================================== */
	$(function() {
		var sections = jQuery('section');
		var navigation_links = jQuery('nav a');
		sections.waypoint({
		handler: function(direction) {
			var active_section;
			active_section = jQuery(this);
			if (direction === "up") active_section = active_section.prev();
			var active_link = jQuery('nav a[href="#' + active_section.attr("id") + '"]');
			navigation_links.parent().removeClass("active");
			active_link.parent().addClass("active");
			active_section.addClass("active-section");
		},
		offset: '35%'
		});
	});
	


	/*	Pretty Photo
	================================================== */
	jQuery('.gallery a').attr('rel', 'prettyPhoto');
	jQuery("a[rel^='prettyPhoto'],a.prettyPhoto,.blox-element.prettyPhoto>a").prettyPhoto({deeplinking:false,social_tools:false});



    // Go to top arrow
    jQuery('span.gototop').click(function() {
        jQuery('body,html').animate({scrollTop: 0}, 600);
    });

    jQuery(window).scroll(function(){
        if( jQuery(window).scrollTop() > 500 ){
            jQuery('.gototop').addClass('show');
        }
        else{
            jQuery('.gototop').removeClass('show');
        }
    });

	/*	Bootstrap JS
	================================================== */
	jQuery('[data-toggle="tooltip"]').tooltip();
	jQuery('[data-toggle="popover"]').popover();


	jQuery('.affix-element').each(function(){
		var $this = $(this);
		$this.affix({
			offset: {
				top: 300,
				bottom: 10
			}
		});
	});
	
	
	/*	Check menu hasChildren
	================================================== */
	if( jQuery('.mainmenu ul').length>0 ){
		jQuery('.mainmenu ul').eq(0).find('li').each(function(){
			var $this = jQuery(this);
			if( $this.find('ul').length > 0 ){
				$this.addClass('has-children');
			}
		});
	}



	/* Fix Loop iFrame size
	===================================================*/
	jQuery('.grid-loop').each(function(){
		var $this = jQuery(this);
		$this.find('.entry-media iframe').each(function(){
			var $media = jQuery(this).parent();
			var $iframe = jQuery(this);
			$iframe.width($media.width()).height( parseInt($media.width()*350/600) );

			jQuery(window).resize(function(){
				$iframe.width($media.width()).height( parseInt($media.width()*350/600) );
			});
		});
	});


	/* Fix Embed Video Height
	===================================================*/
	jQuery("section.primary").fitVids();



	/*	Swiper Slider
	================================================== */
	jQuery('.swipy-slider').each(function(index){
		var $this = jQuery(this);
		$this.find('.swiper-pagination').addClass('swipy-paginater'+index);
		var $swiper = $this.swiper({
							mode:'horizontal',
							loop: true,
							keyboardControl: false,
							paginationClickable: true,
							resizeReInit: true,
							calculateHeight: true,
							pagination: '.swipy-paginater'+index
						});

		$this.fadeIn('fast');
		$this.find('.swiper-control-prev').click(function(){
			$swiper.swipePrev();
		});
		$this.find('.swiper-control-next').click(function(){
			$swiper.swipeNext();
		});

		if( $this.parent().hasClass('gallery_viewport') && $this.parent().parent().parent().find('.button').length>0 ){
			$this.parent().parent().parent().find('.button').click(function(){
				$swiper.swipeTo(0);
			});
		}
	});




	/* Portfolio Slider
	===================================================*/
	jQuery('.portfolio-slider').each(function(){
		var $this = jQuery(this).find('.swiper-container');
		var xr16x6 = 0.375;
		var xr16x9 = 0.5625;
		xr16x6 = $this.width()<960 ? xr16x9 : xr16x6;
		var h = $this.width()*xr16x6;
		h = h>640 ? 640 : h;
		$this.find('.swiper-wrapper').height(h);

		var $swiper = $this.swiper({
							mode:'horizontal',
							loop: true,
							keyboardControl: true,
							paginationClickable: true,
							resizeReInit: true,
							pagination: '.swiper-pagination',
							onSlideChangeEnd: function(swiper, direction){
								if( !$this.find('.swiper-slide.video').hasClass('swiper-slide-active') ){
									$this.find('.swiper-slide.video').html( $this.find('.swiper-slide.video').html() );
								}
							}
						});
		$this.find('.swiper-control-prev').click(function(){
			$swiper.swipePrev();
		});
		$this.find('.swiper-control-next').click(function(){
			$swiper.swipeNext();
		});

		if( $this.hasClass('layout-sidebar') )
			$this.find('iframe').width( $this.width() ).height( $this.width()*xr16x6 );
		else
			$this.find('iframe').height(h).width(h*1.777);
		$this.find('.video-wrapper').show();


		jQuery(window).resize(function(){
			var xr16x6 = 0.375;
			var xr16x9 = 0.5625;
			xr16x6 = $this.width()<960 ? xr16x9 : xr16x6;
			var h = $this.width()*xr16x6;
			h = h>640 ? 640 : h;
			$this.find('.swiper-wrapper').height(h);
			$this.find('.swiper-slide').height(h);
			
			if( $this.hasClass('layout-sidebar') )
				$this.find('iframe').width( $this.width() ).height( $this.width()*xr16x6 );
			else
				$this.find('iframe').height(h).width(h*1.777);
			
		});
	});

	
	/* Carousel Swiper Slider
	====================================*/
	jQuery('.blox-carousel.swiper-container').each(function(){
		var $this = jQuery(this);
		var $autoplay = jQuery(this).data('duration');
		var column = 1;
		
		if( $this.width() > 939){ column = 4; }
		else if( $this.width() > 422 ){ column = 3; }
		else if( $this.width() > 400 ){ column = 2; }

		jQuery('.woocommerce.swiper-container ul.products li.product').css({
			'margin': 'auto',
			'padding': '15px'
		});

		if( $this.hasClass('woocommerce') ){
			$this.find('li').each(function(){
				jQuery(this).removeClass('last first')
							.addClass('swiper-slide')
							.addClass('col-md-3 col-sm-6 col-xs-12');
			});
		}
		
		var swipe_option = {slidesPerView: column, calculateHeight: true};
		if( $autoplay != '0'){
			jQuery.extend(swipe_option, {autoplay: $autoplay});
		}

		var $carousel = $this.swiper(swipe_option);

		$this.find('.carousel-control-prev').click(function(){
			$carousel.swipePrev();
		});
		$this.find('.carousel-control-next').click(function(){
			$carousel.swipeNext();
		});

		// fix title position
		$this.find('article.entry.hover').each(function(){
            var $title = jQuery(this).find('.entry-title h2');
            $title.css({ 'margin-top': parseInt( jQuery(this).height()/2-60-$title.height()/2 ) });
        });

		jQuery(window).resize(function(){
			if( $this.width() > 939){ $carousel.params.slidesPerView = 4; }
			else if( $this.width() > 422 ){ $carousel.params.slidesPerView = 3; }
			else if( $this.width() > 400 ){ $carousel.params.slidesPerView = 2; }
			else{ $carousel.params.slidesPerView = 1; }

			// fix title position
			$this.find('article.entry.hover').each(function(){
	            var $title = jQuery(this).find('.entry-title h2');
	            $title.css({ 'margin-top': parseInt( jQuery(this).height()/2-60-$title.height()/2 ) });
	        });
		});
	});

	


	/* Fullwidth Carousel Swiper Slider
	====================================*/
	jQuery('.fullwidth-carousel').each(function(){
		var $this = jQuery(this);
		var $autoplay = jQuery(this).data('duration');
		var column = 1;

		$this.width( jQuery(window).width() )
			.css({ 'margin-left': -$this.offset().left });
		
		
		$this.find('.blox-element.grid-loop').css({ 'margin-bottom': '0px' });
		$this.find('.grid-loop article').css({ 'margin-bottom': '0px' });
		$this.find('.entry-media').css({ 'margin-bottom': '0px' });
		
		
		if( $this.width() > 939){ column = 4; }
		else if( $this.width() > 422 ){ column = 3; }
		else if( $this.width() > 400 ){ column = 2; }

		var swipe_option = {slidesPerView: column, calculateHeight: true};
		if( $autoplay != '0'){
			jQuery.extend(swipe_option, {autoplay: $autoplay});
		}

		var $carousel = $this.swiper(swipe_option);

        $this.animate({ 'opacity': 1 }, 1000);

		jQuery(window).resize(function(){
			$this.width( jQuery(window).width() ).css({ 'margin-left': '0' });
			$this.css({ 'margin-left': -$this.offset().left });

			if( $this.width() > 939){ $carousel.params.slidesPerView = 4; }
			else if( $this.width() > 422 ){ $carousel.params.slidesPerView = 3; }
			else if( $this.width() > 400 ){ $carousel.params.slidesPerView = 2; }
			else{ $carousel.params.slidesPerView = 1; }

			// fix title position
			$this.find('article.entry.hover').each(function(){
				var $title = jQuery(this).find('.entry-title h2');
				$title.css({ 'margin-top': parseInt( jQuery(this).height()/2-60-$title.height()/2 ) });
			});
		});
	});


	
	
	/*  Fullwidth Portfolio Masonry
    ================================================== */
    jQuery('.fullwidth-portfolio').each(function(){
        var $this = jQuery(this);

        $this.find('.masonry-container').width( jQuery(window).width() ).css({ 'margin-left': -$this.offset().left });

        var $col = parseInt( $this.attr('data-column') );

        $this.find('.post_filter_item').width( jQuery(window).width()/$col )
                .css({
                    'float': 'left'
                });

        $this.css({ 'margin-bottom': '0px' });
        $this.find('article.entry').css({ 'margin-bottom': '0px' });
        $this.find('.entry-media').css({ 'margin-bottom': '0px' });

        $this.animate({ 'opacity': 1 }, 1000);

        jQuery(window).resize(function(){
            $this.find('.masonry-container').width( jQuery(window).width() ).css({ 'margin-left': '0' });
            $this.find('.masonry-container').css({ 'margin-left': -$this.offset().left });

            if( $this.width() > 939){ $this.find('.post_filter_item').width( jQuery(window).width()/$col ) }
            else if( $this.width() > 422 ){ $this.find('.post_filter_item').width( jQuery(window).width()/3 ) }
            else if( $this.width() > 400 ){ $this.find('.post_filter_item').width( jQuery(window).width()/2 ) }
            else{ $this.find('.post_filter_item').width( jQuery(window).width() ) }

            $this.find('article.entry.hover').each(function(){
                var $title = jQuery(this).find('.entry-title h2');
                $title.css({ 'margin-top': parseInt( jQuery(this).height()/2-60-$title.height()/2 ) });
            });
        });
    });


	

	
	/* Woocommerce Ajax Complete Request */
	jQuery(document).ajaxComplete(function( event, request, settings ) {
		if( typeof settings.data !== 'undefined' && (settings.data.indexOf('action=woocommerce_get_refreshed_fragments')>-1 || settings.data.indexOf('action=woocommerce_add_to_cart')>-1 )){
			var response = request.responseJSON;

			if( typeof response.fragments!=='undefined' && typeof response.fragments['div.widget_shopping_cart_content']!=='undefined' ){
				var cart = response.fragments['div.widget_shopping_cart_content'];
				jQuery('.woocommerce-shcart').each(function(){
					var $this = jQuery(this);
					$this.find('.shcart-content').html( cart );

					var count = 0;
					//var total = $this.find('.shcart-content').find('.total .amount').html();
					$this.find('.shcart-content').find('.quantity').each(function(){
						var $quant = jQuery(this).clone();
						$quant.find('.amount').remove();
						count += parseInt($quant.text());
					});

					$this.find('.shcart-display .total-cart').html( count );
				});
			}
			
		}
	});

	/*
	jQuery('.woocommerce-shcart').each(function(){
		var $this = jQuery(this);
		$this.find('.shcart-display').hover(
			function(){
				$this.find('.shcart-content').slideDown();
			},
			function(){
				$this.find('.shcart-content').slideUp();
			}
		);
	});
	*/
	



	/*	Animation with Waypoints
	================================================== */
	var animate_start = function($this){
		$this.find('.animate').each(function(i){
			var $item = jQuery(this);
		    var animation = $item.data("animate");
		    
            $item.waypoint(function(direction){
    			$item.css({
    				'-webkit-animation-delay': (i*0.1)+"s",
    				'-moz-animation-delay': (i*0.1)+"s",
    				'-ms-animation-delay': (i*0.1)+"s",
    				'-o-animation-delay': (i*0.1)+"s",
    				'animation-delay': (i*0.1)+"s"
    			});
    
    			$item.removeClass('animate').addClass('animated '+animation).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
    				jQuery(this).removeClass(animation+' animated');
    			});
            },
            {
            	offset: '88%',
    			triggerOnce: true
            });
		});
	};
	jQuery('.blox-row').each(function(){
        var $this = jQuery(this);
        animate_start( $this );
	});

});


function fix_product_height(){
	jQuery('.product-image-hover').each(function(){
		var $this = jQuery(this);
		$this.height( $this.width() );
	});
}



/* Window Load/All Media Loaded */
jQuery(window).load(function() {


	/* Fix menu position */
	/*
	var menuHeight = (jQuery('#header').find('.navbar-header').height() - jQuery('#header').find('.mainmenu').height())/2;
	menuHeight = parseInt(menuHeight);
	jQuery('#header').find('.mainmenu').css({ 'margin-top': menuHeight+'px' });
	*/

	if( jQuery('.navbar-fixed-top').length>0 ){
		jQuery('#header_spacing').height( jQuery('#header').height()-1 );
		jQuery(window).resize(function(){
			jQuery('#header_spacing').height( jQuery('#header').height());
		});
	}
	

	
	fix_product_height();
	jQuery(window).resize(function(){
		fix_product_height();
	});

	jQuery('ul.products:not(.swiper-wrapper)').each(function(){
		var $product = jQuery(this);
		$product.isotope({
            itemSelector : 'li.product',
            layoutMode: 'fitRows'
        });

        jQuery(window).resize(function(){
			$product.isotope('layout');
		});
	});
	

	/* init Skrollr Parallax
	==================================================*/
	jQuery(window).stellar({
		horizontalScrolling: false,
		responsive: true
	});


	/*  Fullwidth Portfolio Masonry
    ================================================== */
    jQuery('.fullwidth-portfolio').each(function(){
        var $this = jQuery(this);
        var $portfolio_masonry = $this.find('.masonry-container');
        var masonry_item = '.post_filter_item';

        $portfolio_masonry.isotope({
            itemSelector : masonry_item
        });

        $this.find('.portfolio-filter .dropdown-menu a').click(function(){
            var $filter = jQuery(this);
            var filter = $filter.attr('data-filter');
            
            $this.find('.portfolio-filter h3').html( $filter.html() );
            filter = filter=='all' ? '*' : '.'+filter;
            $portfolio_masonry.isotope({ filter: filter });
        });

        /** Fix title Position */
        $this.find('article.entry.hover').each(function(){
            var $title = jQuery(this).find('.entry-title h2');
            $title.css({ 'margin-top': parseInt( jQuery(this).height()/2-60-$title.height()/2 ) });
        });
    });



    /** Fix Fullwidth Carousel Title Position */
	jQuery('.fullwidth-carousel').each(function(){
		var $this = jQuery(this);
		$this.find('article.entry.hover').each(function(){
	        var $title = jQuery(this).find('.entry-title h2');
	        $title.css({ 'margin-top': parseInt( jQuery(this).height()/2-60-$title.height()/2 ) });
	    });
	});
	


});
