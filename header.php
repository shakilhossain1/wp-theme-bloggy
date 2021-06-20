<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <script defer src="https://unpkg.com/alpinejs@3.1.0/dist/cdn.min.js"></script>
  </head>
  <body
    x-data="{navOpen: false, searchOpen: false}"
    :class="{'overflow-hidden': navOpen || searchOpen}"
    <?php body_class() ?>
  >
    <?php wp_body_open(); ?>
    <!-- Mobile Navigation -->
    <?php get_template_part('template-parts/header/mobile-nav'); ?>
    <!-- Search Overlay -->
    <?php get_template_part('template-parts/header/overlay-search') ?>
    <!-- Main navigation -->
    <?php get_template_part('template-parts/header/main-navigation') ?>
