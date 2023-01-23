<div class="relative w1300">
  <div class="flex-row nav-bar">

    <div class="nav-logo-cont zero-12 sml-12 med-5 lrg-6 flex-col ">
      <a href="<?php echo get_home_url(); ?>">
        <img class="hover" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/graphics/nav-logo.svg">
      </a>
    </div>

    <!-- <div class="flex-col justify-center"> -->

    <div class="nav-btn-cont zero-12 sml-12 med-7 lrg-6 flex-row  align-center pr1 ">

      <a href="/lcc/about">
        <div class="nav-btn p05 flex-col justify-center">
          <p class="hover-scale">about</p>
        </div>
      </a>

      <a href="/lcc/shop">
        <div class="nav-btn p05 flex-col justify-center">
          <p class="hover-scale">shop</p>
        </div>
      </a>

      <a href="/lcc/tour">
        <div class="nav-btn p05 flex-col justify-center">
          <p class="hover-scale">tour</p>
        </div>
      </a>

      <div class="nav-btn p05 flex-col justify-center">
        <p id="drop-menu-btn" class="hover-scale">menu</p>
      </div>


      <div class="translate-btn p05 flex-col justify-center my-test">
        <?php echo do_shortcode('[google-translator]'); ?>


      </div>
    </div>


    <!-- </div> -->

    <ul class="the-splodge drop-menu">
      <?php
      $defaults = array(
        ///ask if you want wp to create a container
        'container' => false,
        ///telling wp this is where the menu is
        'theme_location' => 'drop-menu1',
        ///gives the menu a class for your css
        'menu_class' => 'nav-drop',
        'items_wrap' => '%3$s'
      );
      /// here's the function to call it
      wp_nav_menu($defaults);
      ?>
    </ul>

  </div>
</div>