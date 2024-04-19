<?php
/**
 * Plugin Name: Customize homepage title and description
 * Description: Plugin that edits the title and places the meta description on the home page, sometimes removed by other plugins.
 * Version: 0.1
 * Author: Adriana Moreira
 */

add_action('wp_head','hook_javascript');
function hook_javascript() {
        if(is_front_page())
                echo '<meta name="description" content=" Lentes multifocais são desenvolvidas especialmente para quem tem presbiopia, conhecida também como vista cansada ou síndrome ou braço curto." />';
}

add_filter( 'wp_title', 'muda_title', 10, 3 );
//sem yost
function muda_title( $title, $sep, $seplocation ) {
        if(is_front_page()) $title= 'Lente multifocal: como funciona, adaptação e como escolher';
        return $title;
}


add_filter('wpseo_title','custom_seo_title',10,1);
//com yoast
function custom_seo_title(){
    if(is_front_page()) $title='Lente multifocal: como funciona, adaptação e como escolher';
    return $title;
}
