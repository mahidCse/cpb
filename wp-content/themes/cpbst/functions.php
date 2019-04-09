<?php
	/*-----------------------------------------------------------------------------------*/
	/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
define( 'NAKED_VERSION', 1.0 );

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
	// add menu support and fallback menu if menu doesn't exist
	add_action('init', 'wpj_register_menu');
	function wpj_register_menu() {
		if (function_exists('register_nav_menu')) {
			register_nav_menu( 'wpj-main-menu', __( 'Main Menu', 'cpbst' ) );
		}
	}
	function wpj_default_menu() {
		echo '<ul class="main-menu lavaLamp">';
		if ('page' != get_option('show_on_front')) {
			echo '<li><a href="'. home_url() . '/">Home</a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
	}
	
	register_nav_menus(
  array('footer' => __( 'footer-menu', 'cpbst' ),
  'footer-service' => __( 'footer-service-menu', 'cpbst' ),
  )
);

if (class_exists('MultiPostThumbnails')) {
 
new MultiPostThumbnails(array(
'label' => 'Secondary Image',
'id' => 'secondary-image',
'class'=>'service-widget-image right',
'post_type' => 'page'
 ) );
 
 }

/* Excerpt ********************************************/

	/* Make the "read more" link to the post */
	function cpb_new_excerpt_more($more) {
	       global $post;
		return '<br /><span class="read_more"><a href="'. get_permalink($post->ID) . '">' . 'Read more...' . '</a></span>';
	}
	add_filter('excerpt_more', 'cpb_new_excerpt_more');
	
	/* Set the excerpt length */
	function cpb_new_excerpt_length($length) {
		return 60;
	}
	add_filter('excerpt_length', 'cpb_new_excerpt_length');
	
	function wpse207895_featured_image() {
    //Execute if singular
    if ( is_singular() ) {

        $id = get_queried_object_id ();

        // Check if the post/page has featured image
        if ( has_post_thumbnail( $id ) ) {

            // Change thumbnail size, but I guess full is what you'll need
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );

            $url = $image[0];

        } else {

            //Set a default image if Featured Image isn't set
            $url = '';

        }
    }

    return $url;
}

/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
/* Register sidebars and widgetized areas ********************************************/
	
	function cpb_widget_areas() {
	 register_sidebar( array(
			'name' => __( 'Sidebar Right', 'cpb' ),
			'id' => 'sidebar-right',
			'description' => __( 'An optional widget area for your sidebar right.', 'cpb' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	        'after_widget' => '</aside>',
	        'before_title' => '<h3 class="widget-title">',
	        'after_title' => '</h3>',
	    ) );

	}
	add_action('widgets_init', 'cpb_widget_areas');

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function naked_scripts()  { 

	// get the theme directory style.css and link to it in the header
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	
	// add fitvid
	wp_enqueue_script( 'naked-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), NAKED_VERSION, true );
	
	// add theme scripts
	wp_enqueue_script( 'naked', get_template_directory_uri() . '/js/theme.min.js', array(), NAKED_VERSION, true );
  
}
add_action( 'wp_enqueue_scripts', 'naked_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header

/*wp-admin changed to login-panel*/
/*add_filter('site_url',  'wpadmin_filter', 10, 3);
 function wpadmin_filter( $url, $path, $orig_scheme ) {
  $old  = array( "/(wp-admin)/");
  $admin_dir = WP_ADMIN_DIR;
  $new  = array($admin_dir);
  return preg_replace( $old, $new, $url, 1);
 }*/