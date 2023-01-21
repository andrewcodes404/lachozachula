<?php
    $defaults = array (
///ask if you want wp to create a container
        'container' => false,
///telling wp this is where the menu is
        'theme_location' => 'footer-menu',
///gives the menu a class for your css
        'menu_class' => '',
        'items_wrap' => '%3$s'
    );

    wp_nav_menu( $defaults);
?>
