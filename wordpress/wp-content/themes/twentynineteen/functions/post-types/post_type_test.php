<?php

new post_type_test();

class post_type_test
{
  public function __construct()
  {
    add_action( 'init', [$this, 'create_posttype_test'] );
  }

  public function create_posttype_test() {

    register_post_type( 'test',
      array(
        'labels' => array(
          'name' => __( 'Tests' ),
          'singular_name' => __( 'Test' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'moj-testowy-typ'),
      )
    );
  }
}