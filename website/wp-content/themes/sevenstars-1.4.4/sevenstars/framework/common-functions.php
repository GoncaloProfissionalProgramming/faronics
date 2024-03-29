<?php

function fs_get_contents($path){
    
    $host = parse_url($path, PHP_URL_HOST);
    if( !empty( $host ) ){
        $remote_data = wp_remote_get( $path );
        $rdate = array_key_exists('body', $remote_data) ? $remote_data['body'] : '';
        return $rdate;
    }
    else{
        global $wp_filesystem;
        if( empty($wp_filesystem) ){
            require_once ABSPATH . 'wp-admin/includes/file.php';
            WP_Filesystem();
        }
        
        $file_content = $wp_filesystem->get_contents($path);
        return $file_content;
    }
}

function fs_encode($str){
    $encoder = array('base', '64', '_', 'encode');
    $encoder = implode('', $encoder);
    return call_user_func($encoder, $str);
}

function fs_decode($str){
    $encoder = array('base', '64', '_', 'decode');
    $encoder = implode('', $encoder);
    return call_user_func($encoder, $str);
}

function blox_shortcode($shc, $callback){
    call_user_func( implode('', array('add', '_', 'short', 'code')), $shc, $callback);
}

/**
 * You can extend it with new icons. 
 * Please see the icon list from here, http://fortawesome.github.io/Font-Awesome/cheatsheet/
 * And extend following array with name and hex code.
 */
global $tt_social_icons;
$tt_social_icons = array(
    'facebook' => 'fa-facebook',
    'twitter' => 'fa-twitter',
    'googleplus' => 'fa-google-plus',
    'email' => 'fa-envelope',
    'pinterest' => 'fa-pinterest',
    'linkedin' => 'fa-linkedin',
    'youtube' => 'fa-youtube',
    'vimeo' => 'fa-vimeo-square',
    'dribbble' => 'fa-dribbble',
    'instagram' => 'fa-instagram',
    'flickr' => 'fa-flickr',
    'skype' => 'fa-skype'
);


add_action('admin_enqueue_scripts', 'admin_common_render_scripts');

function admin_common_render_scripts() {
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_style('themeton-admin-common-style', get_template_directory_uri() . '/framework/admin-assets/common.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('wp-color-picker');
    wp_enqueue_script('themeton-admin-common-js', get_template_directory_uri() . '/framework/admin-assets/common.js', false, false, true);
}


/* Validate URL
========================================================*/
function validateURL($url){
    return filter_var($url, FILTER_VALIDATE_URL);

    if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)){
        return false;
    }
    return true;
}


/**
 * The function returns brightness value from 0 to 255
 */
function get_brightness($hex) {
    $hex = str_replace('#', '', $hex);

    if (strlen($hex) < 6) {
        $hex = substr($hex, 0, 1) . substr($hex, 0, 1) .
                substr($hex, 1, 2) . substr($hex, 1, 2) .
                substr($hex, 2, 3) . substr($hex, 2, 3);
    }

    $c_r = hexdec(substr($hex, 0, 2));
    $c_g = hexdec(substr($hex, 2, 2));
    $c_b = hexdec(substr($hex, 4, 2));

    return (($c_r * 299) + ($c_g * 587) + ($c_b * 114)) / 1000;
}


function themeton_admin_post_type() {
    global $post, $typenow, $current_screen;

    // Check to see if a post object exists
    if ($post && $post->post_type)
        return $post->post_type;

    // Check if the current type is set
    elseif ($typenow)
        return $typenow;

    // Check to see if the current screen is set
    elseif ($current_screen && $current_screen->post_type)
        return $current_screen->post_type;

    // Finally make a last ditch effort to check the URL query for type
    elseif (isset($_REQUEST['post_type']))
        return sanitize_key($_REQUEST['post_type']);
 
    return '-1';
}

function tt_getmeta($meta, $post_id = NULL) {
    global $post;
    if ($post_id != NULL && (int) $post_id > 0) {
        return get_post_meta($post_id, '_' . $meta, true);
    } else if (isset($post->ID)) {
        return get_post_meta($post->ID, '_' . $meta, true);
    }
    return '';
}


function get_post_like($post_id){
    return '<a href="javascript:;" data-pid="'. $post_id .'" class="'. blox_post_liked($post_id) .'"><i class="glyphicon glyphicon-heart"></i> <span>'. (int)blox_getmeta($post_id, 'post_like') .'</span></a>';
}


