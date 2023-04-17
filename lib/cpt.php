<?php

add_action('init', 'create_testimonials_posttype', 0);
function create_testimonials_posttype() {
  $label = 'Testimonial';
  $plural_label = 'Testimonials';

  $testimonial = array(
    'label'                 => $label,
    'description'           => 'Listing '.$plural_label,
    'labels'                => array(
      'name'                  => $plural_label,
      'singular_name'         => $label,
      'menu_name'             => $plural_label,
      'name_admin_bar'        => $plural_label,
      'archives'              => $label.' Archives',
      'attributes'            => $label.' Attributes',
      'parent_item_colon'     => 'Parent '.$label.':',
      'all_items'             => 'All '.$plural_label,
      'add_new_item'          => 'Add New '.$label,
      'add_new'               => 'Add New',
      'new_item'              => 'New '.$label,
      'edit_item'             => 'Edit '.$label,
      'update_item'           => 'Update '.$label,
      'view_item'             => 'View '.$label,
      'view_items'            => 'View '.$plural_label,
      'search_items'          => 'Search '.$plural_label,
      'not_found'             => 'Not found',
      'not_found_in_trash'    => 'Not found in Trash',
      'featured_image'        => 'Featured Image',
      'set_featured_image'    => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image'    => 'Use as featured image',
      'insert_into_item'      => 'Insert into '.$label,
      'uploaded_to_this_item' => 'Uploaded to this '.$label,
      'items_list'            => $plural_label.' list',
      'items_list_navigation' => $plural_label.' list navigation',
      'filter_items_list'     => 'Filter '.$label.' list',
    ),
    'supports'              => array('editor','excerpt','thumbnail','custom-fields', 'title', 'revisions'),
    // 'taxonomies'            => array('category'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => null,
    'menu_icon'             => 'dashicons-format-quote', //https://developer.wordpress.org/resource/dashicons/
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'rewrite' 							=> true,
    'with_front'            => false
  );
  register_post_type('testimonial', $testimonial);
}
