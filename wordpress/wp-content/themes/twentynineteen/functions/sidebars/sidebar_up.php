<?php

new sidebar_up();

class sidebar_up
{
  public function __construct()
  {
    add_action( 'widgets_init', [$this, 'sidebar_up_init'] );
  }

  public function sidebar_up_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar up', 'textdomain' ),
        'id'            => 'sidebar-up',
        'description'   => __( 'Widget wyświetli się nad tekstem', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
  }
}