function get_external_sliders($type){
    global $wpdb;
    $sliders = array();

    if( $type == 'layerslider' ){
        /* SLIDER VALUES */
        $table_name = $wpdb->prefix . "layerslider";
        if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
            
        } else {
            $layer_sliders = $wpdb->get_results("SELECT id, name FROM $table_name
                                            WHERE flag_hidden = '0' AND flag_deleted = '0'
                                            ORDER BY date_c ASC LIMIT 100");
        }
        // Layer slider list
        if (!empty($layer_sliders)) {
            foreach ($layer_sliders as $key => $item) {
                $name = empty($item->name) ? ('Unnamed(' . $item->id . ')') : $item->name;
                $sliders = array_merge($sliders, array("layerslider_" . $item->id => "LayerSlider - " . $name));
            }
        }
    }
    else if( $type == 'revslider' ){
        // Revolution slider list
        $table_name_rev = $wpdb->prefix . "revslider_sliders";
        if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_rev'") != $table_name_rev) {
            
        } else {
            $rev_sliders = $wpdb->get_results("SELECT id, title, alias FROM $table_name_rev");
            if (!empty($rev_sliders)) {
                foreach ($rev_sliders as $key => $item) {
                    $name = empty($item->title) ? ('Unnamed(' . $item->id . ')') : $item->title;
                    $sliders = array_merge($sliders, array("revslider_" . $item->alias => "Revolution Slider - " . $name));
                }
            }
        }
    }

    return $sliders;
}


function tt_site_logo() {
    global $smof_data;
    
    echo '<div id="logo" class="navbar-brand">';
    if ( isset($smof_data['logo']) && $smof_data['logo'] != '') {
        echo "<a href=" . home_url() . "><img src='" . $smof_data['logo'] . "' alt='" . get_bloginfo('name') . "' class='normal'/>";

        // Retina logo
        if(isset($smof_data['logo_retina']) && $smof_data['logo_retina'] !='' ) {
            if(isset($smof_data['logo_retina_width']) && isset($smof_data['logo_retina_height'])) {
                        $pixels ="";
                if(is_numeric($smof_data['logo_retina_width']) && is_numeric($smof_data['logo_retina_height'])){
                    $pixels ="px";
                }
                echo '<img src="'. $smof_data["logo_retina"].'" alt="'.get_bloginfo('name').'" style="width:'. $smof_data["logo_retina_width"].$pixels.';max-height:'. $smof_data["logo_retina_height"].$pixels.'; height: auto !important" class="retina" />';
            }
        }
        echo "</a>";
    } else {
       echo "<h1 class='navbar-brand'><a href=" . home_url() . ">" . get_bloginfo('name') . "</a></h1>";
    }
    echo '</div>';
}

/*
 * Favicon and Touch Icons
 */

function tt_icons() {
    global $smof_data;

    /*
     * Favicon
     */
    $url = get_template_directory_uri() . "/images/favicon.png";
    if ( isset($smof_data['icon_favicon']) && $smof_data['icon_favicon'])
        $url = $smof_data['icon_favicon'];
    echo "<link rel='shortcut icon' href='$url'/>";

    /*
     * Apple Devices Touch Icons
     */
    if (isset($smof_data['icon_iphone']) && $smof_data['icon_iphone'])
        echo '<link rel="apple-touch-icon" href="' . $smof_data['icon_iphone'] . '">';
    if (isset($smof_data['icon_iphone_retina']) && $smof_data['icon_iphone_retina'])
        echo '<link rel="apple-touch-icon" sizes="114x114" href="' . $smof_data['icon_iphone_retina'] . '">';
    if (isset($smof_data['icon_ipad']) && $smof_data['icon_ipad'])
        echo '<link rel="apple-touch-icon" sizes="72x72" href="' . $smof_data['icon_ipad'] . '">';
    if (isset($smof_data['icon_ipad_retina']) && $smof_data['icon_ipad_retina'])
        echo '<link rel="apple-touch-icon" sizes="144x144" href="' . $smof_data['icon_ipad_retina'] . '">';
}

/*
 * Site Tracking Code
 */

function tt_trackingcode() {
    global $smof_data;
    if ( isset($smof_data['site_analytics']) && $smof_data['site_analytics']!='') {
        echo $smof_data['site_analytics'];
    }
}

