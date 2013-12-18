<?php
remove_action( 'genesis_post_title', 'genesis_do_post_title' );
function homepage(){
	if ( ! is_front_page() ) //should only exist on the front page anyway, so this should never happen.
          return;
      genesis_widget_area( 'home-footer', array(
          'before' => '<div id="home-footer" class="home-footer widget-area">',
      ) );
}
add_action('genesis_loop','homepage');
genesis();
global $wp_filter, $wp_registered_sidebars;
//ts_var( $wp_filter['genesis_header_right'] );