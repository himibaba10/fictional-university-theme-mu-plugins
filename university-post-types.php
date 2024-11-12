<?php
function university_post_types()
{
    // Campus post type
    register_post_type("campus", array(
        'show_in_rest' => true, //This will use the modern block editor
        "public" => true, //Now we can manage events from wp dashboard
        "supports" => array("title", "editor", "excerpt"), //lets us add fields that we want
        "rewrite" => array("slug" => "campuses"), //changes the slug to events
        "labels" => array(
            "name" => "Campuses",
            "singular_name" => "Campus",
            "all_items" => "All Campuses",
            "not_found" => "No campuses found",
            "add_new" => "Add new campus",
            "add_new_item" => "Add new campus",
            "edit_item" => "Edit Campus",
            "search_items" => "Search Campuses",
            "view_item" => "View Campus",
        ),
        "menu_icon" => "dashicons-location-alt", //This will change the icon of the Events menu, we can get icons from wp dashicons
        "has_archive" => true //Where it should have an archive page
    ));

    // Event post type
    register_post_type("event", array(
        'show_in_rest' => true, //This will use the modern block editor
        "public" => true, //Now we can manage events from wp dashboard
        "supports" => array("title", "editor", "excerpt"), //lets us add fields that we want
        "rewrite" => array("slug" => "events"), //changes the slug to events
        "labels" => array(
            "name" => "Events",
            "singular_name" => "Event",
            "all_items" => "All Events",
            "not_found" => "No events found",
            "add_new" => "Add new event",
            "add_new_item" => "Add new event",
            "edit_item" => "Edit Event",
            "search_items" => "Search Events",
            "view_item" => "View Event",
        ),
        "menu_icon" => "dashicons-calendar", //This will change the icon of the Events menu, we can get icons from wp dashicons
        "has_archive" => true //Where it should have an archive page
    ));

    // Program post type
    register_post_type("program", array(
        'show_in_rest' => true, //This will use the modern block editor
        "public" => true, //Now we can manage events from wp dashboard
        "supports" => array("title", "editor"), //lets us add fields that we want
        "rewrite" => array("slug" => "programs"), //changes the slug to events
        "labels" => array(
            "name" => "Programs",
            "singular_name" => "Program",
            "all_items" => "All Programs",
            "not_found" => "No programs found",
            "add_new" => "Add new program",
            "add_new_item" => "Add new program",
            "edit_item" => "Edit Program",
            "search_items" => "Search Programs",
            "view_item" => "View Program",
        ),
        "menu_icon" => "dashicons-awards", //This will change the icon of the Events menu, we can get icons from wp dashicons
        "has_archive" => true //Where it should have an archive page
    ));

    //Professor Post Type
    register_post_type("professor", array(
        "show_in_rest" => true,
        "public" => true,
        "supports" => array("title", "editor", "thumbnail"),
        "labels" => array(
            "name" => "Professors",
            "singular_name" => "Professor",
            "all_items" => "All Professors",
            "not_found" => "No professors found",
            "add_new" => "Add new professor",
            "add_new_item" => "Add new professor",
            "edit_item" => "Edit Professor",
            "search_items" => "Search Professors",
            "view_item" => "View Professor",
        ),
        "menu_icon" => "dashicons-welcome-learn-more"
    ));
}

add_action("init", "university_post_types");