function add_video_radio($embed) {
    if (strstr($embed, 'http://www.youtube.com/embed/')) {
        return str_replace('?fs=1', '?fs=1&rel=0', $embed);
    } else {
        return $embed;
    }
}

add_filter('oembed_result', 'add_video_radio', 1, true);

if (!function_exists('custom_upload_mimes')) {
    add_filter('upload_mimes', 'custom_upload_mimes');

    function custom_upload_mimes($existing_mimes = array()) {
        $existing_mimes['ico'] = "image/x-icon";
        return $existing_mimes;
    }

}


if (!function_exists('format_class')) {

    // Returns post format class by string
    function format_class($post_id) {
        $format = get_post_format($post_id);
        if ($format === false)
            $format = 'standard';
        return 'format_' . $format;
    }
}


/**
 * Comment Count Number
 * @return html 
 */
function comment_count_text() {
    $comment_count = get_comments_number('0', '1', '%');
    $comment_text = $comment_count . ' ' . __('Comments', 'sevenstars');
    if( (int)$comment_count == 1 ){
        $comment_text = $comment_count . ' ' . __('Comment', 'sevenstars');
    }
    else if( (int)$comment_count < 1 ){
        $comment_text = __('No Comment', 'sevenstars');
    }
    return "<a href='" . get_comments_link() . "' title='" . $comment_text . "'> " . $comment_text . "</a>";
}

function comment_count() {
    $comment_count = get_comments_number('0', '1', '%');
    $comment_trans = '<i class="glyphicon glyphicon-comment"></i> ' . $comment_count;
    return "<a href='" . get_comments_link() . "' title='" . $comment_trans . "'> " . $comment_trans . "</a>";
}

/**
 * Returns Author link
 * @return html
 */
function get_author_posts_link() {
    $output = '';
    ob_start();
    the_author_posts_link();
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}






/**
 * This code filters the Categories archive widget to include the post count inside the link
 */
add_filter('wp_list_categories', 'cat_count_span');

function cat_count_span($links) {
    $links = str_replace('</a> (', ' <span>', $links);
    $links = str_replace('<span class="count">(', '<span>', $links);
    $links = str_replace(')', '</span></a>', $links);
    return $links;
}

/**
 * This code filters the Archive widget to include the post count inside the link
 */
add_filter('get_archives_link', 'archive_count_span');

function archive_count_span($links) {
    $links = str_replace('</a>&nbsp;(', ' <span>', $links);
    $links = str_replace(')</li>', '</span></a></li>', $links);
    return $links;
}

/**
 * Prints social links on top bar & sub footer area
 * @global array $tt_social_icons
 * @param type $footer : Sign of footer layout
 */
function social_links_by_icon($footer = false) {
    global $tt_social_icons, $smof_data;
    $sign = false;
    $pref = 'social_';
    if ($footer)
        $pref = 'footer_' . $pref;
    $result = '<ul class="top-bar-list list-inline">';
    foreach ($tt_social_icons as $key => $hex) {
        if (isset($smof_data[$pref . $key]) && $smof_data[$pref . $key] != '') {
            $url = $smof_data[$pref . $key];
            if ($key != 'email' && $key != 'skype') {
                if (!preg_match_all('!https?://[\S]+!', $url, $matches))
                    $url = "http://" . $url;
            } elseif ($key == 'skype') {
                $url = $url;
            } else {
                $url = 'mailto:' . $url . '?subject=' . get_bloginfo('name') . '&amp;body='.__('Your%20message%20here!', 'sevenstars');
            }
            $result .= '<li><a class="social-link ' . $key . '" href="' . $url . '" target="_blank"><i class="fa ' . $hex . '"></i></a></li>';
            $sign = true;
        }
    }
    $result .= '</ul>';
    echo $sign ? $result : __('Please add your socials on Theme Options.', 'sevenstars');
}

/**
 * Prints Top Bar content
 * @param type $type : Menu type
 * @param type $position : Right or Left
 */
