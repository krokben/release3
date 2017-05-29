<?php

// Hide admin bar
add_filter('show_admin_bar', '__return_false');

// Remove top margin
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

// Make excerpt clickable
function wpdocs_excerpt_more($more) {
  return '<a href="'.get_the_permalink().'" rel="nofollow" class="read-more"> ...</a>';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');

// Add markup before wp_list_categories
function span_before_link_list_categories( $list ) {
$list = str_replace('<a href=','· <a href=',$list);
return $list;
}
add_filter ( 'wp_list_categories', 'span_before_link_list_categories' );

// Custom navbar
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action('init', 'wpb_custom_new_menu');

// Highlight current page in navbar
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ) {
  	switch(get_query_var('pagename')) {
  		case 'blog':
  			$classes[] = 'current-blog';
  			break;
  		case 'portfolio':
  			$classes[] = 'current-portfolio';
  			break;
  		case 'cv':
  			$classes[] = 'current-cv';
  			break;
  		default:
  			$classes[] = 'current-home';
  	}
  }
  return $classes;
}