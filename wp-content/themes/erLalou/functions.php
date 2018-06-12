<?php

add_action('wp_enqueue_scripts', function() {
  /*********** STYLES ***********/
  //TYPOS
  wp_enqueue_style('sacramento', 'https://fonts.googleapis.com/css?family=Sacramento&amp;subset=latin-ext');
  wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=latin-ext');
  wp_deregister_style('dashicons');
  wp_register_style('dashicons', 'http://www.lauriane.local/wp-includes/css/dashicons.min.css');
  wp_enqueue_style('dashicons');

  wp_enqueue_style('main', get_stylesheet_directory_uri().'/assets/css/main.css', array('sacramento', 'roboto', 'dashicons'));


  /*********** SCRIPTS ***********/
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
  wp_enqueue_script('jquery');
});
