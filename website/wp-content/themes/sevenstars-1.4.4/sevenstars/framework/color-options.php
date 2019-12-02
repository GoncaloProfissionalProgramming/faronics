<?php


global $color_options;

$color_options = array(
                    array(
                         'id'           => 'color_general',
                         'title'        => 'Color : General',
                         'description'  => 'You can set site layout and background image on Theme Options panel.',
                         'items'        => array(
                              array(
                                   'id'      => 'general_color',
                                   'label'   => 'Primary Color',
                                   'default' => '#1abc9c'
                              ),
                              array(
                                   'id'      => 'general_hover_color',
                                   'label'   => 'Primary Hover Color',
                                   'default' => '#16a085'
                              ),
                              array(
                                   'id'      => 'accent_color',
                                   'label'   => 'Secondary Color',
                                   'default' => '#34495e'
                              ),
                              array(
                                   'id'      => 'accent_hover_color',
                                   'label'   => 'Secondary Hover Color',
                                   'default' => '#2c3e50'
                              ),
                              array(
                                   'id'      => 'body_bg_color',
                                   'label'   => 'Background Color (for Boxed)',
                                   'default' => '#ffffff'
                              ),
                              array(
                                   'id'      => 'border_color',
                                   'label'   => 'Border Color',
                                   'default' => '#ffffff'
                              )
                         )
                    ),
                    array(
                         'id'           => 'color_topbar',
                         'title'        => 'Color : Top Bar',
                         'description'  => '',
                         'items'        => array(
                              array(
                                   'id'      => 'topbar_bg_color',
                                   'label'   => 'Background Color',
                                   'default' => '#ecf0f1'
                              ),
                              array(
                                   'id'      => 'topbar_text_color',
                                   'label'   => 'Text Color',
                                   'default' => '#34495e'
                              ),
                              array(
                                   'id'      => 'topbar_link_color',
                                   'label'   => 'Link Color',
                                   'default' => '#1abc9c'
                              ),
                              array(
                                   'id'      => 'topbar_linkhover_color',
                                   'label'   => 'Link Hover Color',
                                   'default' => '#16a085'
                              )
                         )
                    ),
                    array(
                         'id'           => 'color_header',
                         'title'        => 'Color : Header',
                         'description'  => '',
                         'items'        => array(
                              array(
                                   'id'=>'header_bg_color',
                                   'label'   => 'Background Color',
                                   'default' => '#ffffff'
                              ),
                              array(
                                   'id'=>'header_text_color',
                                   'label'   => 'Text Color',
                                   'default' => '#2c3e50'
                              ),
                              array(
                                   'id'=>'header_link_color',
                                   'label'   => 'Link Color',
                                   'default' => '#2c3e50'
                              ),
                              array(
                                   'id'=>'header_linkhover_color',
                                   'label'   => 'Link Hover Color',
                                   'default' => '#34495e'
                              )
                         )
                    ),
                    array(
                         'id'           => 'color_menu',
                         'title'        => 'Color : Navigation',
                         'description'  => '',
                         'items'        => array(
                              array(
                                   'id'=>'menu_link_color',
                                   'label'   => 'Menu Text Color',
                                   'default' => '#2c3e50'
                              ),
                              array(
                                   'id'=>'menu_linkhover_color',
                                   'label'   => 'Menu Hover Color',
                                   'default' => '#1abc9c'
                              ),
                              array(
                                   'id'=>'menu_active_color',
                                   'label'   => 'Menu Active Color',
                                   'default' => '#1abc9c'
                              ),
                              array(
                                   'id'=>'menu_desc_color',
                                   'label'   => 'Description Color',
                                   'default' => '#2c3e50'
                              ),
                              array(
                                   'id'=>'menu_subtext_color',
                                   'label'   => 'Sub Menu Text Color',
                                   'default' => '#1abc9c'
                              ),
                              array(
                                   'id'=>'menu_subtexthover_color',
                                   'label'   => 'Sub Menu Text Hover Color',
                                   'default' => '#16a085'
                              ),
                              array(
                                   'id'=>'menu_subtextactive_color',
                                   'label'   => 'Sub Menu Active Color',
                                   'default' => '#16a085'
                              ),
                              array(
                                   'id'=>'menu_subbg_color',
                                   'label'   => 'Sub Menu Background Color',
                                   'default' => '#ffffff'
                              ),
                              array(
                                   'id'=>'menu_subbghover_color',
                                   'label'   => 'Sub Menu BG Hover Color',
                                   'default' => '#ecf0f1'
                              ),
                              array(
                                   'id'=>'menu_megatitle_color',
                                   'label'   => 'Mega Menu Title Color',
                                   'default' => '#1abc9c'
                              ),
                              array(
                                   'id'=>'menu_megaline_color',
                                   'label'   => 'Mega Menu Vertical Line Color',
                                   'default' => '#ecf0f1'
                              )
                         )
                    ),
                    array(
                         'id'           => 'color_title',
                         'title'        => 'Color : Title',
                         'description'  => '',
                         'items'        => array(
                              array(
                                   'id'      => 'title_bg_color',
                                   'label'   => 'Background Color',
                                   'default' => '#1abc9c'
                              ),
                              array(
                                   'id'      => 'title_text_color',
                                   'label'   => 'Text Color',
                                   'default' => '#ffffff'
                              ),
                              array(
                                   'id'      => 'title_link_color',
                                   'label'   => 'Link Color',
                                   'default' => '#ecf0f1'
                              ),
                              array(
                                   'id'      => 'title_linkhover_color',
                                   'label'   => 'Link Hover Color',
                                   'default' => '#bdc3c7'
                              )
                         )
                    ),
                    array(
                         'id'           => 'color_content',
                         'title'        => 'Color : Content',
                         'description'  => '',
                         'items'        => array(
                              array(
                                   'id'=>'content_bg_color',
                                   'label'   => 'Background Color',
                                   'default' => '#ffffff'
                              ),
                              array(
                                   'id'=>'content_text_color',
                                   'label'   => 'Text Color',
                                   'default' => '#34495e'
                              ),
                              array(
                                   'id'=>'content_link_color',
                                   'label'   => 'Link Color',
                                   'default' => '#1abc9c'
                              ),
                              array(
                                   'id'=>'content_linkhover_color',
                                   'label'   => 'Link Hover Color',
                                   'default' => '#16a085'
                              ),
                              array(
                                   'id'=>'content_h1_color',
                                   'label'   => 'H1 Heading and Post title Color',
                                   'default' => '#34495e'
                              ),
                              array(
                                   'id'=>'content_h2_color',
                                   'label'   => 'H2 Heading Color',
                                   'default' => '#34495e'
                              ),
                              array(
                                   'id'=>'content_h3_color',
                                   'label'   => 'H3 Heading Color',
                                   'default' => '#34495e'
                              ),
                              array(
                                   'id'=>'content_h4_color',
                                   'label'   => 'H4 Heading Color',
                                   'default' => '#34495e'
                              ),
                              array(
                                   'id'=>'content_h5_color',
                                   'label'   => 'H5 Heading Color',
                                   'default' => '#34495e'
                              ),
                              array(
                                   'id'=>'content_h6_color',
                                   'label'   => 'H6 Heading Color',
                                   'default' => '#34495e'
                              )
                         )
                    ),
                    array(
                         'id'           => 'color_sidebar',
                         'title'        => 'Color : Sidebar',
                         'description'  => '',
                         'items'        => array(
                              array(
                                   'id'=>'sidebar_text_color',
                                   'label'   => 'Text Color',
                                   'default' => '#34495e'
                              ),
                              array(
                                   'id'=>'sidebar_link_color',
                                   'label'   => 'Link Color',
                                   'default' => '#1abc9c'
                              ),
                              array(
                                   'id'=>'sidebar_linkhover_color',
                                   'label'   => 'Link Hover Color',
                                   'default' => '#16a085'
                              ),
                              array(
                                   'id'=>'sidebar_title_color',
                                   'label'   => 'Widget Title Color',
                                   'default' => '#34495e'
                              )
                         )
                    ),
                    array(
                         'id'           => 'color_footer',
                         'title'        => 'Color : Footer',
                         'description'  => '',
                         'items'        => array(
                              array(
                                   'id'=>'footer_bg_color',
                                   'label'   => 'Background Color',
                                   'default' => '#2c3e50'
                              ),
                              array(
                                   'id'=>'footer_text_color',
                                   'label'   => 'Text Color',
                                   'default' => '#ffffff'
                              ),
                              array(
                                   'id'=>'footer_link_color',
                                   'label'   => 'Link Color',
                                   'default' => '#1abc9c'
                              ),
                              array(
                                   'id'=>'footer_linkhover_color',
                                   'label'   => 'Link Hover Color',
                                   'default' => '#16a085'
                              ),
                              array(
                                   'id'=>'footer_title_color',
                                   'label'   => 'widget Title Color',
                                   'default' => '#ffffff'
                              ),
                              array(
                                   'id'=>'footer_border_color',
                                   'label'   => 'Border Color',
                                   'default' => '#34495e'
                              )
                         )
                    ),
                    array(
                         'id'           => 'color_subfooter',
                         'title'        => 'Color : Sub Footer',
                         'description'  => '',
                         'items'        => array(
                              array(
                                   'id'=>'subfooter_bg_color',
                                   'label'   => 'Background Color',
                                   'default' => '#1d2a36'
                              ),
                              array(
                                   'id'=>'subfooter_text_color',
                                   'label'   => 'Text Color',
                                   'default' => '#ffffff'
                              ),
                              array(
                                   'id'=>'subfooter_link_color',
                                   'label'   => 'Link Color',
                                   'default' => '#1abc9c'
                              ),
                              array(
                                   'id'=>'subfooter_linkhover_color',
                                   'label'   => 'Link Hover Color',
                                   'default' => '#16a085'
                              )
                         )
                    )
               );

