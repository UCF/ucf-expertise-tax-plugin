<?php
/**
 * Defines the expertise taxonomy
 */
if ( ! class_exists( 'UCF_Expertise_Taxonomy' ) ) {
    class UCF_Expertise_Taxonomy {
        public static function register() {
            register_taxonomy(
                apply_filters( 'ucf_expertise_taxonomy_slug', 'expertise' ),
                apply_filters( 'ucf_expertise_taxonomy_objects', array() ),
                self::args()
            );
        }

        public static function labels() {
            return apply_filters( 'ucf_expertise_taxonomy_labels', array(
                'name'                       => _x( 'Expertise', 'Taxonomy General Name', 'ucf-expertise-tax-plugin' ),
                'singular_name'              => _x( 'Expertise', 'Taxonomy Singular Name', 'ucf-expertise-tax-plugin' ),
                'menu_name'                  => __( 'Expertise', 'ucf-expertise-tax-plugin' ),
                'all_items'                  => __( 'All Expertise', 'ucf-expertise-tax-plugin' ),
                'parent_item'                => __( 'Parent Expertise', 'ucf-expertise-tax-plugin' ),
                'parent_item_colon'          => __( 'Parent Expertise:', 'ucf-expertise-tax-plugin' ),
                'new_item_name'              => __( 'New Expertise Name', 'ucf-expertise-tax-plugin' ),
                'add_new_item'               => __( 'Add New Expertise', 'ucf-expertise-tax-plugin' ),
                'edit_item'                  => __( 'Edit Expertise', 'ucf-expertise-tax-plugin' ),
                'update_item'                => __( 'Update Expertise', 'ucf-expertise-tax-plugin' ),
                'view_item'                  => __( 'View Expertise', 'ucf-expertise-tax-plugin' ),
                'separate_items_with_commas' => __( 'Separate expertise with commas', 'ucf-expertise-tax-plugin' ),
                'add_or_remote_items'        => __( 'Add or remove expertise', 'ucf-expertise-tax-plugin' ),
                'choose_from_most_used'      => __( 'Choose from most used expertise', 'ucf-expertise-tax-plugin' ),
                'popular_items'              => __( 'Popular expertise', 'ucf-expertise-tax-plugin' ),
                'search_items'               => __( 'Search expertise', 'ucf-expertise-tax-plugin' ),
                'not_found'                  => __( 'Not Found', 'ucf-expertise-tax-plugin' ),
                'no_terms'                   => __( 'No expertise', 'ucf-expertise-tax-plugin' ),
                'items_list'                 => __( 'Expertise list', 'ucf-expertise-tax-plugin' ),
                'items_list_navigation'      => __( 'Expertise list navigation', 'ucf-expertise-tax-plugin' ),
            ) );
        }

        public static function args() {
            return apply_filters( 'ucf_expertise_taxonomy_args', array(
                'labels'               => self::labels(),
                'hierarchical'         => true,
                'public'               => true,
                'show_ui'              => true,
                'show_admin_column'    => true,
                'show_in_nav_menus'    => false,
                'show_tagcloud'        => false,
                'show_in_rest'         => true,
                'rest_base'            => 'expertise',
                'rest_controller_base' => 'WP_REST_Terms_Controller'
            ) );
        }
    }
}