function tt_bar_content($bar_content = 'text1', $footer = false) {
    global $smof_data;

    $splitedValues = explode(',', trim($bar_content));

    foreach ($splitedValues as $value) {

        $type = trim($value);

        $pref = 'top_';
        if($footer) {
            $pref = 'footer_';
        }
        
        if ($type == 'social') {
            ob_start();
            social_links_by_icon($footer);
            $result = ob_get_clean();
            echo '<div class="topbar-item">'. $result .'</div>';
        }
        elseif ($type == 'shop') {
            global $woocommerce;
            if (isset($woocommerce->cart)) {
                $cart = $woocommerce->cart;

                // Get mini cart
                ob_start();
                woocommerce_mini_cart();
                $mini_cart = ob_get_clean();

                echo '<div class="woocommerce-shcart woocommerce topbar-item hidden-sm hidden-xs">
                        <div class="shcart-display">
                            <i class="fa-shopping-cart"></i>'. __('Cart', 'sevenstars') .'
                            <span class="total-cart">'. $cart->cart_contents_count .'</span>
                        </div>
                        <div class="shcart-content">
                            <div class="widget_shopping_cart_content">' . $mini_cart . '</div>
                        </div>
                      </div>';
            }
            else{
                echo '<div class="topbar-item">'. __('Please install Woocommerce.', 'sevenstars') .'</div>';;
            }
        }
        elseif ($type == 'lang') {
            global $wp_filter;
            if( isset($wp_filter['icl_language_selector']) ){
                ob_start();
                do_action('icl_language_selector');
                $result = ob_get_clean();
                echo '<div class="topbar-item">'. $result .'</div>';
            }
            else{
                echo '<div class="topbar-item">'. __('Please install WPML.', 'sevenstars') .'</div>';;
            }
        }
        elseif ($type == 'menu') {
            ob_start();
            wp_nav_menu(array('theme_location' => $pref.'bar-menu', 'fallback_cb' => '', 'depth'=>1, 'menu_class'=>'list-inline'));
            $result = ob_get_clean();
            echo '<div class="topbar-item">'. $result .'</div>';
        }
        elseif ($type == 'text1' || $type == 'text2') {
            if (isset($smof_data[$pref.'bar_'.$type])) {
                $result = '<span class="bar-text">'. do_shortcode($smof_data[$pref.'bar_'.$type]) .'</span>';
                echo '<div class="topbar-item">'. $result .'</div>';
            }
        }
        else if( $type=='login' ){
            $link = get_edit_user_link();
            $text = __('Login / Register', 'sevenstars');

            if( function_exists('is_shop') ){
                $link = get_permalink( get_option('woocommerce_myaccount_page_id') );
            }
            else if( !is_user_logged_in() ){
                $link = wp_login_url();
            }

            if( is_user_logged_in() ){
                $text = __('My Account', 'sevenstars');
            }
            $result = '<div class="topbar-item login-item">
                            <a href="'. $link .'">'. $text .'</a>
                       </div>';
            echo $result;
        }
    }

}



if (!function_exists('tt_comment_form')) :

    function tt_comment_form($fields) {
        global $id, $post_id;
        if (null === $post_id)
            $post_id = $id;
        else
            $id = $post_id;

        $commenter = wp_get_current_commenter();

        $req = get_option('require_name_email');
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $fields = array(
            'author' => '<p class="comment-form-author">' . '<label for="author">' . __('Name', 'sevenstars') . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
            '<input placeholder="' . __('Name', 'sevenstars') . '" id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></p>',
            'email' => '<p class="comment-form-email"><label for="email">' . __('Email', 'sevenstars') . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
            '<input placeholder="' . __('Email', 'sevenstars') . '" id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></p>',
            'url' => '<p class="comment-form-url"><label for="url">' . __('Website', 'sevenstars') . '</label>' .
            '<input placeholder="' . __('Website', 'sevenstars') . '" id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></p>',
        );
        return $fields;
    }
    add_filter('comment_form_default_fields', 'tt_comment_form');
endif;



if (!function_exists('about_author')) {
    
    function about_author() {
        ?>
        <div class="item-author clearfix">
            <?php
            $author_email = get_the_author_meta('email');
            echo get_avatar($author_email, $size = '60');
            ?>
            <h3><?php _e("Written by ", 'sevenstars'); ?><?php if (is_author()) the_author(); else the_author_posts_link(); ?></h3>
            <div class="author-title-line"></div>
            <p>
                <?php
                $description = get_the_author_meta('description');
                if ($description != '')
                    echo $description;
                else
                    _e('The author didnt add any Information to his profile yet', 'sevenstars');
                ?>
            </p>
        </div>
        <?php
    }

}

