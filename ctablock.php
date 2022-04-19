<?php
/**
 * Plugin Name: Custom Block Settings
 * Description: Create Custom Block Settings
 */

 defined( 'ABSPATH') or die('No Authorized Access!');

 add_action( 'acf/init','cta_block_settings' );

 function cta_block_settings(){

    if( function_exists( 'acf_register_block_type'  )){

        acf_register_block_type( array(
            'name'                  => 'customblocksettings',
            'title'                 => __('Custom Block Settings'),
            'description'           => __('A Custom Block Settings for Wodpress'),
            'render_template'       => plugins_url( 'template/templateblock.php', __FILE__ ),
            'category'              => 'design',
            'icon'                  => 'html',
            'keywords'              => array( 'html','wordpress' ),            
        ));
    }
 }