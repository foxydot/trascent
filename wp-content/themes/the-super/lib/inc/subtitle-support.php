<?php
/* Subtitle Support */
if(!class_exists('WPAlchemy_MetaBox')){
	include_once WP_CONTENT_DIR.'/wpalchemy/MetaBox.php';
}
add_action('init','add_custom_metaboxes');
function add_custom_metaboxes(){
	global $subtitle_metabox;
    $subtitle_metabox = new WPAlchemy_MetaBox(array
    (
        'id' => '_subtitle',
        'title' => 'Subtitle',
        'types' => array('post','page'),
        'context' => 'normal', // same as above, defaults to "normal"
        'priority' => 'high', // same as above, defaults to "high"
        'template' => get_stylesheet_directory() . '/lib/template/subtitle-meta.php',
        'autosave' => TRUE,
        'mode' => WPALCHEMY_MODE_EXTRACT, // defaults to WPALCHEMY_MODE_ARRAY
        'prefix' => '_msdlab_' // defaults to NULL
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

function msdlab_do_post_subtitle() {
	global $subtitle_metabox;
	$subtitle_metabox->the_meta();
	$subtitle = __($subtitle_metabox->get_the_value('subtitle'));

	if ( strlen( $subtitle ) == 0 )
		return;

	$subtitle = sprintf( '<h2 class="entry-subtitle">%s</h2>', apply_filters( 'genesis_post_title_text', $subtitle ) );
	echo apply_filters( 'genesis_post_title_output', $subtitle ) . "\n";

}

if(function_exists('qtrans_init')){
    function qtrans_createTextInput($parent, $language, $target, $id) {
        global $q_config;
        $html = "
            jQuery('#".$target."').after('<input type=\"text\" name=\"qtrans_textarea_".$target."_".$language."\" id=\"qtrans_textarea_".$target."_".$language."\"></input>');
            jQuery('#qtrans_textarea_".$target."_".$language."').attr('tabindex', jQuery('#".$target."').attr('tabindex'));
            jQuery('#qtrans_textarea_".$target."_".$language."').blur(function() {qtrans_switch_postbox('".$parent."','".$target."',false);});
            jQuery('#qtrans_textarea_".$target."_".$language."').val(qtrans_use('".$language."',jQuery('#".$target."').val()));
            ";
        return $html;
    }

    function msdlab_qtrans_modifySubtitle() {
        global $q_config;
        echo "<script type=\"text/javascript\">\n// <![CDATA[\n";
        echo "if(jQuery('#_subtitle_metabox').size()>0) {";
        echo $q_config['js']['qtrans_is_array'];
        echo $q_config['js']['qtrans_xsplit'];
        echo $q_config['js']['qtrans_split'];
        echo $q_config['js']['qtrans_integrate'];
        echo $q_config['js']['qtrans_switch_postbox'];
        echo $q_config['js']['qtrans_use'];
        $el = qtrans_getSortedLanguages();
        foreach($el as $language) {
            echo qtrans_createTitlebarButton('_subtitle_metabox', $language, '_subtitle', 'qtrans_switcher_postsubtitle_'.$language);
            echo qtrans_createTextInput('_subtitle_metabox', $language, '_subtitle', 'qtrans_switcher_postsubtitle_'.$language);
        }
        echo "qtrans_switch_postbox('_subtitle_metabox','_subtitle','".$q_config['default_language']."', false);";
        echo "jQuery('#_subtitle_metabox #_subtitle').hide();";
        echo "}";
        echo "// ]]>\n</script>\n";
    }

add_action('admin_footer', 'msdlab_qtrans_switch_postbox');
add_filter('admin_footer', 'msdlab_qtrans_modifySubtitle');
}
