<?php
/**
 * Plugin Name: Custom Block Settings
 * Description: Create Custom Block Settings
 */

 defined( 'ABSPATH') or die('No Authorized Access!');

 function cta_block_settings() {

	// Register content block
	acf_register_block_type(array(
		'name'				=> 'customblock',
		'title'				=> __('Custom Block'),
		'description'		=> __('A Custom Block for Wordpress Site'),
		'render_template'   => plugin_dir_path(__FILE__) . '/template/templateblock.php',
		'category'			=> 'design',
		'icon'				=> 'html',
		'keywords'			=> array( 'Block', 'Wordpress' ),
	));
}

if( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'cta_block_settings' );
}

 function custom_colors(){

    add_theme_support(
        'editor-color-palette', 
            array(
                array(
                    'name'  => __( 'White', 'textdomain' ),
                    'slug'  => 'white',
                    'color'	=> '#FFFFFF',
                ),
              array(
                    'name'	=> __( 'Black', 'textdomain' ),
                    'slug'	=> 'black',
                    'color'	=> '#000000',
                ),
                array(
                    'name'  => __( 'Yellow', 'textdomain' ),
                    'slug'  => 'yellow',
                    'color'	=> '#ffd000',
                ),
                array(
                    'name'  => __( 'Blue', 'textdomain' ),
                    'slug'  => 'blue',
                    'color' => '#347ab7',
                ),
                array(
                    'name'  => __( 'Green', 'textdomain' ),
                    'slug'  => 'green',
                    'color' => '#2e924d',
                ),
                array(
                    'name'	=> __( 'Gray', 'textdomain' ),
                    'slug'	=> 'gray',
                    'color'	=> '#464646',
                ),
                array(
                    'name'	=> __( 'Light Gray', 'textdomain' ),
                    'slug'	=> 'lightgray',
                    'color'	=> '#ebebeb',
                )
            )
    );
    add_theme_support(
        'editor-font-sizes', 
            array(
                array(
                    'name' => 'Small',
                    'slug' => 'small',
                    'size' => 10
                    
                ),
                array(
                    'name' => 'Normal',
                    'slug' => 'normal',
                    'size' => 15
                    
                ),
                array(
                    'name' => 'Large',
                    'slug' => 'large',
                    'size' => 30
                    
                ),
                array(
                    'name' => 'X-Large',
                    'slug' => 'xlarge',
                    'size' => 50
                    
                )
            )
    );
}

add_action('init', 'custom_colors');