<?php

class core_elementor
{
  protected static $instance = null;

  public static function get_instance()
  {
    if (!isset(static::$instance)) {
      static::$instance = new static;
    }

    return static::$instance;
  }

  protected function __construct()
  {
    require_once('elementor_text_select_category.php');
    add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets']);
  }

  public function register_widgets()
  {
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \elementor_text_select_category());
  }
}

add_action('init', 'elementor_text_select_category');

function elementor_text_select_category() {
  core_elementor::get_instance();
}