<?php
/*
Plugin Name: Register Custom Post Type
Plugin URI: http://wordpress.org
Description: This plugin register custom post type
Author: NhatNB
Version: 1.0
Author URI: http://facebook.com/koolboy1907
*/

add_action('init', 'register_slider_post_type');
/*Register Slider post type*/
function register_slider_post_type() {
    $labels = array(
        'name'                  => __( 'Slider', 'td' ),
        'singular_name'         => __( 'Slider', 'td' ),
        'menu_name'             => __( 'Slider', 'td' ),
        'add_new'               => __( 'New Slider', 'td' ),
        'add_new_item'          => __( 'Add New Slider', 'td' ),
        'new_item'              => __( 'New Slider', 'td' ),
        'edit_item'             => __( 'Edit Slider', 'td' ),
        'view_item'             => __( 'View Slider', 'td' ),
        'all_items'             => __( 'All Sliders', 'td' ),
        'search_items'          => __( 'Search Slider Post', 'td' ),
        'not_found'             => __( 'No Slider Found', 'td' ),
        'not_found_in_trash'    => __( 'No Slider Found In Trash', 'td' ),
        'parent_item_colon'     => __( 'Parent Slider:', 'td' ),
    );
    $args = array(
        'labels'      => $labels,
        'supports'    => array( 'title', 'editor', 'thumbnail','excerpt','thumbnail','comments','revisions' ),
        'public'      => true,
        'has_archive' => true,
        'hierarchical' => true,
        //'rewrite'   => array('slug' => 'slider','with_front' => false),
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
		'menu_icon'   => 'dashicons-camera',
        'publicly_queryable' => true,
        'capability_type'=> 'post',
    );
    register_post_type( 'slider', $args );
    flush_rewrite_rules();
}

add_filter( 'post_updated_messages', 'slider_updated_messages' );
/*Slider update messages.*/
function slider_updated_messages( $messages ) {
    global $post, $post_ID;
    $messages[__( 'Slider' )] = array(
        0  => '',
        1  => sprintf( __( 'Slider Updated. <a href="%s">View Slider post</a>', 'td' ), esc_url( get_permalink( $post_ID ) ) ),
        2  => __( 'Custom Field Updated.', 'td' ),
        3  => __( 'Custom Field Deleted.', 'td' ),
        4  => __( 'Slider Post Updated.', 'td' ),
        5  => isset( $_GET['revision']) ? sprintf( __( 'Slider Restored To Revision From %s', 'td' ), wp_post_revision_title((int)$_GET['revision'], false)) : false,
        6  => sprintf( __( 'Slider Post Published. <a href="%s">View Slider post</a>', 'td' ), esc_url( get_permalink( $post_ID ) ) ),
        7  => __( 'Slider Saved.', 'td' ),
        8  => sprintf( __('Slider Submitted. <a target="_blank" href="%s">Preview Slider Post</a>', 'td' ), esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) ),
        9  => sprintf( __( 'Slider Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Slider</a>', 'td' ),date_i18n( __( 'M j, Y @ G:i', 'td' ), strtotime( $post->post_date ) ), esc_url( get_permalink( $post_ID ) ) ),
        10 => sprintf( __( 'Slider Draft Updated. <a target="_blank" href="%s">Preview Slider</a>', 'td' ), esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) ),
    );
    return $messages;
}

/* Change default Post to Product */
function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Product';
    $submenu['edit.php'][5][0] = 'Product';
    $submenu['edit.php'][10][0] = 'Add Product';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = __( 'Product', 'td' );
    $labels->singular_name = __( 'Product', 'td' );
    $labels->add_new = __( 'Add Product', 'td' );
    $labels->add_new_item = __( 'Add Product', 'td' );
    $labels->edit_item = __( 'Edit Product', 'td' );
    $labels->new_item = __( 'Product', 'td' );
    $labels->view_item = __( 'Views Product', 'td' );
    $labels->search_items = __( 'Search Product', 'td' );
    $labels->not_found = __( 'No Product found', 'td' );
    $labels->not_found_in_trash = __( 'No Product found in Trash', 'td' );
    $labels->all_items = __( 'All Product', 'td' );
    $labels->menu_name = __( 'Product', 'td' );
    $labels->name_admin_bar = __( 'Product', 'td' );
}
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