if (!function_exists('social_share')) {

    /**
     * Prints Social Share Options
     * @global array $tt_social_icons
     * @global type $post : Current post
     */
    function social_share() {
        global $smof_data, $tt_social_icons, $post;
        
        echo '<span class="sf_text">' . __('Share', 'sevenstars') . ': </span>';
        echo '<ul class="post_share list-inline">';
        if (isset($smof_data['share_buttons']['facebook']) && $smof_data['share_buttons']['facebook'] == 1) {
            echo '<li><a href="https://www.facebook.com/sharer/sharer.php?u=' . get_permalink() . '" title="Facebook" target="_blank"><i class="fa ' . $tt_social_icons['facebook'] . '"></i></a></li>';
        }
        if (isset($smof_data['share_buttons']['twitter']) && $smof_data['share_buttons']['twitter'] == 1) {
            echo '<li><a href="https://twitter.com/share?url=' . get_permalink() . '" title="Twitter" target="_blank"><i class="fa ' . $tt_social_icons['twitter'] . '"></i></a></li>';
        }
        if (isset($smof_data['share_buttons']['googleplus']) && $smof_data['share_buttons']['googleplus'] == 1) {
            echo '<li><a href="https://plus.google.com/share?url='.get_permalink().'" title="GooglePlus" target="_blank"><i class="fa ' . $tt_social_icons['googleplus'] . '"></i></a></li>';
        }
        if (isset($smof_data['share_buttons']['pinterest']) && $smof_data['share_buttons']['pinterest'] == 1) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
            echo '<li><a href="//pinterest.com/pin/create/button/?url=' . get_permalink() . '&media=' . $image[0] . '&description=' . get_the_title() . '" title="Pinterest" target="_blank"><i class="fa ' . $tt_social_icons['pinterest'] . '"></i></a></li>';
        }
        if (isset($smof_data['share_buttons']['email']) && $smof_data['share_buttons']['email'] == 1) {
            echo '<li><a href="mailto:?subject=' . get_the_title() . '&body=' . strip_tags(get_the_excerpt()) . get_permalink() . '" title="Email" target="_blank"><i class="fa ' . $tt_social_icons['email'] . '"></i></a></li>';
        }
        echo '</ul>';

    }

}

/**
 * Prints Related Posts
 * @global type $post : Current post
 */
function tt_related_posts( $options=array() ) {
    
    $options = array_merge(array(
                    'per_page'=>'3'
                    ),
                    $options);

    global $post, $smof_data;

    $args = array(
        'post__not_in' => array($post->ID),
        'posts_per_page' => $options['per_page']
    );
    $grid_class = 'col-md-4 col-sm-6 col-xs-12';
    $post_type_class = 'blog';

    $categories = get_the_category($post->ID);
    if ($categories) {
        $category_ids = array();
        foreach ($categories as $individual_category) {
            $category_ids[] = $individual_category->term_id;
        }
        $args['category__in'] = $category_ids;
    }

    // For portfolio post and another than Post
    if($post->post_type != 'post') {
        $tax_name = 'portfolio_entries'; //should change it to dynamic and for any custom post types
        $args['post_type'] =  get_post_type(get_the_ID());
        $args['tax_query'] = array(
            array(
                'taxonomy' => $tax_name,
                'field' => 'id',
                'terms' => wp_get_post_terms($post->ID, $tax_name, array('fields'=>'ids'))
            )
        );
        if( $options['per_page']=='4' ) {
            $grid_class = 'col-md-3 col-sm-6 col-xs-12';
        }
        $post_type_class = 'portfolio';
    }

    if(isset($args)) {
        $my_query = new wp_query($args);
        if ($my_query->have_posts()) {

            $html = '';
            while ($my_query->have_posts()) {
                $my_query->the_post();

                $html .= '<div class="'.$grid_class.' loop-item">
                                <article itemscope="" itemtype="http://schema.org/BlogPosting" class="entry">
                                    '. hover_featured_image(array('overlay'=>'permalink')) .'

                                    <div class="relative">
                                        <div class="entry-title">
                                            <h2 itemprop="headline">
                                                <a itemprop="url" href="'. get_permalink() .'">'.get_the_title().'</a>
                                            </h2>
                                        </div>
                                        <ul class="entry-meta list-inline">
                                            <li itemprop="datePublished" class="meta-date">'. date_i18n(get_option('date_format'), strtotime(get_the_date())) .'</li>
                                            <li class="meta-like">'. get_post_like(get_the_ID()) .'</li>
                                        </ul>
                                    </div>
                                </article>
                            </div>';
            }

            echo '<div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 class="related-posts">' . __('Related Posts', 'sevenstars') . '</h3>
                        <div class="blox-element related-posts '.$post_type_class.' grid-loop">
                            <div class="row">
                                <div class="loop-container">'. $html .'</div>
                            </div>
                        </div>
                    </div>
                  </div>';
        }
    }
    wp_reset_query();
}

