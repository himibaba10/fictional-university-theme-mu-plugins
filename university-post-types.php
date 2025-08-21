<?php

function university_post_types()
{
    register_post_type("event", array(
        "public" => true,
        "has_archive" => true,
        "capability_type" => "event",
        "map_meta_cap" => true,
        "supports" => [
            "title",
            "editor",
            "excerpt",
        ],
        "rewrite" => array(
            "slug" => "events"
        ),
        "labels" => [
            "name" => "Events",
            "add_new_item" => "Add Event",
            "edit_item" => "Edit Event",
            "all_items" => "All Events",
            "singular_name" => "Event"
        ],
        'menu_icon' => "dashicons-calendar",
        'show_in_rest' => true,
    ));

    register_post_type("program", array(
        "public" => true,
        "has_archive" => true,
        "supports" => [
            "title",
            "editor"
        ],
        "rewrite" => array(
            "slug" => "programs"
        ),
        "labels" => [
            "name" => "Programs",
            "add_new_item" => "Add Program",
            "edit_item" => "Edit Program",
            "all_items" => "All Programs",
            "singular_name" => "Program"
        ],
        'menu_icon' => "dashicons-awards",
        'show_in_rest' => true,
    ));

    register_post_type("professor", array(
        "public" => true,
        "supports" => [
            "title",
            "editor",
            "thumbnail"
        ],
        "labels" => [
            "name" => "Professors",
            "add_new_item" => "Add Professor",
            "edit_item" => "Edit Professor",
            "all_items" => "All Professors",
            "singular_name" => "Professor",
            "not_found" => "No professors found",
            "set_featured_image" => "Set professor image",
        ],
        'menu_icon' => "dashicons-welcome-learn-more",
        'show_in_rest' => true,
    ));

    register_post_type("campus", array(
        "public" => true,
        "has_archive" => true,
        "supports" => [
            "title",
            "editor",
            "thumbnail"
        ],
        "rewrite" => array(
            "slug" => "campuses"
        ),
        "labels" => [
            "name" => "Campuses",
            "add_new_item" => "Add Campus",
            "edit_item" => "Edit Campus",
            "all_items" => "All Campuses",
            "singular_name" => "Campus",
            "not_found" => "No Campus found",
            "set_featured_image" => "Set Campus image",
        ],
        'menu_icon' => "dashicons-location-alt",
        'show_in_rest' => true,
    ));

    register_post_type("note", array(
        "public" => false,
        "show_ui" => true,
        "supports" => [
            "title",
            "editor",
        ],
        "labels" => [
            "name" => "Notes",
            "add_new_item" => "Add Note",
            "edit_item" => "Edit Note",
            "all_items" => "All Notes",
            "singular_name" => "Note",
            "not_found" => "No Note found",
        ],
        'menu_icon' => "dashicons-welcome-write-blog",
        'show_in_rest' => true,
    ));
}

add_action("init", "university_post_types");