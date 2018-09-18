<!doctype html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lauriane Roulland - Com&eacute;dienne et sc&eacute;nariste</title>

  <?php wp_head(); ?>
</head>
<body class="<?= (is_front_page())? 'home' : ''; ?>">
<aside class="header_top" id="menuPrincipal">
  <h2 id="open_button" class="open_button capitalize">
    <span class="dashicons dashicons-menu"></span>
    Menu
  </h2>
  <div id="main_menu" class="main_menu hide">
    <div class="dashicons dashicons-no-alt close_button" id="close_button"></div>
    <?php wp_nav_menu('erLalou-main') ?>
  </div>
</aside>
<main>