class ThemetonTheme_Customize {

    public static function register($wp_customize) {


        global $color_options;

        $priority = 300;
        foreach ($color_options as $color_option) {
            
            /* Create Section */
            $wp_customize->add_section( $color_option['id'], array(
                'title' => $color_option['title'],
                'priority' => $priority,
                'description' => $color_option['description']
            ));

            /* Create Items */
            $items = $color_option['items'];
            $order = 0;
            foreach ($items as $item) {
                $wp_customize->add_setting($item['id'], array(
                    'default' => $item['default'],
                    'type' => 'theme_mod',
                    'transport' => 'postMessage',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => 'esc_attr'
                ));

                $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $item['id'], array(
                    'label' => $item['label'],
                    'section' => $color_option['id'],
                    'settings' => $item['id'],
                    'priority' => $order
                )));

                $order++;
            }

            unset($order);
            $priority++;
        }
    }

    public static function header_output() {
        ?>
        <!--Customizer CSS--> 
        <style type="text/css">
        <?php
        // Primary color
        self::generate_css('a,.btn-link,.nav-tabs>li>a:hover,.nav-tabs>li>a:focus, .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus,.carousel-control,.entry-hover .hover-icon a:hover,.grid-loop article .entry-title a:hover, .grid-loop article .entry-hover .entry-title a:hover,.navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus,.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus,.navbar-nav li:hover a, .navbar-nav li:focus a,.navbar-nav li .dropdown-menu>li>a:hover, .navbar-nav li .dropdown-menu>li>a:focus,.navbar-nav li.mega-menu ul.dropdown-menu li a:hover', 'color', 'general_color');
        self::generate_css('.woocommerce div.product span.price, .woocommerce div.product p.price, .woocommerce #content div.product span.price, .woocommerce #content div.product p.price, .woocommerce-page div.product span.price, .woocommerce-page div.product p.price, .woocommerce-page #content div.product span.price, .woocommerce-page #content div.product p.price,.woocommerce div.product .stock, .woocommerce #content div.product .stock, .woocommerce-page div.product .stock, .woocommerce-page #content div.product .stock', 'color', 'general_color', '', ' !important');
        self::generate_css('.btn-primary, .label-primary,.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus,.dropdown-menu>.active>a, .dropdown-menu>.active>a:hover, .dropdown-menu>.active>a:focus,.progress-bar,.swiper-control-prev, .swiper-control-next,.swiper-pagination-switch.swiper-active-switch,input[type="submit"],input[type="button"],input[type="reset"],.table>thead>tr>td.active, .table>tbody>tr>td.active, .table>tfoot>tr>td.active, .table>thead>tr>th.active, .table>tbody>tr>th.active, .table>tfoot>tr>th.active, .table>thead>tr.active>td, .table>tbody>tr.active>td, .table>tfoot>tr.active>td, .table>thead>tr.active>th, .table>tbody>tr.active>th, .table>tfoot>tr.active>th,.jp-play-bar,.entry-hover .hover-icon a,.pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus,.grid-loop article .entry-hover .meta-like a.liked,.widget ul li a span,.tagcloud a', 'background-color', 'general_color');
        self::generate_css('p.demo_store,.woocommerce span.onsale, .woocommerce-page span.onsale,.woocommerce span.outoffstock, .woocommerce-page span.outoffstock,.woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button, .woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button,.woocommerce .quantity .plus, .woocommerce-page .quantity .plus, .woocommerce #content .quantity .plus, .woocommerce-page #content .quantity .plus, .woocommerce .quantity .minus, .woocommerce-page .quantity .minus, .woocommerce #content .quantity .minus, .woocommerce-page #content .quantity .minus,.chzn-container .chzn-results .highlighted,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle', 'background-color', 'general_color', '', ' !important');
        self::generate_css('blockquote,.btn-primary, .label-primary,.carousel-indicators li,.swiper-pagination-switch,.featured-plan .plan-price, .blox-element.featured-plan, .blox-element.bordered.featured-plan,input[type="submit"],input[type="button"],input[type="reset"],.pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus,.comment.byuser .comment-author img', 'border-color', 'general_color');
        self::generate_css('.woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button, .woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button,.chzn-container .chzn-results .highlighted', 'border-color', 'general_color', '', ' !important');
        self::generate_css('.nav .caret,.nav a:hover .caret', 'border-top-color', 'general_color');
        self::generate_css('.nav .caret,.nav a:hover .caret,.entry-media blockquote .blockquote-line span:before', 'border-bottom-color', 'general_color');

        // Primary hover color
        self::generate_css('a:hover,a:focus,.btn-link:hover,.btn-link:focus,.carousel-control:hover', 'color', 'general_hover_color');
        self::generate_css('.btn-primary:hover,.btn-primary:focus,.btn-primary.active,.carousel-indicators .active,.swiper-container:hover .swiper-control-prev,.swiper-container:hover .swiper-control-next,input[type="submit"]:hover,input[type="button"]:hover,input[type="reset"]:hover,input[type="submit"]:focus,input[type="button"]:focus,input[type="reset"]:focus,.tagcloud a:hover', 'background-color', 'general_hover_color');
        self::generate_css('.btn-primary:hover,.btn-primary:focus,.btn-primary.active,.carousel-indicators .active,input[type="submit"]:hover,input[type="button"]:hover,input[type="reset"]:hover,input[type="submit"]:focus,input[type="button"]:focus,input[type="reset"]:focus', 'border-color', 'general_hover_color');

        // Accent color
        self::generate_css('body,.navbar-inverse .navbar-brand:hover,.navbar-inverse .navbar-brand:focus', 'color', 'accent_color');
        self::generate_css('.btn-default,.label-default,.navbar-inverse .navbar-toggle,.navbar-nav li .dropdown-menu>li>a:hover, .navbar-nav li .dropdown-menu>li>a:focus,.navbar-nav li.mega-menu ul.dropdown-menu li a:hover,#footer .widget ul li a span', 'background-color', 'accent_color');
        self::generate_css('.btn-default,.label-default', 'border-color', 'accent_color');
        self::generate_css('.menu-column', 'border-left-color', 'accent_color');
        self::generate_css('#footer .woocommerce ul.cart_list li,#footer .woocommerce-page ul.cart_list li,#footer .woocommerce ul.product_list_widget li,#footer .woocommerce-page ul.product_list_widget li,#footer .widget_rss ul li,#footer table>thead>tr>th,#footer table>tbody>tr>th,#footer table>tfoot>tr>th,#footer table>thead>tr>td,#footer table>tbody>tr>td,#footer table>tfoot>tr>td', 'border-bottom-color', 'accent_color');

        // Accent hover color
        self::generate_css('.blox-element.bordered.alert,.navbar-inverse a.navbar-brand', 'color', 'accent_hover_color');
        self::generate_css('.btn-default:hover,.btn-default:focus,.btn-default.active,.modal-backdrop,.tooltip-inner,#slider,.blox-element.boxed.alert,.jp-audio-container,.jp-video-container,.format-quote .entry-media,.navbar-nav ul.dropdown-menu,#footer.section', 'background-color', 'accent_hover_color');
        self::generate_css('.btn-default:hover,.btn-default:focus,.btn-default.active,.navbar-inverse .navbar-toggle,.modal-content,.blox-element.bordered.alert,.navbar-nav ul.dropdown-menu', 'border-color', 'accent_hover_color');
        self::generate_css('.tooltip.top .tooltip-arrow,.tooltip.top-left .tooltip-arrow,.tooltip.top-right .tooltip-arrow', 'border-top-color', 'accent_hover_color');
        self::generate_css('.tooltip.right .tooltip-arrow', 'border-right-color', 'accent_hover_color');
        self::generate_css('.tooltip.left .tooltip-arrow', 'border-left-color', 'accent_hover_color');
        self::generate_css('.tooltip.bottom .tooltip-arrow,.tooltip.bottom-left .tooltip-arrow,.tooltip.bottom-right .tooltip-arrow', 'border-bottom-color', 'accent_hover_color');

        // Body
        self::generate_css('body', 'background-color', 'body_bg_color');

        // Border color
        self::generate_css('.img-thumbnail,.nav-tabs,.nav-tabs>li.active>a,.nav-tabs>li.active>a:hover,.nav-tabs>li.active>a:focus,.panel-default,.modal-header,.modal-footer,.blox-element.pricing,.plan-price,.blox-element.divider,table>thead>tr>th,table>tbody>tr>th,table>tfoot>tr>th,table>thead>tr>td,table>tbody>tr>td,table>tfoot>tr>td,.table>thead>tr>th,.table>tbody>tr>th,.table>tfoot>tr>th,.table>thead>tr>td,.table>tbody>tr>td,.table>tfoot>tr>td,.table-bordered,.table-bordered>thead>tr>th,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>tbody>tr>td,.table-bordered>tfoot>tr>td,.pagination>li>a,.pagination>li>span,.pagination>.disabled>span,.pagination>.disabled>span:hover,.pagination>.disabled>span:focus,.pagination>.disabled>a,.pagination>.disabled>a:hover,.pagination>.disabled>a:focus,.grid-loop.bordered article,.grid-loop article .entry-meta,.medium-loop article,.blox-element.bordered,.upsells.products h2,.related.products h2,h3#order_review_heading,h3.related-posts,.woocommerce ul.cart_list li,.woocommerce-page ul.cart_list li,.woocommerce ul.product_list_widget li,.woocommerce-page ul.product_list_widget li,.primary.section .content-title,.item-author,.comment-list > li.comment,.comment-list li.post.pingback,.comment-list > li.comment ul.children li.comment,.comment-title,h3.comment-reply-title,.single-post .page-title.section .single-post-title,.single-portfolio .page-title.section .single-portfolio-title,.portfolio-controls a,.portfolio-controls a:hover,.portfolio-controls a:focus,.widget_rss ul li,.woocommerce #reviews #comments ol.commentlist li .comment-text, .woocommerce-page #reviews #comments ol.commentlist li .comment-text', 'border-color', 'border_color');
        self::generate_css('.woocommerce div.product .woocommerce-tabs ul.tabs:before,.woocommerce-page div.product .woocommerce-tabs ul.tabs:before,.woocommerce #content div.product .woocommerce-tabs ul.tabs:before,.woocommerce-page #content div.product .woocommerce-tabs ul.tabs:before,.woocommerce div.product .woocommerce-tabs ul.tabs li,.woocommerce-page div.product .woocommerce-tabs ul.tabs li,.woocommerce #content div.product .woocommerce-tabs ul.tabs li,.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li,.woocommerce table.shop_attributes .alt td,.woocommerce table.shop_attributes .alt th,.woocommerce-page table.shop_attributes .alt td,.woocommerce-page table.shop_attributes .alt th,.woocommerce table.shop_attributes td,.woocommerce-page table.shop_attributes td,.woocommerce table.shop_attributes th,.woocommerce-page table.shop_attributes th,.woocommerce .quantity input.qty,.woocommerce-page .quantity input.qty,.woocommerce #content .quantity input.qty,.woocommerce-page #content .quantity input.qty,.woocommerce #reviews #comments ol.commentlist li img.avatar,.woocommerce-page #reviews #comments ol.commentlist li img.avatar,.woocommerce table.cart td.actions .coupon .input-text,.woocommerce-page table.cart td.actions .coupon .input-text,.woocommerce #content table.cart td.actions .coupon .input-text,.woocommerce-page #content table.cart td.actions .coupon .input-text', 'border-color', 'border_color', '', ' !important');

        // Top Bar
        self::generate_css('header .top-bar', 'background-color', 'topbar_bg_color');
        self::generate_css('header .top-bar', 'color', 'topbar_text_color');
        self::generate_css('header .top-bar a', 'color', 'topbar_link_color');
        self::generate_css('header .top-bar a:hover, header .top-bar a:focus', 'color', 'topbar_linkhover_color');

        // Header
        self::generate_css('#header', 'background-color', 'header_bg_color');
        self::generate_css('header .navbar-header', 'color', 'header_text_color');
        self::generate_css('header  .navbar-header a', 'color', 'header_link_color');
        self::generate_css('header  .navbar-header a:hover', 'color', 'header_linkhover_color');

        // Navigation
        self::generate_css('.menu-text,.menu-icon,header nav.mainmenu > ul > li > a, .header-search a.search-icon', 'color', 'menu_link_color');
        self::generate_css('ul.navbar-nav>li:hover>a>.menu-text,ul.navbar-nav>li:hover>a>.menu-icon,.header-search a.search-icon:hover', 'color', 'menu_linkhover_color');
        self::generate_css('header nav.mainmenu > ul > li.current-menu-item .menu-text', 'color', 'menu_active_color');
        self::generate_css('.menu-description', 'color', 'menu_desc_color');
        self::generate_css('header nav.mainmenu .navbar-nav li ul.dropdown-menu li a', 'color', 'menu_subtext_color');
        self::generate_css('header nav.mainmenu .navbar-nav li ul.dropdown-menu li a:hover', 'color', 'menu_subtexthover_color');
        self::generate_css('header nav.mainmenu .navbar-nav li ul.dropdown-menu li a.current-menu-item .menu-text', 'color', 'menu_subtextactive_color');

        self::generate_css('.navbar-nav ul.dropdown-menu,.header-search .search-form', 'background-color', 'menu_subbg_color');
        self::generate_css('.navbar-nav ul.dropdown-menu', 'border-color', 'menu_subbg_color');
        self::generate_css('.navbar-nav li .dropdown-menu>li>a:hover, .navbar-nav li .dropdown-menu>li>a:focus,.navbar-nav li.mega-menu ul.dropdown-menu li a:hover,.navbar-nav li.mega-menu ul.dropdown-menu li a:focus', 'background-color', 'menu_subbghover_color');

        self::generate_css('.menu-column h3', 'color', 'menu_megatitle_color');
        self::generate_css('header nav.mainmenu li.mega-menu .menu-column', 'border-color', 'menu_megaline_color');

        // Title
        self::generate_css('.page-title.section', 'background-color', 'title_bg_color');
        self::generate_css('section.page-title', 'color', 'title_text_color', '', ' !important');
        self::generate_css('section.page-title a', 'color', 'title_link_color');
        self::generate_css('section.page-title a:hover', 'color', 'title_linkhover_color');
        
        // Content
        self::generate_css('.section.primary,.single-post .page-title.section,.single-portfolio .page-title.section,.search-form,.section.primary .panel', 'background-color', 'content_bg_color');
        self::generate_css('.woocommerce div.product .woocommerce-tabs ul.tabs li, .woocommerce-page div.product .woocommerce-tabs ul.tabs li', 'background-color', 'content_bg_color', '', ' !important');
        
        self::generate_css('.content,.single-post .page-title.section .single-post-title', 'color', 'content_text_color');
        self::generate_css('.content a,.single-post-title .entry-meta a', 'color', 'content_link_color');
        self::generate_css('.content a:hover,.single-post-title .entry-meta a:hover', 'color', 'content_linkhover_color');
        self::generate_css('.content h1,.single-post-title h1', 'color', 'content_h1_color');
        self::generate_css('.content h2', 'color', 'content_h2_color');
        self::generate_css('.content h3', 'color', 'content_h3_color');
        self::generate_css('.content h4', 'color', 'content_h4_color');
        self::generate_css('.content h5', 'color', 'content_h5_color');
        self::generate_css('.content h6', 'color', 'content_h6_color');

        // Sidebar
        self::generate_css('.sidebar', 'color', 'sidebar_text_color');
        self::generate_css('.sidebar a', 'color', 'sidebar_link_color');
        self::generate_css('.sidebar a:hover,#footer a:focus', 'color', 'sidebar_linkhover_color');
        self::generate_css('.sidebar h3.widget-title', 'color', 'sidebar_title_color');
        self::generate_css('.sidebar .widget ul li', 'border-color', 'sidebar_border_color');

        // Footer
        self::generate_css('#footer.section,#footer.section .search-form', 'background-color', 'footer_bg_color');
        self::generate_css('#footer.section', 'color', 'footer_text_color');
        self::generate_css('#footer a', 'color', 'footer_link_color');
        self::generate_css('#footer a:hover,#footer a:focus', 'color', 'footer_linkhover_color');
        self::generate_css('#footer h3.widget-title', 'color', 'footer_title_color');
        self::generate_css('#footer .widget ul li', 'border-color', 'footer_border_color');

        // Sub Footer
        self::generate_css('.sub-footer', 'background-color', 'subfooter_bg_color');
        self::generate_css('.sub-footer', 'color', 'subfooter_text_color');
        self::generate_css('.sub-footer a', 'color', 'subfooter_link_color');
        self::generate_css('.sub-footer a:hover,.sub-footer a:focus', 'color', 'subfooter_linkhover_color');

        ?>
        </style> 
        <!--/Customizer CSS-->

        <!-- Theme Options Panel -->
<?php
    global $smof_data;

    echo "<style type='text/css'>\n";


    /* Body margin on Attached layout */
    if ((isset($smof_data['body_margin_top']) && $smof_data['body_margin_top'] != '0') && (isset($smof_data['body_margin_bottom']) && $smof_data['body_margin_bottom'] != '0')) {
        echo "@media only screen and (min-width: 1200px) {.layout-wrapper{margin-top:" . $smof_data['body_margin_top'] . "px;margin-bottom:" . $smof_data['body_margin_bottom'] . "px}";
        echo ".admin-bar .layout-wrapper{margin-top:" . ((int)$smof_data['body_margin_top']+32) . "px}\n";
    } else if (isset($smof_data['body_margin_top']) && $smof_data['body_margin_top'] != '0') {
        echo "@media only screen and (min-width: 1200px) {.layout-wrapper{margin-top:" . $smof_data['body_margin_top'] . "px}";
        echo ".admin-bar .layout-wrapper{margin-top:" . ((int)$smof_data['body_margin_top']+32) . "px}\n";
    } else if (isset($smof_data['body_margin_bottom']) && $smof_data['body_margin_bottom'] != '0') {
        echo "@media only screen and (min-width: 1200px) {.layout-wrapper{margin-bottom:" . $smof_data['body_margin_bottom'] . "px}";
    }

    /* STYLES OPTIONS */

    $title_space = $title_bg_color = $title_bg_image = '';
    if (isset($smof_data['title_space_top']) && $smof_data['title_space_top'] != 0)
        $title_space = "padding-top:" . $smof_data['title_space_top'] . "px;";
    if (isset($smof_data['title_space_bottom']) && $smof_data['title_space_bottom'] != 0)
        $title_space .= "padding-bottom:" . $smof_data['title_space_bottom'] . "px;";

    if (isset($smof_data['title_bg_image']) && $smof_data['title_bg_image'] != "") {
        $title_bg_image = "background-image:url('" . $smof_data['title_bg_image'] . "');";
        $title_bg_image .= "background-repeat:" . $smof_data['title_bg_repeat'] . ";";
        $title_bg_image .= "background-position:" . $smof_data['title_bg_position'] . ";";
        $title_bg_image .= "background-attachment:" . $smof_data['title_bg_fixed'] . ";";
    }
    echo ".page-title.section{ $title_space$title_bg_color$title_bg_image }";

    $style = '';
    if (isset($smof_data['bg_image']) && $smof_data['bg_image'] != "") {
        $style .= "background-image:url('" . $smof_data['bg_image'] . "');";
        $style .= "background-repeat:" . $smof_data['bg_repeat'] . ";";
        $style .= "background-position:" . $smof_data['bg_position'] . ";";
        $style .= "background-attachment:" . $smof_data['bg_fixed'] . ";";
     }
     if(isset($smof_data['body_font']['size'])) {
         $style .= "font-size:" . $smof_data['body_font']['size'] . ";";
         $style .= "font-family:" . $smof_data['body_font']['face'] . ";";
     }
     if(isset($smof_data['body_font']['style'])) {
         if($smof_data['body_font']['style'] == 'italic' ||$smof_data['body_font']['style'] == 'bold italic')
             $style .= "font-style:italic;";
         if($smof_data['body_font']['style'] == 'bold' ||$smof_data['body_font']['style'] == 'bold italic')
             $style .= "font-weight:bold;";
     }

    echo "body{ $style }\n";

     /* Logo space */
    $logo_space = '';
    if( isset($smof_data['header_padding_top']) )
        $logo_space = "padding-top:" . $smof_data['header_padding_top'] . "px;";
    if( isset($smof_data['header_padding_bottom']) )
        $logo_space .= "padding-bottom:" . $smof_data['header_padding_bottom'] . "px;";
     echo ".navbar-brand,.navbar-nav>li{ $logo_space }";

     /* Retina logo*/
     if(isset($smof_data['logo_retina']) && $smof_data['logo_retina'] != '') {
          echo '@media only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 13/10), only screen and (min-resolution: 120dpi) {
               #logo .normal{display:none !important;}
               #logo .retina{display:inline !important;}
          }';
     }

    /* Footer */
    if (isset($smof_data['footer_bg_image']) && $smof_data['footer_bg_image'] != "") {
        echo "#footer{background-image:url('" . $smof_data['footer_bg_image'] . "');";
        echo "background-repeat:" . $smof_data['footer_bg_repeat'] . ";";
        echo "background-position:" . $smof_data['footer_bg_position'] . ";";
        echo "background-attachment:" . $smof_data['footer_bg_fixed'] . ";}\n";
    }    
    

    /* FONT STYLES */
    $style = '';
    if(isset($smof_data['menu_font'])) {
         if (isset($smof_data['menu_font']['size']) && $smof_data['menu_font']['size'] != '13px')
             $style .="font-size:" . $smof_data['menu_font']['size'] . ";";
         if (isset($smof_data['menu_font']['face']) && $smof_data['menu_font']['face'] != 'Arial')
             $style .="font-family:" . $smof_data['menu_font']['face'] . ";";
         if(isset($smof_data['menu_font']['style']) && ($smof_data['menu_font']['style'] == 'italic' ||$smof_data['menu_font']['style'] == 'bold italic'))
             $style .= "font-style:italic;";
         if(isset($smof_data['menu_font']['style']) && ($smof_data['menu_font']['style'] == 'bold' ||$smof_data['menu_font']['style'] == 'bold italic'))
             $style .= "font-weight:bold;";

         echo ".menu-text{ $style }";
     }

    // Sub menu
    if (isset($smof_data['menu_sub_font']) && $smof_data['menu_sub_font'] != 12) {
        $style ="font-size:" . $smof_data['menu_sub_font'] . "px;";
        echo ".dropdown-menu .menu-text{ $style }";
    }
    if (isset($smof_data['menu_desc_font']) && $smof_data['menu_desc_font'] != 12) {
        $style ="font-size:" . $smof_data['menu_desc_font'] . "px;";
        echo ".menu-description{ $style }";
    }
    if (isset($smof_data['menu_megatitle_font']) && $smof_data['menu_megatitle_font'] != 12) {
        $style ="font-size:" . $smof_data['menu_megatitle_font'] . "px;";
        echo ".menu-column h3{ $style }";
    }

    if (isset($smof_data['heading1']) && $smof_data['heading1'] != 36)
        echo "section.primary .single-content h1{font-size:" . $smof_data['heading1'] . "px}\n";
    if (isset($smof_data['heading2']) && $smof_data['heading2'] != 30)
        echo "section.primary .single-content h2{font-size:" . $smof_data['heading2'] . "px}\n";
    if (isset($smof_data['heading3']) && $smof_data['heading3'] != 24)
        echo "section.primary .single-content h3{font-size:" . $smof_data['heading3'] . "px}\n";
    if (isset($smof_data['heading4']) && $smof_data['heading4'] != 18)
        echo "section.primary .single-content h4{font-size:" . $smof_data['heading4'] . "px}\n";
    if (isset($smof_data['heading5']) && $smof_data['heading5'] != 14)
        echo "section.primary .single-content h5{font-size:" . $smof_data['heading5'] . "px}\n";
    if (isset($smof_data['heading6']) && $smof_data['heading6'] != 12)
        echo "section.primary .single-content h6{font-size:" . $smof_data['heading6'] . "px}\n";

    if (isset($smof_data['widget_font']) && $smof_data['widget_font'] != 12)
        echo ".sidebar h3.widget-title{font-size:" . $smof_data['widget_font'] . "px}\n";
    
    if (isset($smof_data['footer_widget_font']) && $smof_data['footer_widget_font'] != 12)
        echo "#footer h3.widget-title{font-size:" . $smof_data['footer_widget_font'] . "px}\n";

    /* GOOGLE FONTS */
    if (isset($smof_data['google_font']) && $smof_data['google_font'] == 1) {
        if (isset($smof_data['google_menu']) && $smof_data['google_menu'] != 'default') {
            echo ".menu-text{font-family:'" . $smof_data['google_menu'] . "'}\n";
        }
        if (isset($smof_data['google_heading']) && $smof_data['google_heading'] != 'default') {
            echo "h1,h2,h3,h4,h5,h6{font-family:'" . $smof_data['google_heading'] . "'}\n";
        }
        if (isset($smof_data['google_body']) && $smof_data['google_body'] != 'default') {
            echo "body{font-family:'" . $smof_data['google_body'] . "'}\n";
        }
    }
    /* Hides heart/like from blog post and widget */
    if(isset($smof_data['remove_heart']) && $smof_data['remove_heart'] == 1) {
        echo ".meta_like{display:none!important}";
    }
    /* CUSTOM STYLES */
    if (isset($smof_data['custom_css']) && $smof_data['custom_css'] != '')
        echo $smof_data['custom_css'] . "\n";
    if (isset($smof_data['tablet_css']) && $smof_data['tablet_css'] != '') {
        echo "@media (min-width: 768px) and (max-width: 985px) {";
        echo $smof_data['tablet_css'];
        echo "}\n";
    }
    if (isset($smof_data['wide_phone_css']) && $smof_data['wide_phone_css'] != '') {
        echo "@media (min-width: 480px) and (max-width: 767px) {";
        echo $smof_data['wide_phone_css'];
        echo "}\n";
    }
    if (isset($smof_data['phone_css']) && $smof_data['phone_css'] != '') {
        echo "@media (max-width: 479px) {";
        echo $smof_data['phone_css'];
        echo "}\n";
    }

    echo "</style>\n"; 
    ?>


        <!-- /Theme Options Panel -->
        <?php
    }

    public static function live_preview() {
        wp_enqueue_script(
                'themeton-themecustomizer', // Give the script a unique ID
                get_template_directory_uri() . '/framework/admin-assets/color-options.js', array('jquery', 'customize-preview'), // Define dependencies
                '', // Define a version (optional) 
                true // Specify whether to put in footer (leave this true)
        );
    }

    public static function generate_css($selector, $style, $mod_name, $prefix = '', $postfix = '', $echo = true) {
        $return = '';
        $mod = get_theme_mod($mod_name);
        if (!empty($mod)) {
            $return = sprintf("%s{%s:%s;}", $selector, $style, $prefix . $mod . $postfix);
            if ($echo) {
                echo $return;
            }
        }
        return $return;
    }

}

// Setup the Theme Customizer settings and controls...
add_action('customize_register', array('ThemetonTheme_Customize', 'register'));

// Output custom CSS to live site
add_action('wp_head', array('ThemetonTheme_Customize', 'header_output'));

// Enqueue live preview javascript in Theme Customizer admin screen
add_action('customize_preview_init', array('ThemetonTheme_Customize', 'live_preview'));




/* Reset Color Options */
add_action('wp_ajax_reset_theme_color_options', 'reset_theme_color_options_hook');
add_action('wp_ajax_nopriv_reset_theme_color_options', 'reset_theme_color_options_hook');

function reset_theme_color_options_hook() {
    try {
        
        global $color_options;
        foreach ($color_options as $color_option){
            $items = $color_option['items'];
            foreach ($items as $item){
                remove_theme_mod($item['id']);
            }
        }

        echo "1";
    } catch (Exception $e) {
        echo "-1";
    }
    exit;
}
?>