/*Register Custom Post Type Project */
add_action('init', 'register_project_post_type');
function register_project_post_type() {
    $labels = array(
        'name'                  => __( 'Project', 'td' ),
        'singular_name'         => __( 'Project', 'td' ),
        'menu_name'             => __( 'Project', 'td' ),
        'add_new'               => __( 'New Project', 'td' ),
        'add_new_item'          => __( 'Add New Project', 'td' ),
        'new_item'              => __( 'New Project', 'td' ),
        'edit_item'             => __( 'Edit Project', 'td' ),
        'view_item'             => __( 'View Project', 'td' ),
        'all_items'             => __( 'All Project', 'td' ),
        'search_items'          => __( 'Search Project', 'td' ),
        'not_found'             => __( 'No Project Found', 'td' ),
        'not_found_in_trash'    => __( 'No Project Found In Trash', 'td' ),
        'parent_item_colon'     => __( 'Parent Project:', 'td' ),
    );
    $args = array(
        'labels'      => $labels,
        'supports'    => array( 'title', 'editor', 'thumbnail','excerpt','thumbnail','comments','revisions' ),
        'public'      => true,
        'has_archive' => true,
        'hierarchical' => true,
        //'rewrite'   => array('slug' => 'project','with_front' => false),
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 6,
        'menu_icon'   => 'dashicons-exerpt-view',
        'publicly_queryable' => true,
        'capability_type'=> 'post',
    );
    register_post_type( 'project', $args );
    flush_rewrite_rules();
}

add_filter( 'post_updated_messages', 'project_updated_messages' );
/*Project update messages.*/
function project_updated_messages( $messages ) {
    global $post, $post_ID;
    $messages[__( 'Project' )] = array(
        0  => '',
        1  => sprintf( __( 'Project Updated. <a href="%s">View Project post</a>', 'td' ), esc_url( get_permalink( $post_ID ) ) ),
        2  => __( 'Custom Field Updated.', 'td' ),
        3  => __( 'Custom Field Deleted.', 'td' ),
        4  => __( 'Project Post Updated.', 'td' ),
        5  => isset( $_GET['revision']) ? sprintf( __( 'Project Restored To Revision From %s', 'td' ), wp_post_revision_title((int)$_GET['revision'], false)) : false,
        6  => sprintf( __( 'Project Post Published. <a href="%s">View Slider post</a>', 'td' ), esc_url( get_permalink( $post_ID ) ) ),
        7  => __( 'Project Saved.', 'td' ),
        8  => sprintf( __('Project Submitted. <a target="_blank" href="%s">Preview Slider Post</a>', 'td' ), esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) ),
        9  => sprintf( __( 'Project Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Project</a>', 'td' ),date_i18n( __( 'M j, Y @ G:i', 'td' ), strtotime( $post->post_date ) ), esc_url( get_permalink( $post_ID ) ) ),
        10 => sprintf( __( 'Project Draft Updated. <a target="_blank" href="%s">Preview Project</a>', 'td' ), esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) ),
    );
    return $messages;
}
add_action( 'init', 'register_project_taxonomy' );
/* Register project taxonomy*/
function register_project_taxonomy() {
    $labels = array(
        'name'                       => __( 'Project Categories', 'td' ),
        'singular_name'              => __( 'Category', 'td' ),
        'search_items'               => __( 'Search categories', 'td' ),
        'menu_name'                  => __( 'Categories Project', 'td' ),
        'all_items'                  => __( 'All Categories', 'td' ),
        'parent_item'                => __( 'Parent Category', 'td' ),
        'parent_item_colon'          => __( 'Parent Category:', 'td' ),
        'new_item_name'              => __( 'New Category Name', 'td' ),
        'add_new_item'               => __( 'Add New Category', 'td' ),
        'edit_item'                  => __( 'Edit Category', 'td' ),
        'update_item'                => __( 'Update Category', 'td' ),
        'add_or_remove_items'        => __( 'Add or remove categories', 'td' ),
        'choose_from_most_used'      => __( 'Choose from the most used categories', 'td' ),
        'not_found'                  => __( 'No Category found.' ),
    );
    $args = array(
        'labels'       => $labels,
        'hierarchical' => true,
    );
    register_taxonomy( 'project_category', 'project', $args );
    flush_rewrite_rules();
}

