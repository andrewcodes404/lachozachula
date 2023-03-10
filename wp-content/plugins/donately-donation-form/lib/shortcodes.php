<?php

add_shortcode( 'dntly_300width_form', 'dntly_build_formjs' );
add_shortcode( 'dntly_formjs', 'dntly_build_formjs' );
function dntly_build_formjs($atts) {

  $dntly_options = get_option( 'dntly_options');
  $stripe_key    = isset( $dntly_options ) ? $dntly_options['stripe_key'] : null;

  extract(shortcode_atts(array(
    'account'                 => null,
    'campaign'                => null,
    'fundraiser'              => null,
    'css_url'                 => null,
    'iframe_height'           => null,
    'iframe_width'            => null,
    'email'                   => null,
    'amount'                  => null,
    'ssl'                     => false,
    'address'                 => false,
    'billing_zip'             => false,
    'phone'                   => false,
    'anonymous'               => false,
    'comment'                 => false,
    'onbehalf'                => false,
    'embed_css'               => false,
    'tracking_codes'          => null,
    'dont_send_receipt_email' => false,
    'duration'                => null,
    'currency'                => false,
    'stripe_key'              => $stripe_key,
  ), $atts));
  ob_start();
  include( DNTLY_PLUGIN_PATH . '/lib/donately-formjs.php');
  return ob_get_clean();
}
