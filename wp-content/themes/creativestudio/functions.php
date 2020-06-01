<?php

//Remove Default jQuery
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue()
{
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/dist/plugins/jQuery/jquery.min.js', false, null);
	wp_enqueue_script('jquery');
}

//Add Style and Script
function add_theme_scripts() {
//	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/dist/plugins/jQuery/jquery.min.js', array(), '1.1', true );
	wp_enqueue_script( 'jQuery-UI', get_template_directory_uri() . '/dist/plugins/jQuery/jquery-ui.js', array(), '1.1', true );
	wp_enqueue_script( 'jQuery-Migrate', get_template_directory_uri() . '/dist/plugins/jQuery/jquery-migrate.js', array(), '1.1', true );
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

//* Clean WordPress header
function wps_deregister_styles()
{
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
}

add_action('wp_print_styles', 'wps_deregister_styles', 100);
function stop_loading_wp_embed()
{
	if (!is_admin()) {
		wp_deregister_script('wp-embed');
	}
}

add_action('init', 'stop_loading_wp_embed');
remove_action('rest_api_init', 'wp_oembed_register_route');
add_filter('embed_oembed_discover', '__return_false');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head, 10, 0');

//Remove Admin Bar
show_admin_bar( false );

//Change Favicon Admin
function favicon4admin() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . get_bloginfo( 'wpurl' ) . '/wp-content/favicon.png" />';
}

add_action( 'admin_head', 'favicon4admin' );
/*------Excerpt-----*/
function get_excerpt( $limit = 130 ) {
	$excerpt = explode( ' ', get_the_excerpt(), $limit );
	if ( count( $excerpt ) >= $limit ) {
		array_pop( $excerpt );
		$excerpt = implode( " ", $excerpt ) . '...';
	} else {
		$excerpt = implode( " ", $excerpt );
	}
	$excerpt = preg_replace( '`\[[^\]]*\]`', '', $excerpt );

	return $excerpt;
}

?>