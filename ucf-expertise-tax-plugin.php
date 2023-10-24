<?php
/*
Plugin Name: UCF Expertise Taxonomy Plugin
Description: A WordPress plugin that defines the Expertise taxonomy, used for grouping posts by area of research or subject.
Version: 1.0.0
Author: UCF Web Communications
License: GPL3
GitHub Plugin URI: UCF/ucf-expertise-tax-plugin
*/

if ( ! defined( 'WPINC' ) ) {
    die;
}

add_action( 'plugins_loaded', function() {
    include_once 'includes/ucf-expertise-taxonomy.php';

    add_action( 'init', array( 'UCF_Expertise_Taxonomy', 'register' ), 10, 0 );
} );
