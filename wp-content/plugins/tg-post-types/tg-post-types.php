<?php

/*
Plugin Name: Staff Plugin for TechGirlz Leadership
Description: Site specific code changes for Techgirlz.org
Author: Rebecca Refford
*/

function register_team_post_type()
{
    $labels = array(
        "name" => "Team",
        "singular_name" => "Team",
        "menu_name" => "Leadership Team",
        "all_items" => "All Team Members",
        "add_new" => "Add New",
        "add_new_item" => "Add New Team Member",
        "edit" => "Edit",
        "edit_item" => "Edit Team Member",
        "new_item" => "New Team Member",
        "view" => "View",
        "view_item" => "View Team Member",
        "search_items" => "Search Team Members",
        "not_found" => "No Team Members Found",
        "not_found_in_trash" => "No Team Members found in Trash",
    );

    $args = Array(
        "labels" => $labels,
        "description" => "TechGirlz Team Leaders",
        "public" => true,
        "show_ui" => true,
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "team", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "excerpt", "revisions", "thumbnail", "author", "tags"),
    );
    register_post_type("team", $args);
}
add_action('init', 'register_team_post_type');

?>