add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy_project');
function tsm_filter_post_type_by_taxonomy_project() {
    global $typenow;
    $post_type = 'project';
    $taxonomy  = 'project_category';
    if ($typenow == $post_type) {
        $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
        $info_taxonomy = get_taxonomy($taxonomy);
        wp_dropdown_categories(array(
            'show_option_all' => __("All {$info_taxonomy->label}"),
            'taxonomy'        => $taxonomy,
            'name'            => $taxonomy,
            'orderby'         => 'name',
            'selected'        => $selected,
            'show_count'      => true,
            'hide_empty'      => true,
        ));
    };
}
add_filter('parse_query', 'tsm_convert_id_to_term_in_query_project');
function tsm_convert_id_to_term_in_query_project($query) {
    global $pagenow;
    $post_type = 'project';
    $taxonomy  = 'project_category';
    $q_vars    = &$query->query_vars;
    if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
        $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
        $q_vars[$taxonomy] = $term->slug;
    }
}

/*Register Custom Post Type Question & Answer */
add_action('init', 'register_question_post_type');
function register_question_post_type() {
    $labels = array(
        'name'                  => __( 'Q/A', 'td' ),
        'singular_name'         => __( 'Q/A', 'td' ),
        'menu_name'             => __( 'Q/A', 'td' ),
        'add_new'               => __( 'New Question', 'td' ),
        'add_new_item'          => __( 'Add New Question', 'td' ),
        'new_item'              => __( 'New Question', 'td' ),
        'edit_item'             => __( 'Edit Question', 'td' ),
        'view_item'             => __( 'View Question', 'td' ),
        'all_items'             => __( 'All Questions', 'td' ),
        'search_items'          => __( 'Search Question', 'td' ),
        'not_found'             => __( 'No Question Found', 'td' ),
        'not_found_in_trash'    => __( 'No Question Found In Trash', 'td' ),
        'parent_item_colon'     => __( 'Parent Question:', 'td' ),
    );
    $args = array(
        'labels'      => $labels,
        'supports'    => array( 'title', 'editor', 'thumbnail','excerpt','thumbnail','comments','revisions' ),
        'public'      => true,
        'has_archive' => true,
        'hierarchical' => true,
        //'rewrite'   => array('slug' => 'question','with_front' => false),
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => false,
        'menu_position' => 7,
        'menu_icon'   => 'dashicons-welcome-write-blog',
        'publicly_queryable' => true,
        'capability_type'=> 'post',
    );
    register_post_type( 'question', $args );
    flush_rewrite_rules();
}

add_filter( 'post_updated_messages', 'question_updated_messages' );
/*Project update messages.*/
function question_updated_messages( $messages ) {
    global $post, $post_ID;
    $messages[__( 'Question' )] = array(
        0  => '',
        1  => sprintf( __( 'Question Updated. <a href="%s">View Question post</a>', 'td' ), esc_url( get_permalink( $post_ID ) ) ),
        2  => __( 'Custom Field Updated.', 'td' ),
        3  => __( 'Custom Field Deleted.', 'td' ),
        4  => __( 'Project Post Updated.', 'td' ),
        5  => isset( $_GET['revision']) ? sprintf( __( 'Question Restored To Revision From %s', 'td' ), wp_post_revision_title((int)$_GET['revision'], false)) : false,
        6  => sprintf( __( 'Question Post Published. <a href="%s">View Question post</a>', 'td' ), esc_url( get_permalink( $post_ID ) ) ),
        7  => __( 'Question Saved.', 'td' ),
        8  => sprintf( __('Question Submitted. <a target="_blank" href="%s">Preview Question Post</a>', 'td' ), esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) ),
        9  => sprintf( __( 'Question Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Question</a>', 'td' ),date_i18n( __( 'M j, Y @ G:i', 'td' ), strtotime( $post->post_date ) ), esc_url( get_permalink( $post_ID ) ) ),
        10 => sprintf( __( 'Question Draft Updated. <a target="_blank" href="%s">Preview Question</a>', 'td' ), esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) ),
    );
    return $messages;
}
add_action( 'init', 'register_question_taxonomy' );
/* Register project taxonomy*/
function register_question_taxonomy() {
    $labels = array(
        'name'                       => __( 'Question Categories', 'td' ),
        'singular_name'              => __( 'Category', 'td' ),
        'search_items'               => __( 'Search categories', 'td' ),
        'menu_name'                  => __( 'Categories Question', 'td' ),
        'all_items'                  => __( 'All Categories', 'td' ),
        'parent_item'                => __( 'Parent Category', 'td' ),
        'parent_item_colon'          => __( 'Parent Category:', 'td' ),
        'new_item_name'              => __( 'New Category Name', 'td' ),
        'add_new_item'               => __( 'Add New Category', 'td' ),
        'edit_item'                  => __( 'Edit Category', 'td' ),
        'update_item'                => __( 'Update Category', 'td' ),
        'add_or_remove_items'        => __( 'Add or remove categories', 'td' ),
        'choose_from_most_used'      => __( 'Choose from the most used categories', 'td' ),
        'not_found'                  => __( 'No Category found.' ),
    );
    $args = array(
        'labels'       => $labels,
        'hierarchical' => true,
    );
    register_taxonomy( 'question_category', 'question', $args );
    flush_rewrite_rules();
}

