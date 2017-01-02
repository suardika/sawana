<?php

// set up
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-formats', array( 'link', 'quote', 'video' ));

// includes
include ( get_template_directory() . '/includes/front/enqueue.php' );
include ( get_template_directory() . '/includes/setup.php' );
// require_once( get_template_directory() . '/includes/yamm-nav-walker.php' );
require_once( get_template_directory() . '/includes/wp-bs-pagination.php' );
include ( get_template_directory() . '/includes/widgets.php' );
include ( get_template_directory() . '/includes/activate.php' );
include ( get_template_directory() . '/includes/admin/menus.php' );
include ( get_template_directory() . '/includes/admin/options-page.php' );
include ( get_template_directory() . '/includes/admin/init.php' );
include ( get_template_directory() . '/process/save-options.php' );
include ( get_template_directory() . '/includes/shortcodes/facebook.php' );
include ( get_template_directory() . '/includes/theme-customizer.php' );
include ( get_template_directory() . '/includes/front/head.php' );

require_once dirname( __FILE__ ) . '/menu-item-custom-fields/menu-item-custom-fields.php';
// require_once dirname( __FILE__ ) . '/includes/custom-walker.php';
require_once dirname( __FILE__ ) . '/includes/wp_bootstrap_navwalker.php';

class Menu_Item_Custom_Fields_Example {

	/**
	 * Holds our custom fields
	 *
	 * @var    array
	 * @access protected
	 * @since  Menu_Item_Custom_Fields_Example 0.2.0
	 */
	protected static $fields = array();


	/**
	 * Initialize plugin
	 */
	public static function init() {
		add_action( 'wp_nav_menu_item_custom_fields', array( __CLASS__, '_fields' ), 10, 4 );
		add_action( 'wp_update_nav_menu_item', array( __CLASS__, '_save' ), 10, 3 );
		add_filter( 'manage_nav-menus_columns', array( __CLASS__, '_columns' ), 99 );

		self::$fields = array(
			'field_description' => __( 'Menu Description', 'menu-item-custom-fields-example' ),
			// 'field-02' => __( 'Custom Field #2', 'menu-item-custom-fields-example' ),
		);
	}


	/**
	 * Save custom field value
	 *
	 * @wp_hook action wp_update_nav_menu_item
	 *
	 * @param int   $menu_id         Nav menu ID
	 * @param int   $menu_item_db_id Menu item ID
	 * @param array $menu_item_args  Menu item data
	 */
	public static function _save( $menu_id, $menu_item_db_id, $menu_item_args ) {
		if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
			return;
		}

		check_admin_referer( 'update-nav_menu', 'update-nav-menu-nonce' );

		foreach ( self::$fields as $_key => $label ) {
			$key = sprintf( '_menu_item_%s', $_key );

			// Sanitize
			if ( ! empty( $_POST[ $key ][ $menu_item_db_id ] ) ) {
				// Do some checks here...
				$value = $_POST[ $key ][ $menu_item_db_id ];
			}
			else {
				$value = null;
			}

			// Update
			if ( ! is_null( $value ) ) {
				update_post_meta( $menu_item_db_id, $key, $value );
			}
			else {
				delete_post_meta( $menu_item_db_id, $key );
			}
		}
	}


	/**
	 * Print field
	 *
	 * @param object $item  Menu item data object.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args  Menu item args.
	 * @param int    $id    Nav menu ID.
	 *
	 * @return string Form fields
	 */
	public static function _fields( $id, $item, $depth, $args ) {
		foreach ( self::$fields as $_key => $label ) :
			$key   = sprintf( '_menu_item_%s', $_key );
			$id    = sprintf( 'edit-%s-%s', $key, $item->ID );
			$name  = sprintf( '%s[%s]', $key, $item->ID );
			$value = get_post_meta( $item->ID, $key, true );
			$class = sprintf( 'field-%s', $_key );
			?>
				<p class="description description-wide <?php echo esc_attr( $class ) ?>">
					<?php printf(
						'<label for="%1$s">%2$s<br /><input type="text" id="%1$s" class="widefat %1$s" name="%3$s" value="%4$s" /></label>',
						esc_attr( $id ),
						esc_html( $label ),
						esc_attr( $name ),
						esc_attr( $value )
					) ?>
				</p>
			<?php
		endforeach;
	}


	/**
	 * Add our fields to the screen options toggle
	 *
	 * @param array $columns Menu item columns
	 * @return array
	 */
	public static function _columns( $columns ) {
		$columns = array_merge( $columns, self::$fields );

		return $columns;
	}
}
Menu_Item_Custom_Fields_Example::init();



// Action & filter Hooks 
add_filter( 'show_admin_bar', '__return_false' );
add_action( 'wp_enqueue_scripts', 'sw_enqueue' );
add_action( 'after_setup_theme', 'sw_setup_theme' );
add_action( 'widgets_init', 'sw_widgets' );
add_action( 'after_switch_theme', 'sw_activate' );
add_action( 'admin_menu', 'sw_admin_menus' );
add_action( 'admin_init', 'sw_admin_init' );
add_action( 'customize_register', 'sw_customize_register' );
add_action( 'wp_head', 'sw_head' );


// Shortcode

add_shortcode( 'sfb', 'sw_facebook_shortcode' );
add_shortcode( 'ui', 'sw_icon_shortcode' );
