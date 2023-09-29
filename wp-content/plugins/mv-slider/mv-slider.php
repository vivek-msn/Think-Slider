<?php

/**
 * Plugin Name: MV Slider
 * Plugin URI: https://www.wordpress.org/mv-slider
 * Description: My plugin's description
 * Version: 1.0
 * Requires at least: 5.6
 * Author: Vivek Saini
 * Author URI: https://www.ithinkservices.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mv-slider
 * Domain Path: /languages
 */

 /*
Mv Slider is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Mv Slider is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with MV Slider. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


// Make sure we don't expose any info if called directly
if ( !defined( 'ABSPATH' ) ) {
    die('You Do not Access Directly');
    exit;
}

if( ! class_exists('MV_Slider' ) ){
    class MV_Slider{
        function __construct(){
            $this->define_constants();

            // Hook into the 'admin_menu' action to add admin menu
            add_action( 'admin_menu',array( $this,'add_menu' ) );

            require_once( MV_SLIDER_PATH. 'post-types/class.mv-slider-cpt.php' );
            $MV_Slider_Post_Type = new MV_Slider_Post_Type();
        }

        public function define_constants(){
            define( 'MV_SLIDER_PATH', plugin_dir_path( __FILE__) );
            define( 'MV_SLIDER_URL', plugin_dir_url( __FILE__) );
            define( 'MV_SLIDER_VERSION', '1.0.0');
        }
        
        public static function activate(){
            update_option( 'rewrite_rules', '' );
        }

        public static function deactivate(){
            flush_rewrite_rules();
            unregister_post_type( 'mv-slider' );
        }

        public static function uninstall(){
            
        }

        // This is a Callback function of hook
        public function add_menu(){
        // This is a wordpress function with parameters to display menu below settings options in wp dashboard    
             add_menu_page(
                'MV Slider Options',
                'MV Slider',
                'manage_options',
                'mv_slider_admin',
                array(  $this, 'mv_slider_settings_page' ),
                'dashicons-images-alt2',
            );

            // This is a wordpress function with parameters to display menu under the settings options of plugins page  
            /*add_plugins_page(
                'MV Slider Options',
                'MV Slider',
                'manage_options',
                'mv_slider_admin',
                array(  $this, 'mv_slider_settings_page' ),
            );*/

            // This is a wordpress function with parameters to display menu under the settings options of themes page   
            /*add_theme_page(
                'MV Slider Options',
                'MV Slider',
                'manage_options',
                'mv_slider_admin',
                array(  $this, 'mv_slider_settings_page' ),
            );*/

             // This is a wordpress function with parameters to display menu under the settings options of themes page
             /*add_options_page(
                'MV Slider Options',
                'MV Slider',
                'manage_options',
                'mv_slider_admin',
                array(  $this, 'mv_slider_settings_page' ),
            );*/

             #Adding Submenus
            add_submenu_page(
                'mv_slider_admin',
                'Manage Slides',
                'Manage Slides',
                'manage_options',
                'edit.php?post_type=mv-slider',
                null,
                null
            );
            
            #Adding Submenus
            add_submenu_page(
                'mv_slider_admin',
                'Add New Slide',
                'Add New Slide',
                'manage_options',
                'post-new.php?post_type=mv-slider',
                null,
                null
            );
        }

        //This is a call back function which triggers Settings+Options API-Creating Form
        public function mv_slider_settings_page(){
            require( MV_SLIDER_PATH . 'views/settings-page.php' );
        }
    }
}

if( class_exists( 'MV_Slider' ) ){
    register_activation_hook( __FILE__,array( 'MV_SLIDER', 'activate' ) );
    register_deactivation_hook( __FILE__,array( 'MV_SLIDER', 'deactivate' ) );
    register_uninstall_hook( __FILE__,array( 'MV_SLIDER', 'uninstall' ) );
    $mv_slider = new MV_Slider();
}