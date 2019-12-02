
( function( $ ) {

	//Update the site description in real time...
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '.site-description' ).html( newval );
		} );
	} );



// General 
	// Primary color
	wp.customize( 'general_color', function( value ) {
		value.bind( function( newval ) {
			$('.content a,.btn-link,.nav-tabs>li>a:hover,.nav-tabs>li>a:focus, .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus,.carousel-control,.entry-hover .hover-icon a:hover,.grid-loop article .entry-title a:hover, .grid-loop article .entry-hover .entry-title a:hover,.navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus,.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus,.navbar-nav li:hover a, .navbar-nav li:focus a,.navbar-nav li .dropdown-menu>li>a:hover, .navbar-nav li .dropdown-menu>li>a:focus,.navbar-nav li.mega-menu ul.dropdown-menu li a:hover').css('color', newval ? newval : '' );
			$('.woocommerce div.product span.price, .woocommerce div.product p.price, .woocommerce #content div.product span.price, .woocommerce #content div.product p.price, .woocommerce-page div.product span.price, .woocommerce-page div.product p.price, .woocommerce-page #content div.product span.price, .woocommerce-page #content div.product p.price,.woocommerce div.product .stock, .woocommerce #content div.product .stock, .woocommerce-page div.product .stock, .woocommerce-page #content div.product .stock').css('color', newval ? newval : '' );
			$('.btn-primary, .label-primary,.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus,.dropdown-menu>.active>a, .dropdown-menu>.active>a:hover, .dropdown-menu>.active>a:focus,.progress-bar,.swiper-control-prev, .swiper-control-next,.swiper-pagination-switch.swiper-active-switch,input[type="submit"],input[type="button"],input[type="reset"],.table>thead>tr>td.active, .table>tbody>tr>td.active, .table>tfoot>tr>td.active, .table>thead>tr>th.active, .table>tbody>tr>th.active, .table>tfoot>tr>th.active, .table>thead>tr.active>td, .table>tbody>tr.active>td, .table>tfoot>tr.active>td, .table>thead>tr.active>th, .table>tbody>tr.active>th, .table>tfoot>tr.active>th,.jp-play-bar,.entry-hover .hover-icon a,.pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus,.grid-loop article .entry-hover .meta-like a.liked,.widget ul li a span,.tagcloud a').css('background-color', newval ? newval : '' );
			$('p.demo_store,.woocommerce span.onsale, .woocommerce-page span.onsale,.woocommerce span.outoffstock, .woocommerce-page span.outoffstock,.woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button, .woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button,.woocommerce .quantity .plus, .woocommerce-page .quantity .plus, .woocommerce #content .quantity .plus, .woocommerce-page #content .quantity .plus, .woocommerce .quantity .minus, .woocommerce-page .quantity .minus, .woocommerce #content .quantity .minus, .woocommerce-page #content .quantity .minus,.chzn-container .chzn-results .highlighted,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle').css('background-color', newval ? newval : '' );
			$('blockquote,.btn-primary, .label-primary,.carousel-indicators li,.swiper-pagination-switch,.featured-plan .plan-price, .blox-element.featured-plan, .blox-element.bordered.featured-plan,input[type="submit"],input[type="button"],input[type="reset"],.pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus,.comment.byuser .comment-author img').css('border-color', newval ? newval : '' );
			$('.woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button, .woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button,.chzn-container .chzn-results .highlighted').css('border-color', newval ? newval : '' );
			$('.nav .caret,.nav a:hover .caret').css('border-top-color', newval ? newval : '' );
			$('.nav .caret,.nav a:hover .caret,.entry-media blockquote .blockquote-line span:before').css('border-bottom-color', newval ? newval : '' );
		} );
	} );

	// Accent color
	wp.customize( 'accent_color', function( value ) {
		value.bind( function( newval ) {
			$('body,.navbar-inverse .navbar-brand:hover,.navbar-inverse .navbar-brand:focus').css('color', newval ? newval : '' );
			$('.btn-default,.label-default,.navbar-inverse .navbar-toggle,.navbar-nav li .dropdown-menu>li>a:hover, .navbar-nav li .dropdown-menu>li>a:focus,.navbar-nav li.mega-menu ul.dropdown-menu li a:hover,#footer .widget ul li a span').css('background-color', newval ? newval : '' );
			$('.btn-default,.label-default').css('border-color', newval ? newval : '' );
			$('.menu-column').css('border-left-color', newval ? newval : '' );
			$('#footer .woocommerce ul.cart_list li,#footer .woocommerce-page ul.cart_list li,#footer .woocommerce ul.product_list_widget li,#footer .woocommerce-page ul.product_list_widget li,#footer .widget_rss ul li,#footer table>thead>tr>th,#footer table>tbody>tr>th,#footer table>tfoot>tr>th,#footer table>thead>tr>td,#footer table>tbody>tr>td,#footer table>tfoot>tr>td').css('border-bottom-color', newval ? newval : '' );
		} );
	} );

	wp.customize( 'body_bg_color', function( value ) {
		value.bind( function( newval ) {
			$('body').css('background-color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'border_color', function( value ) {
		value.bind( function( newval ) {
			$('.img-thumbnail,.nav-tabs,.nav-tabs>li.active>a,.nav-tabs>li.active>a:hover,.nav-tabs>li.active>a:focus,.panel-default,.modal-header,.modal-footer,.blox-element.pricing,.plan-price,.blox-element.divider,table>thead>tr>th,table>tbody>tr>th,table>tfoot>tr>th,table>thead>tr>td,table>tbody>tr>td,table>tfoot>tr>td,.table>thead>tr>th,.table>tbody>tr>th,.table>tfoot>tr>th,.table>thead>tr>td,.table>tbody>tr>td,.table>tfoot>tr>td,.table-bordered,.table-bordered>thead>tr>th,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>tbody>tr>td,.table-bordered>tfoot>tr>td,.pagination>li>a,.pagination>li>span,.pagination>.disabled>span,.pagination>.disabled>span:hover,.pagination>.disabled>span:focus,.pagination>.disabled>a,.pagination>.disabled>a:hover,.pagination>.disabled>a:focus,.grid-loop.bordered article,.grid-loop article .entry-meta,.medium-loop article,.blox-element.bordered,.upsells.products h2,.related.products h2,h3#order_review_heading,h3.related-posts,.woocommerce ul.cart_list li,.woocommerce-page ul.cart_list li,.woocommerce ul.product_list_widget li,.woocommerce-page ul.product_list_widget li,.primary.section .content-title,.item-author,.comment-list > li.comment,.comment-list li.post.pingback,.comment-list > li.comment ul.children li.comment,.comment-title,h3.comment-reply-title,.single-post .page-title.section .single-post-title,.single-portfolio .page-title.section .single-portfolio-title,.portfolio-controls a,.portfolio-controls a:hover,.portfolio-controls a:focus,.widget_rss ul li,.woocommerce div.product .woocommerce-tabs ul.tabs:before,.woocommerce-page div.product .woocommerce-tabs ul.tabs:before,.woocommerce #content div.product .woocommerce-tabs ul.tabs:before,.woocommerce-page #content div.product .woocommerce-tabs ul.tabs:before,.woocommerce div.product .woocommerce-tabs ul.tabs li,.woocommerce-page div.product .woocommerce-tabs ul.tabs li,.woocommerce #content div.product .woocommerce-tabs ul.tabs li,.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li,.woocommerce table.shop_attributes .alt td,.woocommerce table.shop_attributes .alt th,.woocommerce-page table.shop_attributes .alt td,.woocommerce-page table.shop_attributes .alt th,.woocommerce table.shop_attributes td,.woocommerce-page table.shop_attributes td,.woocommerce table.shop_attributes th,.woocommerce-page table.shop_attributes th,.woocommerce .quantity input.qty,.woocommerce-page .quantity input.qty,.woocommerce #content .quantity input.qty,.woocommerce-page #content .quantity input.qty,.woocommerce #reviews #comments ol.commentlist li img.avatar,.woocommerce-page #reviews #comments ol.commentlist li img.avatar,.woocommerce table.cart td.actions .coupon .input-text,.woocommerce-page table.cart td.actions .coupon .input-text,.woocommerce #content table.cart td.actions .coupon .input-text,.woocommerce-page #content table.cart td.actions .coupon .input-text').css('border-color', newval ? newval : '');
		} );
	} );



// Top Bar
	wp.customize( 'topbar_bg_color', function( value ) {
		value.bind( function( newval ) {
			$('header .top-bar').css('background-color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'topbar_text_color', function( value ) {
		value.bind( function( newval ) {
			$('header .top-bar').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'topbar_link_color', function( value ) {
		value.bind( function( newval ) {
			$('header .top-bar a').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'topbar_linkhover_color', function( value ) {
		value.bind( function( newval ) {
			var style_id = 'topbar_linkhover_color';
			var style = $('<style type="text/css" id="'+style_id+'" />');
			if( $('#'+style_id).length<1 ){ $('html').append(style); }
			var custom_css = 'header .top-bar a:hover,header .top-bar a:focus{ color:'+newval+' !important; }'
			$('#'+style_id).html(custom_css);
		} );
	} );




// Header
	wp.customize( 'header_bg_color', function( value ) {
		value.bind( function( newval ) {
			$('header').css('background-color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'header_text_color', function( value ) {
		value.bind( function( newval ) {
			$('header .navbar-header').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'header_link_color', function( value ) {
		value.bind( function( newval ) {
			$('header  .navbar-header a').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'header_linkhover_color', function( value ) {
		value.bind( function( newval ) {
			var style_id = 'header_linkhover_color';
			var style = $('<style type="text/css" id="'+style_id+'" />');
			if( $('#'+style_id).length<1 ){ $('html').append(style); }
			var custom_css = 'header  .navbar-header a:hover{ color:'+newval+' !important; }'
			$('#'+style_id).html(custom_css);
		} );
	} );




// Navigation
	wp.customize( 'menu_link_color', function( value ) {
		value.bind( function( newval ) {
			$('header nav.mainmenu > ul > li > a, .header-search a.search-icon').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'menu_linkhover_color', function( value ) {
		value.bind( function( newval ) {

			var style_id = 'menu_linkhover_color';
			var style = $('<style type="text/css" id="'+style_id+'" />');
			if( $('#'+style_id).length<1 ){ $('html').append(style); }
			var custom_css = 'ul.navbar-nav>li:hover>a>.menu-text,ul.navbar-nav>li:hover>a>.menu-icon,.header-search a.search-icon:hover{ color:'+newval+' !important; }'
			$('#'+style_id).html(custom_css);

		} );
	} );
	wp.customize( 'menu_active_color', function( value ) {
		value.bind( function( newval ) {
			$('header nav.mainmenu > ul > li.current-menu-item .menu-text').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'menu_desc_color', function( value ) {
		value.bind( function( newval ) {
			$('.menu-description').css('color', newval ? newval : '' );
		} );
	} );

	// Sub menu
	wp.customize( 'menu_subtext_color', function( value ) {
		value.bind( function( newval ) {
			$('header nav.mainmenu .navbar-nav li ul.dropdown-menu li a').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'menu_subtexthover_color', function( value ) {
		value.bind( function( newval ) {
			var style_id = 'menu_subtexthover_color';
			var style = $('<style type="text/css" id="'+style_id+'" />');
			if( $('#'+style_id).length<1 ){ $('html').append(style); }
			var custom_css = 'header nav.mainmenu .navbar-nav li ul.dropdown-menu li a:hover{ color:'+newval+' !important; }'
			$('#'+style_id).html(custom_css);
		} );
	} );
	wp.customize( 'menu_subtextactive_color', function( value ) {
		value.bind( function( newval ) {
			$('header nav.mainmenu .navbar-nav li ul.dropdown-menu li a.current-menu-item .menu-text').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'menu_subbg_color', function( value ) {
		value.bind( function( newval ) {
			$('.navbar-nav ul.dropdown-menu').css('background-color', newval ? newval : '' );
			$('.navbar-nav ul.dropdown-menu').css('border-color', newval ? newval : '' );
		} );
	} );

	wp.customize( 'menu_subbghover_color', function( value ) {
		value.bind( function( newval ) {
			var style_id = 'menu_subbghover_color';
			var style = $('<style type="text/css" id="'+style_id+'" />');
			if( $('#'+style_id).length<1 ){ $('html').append(style); }
			var custom_css = '.navbar-nav li .dropdown-menu>li>a:hover, .navbar-nav li .dropdown-menu>li>a:focus,.navbar-nav li.mega-menu ul.dropdown-menu li a:hover,.navbar-nav li.mega-menu ul.dropdown-menu li a:focus{ background-color:'+newval+' !important; }'
			$('#'+style_id).html(custom_css);
		} );
	} );
	wp.customize( 'menu_megatitle_color', function( value ) {
		value.bind( function( newval ) {
			$('.menu-column h3').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'menu_megaline_color', function( value ) {
		value.bind( function( newval ) {
			$('header nav.mainmenu li.mega-menu .menu-column').css('border-color', newval ? newval : '' );
		} );
	} );




// Title area
	wp.customize( 'title_bg_color', function( value ) {
		value.bind( function( newval ) {
			$('.page-title.section').css('background-color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'title_text_color', function( value ) {
		value.bind( function( newval ) {
			$('section.page-title').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'title_link_color', function( value ) {
		value.bind( function( newval ) {
			$('section.page-title a').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'title_linkhover_color', function( value ) {
		value.bind( function( newval ) {
			var style_id = 'title_linkhover_color';
			var style = $('<style type="text/css" id="'+style_id+'" />');
			if( $('#'+style_id).length<1 ){ $('html').append(style); }
			var custom_css = 'section.page-title a:hover{ color:'+newval+' !important; }'
			$('#'+style_id).html(custom_css);
		} );
	} );




// Content area
	wp.customize( 'content_bg_color', function( value ) {
		value.bind( function( newval ) {
			$('section.primary,.single-post .page-title.section,.single-portfolio .page-title.section,.search-form').css('background-color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'content_text_color', function( value ) {
		value.bind( function( newval ) {
			$('.content,.single-post .page-title.section .single-post-title').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'content_link_color', function( value ) {
		value.bind( function( newval ) {
			$('.content a,.single-post-title .entry-meta a').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'content_linkhover_color', function( value ) {
		value.bind( function( newval ) {
			var style_id = 'content_linkhover_color';
			var style = $('<style type="text/css" id="'+style_id+'" />');
			if( $('#'+style_id).length<1 ){ $('html').append(style); }
			var custom_css = '.content a:hover,.single-post-title .entry-meta a:hover{ color:'+newval+' !important; }'
			$('#'+style_id).html(custom_css);
		} );
	} );
	wp.customize( 'content_h1_color', function( value ) {
		value.bind( function( newval ) {
			$('.content h1,.single-post-title h1').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'content_h2_color', function( value ) {
		value.bind( function( newval ) {
			$('.content h2').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'content_h3_color', function( value ) {
		value.bind( function( newval ) {
			$('.content h3').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'content_h4_color', function( value ) {
		value.bind( function( newval ) {
			$('.content h4').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'content_h5_color', function( value ) {
		value.bind( function( newval ) {
			$('.content h5').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'content_h6_color', function( value ) {
		value.bind( function( newval ) {
			$('.content h6').css('color', newval ? newval : '' );
		} );
	} );


// Sidebar
	wp.customize( 'sidebar_text_color', function( value ) {
		value.bind( function( newval ) {
			$('.sidebar').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'sidebar_link_color', function( value ) {
		value.bind( function( newval ) {
			$('.sidebar a').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'sidebar_linkhover_color', function( value ) {
		value.bind( function( newval ) {
			var style_id = 'sidebar_linkhover_color';
			var style = $('<style type="text/css" id="'+style_id+'" />');
			if( $('#'+style_id).length<1 ){ $('html').append(style); }
			var custom_css = '.sidebar a:hover{ color:'+newval+' !important; }'
			$('#'+style_id).html(custom_css);
		} );
	} );
	wp.customize( 'sidebar_title_color', function( value ) {
		value.bind( function( newval ) {
			$('.sidebar h3.widget-title').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'sidebar_border_color', function( value ) {
		value.bind( function( newval ) {
			$('.sidebar .widget ul li').css('border-color', newval ? newval : '' );
		} );
	} );


// Footer
	wp.customize( 'footer_bg_color', function( value ) {
		value.bind( function( newval ) {
			$('#footer.section').css('background-color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'footer_text_color', function( value ) {
		value.bind( function( newval ) {
			$('#footer.section').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'footer_link_color', function( value ) {
		value.bind( function( newval ) {
			$('#footer a').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'footer_linkhover_color', function( value ) {
		value.bind( function( newval ) {
			var style_id = 'footer_linkhover_color';
			var style = $('<style type="text/css" id="'+style_id+'" />');
			if( $('#'+style_id).length<1 ){ $('html').append(style); }
			var custom_css = '#footer a:hover{ color:'+newval+' !important; }'
			$('#'+style_id).html(custom_css);
		} );
	} );
	wp.customize( 'footer_title_color', function( value ) {
		value.bind( function( newval ) {
			$('#footer h3.widget-title').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'footer_border_color', function( value ) {
		value.bind( function( newval ) {
			$('#footer .widget ul li').css('border-color', newval ? newval : '' );
		} );
	} );




// Sub Footer
	wp.customize( 'subfooter_bg_color', function( value ) {
		value.bind( function( newval ) {
			$('.sub-footer').css('background-color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'subfooter_text_color', function( value ) {
		value.bind( function( newval ) {
			$('.sub-footer').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'subfooter_link_color', function( value ) {
		value.bind( function( newval ) {
			$('.sub-footer a').css('color', newval ? newval : '' );
		} );
	} );
	wp.customize( 'subfooter_linkhover_color', function( value ) {
		value.bind( function( newval ) {
			var style_id = 'subfooter_linkhover_color';
			var style = $('<style type="text/css" id="'+style_id+'" />');
			if( $('#'+style_id).length<1 ){ $('html').append(style); }
			var custom_css = '.sub-footer a:hover{ color:'+newval+' !important; }'
			$('#'+style_id).html(custom_css);
		} );
	} );



} )( jQuery );