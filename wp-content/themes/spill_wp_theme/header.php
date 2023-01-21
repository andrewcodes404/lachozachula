<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php wp_title(); ?><</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96559774-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-96559774-5');
</script>



    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>

  <?php get_template_part( 'template-parts/nav-bar'); ?>
