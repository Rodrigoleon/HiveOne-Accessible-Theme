<?php

function my_menu_notitle( $menu ){
  return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );

}
add_filter( 'wp_nav_menu', 'my_menu_notitle' );
add_filter( 'wp_page_menu', 'my_menu_notitle' );
add_filter( 'wp_list_categories', 'my_menu_notitle' );

/**
 * Starting the Custom Post Types for later use.
 */

if ( ! function_exists('hive_custom_post_types') ) {

// Register Custom Post Type
function hive_custom_post_types() {

	$labels = array(
		'name'                  => _x( 'Restaurants', 'Post Type General Name', 'hive_one' ),
		'singular_name'         => _x( 'Restaurant', 'Post Type Singular Name', 'hive_one' ),
		'menu_name'             => __( 'Restaurants', 'hive_one' ),
		'name_admin_bar'        => __( 'Restaurants', 'hive_one' ),
		'archives'              => __( 'Restaurant Archives', 'hive_one' ),
		'parent_item_colon'     => __( 'Parent Item:', 'hive_one' ),
		'all_items'             => __( 'All Restaurants', 'hive_one' ),
		'add_new_item'          => __( 'Add New Restaurant', 'hive_one' ),
		'add_new'               => __( 'Add New', 'hive_one' ),
		'new_item'              => __( 'New Restaurant', 'hive_one' ),
		'edit_item'             => __( 'Edit Restaurant', 'hive_one' ),
		'update_item'           => __( 'Update Restaurant', 'hive_one' ),
		'view_item'             => __( 'View Restaurant', 'hive_one' ),
		'search_items'          => __( 'Search Restaurant', 'hive_one' ),
		'not_found'             => __( 'Not found', 'hive_one' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'hive_one' ),
		'featured_image'        => __( 'Featured Image', 'hive_one' ),
		'set_featured_image'    => __( 'Set featured image', 'hive_one' ),
		'remove_featured_image' => __( 'Remove featured image', 'hive_one' ),
		'use_featured_image'    => __( 'Use as featured image', 'hive_one' ),
		'insert_into_item'      => __( 'Insert into Restaurant', 'hive_one' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Restaurant', 'hive_one' ),
		'items_list'            => __( 'Restaurants list', 'hive_one' ),
		'items_list_navigation' => __( 'Restaurants list navigation', 'hive_one' ),
		'filter_items_list'     => __( 'Filter Restaurants list', 'hive_one' ),
	);
	$args = array(
		'label'                 => __( 'Restaurant', 'hive_one' ),
		'description'           => __( 'Restaurants', 'hive_one' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		//'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'restaurants', $args );

	$labels = array(
		'name'                  => _x( 'Transportations', 'Post Type General Name', 'hive_one' ),
		'singular_name'         => _x( 'Transportation', 'Post Type Singular Name', 'hive_one' ),
		'menu_name'             => __( 'Transportations', 'hive_one' ),
		'name_admin_bar'        => __( 'Transportations', 'hive_one' ),
		'archives'              => __( 'Transportation Archives', 'hive_one' ),
		'parent_item_colon'     => __( 'Parent Item:', 'hive_one' ),
		'all_items'             => __( 'All Transportations', 'hive_one' ),
		'add_new_item'          => __( 'Add New Transportation', 'hive_one' ),
		'add_new'               => __( 'Add New', 'hive_one' ),
		'new_item'              => __( 'New Transportation', 'hive_one' ),
		'edit_item'             => __( 'Edit Transportation', 'hive_one' ),
		'update_item'           => __( 'Update Transportation', 'hive_one' ),
		'view_item'             => __( 'View Transportation', 'hive_one' ),
		'search_items'          => __( 'Search Transportation', 'hive_one' ),
		'not_found'             => __( 'Not found', 'hive_one' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'hive_one' ),
		'featured_image'        => __( 'Featured Image', 'hive_one' ),
		'set_featured_image'    => __( 'Set featured image', 'hive_one' ),
		'remove_featured_image' => __( 'Remove featured image', 'hive_one' ),
		'use_featured_image'    => __( 'Use as featured image', 'hive_one' ),
		'insert_into_item'      => __( 'Insert into Transportation', 'hive_one' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Transportation', 'hive_one' ),
		'items_list'            => __( 'Transportations list', 'hive_one' ),
		'items_list_navigation' => __( 'Transportations list navigation', 'hive_one' ),
		'filter_items_list'     => __( 'Filter Transportations list', 'hive_one' ),
	);
	$args = array(
		'label'                 => __( 'Transportation', 'hive_one' ),
		'description'           => __( 'Transportation', 'hive_one' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		//'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-location-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'transportation', $args );

	$labels = array(
		'name'                  => _x( 'Activities', 'Post Type General Name', 'hive_one' ),
		'singular_name'         => _x( 'Activity', 'Post Type Singular Name', 'hive_one' ),
		'menu_name'             => __( 'Activities', 'hive_one' ),
		'name_admin_bar'        => __( 'Activities', 'hive_one' ),
		'archives'              => __( 'Activity Archives', 'hive_one' ),
		'parent_item_colon'     => __( 'Parent Item:', 'hive_one' ),
		'all_items'             => __( 'All Activities', 'hive_one' ),
		'add_new_item'          => __( 'Add New Activity', 'hive_one' ),
		'add_new'               => __( 'Add New', 'hive_one' ),
		'new_item'              => __( 'New Activity', 'hive_one' ),
		'edit_item'             => __( 'Edit Activity', 'hive_one' ),
		'update_item'           => __( 'Update Activity', 'hive_one' ),
		'view_item'             => __( 'View Activity', 'hive_one' ),
		'search_items'          => __( 'Search Activity', 'hive_one' ),
		'not_found'             => __( 'Not found', 'hive_one' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'hive_one' ),
		'featured_image'        => __( 'Featured Image', 'hive_one' ),
		'set_featured_image'    => __( 'Set featured image', 'hive_one' ),
		'remove_featured_image' => __( 'Remove featured image', 'hive_one' ),
		'use_featured_image'    => __( 'Use as featured image', 'hive_one' ),
		'insert_into_item'      => __( 'Insert into Activity', 'hive_one' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Activity', 'hive_one' ),
		'items_list'            => __( 'Activities list', 'hive_one' ),
		'items_list_navigation' => __( 'Activities list navigation', 'hive_one' ),
		'filter_items_list'     => __( 'Filter Activities list', 'hive_one' ),
	);
	$args = array(
		'label'                 => __( 'Activity', 'hive_one' ),
		'description'           => __( 'Activities', 'hive_one' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		//'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-tickets',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'activities', $args );

	$labels = array(
		'name'                  => _x( 'Accommodations', 'Post Type General Name', 'hive_one' ),
		'singular_name'         => _x( 'Accommodation', 'Post Type Singular Name', 'hive_one' ),
		'menu_name'             => __( 'Accommodations', 'hive_one' ),
		'name_admin_bar'        => __( 'Accommodations', 'hive_one' ),
		'archives'              => __( 'Accommodation Archives', 'hive_one' ),
		'parent_item_colon'     => __( 'Parent Item:', 'hive_one' ),
		'all_items'             => __( 'All Accommodations', 'hive_one' ),
		'add_new_item'          => __( 'Add New Accommodation', 'hive_one' ),
		'add_new'               => __( 'Add New', 'hive_one' ),
		'new_item'              => __( 'New Accommodation', 'hive_one' ),
		'edit_item'             => __( 'Edit Accommodation', 'hive_one' ),
		'update_item'           => __( 'Update Accommodation', 'hive_one' ),
		'view_item'             => __( 'View Accommodation', 'hive_one' ),
		'search_items'          => __( 'Search Accommodation', 'hive_one' ),
		'not_found'             => __( 'Not found', 'hive_one' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'hive_one' ),
		'featured_image'        => __( 'Featured Image', 'hive_one' ),
		'set_featured_image'    => __( 'Set featured image', 'hive_one' ),
		'remove_featured_image' => __( 'Remove featured image', 'hive_one' ),
		'use_featured_image'    => __( 'Use as featured image', 'hive_one' ),
		'insert_into_item'      => __( 'Insert into Accommodations', 'hive_one' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Accommodations', 'hive_one' ),
		'items_list'            => __( 'Accommodationss list', 'hive_one' ),
		'items_list_navigation' => __( 'Accommodations list navigation', 'hive_one' ),
		'filter_items_list'     => __( 'Filter Accommodations list', 'hive_one' ),
	);
	$args = array(
		'label'                 => __( 'Accommodation', 'hive_one' ),
		'description'           => __( 'Accommodation', 'hive_one' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		//'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-home',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'accommodation', $args );


}
add_action( 'init', 'hive_custom_post_types', 0 );

}



/**
 * Class Name: wp_bootstrap_navwalker
 * GitHub URI: https://github.com/twittem/wp-bootstrap-navwalker
 * Description: A custom WordPress nav walker class to implement the Bootstrap 3 navigation style in a custom theme using the WordPress built in menu manager.
 * Version: 2.0.4
 * Author: Edward McIntyre - @twittem
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
class wp_bootstrap_navwalker extends Walker_Nav_Menu {
	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of page. Used for padding.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul role=\"menu\" class=\" dropdown-menu\">\n";
	}
	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Menu item data object.
	 * @param int $depth Depth of menu item. Used for padding.
	 * @param int $current_page Menu item ID.
	 * @param object $args
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		/**
		 * Dividers, Headers or Disabled
		 * =============================
		 * Determine whether the item is a Divider, Header, Disabled or regular
		 * menu item. To prevent errors we use the strcasecmp() function to so a
		 * comparison that is not case sensitive. The strcasecmp() function returns
		 * a 0 if the strings are equal.
		 */
		if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider">';
		} else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider">';
		} else if ( strcasecmp( $item->attr_title, 'dropdown-header') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );
		} else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
			$output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
		} else {
			$class_names = $value = '';
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;
			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
			if ( $args->has_children )
				$class_names .= ' dropdown';
			if ( in_array( 'current-menu-item', $classes ) )
				$class_names .= ' active';
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
			$output .= $indent . '<li' . $id . $value . $class_names .'>';
			$atts = array();
			$atts['title']  = ! empty( $item->title )	? $item->title	: '';
			$atts['target'] = ! empty( $item->target )	? $item->target	: '';
			$atts['rel']    = ! empty( $item->xfn )		? $item->xfn	: '';
			// If item has_children add atts to a.
			if ( $args->has_children && $depth === 0 ) {
				$atts['href']   		= '#';
				$atts['data-toggle']	= 'dropdown';
				$atts['class']			= 'dropdown-toggle';
				$atts['aria-haspopup']	= 'true';
			} else {
				$atts['href'] = ! empty( $item->url ) ? $item->url : '';
			}
			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( ! empty( $value ) ) {
					$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}
			$item_output = $args->before;
			/*
			 * Glyphicons
			 * ===========
			 * Since the the menu item is NOT a Divider or Header we check the see
			 * if there is a value in the attr_title property. If the attr_title
			 * property is NOT null we apply it as the class name for the glyphicon.
			 */
			if ( ! empty( $item->attr_title ) )
				$item_output .= '<a'. $attributes .'><span class="glyphicon ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
			else
				$item_output .= '<a'. $attributes .'>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= ( $args->has_children && 0 === $depth ) ? ' <span class="caret"></span></a>' : '</a>';
			$item_output .= $args->after;
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}
	/**
	 * Traverse elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth.
	 *
	 * This method shouldn't be called directly, use the walk() method instead.
	 *
	 * @see Walker::start_el()
	 * @since 2.5.0
	 *
	 * @param object $element Data object
	 * @param array $children_elements List of elements to continue traversing.
	 * @param int $max_depth Max depth to traverse.
	 * @param int $depth Depth of current element.
	 * @param array $args
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return null Null on failure with no changes to parameters.
	 */
	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( ! $element )
            return;
        $id_field = $this->db_fields['id'];
        // Display this element.
        if ( is_object( $args[0] ) )
           $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
	/**
	 * Menu Fallback
	 * =============
	 * If this function is assigned to the wp_nav_menu's fallback_cb variable
	 * and a manu has not been assigned to the theme location in the WordPress
	 * menu manager the function with display nothing to a non-logged in user,
	 * and will add a link to the WordPress menu manager if logged in as an admin.
	 *
	 * @param array $args passed from the wp_nav_menu function.
	 *
	 */
	public static function fallback( $args ) {
		if ( current_user_can( 'manage_options' ) ) {
			extract( $args );
			$fb_output = null;
			if ( $container ) {
				$fb_output = '<' . $container;
				if ( $container_id )
					$fb_output .= ' id="' . $container_id . '"';
				if ( $container_class )
					$fb_output .= ' class="' . $container_class . '"';
				$fb_output .= '>';
			}
			$fb_output .= '<ul';
			if ( $menu_id )
				$fb_output .= ' id="' . $menu_id . '"';
			if ( $menu_class )
				$fb_output .= ' class="' . $menu_class . '"';
			$fb_output .= '>';
			$fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a menu</a></li>';
			$fb_output .= '</ul>';
			if ( $container )
				$fb_output .= '</' . $container . '>';
			echo $fb_output;
		}
	}
}