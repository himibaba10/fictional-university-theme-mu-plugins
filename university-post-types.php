<!-- We put the custom post type code into mu-plugin folder so the owner can't disable the custom post types from the wp dashboard -->

<?php
function university_post_types()
{
    register_post_type("event", array(
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
        'show_in_rest' => true, //This will use the modern block editor
        "menu_icon" => "dashicons-calendar", //This will change the icon of the Events menu, we can get icons from wp dashicons
        "has_archive" => true //Where it should have an archive page
    ));
}

add_action("init", "university_post_types");