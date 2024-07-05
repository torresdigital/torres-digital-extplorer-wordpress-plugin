<?php /* The Silence is Gold!

Plugin Name: Torres Digital - eXtPlorer WP Plugin 🟢
Plugin URI: http://torresdigital.com.br
Description: ❉ This plugin allows the <strong>eXtPlorer </strong> to be accessed directly through the Wordpress Panel. Simple as that, simple as life should be. Source Code on GitHub https://github.com/torresdigital/torres-digital-eXtPlorer-wordpress-plugin eXtPlorer  Site - https://extplorer.net/
Version: 2.2.4 - 2024
Author: Torres Digital | Sites → Lojas Virtuais e e-Commerce.
Author URI: https://facebook.com/torresdigital */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

     /**
        *Torres Digital eXtPlorer  WP Plugin By Torres Digital !
        *
        */
        add_action('admin_bar_menu', 'add_toolbar_items_ext', 100);
        function add_toolbar_items_ext($admin_bar){
            $admin_bar->add_menu( array(
                'id'    => 'extplorer',
                'title' => ' 🟢 eXtPlorer login 🚀',
                'href'  => '/wp-content/plugins/torres-digital-extplorer-wordpress-plugin-main/eXtplorer_2.1.15/',
                'meta'  => array(
                    'title' => __('* eXtPlorer  - LOGIN'),
                    'target' => '_blank',
                    'class' => 'extplorer'
                ),
            ));
            $admin_bar->add_menu( array(
                'id'    => 'extplorer-sub-item',
                'parent' => 'extplorer',
                'title' => 'Torres Digital - facebook <i class="fab fa-facebook-f"></i>',
                'href'  => 'https://www.facebook.com/torresdigital/',
                'meta'  => array(
                    'title' => __('Torres Digital - facebook'),
                    'target' => '_blank',
                    'class' => 'redes-sociais-facebook'
                ),
            ));
            $admin_bar->add_menu( array(
                'id'    => 'extplorer-second-sub-item',
                'parent' => 'extplorer',
                'title' => 'Torres Digital -Sites → Lojas Virtuais e e-Commerce',
                'href'  => 'https://www.torresdigital.com.br/',
                'meta'  => array(
                    'title' => __('Torres Digital -Sites → Lojas Virtuais e e-Commerce'),
                    'target' => '_blank',
                    'class' => 'site-torres-digital'
                ),
            ));
        }

/**
 * Font Awesome Kit Setup
 *
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */
if (! function_exists('fa_custom_setup_kit') ) {
  function fa_custom_setup_kit($kit_url = 'https://kit.fontawesome.com/d292a654fc.js') {
    foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
      add_action(
        $action,
        function () use ( $kit_url ) {
          wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
        }
      );
    }
  }
}


/*
* Font AWesome
*/
function extplorer_enqueue_icon_stylesheet() {
	wp_register_style( 'fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome');
}
add_action( 'wp_enqueue_scripts', 'extplorer_enqueue_icon_stylesheet' );
// Add a parent shortcut link


/* Style */
function extplorer_load_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'style', $plugin_url . 'assets/css/style.css' );

}
add_action( 'wp_enqueue_scripts', 'extplorer_load_plugin_css' );

?>
