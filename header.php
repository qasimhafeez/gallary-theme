<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <title><?php bloginfo('name'); ?></title>
</head>
<body <?php body_class(); ?>>
<div class="container">
  <div class="row">

  <!-- NAVIGATION MENU -->
    <div class="col-12 mt-4 mb-4">
      <ul class="nav justify-content-center">
        <li class="nav-item p-1">
          <a class="nav-link btn btn-primary btn-sm active" href="/wordpress_theme">ALL</a>
          </li>
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'top-menu',
                'menu_class' => 'nav justify-content-center',

              )
            );
          ?>
        </li>
      </ul>
    </div>