// ADDING ADMIN BAR MENU
if (!function_exists('tt_admin_bar_menu')) {
    add_action('admin_bar_menu', 'tt_admin_bar_menu', 90);

    function tt_admin_bar_menu() {

        if (!current_user_can('manage_options'))
            return;

        global $wp_admin_bar;

        $admin_url = admin_url('admin.php');

        $options = array(
            'id' => 'theme-options',
            'title' => __('Theme Options', 'sevenstars'),
            'href' => $admin_url . "?page=theme-options",
        );
        $wp_admin_bar->add_menu($options);

        $color = array(
            'id' => 'color-options',
            'title' => __('Color Options', 'sevenstars'),
            'href' => admin_url() . "customize.php",
        );
        $wp_admin_bar->add_menu($color);
    }

}


/**
 * Prints Custom Logo Image for Login Page
 */
function custom_login_logo() {
    global $smof_data;
    if ($smof_data['logo_admin'] != '') {
        echo '<style type="text/css">.login h1 a { background: url(' . $smof_data['logo_admin'] . ') center center no-repeat !important;width: auto !important;}</style>';
    }
}

add_action('login_head', 'custom_login_logo');


/*
 * Random order
 * Preventing duplication of post on paged
 */

if(!is_admin() && true) {
    if(!isset($_SESSION)){session_start();}
    //add_filter('posts_orderby', 'edit_posts_orderby');

    function edit_posts_orderby($orderby_statement) {
        if(!isset($_SESSION)){session_start();}
        if (isset($_SESSION['expiretime'])) {
            if ($_SESSION['expiretime'] < time()) {
                session_unset();
            }
        } else {
            $_SESSION['expiretime'] = time() + 300;
        }

        $seed = rand();
        if (isset($_SESSION['seed'])) {
            $seed = $_SESSION['seed'];
        } else {
            $_SESSION['seed'] = $seed;
        }
        $orderby_statement = 'RAND(' . $seed . ')';
        return $orderby_statement;
    }
}



