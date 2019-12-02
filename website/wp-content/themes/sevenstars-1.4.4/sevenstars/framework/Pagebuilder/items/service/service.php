<?php

function blox_parse_service_hook($atts, $content = null) {
    extract(shortcode_atts(array(
                'layout' => 'default',
                'alignment' => 'left',
                'title' => '',
                'heading' => 'h3',
                'icon' => '',
                'icon_size' => 'md',
                'icon_location' => 'left',
                'skin' => 'default',
                'animation' => 'none',
                'extra_class' => '',
                'visibility' => ''
                    ), $atts));
    

    $service_title = "<$heading>$title</$heading>";
    $is_animate = $animation!='none' && $animation!='' ? 'animate' : '';
    $skin = $skin=='default' ? '' : $skin;
    $visibility = str_replace(',', ' ', $visibility);
    $extra_class .= ' '.$visibility;

    $service_icon = "<span class='blox-icon $icon_size $icon'></span>";
    $service_icon = validateURL($icon) ? "<span class='service-image'><img src='$icon' alt='service-image' /></span>" : $service_icon;
    $icon_top = $icon_location=='top' ? $service_icon : '';
    $icon_middle = $icon_location=='middle' ? $service_icon : '';
    $icon_bottom = $icon_location=='bottom' ? $service_icon : '';
    
    $content = fix_shortcode_paragraph($content);

    $html = '';
    if( $layout=='small_icon' ){
        $html = "<div class='blox-element service-icon-title $skin $is_animate $extra_class' data-animate='$animation'><$heading><span class='blox-icon $icon'></span>$title</$heading>". do_shortcode($content) ."</div>";
    }
    else if( $layout=='left_icon' ){
        $html = "<div class='blox-element service-icon-left $skin $is_animate $extra_class' data-animate='$animation'><span class='blox-icon md $icon'></span>". $service_title . do_shortcode($content) ."</div>";
    } else {
        // $layout=='default'
        $html = "<div class='blox-element service-block text-$alignment $skin $is_animate $extra_class' data-animate='$animation'>". $icon_top . $service_title . $icon_middle . do_shortcode($content) . $icon_bottom ."</div>";
    }

    return $html;
}

blox_shortcode('blox_service', 'blox_parse_service_hook');

?>