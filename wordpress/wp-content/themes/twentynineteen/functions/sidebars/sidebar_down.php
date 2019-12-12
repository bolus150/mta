<?php

new sidebar_down();

class sidebar_down
{
  public function __construct()
  {
    add_action( 'widgets_init', [$this, 'sidebar_down_init'] );
  }

  public function sidebar_down_init() {
    register_sidebar( array(
      'name'          => __( 'Sidebar down', 'textdomain' ),
      'id'            => 'sidebar-down',
      'description'   => __( 'Widget wyświetli się pod tekstem', 'textdomain' ),
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget'  => '</li>',
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => '</h2>',
    ) );
  }
}