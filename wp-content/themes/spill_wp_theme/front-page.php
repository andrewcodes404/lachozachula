<?php get_header(); ?>
<small class="phpinfo">####this is the front-page.php</small>
<!-- hide all alerts by display: none in .phpinfo -->


<div class="flex-row justify-center">
  <div class="sml-12">
    <div class="carousel">
      
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/photo/hero/1280-16x9-blank.svg">
        <div class="carousel-img" id="carousel-img5"></div>
        <div class="carousel-img" id="carousel-img4"></div>
         <div class="carousel-img" id="carousel-img3"></div>
        <div class="carousel-img" id="carousel-img2"></div>
        <div class="carousel-img" id="carousel-img1"></div>
    </div>
  </div>
</div>

<div class="container ">

  <div class="flex-row justify-center">
    <div class="sml-12 med-12 ">
        <br>
        <h1 id="home-title">We are La Choza Chula<span class="donate-sticker"><a href="https://lachozachula.org/donate/">Donate</a></span></h1>
        <h4>We are La Choza Chula – a social enterprise seeking to ensure local communities and the environment benefit from the growing tourism of El Paredón, Guatemala. We work to provide education, enterprise and employment opportunities for the people of El Paredón, promoting positive impact from tourism on the local community, and improving human and environmental well-being.  Our local tours and products ensure that the local community benefits from the growing tourism in the area as well as providing support for our projects.</h4>
        <h4 class="links-secondary"><a href="http://lachozachula.org/about/">Find out more about us...</a> </h4>
    </div>
  </div>
</div>

<?php get_footer(); ?>
