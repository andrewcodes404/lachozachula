<?php // Function for creating Widgets
function apd_create_widget($name, $id, $description) {

    register_sidebar(array(
        'name' => __( $name ),
        'id' => $id,
        'description' => __( $description ),
        'before_widget' => '<div id="'.$id.'" class="widget %1$s %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

}

// Create the actual widgets
apd_create_widget("Header", "uptop", "Displays in the header of the site, above the title");

apd_create_widget("footer-widget1", "footer-widget1", "my footer widget");

apd_create_widget("side-widget", "side-widget", "my side widget");

apd_create_widget("donate-page-widget", "donate-page-widget", "my donate-page widget");

apd_create_widget("donate-widget", "donate-widget", "my donate widget");