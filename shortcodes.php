<?php
//Cikk Komponens - Alapértelmezett Link
function link_articlewidget( $atts = array() ) {
  
    // set up default parameters
    extract(shortcode_atts(array(
	 'link' => '#',
	 'content' => 'Link'
    ), $atts));
    
    return '<a href="'. $link .'" data-sc-measure-widget="Cikk Komponens - Alapértelmezett Link" class="m-homepage_articleLink">' . $content . '</a>';
}
add_shortcode('articlelink', 'link_articlewidget'); 
?>