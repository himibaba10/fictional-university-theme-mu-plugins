<?php

function university_post_types()
{
    register_post_type("event", array(
        "public" => true,
        "has_archive" => true,
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
        'show_in_rest' => true, //for modern editor
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
        'show_in_rest' => true, //for modern editor
    ));
}

add_action("init", "university_post_types");