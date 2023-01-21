
<!-- keep this div or things will break ??-->
<div>

  <div class="nav-cont">

    <div class="logo">
      <a href="<?php echo get_home_url(); ?>">
          <img class="hover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/graphics/nav-logo.svg">
      </a>
    </div>

    <div class="nav-bar ">
     <?php
          $defaults = array (
              ///ask if you want wp to create a container
              'container' => false,
              ///telling wp this is where the menu is
              'theme_location' => 'drop-menu1',
              ///gives the menu a class for your css
              'menu_class' => 'nav-drop',
              'items_wrap' => '%3$s'
          );
       /// here's the function to call it
      wp_nav_menu( $defaults);
      ?>
   
    </div><!-- .nav-bar -->
  </div>
</div>
