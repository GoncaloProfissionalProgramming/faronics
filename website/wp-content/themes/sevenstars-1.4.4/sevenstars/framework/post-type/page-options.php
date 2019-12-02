<?php

add_action('admin_enqueue_scripts', 'admin_page_option_render_scripts');

function admin_page_option_render_scripts($hook) {
    if (themeton_admin_post_type() != 'page') {
        return;
    }
    wp_enqueue_style('tt_admin_page_option_style', get_template_directory_uri() . '/framework/post-type/page-styles.css');
    wp_enqueue_script('jquery-ui-sortable');
    wp_enqueue_script('tt_admin_page_option_script', get_template_directory_uri() . '/framework/post-type/page-scripts.js', false, false, true);
}

global $smof_data, $tt_sidebars, $tt_sliders;


/* set external sliders
=======================================*/
$tt_sliders = array("none" => 'No slider');
$tt_sliders = array_merge($tt_sliders, get_external_sliders('layerslider'));
$tt_sliders = array_merge($tt_sliders, get_external_sliders('revslider'));


$url = ADMIN_IMAGES;
$tmp_arr = array(
    'onepage' => array(
        'label' => 'One Page Options',
        'post_type' => 'page',
        'items' => array(
            array(
                'name' => 'onepages',
                'type' => 'onepage',
                'label' => 'Pages for One Page Template',
                'desc' => 'Build page with Multi pages',
                'default' => '',
            ),
            array(
                'name' => 'onepages_names',
                'type' => 'text',
                'label' => 'Pages Names',
                'default' => '',
            ),
            array(
                'name' => 'onepages_links',
                'type' => 'text',
                'label' => 'Pages Links',
                'default' => '',
            ),
            array(
                'name' => 'onepage_menu',
                'type' => 'checkbox',
                'label' => 'Use One Page Menu',
                'desc' => 'If you check this option, current pages menu would be selected pages titles.'
            )
        )
    ),
    'page' => array(
        'label' => 'Page Options',
        'post_type' => 'page',
        'items' => array(
            array(
                'name' => 'slider',
                'type' => 'select',
                'label' => 'Top slider',
                'option' => $tt_sliders,
                'desc' => 'Select a slider that you\'ve created on LayerSlider and Revolution Slider. This slider shows up between header and page title.'
            ),
            array(
                'type' => 'checkbox',
                'name' => 'slider_top',
                'label' => 'Slider at the top of Page',
                'default' => '0',
                'desc' => 'If you wanna show fullscreen slider, hope you like this option.'
            ),
            array(
                'type' => 'checkbox',
                'name' => 'hide_topbar',
                'label' => 'Hide top bar',
                'default' => '0',
                'desc' => 'If you wanna hide top bar when Topbar enabled in theme option.'
            ),
            array(
                'name' => 'page_layout',
                'type' => 'thumbs',
                'label' => 'Page Layout',
                'default' => 'full',
                'option' => array(
                    'full' => ADMIN_DIR . 'assets/images/1col.png',
                    'right' => ADMIN_DIR . 'assets/images/2cr.png',
                    'left' => ADMIN_DIR . 'assets/images/2cl.png'
                ),
                'desc' => 'Select Page Layout (Fullwidth | Right Sidebar | Left Sidebar)'
            ),
            array(
                'name' => 'sidebar',
                'type' => 'select',
                'label' => 'Page Sidebar',
                'default' => 'page-sidebar',
                'option' => $tt_sidebars,
                'desc' => 'You should select a sidebar If you\'ve chosen page layout with sidebar. And if you need an unique sidebar for this page, you have to create new one on Theme Options => <b>Custom Sidebar</b> and then add your Appearence => <b>Widgets</b>. Later on select it here.'
            ),
            

            array(
                'type' => 'checkbox',
                'name' => 'title_show',
                'label' => 'Title (show/hide)',
                'default' => '1'
            ),
            /* Start title options group
            ===================================*/
            array(
                'type' => 'start_group',
                'name' => 'title_options',
                'visible' => true
            ),
            array(
                'type' => 'select',
                'name' => 'title_align',
                'label' => 'Title align',
                'default' => 'left',
                'option' => array(
                    'left' => 'Left',
                    'center' => 'Center',
                    'right' => 'Right'
                ),
                'desc' => 'Title alignment'
            ),
            array(
                'name' => 'title_padding',
                'type' => 'number',
                'label' => 'Title Spacing from Top',
                'default' => isset($smof_data['title_space_top']) ? $smof_data['title_space_top'] : '80',
                'desc' => 'Page Title Sections padding-top size'
            ),
            array(
                'name' => 'title_padding_bottom',
                'type' => 'number',
                'label' => 'Title Spacing from Bottom',
                'default' => isset($smof_data['title_space_bottom']) ? $smof_data['title_space_bottom'] : '80',
                'desc' => 'Page Title Sections padding-bottom size'
            ),
            array(
                'name' => 'teaser',
                'type' => 'textarea',
                'label' => 'Teaser text',
                'default' => '',
                'desc' => 'Add description text which shows up at bottom of Page Title.'
            ),
            array(
                'type' => 'checkbox',
                'name' => 'title_color',
                'label' => 'Title text invert color ?',
                'default' => '0',
                'desc' => 'If this option not active, text color is default color'
            ),
            array(
                'type' => 'colorpicker',
                'name' => 'title_bg_color',
                'label' => 'Title background color',
                'default' => get_theme_mod('title_bg_color'),
                'desc' => 'Page Title Section Background Color'
            ),
            array(
                'type' => 'background',
                'name' => 'title_bg',
                'label' => 'Title Background Image',
                'default' => '',
                'desc' => 'If you want to show your title area beautiful, this option exactly you need.'
            ),
            array(
                'type' => 'colorpicker',
                'name' => 'title_overlay_color',
                'label' => 'Overlay Color',
                'default' => '',
                'desc' => 'It needs when use background image'
            ),
            array(
                'name' => 'title_overlay_opacity',
                'type' => 'text',
                'label' => 'Overlay Opacity',
                'default' => '',
                'desc' => 'Overlay opacity value: [0, 0.1, ..1]'
            ),
            array(
                'name' => 'title_options',
                'type' => 'end_group'
            )
            /* End title options group
            ===================================*/
        )
    )
);

$tt_post_meta = array_merge($tt_post_meta, $tmp_arr);
?>