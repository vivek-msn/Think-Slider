<?php
 
 if( !class_exists( 'MV_slider_Post_Type') ){
    class MV_Slider_Post_Type{
        function __construct(){

            // Hook into the 'init' action to add custom post type
            add_action('init',array($this,'create_post_type'));

            // Hook into the 'add_meta_boxes' action to add custom meta boxes
            add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );

            // Hook into the 'save_post' action to save post in table
            add_action( 'save_post', array( $this, 'save_post'), 10, 2 );
        }

        public function create_post_type(){
            register_post_type(
                'mv-slider',
                array(
                    'label' => 'Slider',
                    'description' => 'Sliders',
                    'labels' => array(
                        'name' => 'Sliders',
                        'singular_name' => 'Slider'
                    ),
                    'public' => true,
                    'supports' => array( 'title', 'editor', 'thumbnail' ),
                    'hierarchical' => false,
                    'show_ui'   => true,
                    'show_in_menu' => true,
                    'menu_position' => 65,
                    'show_in_admin_bar' => true,
                    'show_in_nav_menus' => true,
                    'can_export' => true,
                    'has_archive' => false,
                    'exclude_from_search' => false,
                    'publicly_queryable' =>true,
                    'show_in_rest' => true,
                    'menu_icon' => 'dashicons-leftright'
                )
            );
        }

        public function add_meta_boxes(){
            add_meta_box(
                'mv_slider_meta_box',
                'Link Options',
                array( $this, 'add_inner_meta_boxes' ),
                'mv-slider',
                'normal',
                'high'
            );
        }

        public function add_inner_meta_boxes( $post ){
            require_once( MV_SLIDER_PATH. 'view/mv-slider_metabox.php' );
        }
    }
 }
