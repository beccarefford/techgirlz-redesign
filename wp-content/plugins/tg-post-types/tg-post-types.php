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

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_staff-info',
		'title' => 'Staff Info',
		'fields' => array (
			array (
				'key' => 'field_568d57246233b',
				'label' => 'Job Title',
				'name' => 'job_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_568d573f6233c',
				'label' => 'Twitter',
				'name' => 'twitter',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_568d57696233d',
				'label' => 'Facebook',
				'name' => 'facebook',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_568d57716233e',
				'label' => 'LinkedIn',
				'name' => 'linkedin',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'team',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'discussion',
				1 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}

?>