add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy_question');
function tsm_filter_post_type_by_taxonomy_question() {
    global $typenow;
    $post_type = 'question';
    $taxonomy  = 'question_category';
    if ($typenow == $post_type) {
        $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
        $info_taxonomy = get_taxonomy($taxonomy);
        wp_dropdown_categories(array(
            'show_option_all' => __("All {$info_taxonomy->label}"),
            'taxonomy'        => $taxonomy,
            'name'            => $taxonomy,
            'orderby'         => 'name',
            'selected'        => $selected,
            'show_count'      => true,
            'hide_empty'      => true,
        ));
    };
}
add_filter('parse_query', 'tsm_convert_id_to_term_in_query_question');
function tsm_convert_id_to_term_in_query_question($query) {
    global $pagenow;
    $post_type = 'question';
    $taxonomy  = 'question_category';
    $q_vars    = &$query->query_vars;
    if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
        $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
        $q_vars[$taxonomy] = $term->slug;
    }
}

/*Register Custom Post Type Question & Answer */
add_action('init', 'register_partner_post_type');
function register_partner_post_type() {
    $labels = array(
        'name'                  => __( 'Partner', 'td' ),
        'singular_name'         => __( 'Partner', 'td' ),
        'menu_name'             => __( 'Partner', 'td' ),
        'add_new'               => __( 'New Partner', 'td' ),
        'add_new_item'          => __( 'Add New Partner', 'td' ),
        'new_item'              => __( 'New Partner', 'td' ),
        'edit_item'             => __( 'Edit Partner', 'td' ),
        'view_item'             => __( 'View Partner', 'td' ),
        'all_items'             => __( 'All Partners', 'td' ),
        'search_items'          => __( 'Search Partner', 'td' ),
        'not_found'             => __( 'No Partner Found', 'td' ),
        'not_found_in_trash'    => __( 'No Partner Found In Trash', 'td' ),
        'parent_item_colon'     => __( 'Parent Partner:', 'td' ),
    );
    $args = array(
        'labels'      => $labels,
        'supports'    => array( 'title', 'thumbnail','thumbnail','revisions' ),
        'public'      => true,
        'has_archive' => true,
        'hierarchical' => true,
        //'rewrite'   => array('slug' => 'partner','with_front' => false),
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => false,
        'menu_position' => 8,
        'menu_icon'   => 'dashicons-groups',
        'publicly_queryable' => true,
        'capability_type'=> 'post',
    );
    register_post_type( 'partner', $args );
    flush_rewrite_rules();
}

add_filter( 'post_updated_messages', 'partner_updated_messages' );
/*Question update messages.*/
function partner_updated_messages( $messages ) {
    global $post, $post_ID;
    $messages[__( 'Partner' )] = array(
        0  => '',
        1  => sprintf( __( 'Partner Updated. <a href="%s">View Question post</a>', 'td' ), esc_url( get_permalink( $post_ID ) ) ),
        2  => __( 'Custom Field Updated.', 'td' ),
        3  => __( 'Custom Field Deleted.', 'td' ),
        4  => __( 'Partner Post Updated.', 'td' ),
        5  => isset( $_GET['revision']) ? sprintf( __( 'Partner Restored To Revision From %s', 'td' ), wp_post_revision_title((int)$_GET['revision'], false)) : false,
        6  => sprintf( __( 'Partner Post Published. <a href="%s">View Partner post</a>', 'td' ), esc_url( get_permalink( $post_ID ) ) ),
        7  => __( 'Partner Saved.', 'td' ),
        8  => sprintf( __('Partner Submitted. <a target="_blank" href="%s">Preview Partner Post</a>', 'td' ), esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) ),
        9  => sprintf( __( 'Partner Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Partner</a>', 'td' ),date_i18n( __( 'M j, Y @ G:i', 'td' ), strtotime( $post->post_date ) ), esc_url( get_permalink( $post_ID ) ) ),
        10 => sprintf( __( 'Partner Draft Updated. <a target="_blank" href="%s">Preview Partner</a>', 'td' ), esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) ),
    );
    return $messages;
}



