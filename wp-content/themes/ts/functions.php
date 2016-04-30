<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}


add_theme_support( 'post-thumbnails' );


//making custom post type


function create_posttype() {

	register_post_type( 'slider',
	// CPT Options
		array(
		
			'labels' => array(
				'name' => __( 'Sliders' ),
				'singular_name' => __( 'Slider' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'sliders'),
			    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt'  ),	   	 

		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );



require_once ("wp_bootstrap_navwalker.php");
add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );



//custom post type for product
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'acme_product',
    array(
      'labels' => array(
        'name' => __( 'Cloths' ),
        'singular_name' => __( 'Cloths' ),
		'parent_item'       => __('Parent Category', 'text_domain'),
		'parent_item_colon' => __('Parent Category:', 'text_domain'),
			
      ),
		'show_admin_column' => true,
		'hierarchical'      => true,
	
	   	'taxonomies' => array('cloths_categories'),
	
		  'public' => true,
		  'has_archive' => true,
		  'supports'      => array( 'title', 'thumbnail', 'editor'   ),	   	
    )
  );
}

/**
 * Registers a custom taxonomy.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
add_action('init', 'cloths_register_taxonomy', 0);
function cloths_register_taxonomy()
{
	register_taxonomy(
		'cloths_categories',
		array(
			'cloths',
		),
		array(
			'labels'            => array(
				'name'              => _x('Categories', 'prefix_portfolio', 'text_domain'),
				'singular_name'     => _x('Category', 'prefix_portfolio', 'text_domain'),
				'parent_item'       => __('Parent Category', 'text_domain'),
				'parent_item_colon' => __('Parent Category:', 'text_domain'),
			),
			
			'show_admin_column' => true,
			'hierarchical'      => true,
			'rewrite'           => array(
			'slug' => 'cloth/category',
			),
		)
	);
}

remove_filter('the_content', 'wpautop');