<?php
    function additional_custom_styles() {

        /*Enqueue The Styles*/
        wp_enqueue_style( 'uniquestylesheetid', get_template_directory_uri() . '/style.css' ); 
    }
    
    add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );


    function additional_custom_scripts() {

        /*Enqueue The Styles*/
        wp_enqueue_script( 'uniquescriptid', get_template_directory_uri() . '/scripts/index.js', array(), null, true); 
    }
    
    add_action( 'wp_enqueue_scripts', 'additional_custom_scripts' );
?>