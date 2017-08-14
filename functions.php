<?php
/*
Theme Name: Kairong Xu's Summer 2017 WordPress
Author: Kairong Xu
Author URI: xukairong.net
Description: This is a WordPress Theme
Version: 1.0
*/
//resiger my sidebar
register_sidebar(array(
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
	));
	//
// Register Menus
register_nav_menus(array('main-menu' => 'Main Menu'));
//

// Get My Title Tag
function get_my_title_tag() {
    
    global $post;
    
    if ( is_front_page() ) {  // for site’s Front Page
    
        bloginfo('description'); // retrieve the site tagline
    
    } 
    
    elseif ( is_page() || is_single() ) { // for your site’s Pages or Postings
    
        the_title(); // retrieve the page or posting title 
    
    } 

    else { // for everything else
        
        bloginfo('description'); // retrieve the site tagline
        
    }
    
    if ( $post->post_parent ) { // for your site’s Parent Pages
    
        echo ' | '; // separator with spaces
        echo get_the_title($post->post_parent); // retrieve the parent page title
        
    }

    echo ' | '; // separator with spaces
    bloginfo('famil_dental'); // retrieve the site name
    echo ' | '; // separator with spaces
    echo 'Kent, WA.'; // write in the location
    
}
//
?>