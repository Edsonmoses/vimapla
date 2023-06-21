<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.1.5' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_PRO_UPGRADE_URL', 'https://wpastra.com/pro/?utm_source=dashboard&utm_medium=free-theme&utm_campaign=upgrade-now' );
define( 'ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', 'https://wpastra.com/pro/?utm_source=customizer&utm_medium=free-theme&utm_campaign=upgrade' );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.1.0' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';

add_action('wp_footer', 'hide_cart');
    function hide_cart() {
        if(WC()->cart->get_cart_contents_count() == 0)
        echo '<style type="text/css">.ast-site-header-cart .ast-addon-cart-wrap .ast-icon-shopping-basket {display:none}
		.ast-site-header-cart .ast-addon-cart-wrap i.astra-icon:after{display:none}</style>';
    }
add_filter( 'woocommerce_product_categories_widget_args', 'woo_product_cat_widget_args' );
// Disable wp login
function custom_login_page() {
$new_login_page_url = home_url( '/login/' ); // new login page
global $pagenow;
if( $pagenow == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
wp_redirect($new_login_page_url);
exit;
}
}
if(!is_user_logged_in()){
add_action('init','custom_login_page');
}

remove_action( 'woocommerce_register_form', 'dokan_seller_reg_form_fields' );

add_action( 'woocommerce_register_form', 'dokan_custom_reg_vendor_selected', 12 );
function dokan_custom_reg_vendor_selected() {
    $postdata = wc_clean( $_POST ); // WPCS: CSRF ok, input var ok.
    $role = isset( $postdata['role'] ) ? $postdata['role'] : 'seller';
    $role_style = ( $role == 'customer' ) ? 'display:none' : '';
    dokan_get_template_part( 'global/seller-registration-form', '', array(
        'postdata' => $postdata,
        'role' => $role,
        'role_style' => $role_style
    ) );
}

add_action( 'init', 'deregister_post_type' );
if ( ! function_exists( 'deregister_post_type' ) ) {
    function deregister_post_type() {
        unregister_post_type( 'toplevel_page_astra' );
    }
}

//Get Logged-in username with shortcade
function vimapla_display_username_wp_menu( $menu_items ) {
    global $current_user;
    foreach ( $menu_items as $menu_item ) {
        if ( strpos( $menu_item->title, '{{username}}' ) !== false ) {
            // Get username, otherwise set it to blank.
            if ( $current_user->display_name ) {
                $username = $current_user->display_name;
            } else {
                $username = '';
            }
                $menu_item->title =  str_replace( '{{username}}',  $username, $menu_item->title );
        }
    }
    return $menu_items;
}
add_filter( 'wp_nav_menu_objects', 'vimapla_display_username_wp_menu' );
//dokan custom fields
function dokan_custom_seller_registration_required_fields( $required_fields ) {
    $required_fields['country_name'] = __( 'Please enter your Country', 'dokan-custom' );
    $required_fields['district_name'] = __( 'Please enter your District', 'dokan-custom' );
    $required_fields['city_name'] = __( 'Please enter your City', 'dokan-custom' );
    return $required_fields;
};
add_filter( 'dokan_seller_registration_required_fields', 'dokan_custom_seller_registration_required_fields' );
function dokan_custom_new_seller_created( $vendor_id, $dokan_settings ) {
    $post_data = wp_unslash( $_POST );
    $country_name =  $post_data['country_name'];
    $district_name =  $post_data['district_name'];
    $city_name =  $post_data['city_name'];
   
    update_user_meta( $vendor_id, 'dokan_custom_country_name', $country_name, 'dokan_custom_district_name', $district_name, 'dokan_custom_city_name', $city_name );
}
add_action( 'dokan_new_seller_created', 'dokan_custom_new_seller_created', 10, 2 );
  /* Add custom profile fields (call in theme : echo $curauth->fieldname;) */ 
add_action( 'dokan_seller_meta_fields', 'my_show_extra_profile_fields' );
function my_show_extra_profile_fields( $user ) { ?>
    <?php if ( ! current_user_can( 'manage_woocommerce' ) ) {
            return;
        }
        if ( ! user_can( $user, 'dokandar' ) ) {
            return;
        }
         $country_name  = get_user_meta( $user->ID, 'dokan_custom_country_name', true );
         $district_name  = get_user_meta( $user->ID, 'dokan_custom_district_name', true );
         $city_name  = get_user_meta( $user->ID, 'dokan_custom_city_name', true );
     ?>
         <tr>
                    <th><?php esc_html_e( 'Country', 'dokan-lite' ); ?></th>
                    <td>
                        <input type="text" name="country_name" class="regular-text" value="<?php echo esc_attr($country_name); ?>"/>
                    </td>
         </tr>
         <tr>
                    <th><?php esc_html_e( 'District', 'dokan-lite' ); ?></th>
                    <td>
                        <input type="text" name="district_name" class="regular-text" value="<?php echo esc_attr($district_name); ?>"/>
                    </td>
         </tr>
         <tr>
                    <th><?php esc_html_e( 'City', 'dokan-lite' ); ?></th>
                    <td>
                        <input type="text" name="city_name" class="regular-text" value="<?php echo esc_attr($city_name); ?>"/>
                    </td>
         </tr>
    <?php
 }
add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );
function my_save_extra_profile_fields( $user_id ) {
if ( ! current_user_can( 'manage_woocommerce' ) ) {
            return;
        }
    update_usermeta( $user_id, 'dokan_custom_country_name', $_POST['country_name'] );
    update_usermeta( $user_id, 'dokan_custom_district_name', $_POST['district_name'] );
    update_usermeta( $user_id, 'dokan_custom_city_name', $_POST['city_name'] );
}

