<?php
add_filter( 'genesis_breadcrumb_args', 'child_breadcrumb_args' );
/**
 * Amend breadcrumb arguments.
 *
 * @author Gary Jones
 *
 * @param array $args Default breadcrumb arguments
 * @return array Amended breadcrumb arguments
 */
function child_breadcrumb_args( $args ) {
    $args['home']                    = 'Home';
    $args['sep']                     = ' > ';
    $args['list_sep']                = ', '; // Genesis 1.5 and later
    $args['prefix']                  = '<div class="breadcrumb">';
    $args['suffix']                  = '</div>';
    $args['heirarchial_attachments'] = true; // Genesis 1.5 and later
    $args['heirarchial_categories']  = true; // Genesis 1.5 and later
    $args['display']                 = true;
    $args['labels']['prefix']        = '';
    $args['labels']['author']        = 'Archives for ';
    $args['labels']['category']      = 'Archives for '; // Genesis 1.6 and later
    $args['labels']['tag']           = 'Archives for ';
    $args['labels']['date']          = 'Archives for ';
    $args['labels']['search']        = 'Search for ';
    $args['labels']['tax']           = 'Archives for ';
    $args['labels']['post_type']     = 'Archives for ';
    $args['labels']['404']           = 'Not found: '; // Genesis 1.5 and later
    return $args;
}

add_theme_support( 'genesis-menus', array( 
'primary' => __( 'Primary Navigation Menu', 'genesis' ), 
'secondary' => __( 'Secondary Navigation Menu', 'genesis' ),
'footer' => __( 'Footer Navigation Menu', 'genesis' ),
) );

//use the description for the second logo
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );
add_action( 'genesis_site_description', 'apple_seo_site_description' );
function apple_seo_site_description() {

	/** Set what goes inside the wrapping tags */
	$inside = sprintf( '<a href="%s" title="%s">%s</a>', trailingslashit( home_url() ), esc_attr( get_bloginfo( 'description' ) ), get_bloginfo( 'description' ) );

	/** Determine which wrapping tags to use */
	$wrap = is_home() && 'description' == genesis_get_seo_option( 'home_h1_on' ) ? 'h1' : 'p';

	/* Build the description */
	$description = $inside ? sprintf( '<%s id="description">%s</%s>', $wrap, $inside, $wrap ) : '';

	/** Echo (filtered) */
	echo apply_filters( 'genesis_seo_description', $description, $inside, $wrap );

}

//adjust the header nav
remove_action('genesis_after_header','genesis_do_nav');
add_action('genesis_header_right','genesis_do_nav');
remove_action('genesis_after_header','genesis_do_subnav');
add_action('genesis_before_header','genesis_do_subnav');

//add language widget after subnav
function good_advice_language_widget(){
	$instance = array (
    'type' => 'both',
    'hide-title' => 'on',
  );
  $attr = array();
  ob_start();
  the_widget('qTranslateWidget',$instance,$attr);
  $ret = ob_get_contents();
  ob_end_clean();
  preg_match('@<ul.*?>(.*?)</ul>@i',$ret,$matches);
  return $matches[0];
}

function good_advice_subnav_right( $menu, $args ) {
	$args = (array) $args;
	$langs = good_advice_language_widget();
	$menu = preg_replace('@<a.*?>Choose Language</a>@i','<a href="#">Choose Language</a>'."\n".$langs,$menu);
	return $menu;
}
add_filter('genesis_do_subnav','good_advice_subnav_right',10,2);
//some homepage widget areas
/** Remove footer widgets */
remove_theme_support( 'genesis-footer-widgets');
/** Unregister default sidebars **/
unregister_sidebar( 'header-right' );
/** Register widget areas */
genesis_register_sidebar( array(
    'id'            => 'home-footer',
    'name'          => __( 'Home Footer', 'good_advice' ),
    'description'   => __( 'This is a widget area that includes the four homepage footer widgets', 'good_advice' ),
) );
genesis_register_sidebar( array(
    'id'            => 'footer-logos',
    'name'          => __( 'Footer Logos', 'good_advice' ),
    'description'   => __( 'Use the image widget to place logos in the footer with links.', 'good_advice' ),
) );

add_filter ( 'genesis_edit_post_link' , '__return_false' );

//footer changes
remove_action('genesis_footer','genesis_do_footer');
add_action('genesis_footer','good_advice_do_footer', 10);
function good_advice_do_footer(){
	good_advice_do_footer_nav();
	good_advice_do_footer_logos();
}
function good_advice_do_footer_nav(){
	if ( ! has_nav_menu( 'footer' ) )
		return;

		$args = array(
			'theme_location' => 'footer',
			'container'      => '',
			'menu_class'     => 'menu menu-footer',
			'echo'           => 0,
		);

		$nav = wp_nav_menu( $args );


	$nav_output = sprintf( '<div id="footer_nav">%2$s%1$s%3$s</div>', $nav, genesis_structural_wrap( 'nav', 'open', 0 ), genesis_structural_wrap( 'nav', 'close', 0 ) );
	print apply_filters( 'genesis_do_nav', $nav_output, $nav, $args );
}
function good_advice_do_footer_logos(){
	genesis_widget_area( 'footer-logos', array(
          'before' => '<div id="footer-logos" class="footer-logos widget-area">',
      ) );
}
/* Add some custom elements */
if(!class_exists('WPAlchemy_MetaBox')){
	include_once get_stylesheet_directory() . '/lib/WPAlchemy/MetaBox.php';
}
add_action('init','add_custom_metaboxes');
function add_custom_metaboxes(){
	global $subtitle_metabox;
	$subtitle_metabox = new WPAlchemy_MetaBox(array
	(
		'id' => '_subtitle',
		'title' => 'Subtitle',
		'types' => array('post','page'),
		'template' => get_stylesheet_directory() . '/lib/template/subtitle-meta.php',
	));
}
add_action('admin_footer','subtitle_footer_hook');
function subtitle_footer_hook()
{
	?><script type="text/javascript">
		jQuery('#titlediv').after(jQuery('#_subtitle_metabox'));
	</script><?php
}

// include css to help style our custom meta boxes
add_action( 'admin_print_scripts', 'my_metabox_styles' );
 
function my_metabox_styles()
{
    if ( is_admin() )
    {
        wp_enqueue_style('wpalchemy-metabox', get_stylesheet_directory_uri() . '/lib/template/meta.css');
    }
}

add_action( 'genesis_post_title', 'good_advice_do_post_title' );

function good_advice_do_post_title() {
	global $subtitle_metabox;
	$subtitle_metabox->the_meta();
	$subtitle = $subtitle_metabox->get_the_value('subtitle');

	if ( strlen( $subtitle ) == 0 )
		return;

	$subtitle = sprintf( '<h2 class="entry-subtitle">%s</h2>', apply_filters( 'genesis_post_title_text', $subtitle ) );
	echo apply_filters( 'genesis_post_title_output', $subtitle ) . "\n";

}

function good_advice_sitemap() { 
		$ret = '
			<div class="archive-page">

				<h4>'. _e( 'Pages:', 'genesis' ).'</h4>
				<ul>
					'. wp_list_pages( 'sort_column=menu_order&title_li=' ).'
				</ul>
			</div><!-- end .archive-page-->

			<div class="archive-page">

				<h4>'. _e( 'Categories:', 'genesis' ).'</h4>
				<ul>
					'. wp_list_categories( 'sort_column=name&title_li=' ).'
				</ul>

			</div><!-- end .archive-page-->';
		return $ret;
}

add_shortcode('sitemap','good_advice_sitemap');