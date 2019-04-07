<?php

function WM_cpts_trainers()
{

/**
 * Post Type: Trainers.
 */

    $labels = array(
        "name" => __("Trainers", "custom-post-type-ui"),
        "singular_name" => __("Trainer", "custom-post-type-ui"),
        "menu_name" => __("Trainers", "custom-post-type-ui"),
        "all_items" => __("Trainers", "custom-post-type-ui"),
        "add_new" => __("Add a trainer", "custom-post-type-ui"),
        "add_new_item" => __("Add a new trainer", "custom-post-type-ui"),
        "edit_item" => __("Edit trainer", "custom-post-type-ui"),
        "new_item" => __("New Trainer", "custom-post-type-ui"),
        "view_item" => __("View Trainer", "custom-post-type-ui"),
        "view_items" => __("View Trainers", "custom-post-type-ui"),
        "search_items" => __("Search Trainer", "custom-post-type-ui"),
        "not_found" => __("Trainer not found", "custom-post-type-ui"),
        "not_found_in_trash" => __("Trainer not found in trash", "custom-post-type-ui"),
        "insert_into_item" => __("Insert into trainer profile", "custom-post-type-ui"),
    );

    $args = array(
        "label" => __("Trainers", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "Willie Manalang Club Coach",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "trainers", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "thumbnail", "custom-fields"),
    );

    register_post_type("trainers", $args);
}

add_action('init', 'WM_cpts_trainers');