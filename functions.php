<?php 

add_theme_support( 'post-thumbnails' );
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
  )
);
}
add_action( 'init', 'register_my_menus' );
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
// Our custom post type function
function create_posttype() {
   
    register_post_type( 'mixer',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'mixer' ),
                'singular_name' => __( 'mixer' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'mixer'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields' ),
            
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );




function addDataAttr( $items, $args ) {
    $dom = new DOMDocument();
    $dom->loadHTML($items);
    $find = $dom->getElementsByTagName('li');
    $delay = 500;
    foreach ($find as $item ) :
        $item->setAttribute('data-aos','zoom-in');
        $item->setAttribute('data-aos-delay', $delay );
        $delay += 300;
    endforeach;

    return $dom->saveHTML();

}

add_filter('wp_nav_menu_items', 'addDataAttr', 10, 2);





if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}