/* Pager functions
====================================================*/
if (!function_exists('themeton_pager')) :

    function themeton_pager($query = null) {
        global $wp_query;
        $current_query = $query!=null ? $query : $wp_query;
        $pages = (int)$current_query->max_num_pages;
        $paged = get_query_var('paged') ? (int)get_query_var('paged') : 1;
        if (is_front_page()){
            $paged = get_query_var('page') ? (int)get_query_var('page') : $paged;
        }

        if (empty($pages)) {
            $pages = 1;
        }

        if ( $pages!=1 ) {
            if ($paged > 1) {
                $prevlink = get_pagenum_link($paged - 1);
            }
            if ($paged < $pages) {
                $nextlink = get_pagenum_link($paged + 1);
            }


            $big = 9999; // need an unlikely integer
            echo "<div class='row'><div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'><div class='pagination-container clearfix'>";

            $args = array(
                'current' => 0,
                'show_all' => false,
                'prev_next' => true,
                'add_args' => false, // array of query args to add
                'add_fragment' => '',
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'end_size' => 3,
                'mid_size' => 1,
                'format' => '?paged=%#%',
                'current' => max(1, $paged),
                'total' => $current_query->max_num_pages,
                'type' => 'list',
                'prev_text' => '<i class="icon-arrow-left"></i>',
                'next_text' => '<i class="icon-arrow-right"></i>',
            );

            extract($args, EXTR_SKIP);

            // Who knows what else people pass in $args
            $total = (int) $total;
            if ($total < 2)
                return;
            $current = (int) $current;
            $end_size = 0 < (int) $end_size ? (int) $end_size : 1; // Out of bounds?  Make it the default.
            $mid_size = 0 <= (int) $mid_size ? (int) $mid_size : 2;
            $add_args = is_array($add_args) ? $add_args : false;
            $r = '';
            $page_links = array();
            $next_link = '<li class="disabled"><a href="#">'. __('Prev', 'sevenstars') .'</a></li>';
            $prev_link = '<li class="disabled"><a href="#">'. __('Next', 'sevenstars') .'</a></li>';
            $n = 0;
            $dots = false;

            // Next link
            if ($prev_next && $current && 1 < $current) :
                $link = str_replace('%_%', 2 == $current ? '' : $format, $base);
                $link = str_replace('%#%', $current - 1, $link);
                if ($add_args)
                    $link = add_query_arg($add_args, $link);
                $link .= $add_fragment;
                $next_link = '<li><a href="'. esc_url(apply_filters('paginate_links', $link)) .'">'. __('Prev', 'sevenstars') .'</a></li>';
            endif;

            // Pager links
            for ($n = 1; $n <= $total; $n++) :
                $n_display = number_format_i18n($n);
                if ($n == $current) :
                    $page_links[] = "<li class='active'><a href='#'>$n_display <span class='sr-only'>(current)</span></a></li>";
                    $dots = true;
                else :
                    if ($show_all || ( $n <= $end_size || ( $current && $n >= $current - $mid_size && $n <= $current + $mid_size ) || $n > $total - $end_size )) :
                        $link = str_replace('%_%', 1 == $n ? '' : $format, $base);
                        $link = str_replace('%#%', $n, $link);
                        if ($add_args)
                            $link = add_query_arg($add_args, $link);
                        $link .= $add_fragment;
                        $page_links[] = "<li><a href='" . esc_url(apply_filters('paginate_links', $link)) . "'>$n_display</a></li>";
                        $dots = true;
                    elseif ($dots && !$show_all) :
                        $page_links[] = '<li><span class="page-numbers dots">&hellip;</span></li>';
                        $dots = false;
                    endif;
                endif;
            endfor;

            // Prev links
            if ($prev_next && $current && ( $current < $total || -1 == $total )) :
                $link = str_replace('%_%', $format, $base);
                $link = str_replace('%#%', $current + 1, $link);
                if ($add_args)
                    $link = add_query_arg($add_args, $link);
                $link .= $add_fragment;
                $prev_link = '<li><a href="'. esc_url(apply_filters('paginate_links', $link)) .'">'. __('Next', 'sevenstars') .'</a></li>';
            endif;

            $r .= "<ul class='pagination pull-left'>";
            $r .= join("\n\t", $page_links);
            $r .= "</ul>\n";
            $r .= '<ul class="pagination pull-right">
                    '. $next_link .'
                    '. $prev_link .'
                 </ul>
                 <div class="clearfix"></div>';
            echo $r;
            echo "</div></div></div>";
        }
    }

endif;



if ( ! function_exists( 'themeton_theme_comment' ) ) :
	
function themeton_theme_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e('Pingback:', 'sevenstars'); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('Edit', 'sevenstars'), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 68;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 39;

						echo get_avatar( $comment, $avatar_size );

						/* translators: 1: comment author, 2: date and time */
						printf( __('%1$s on %2$s <span class="says">said:</span>', 'sevenstars'),
							sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
							sprintf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __('%1$s at %2$s', 'sevenstars'), get_comment_date(), get_comment_time() )
							)
						);
					?>

					<?php edit_comment_link( __('Edit', 'sevenstars'), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'sevenstars'); ?></em>
					<br />
				<?php endif; ?>

			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __('Reply <span>&darr;</span>', 'sevenstars'), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif;

// Search form customizing

function tt_search_form( $form ) {
    $form = '<div class="search-form">
                <form method="get" id="searchform" action="'.esc_url( home_url( '/' ) ).'">
                    <div class="input-group">
                        <input type="text" class="form-control" name="s" placeholder="'. __('Type & Enter ...', 'sevenstars'). '">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">'. __('Go!', 'sevenstars'). '</button>
                        </span>
                    </div>
                </form>
            </div>';

    return $form;
}
function tt_product_search_form( $form ) {
    $form = '<div class="search-form">
                <form method="get" id="searchform" action="'.esc_url( home_url( '/' ) ).'">
                    <div class="input-group">
                        <input type="text" class="form-control" name="s" placeholder="'. __('Search for products ...', 'sevenstars'). '">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">'. __('Go!', 'sevenstars'). '</button>
                        </span>
                    </div>
                    <input type="hidden" name="post_type" value="product" />
                </form>
            </div>';

    return $form;
}

add_filter( 'get_search_form', 'tt_search_form' );
add_filter( 'get_product_search_form', 'tt_product_search_form' );