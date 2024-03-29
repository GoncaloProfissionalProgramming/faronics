<?php

function register_portfolio_type() {
    $labels = array(
        'name' => __('Portfolio', 'sevenstars'),
        'singular_name' => __('Portfolio', 'sevenstars'),
        'edit_item' => __('Edit Portfolio', 'sevenstars'),
        'new_item' => __('New Portfolio', 'sevenstars'),
        'all_items' => __('All Portfolio', 'sevenstars'),
        'view_item' => __('View Portfolio', 'sevenstars'),
        'menu_name' => __('Portfolio Items', 'sevenstars')
    );
    global $smof_data;
    $slug = isset($smof_data['portfolio_slug']) ? $smof_data['portfolio_slug'] : 'portfolio-item';
    $args = array(
        'labels' => $labels,
        'public' => true,
        '_builtin' => false,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => $slug),
        'supports' => array('title', 'editor', 'thumbnail')
    );
    
    call_user_func( implode('_', array('register', 'post', 'type')), 'portfolio', $args);

    $tax = array(
        "hierarchical" => true,
        "label" => __("Categories", 'sevenstars'),
        "singular_label" => __("Portfolio Category", 'sevenstars'),
        "rewrite" => true);

    call_user_func( implode('_', array('register', 'taxonomy')), 'portfolio_entries', 'portfolio', $tax);

    flush_rewrite_rules();
}

add_action('init', 'register_portfolio_type');

function portfolio_edit_columns($columns) {
    $columns = array(
        "cb" => "<input type=\"checkbox\" />",
        "thumbnail column-comments" => "Image",
        "title" => __("Portfolio Title", 'sevenstars'),
        "category" => __("Categories", 'sevenstars'),
        "date" => __("Date", 'sevenstars'),
    );
    return $columns;
}

add_filter('manage_edit-portfolio_columns', 'portfolio_edit_columns');

function portfolio_custom_columns($column) {
    global $post;
    switch ($column) {
        case "thumbnail column-comments":
            if (has_post_thumbnail($post->ID)) {
                echo get_the_post_thumbnail($post->ID, array(45,45));
            }
            break;
        case "category":
            echo get_the_term_list($post->ID, 'portfolio_entries', '', ', ', '');
            break;
        case "team":
            echo get_the_term_list($post->ID, 'position', '', ', ', '');
            break;
        case "testimonial":
            echo get_the_term_list($post->ID, 'testimonials', '', ', ', '');
            break;
    }
}

if( themeton_admin_post_type() == 'portfolio' ){
    add_action("manage_posts_custom_column", "portfolio_custom_columns");
    add_action('admin_enqueue_scripts', 'admin_portfolio_option_render_scripts');
}


function admin_portfolio_option_render_scripts($hook) {
    if (themeton_admin_post_type() != 'portfolio') {
        return;
    }
    wp_enqueue_style('tt_admin_portfolio_option_style', get_template_directory_uri() . '/framework/post-type/portfolio-styles.css');
    wp_enqueue_script('tt_admin_portfolio_option_script', get_template_directory_uri() . '/framework/post-type/portfolio-scripts.js', false, false, true);
}

/* SLIDER VALUES */
global $tt_sidebars;

$tmp_arr = array(
    'portfolio' => array(
        'label' => 'Page Options',
        'post_type' => 'portfolio',
        'items' => array(
            array(
                'type' => 'gallery',
                'name' => 'portfolio_gallery',
                'label' => 'Portfolio Gallery'
            ),
            array(
                'type' => 'video',
                'name' => 'portfolio_video_mp4',
                'label' => 'Portfolio Video (MP4/Youtube/Vimeo video link)'
            ),
            array(
                'type' => 'video',
                'name' => 'portfolio_video_webm',
                'label' => 'Portfolio Video (WEBM)'
            ),
            array(
                'type' => 'checkbox',
                'name' => 'hide_featured_image',
                'label' => 'Hide Featured Image?',
                'default' => '0'
            ),
            array(
                'type' => 'checkbox',
                'name' => 'related_post',
                'label' => 'Related portfolio Enable?',
                'default' => '1'
            ),
            array(
                'type' => 'select',
                'name' => 'slider',
                'label' => 'Top slider',
                'option' => $tt_sliders,
                'desc' => 'Select a slider that you\'ve created on LayerSlider and Revolution Slider. This slider shows up between header and page title.'
            ),
            array(
                'type' => 'thumbs',
                'name' => 'page_layout',
                'label' => 'Page Layout',
                'default' => 'full',
                'option' => array(
                    'full' => ADMIN_DIR . 'assets/images/1col.png',
                    'right' => ADMIN_DIR . 'assets/images/2cr.png',
                    'left' => ADMIN_DIR . 'assets/images/2cl.png'
                ),
                'desc' => 'Select Page Layout (Fullwidth | Right Sidebar | Left Sidebar)'
            )
            
        )
    ),
    'product' => array(
        'label' => 'Product Additional Options',
        'post_type' => 'product',
        'items' => array(
            array(
                'type' => 'thumbs',
                'name' => 'product_layout',
                'label' => 'Product Layout',
                'default' => ( isset($smof_data['product_layout']) ? $smof_data['product_layout'] : 'full' ),
                'option' => array(
                    'full' => ADMIN_DIR . 'assets/images/1col.png',
                    'right' => ADMIN_DIR . 'assets/images/2cr.png',
                    'left' => ADMIN_DIR . 'assets/images/2cl.png'
                ),
                'desc' => 'Select Page Layout (Fullwidth | Right Sidebar | Left Sidebar)'
            )
        )
    )
);

$tt_post_meta = array_merge($tt_post_meta, $tmp_arr);
?>