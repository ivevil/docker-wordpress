<?php

function combany_post_types()
{

  // Post type: careers
  register_post_type('careers', array(
    'map_meta_cap' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    'rewrite' => array('slug' => 'careers'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Careers',
      'add_new_item' => 'Add new career',
      'edit_item' => 'Edit Career',
      'all_items' => 'All Career',
      'singular_name' => 'Career'
    ),
    'menu_icon' => 'dashicons-location-alt'
  ));

  register_post_type('book', array(
    'public'       => true,
    'show_in_rest' => true,
    'label'        => 'Books'
  ));

  // Post type: people
  register_post_type('people', array(
    'map_meta_cap' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    'rewrite' => array('slug' => 'people'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'People',
      'add_new_item' => 'Add New Employee',
      'edit_item' => 'Edit Employee',
      'all_items' => 'All Employees',
      'singular_name' => 'People'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

  // Post type: about us
  register_post_type('about-us', array(
    'map_meta_cap' => true,
    'supports' => array('title', 'thumbnail', 'editor'),
    'rewrite' => array('slug' => 'about-us'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'About Us',
      'add_new_item' => 'Add New Item',
      'edit_item' => 'Edit Item',
      'all_items' => 'All Item',
      'singular_name' => 'Item'
    ),
    'menu_icon' => 'dashicons-book-alt'
  ));
}

add_action('init', 'combany_post_types');
