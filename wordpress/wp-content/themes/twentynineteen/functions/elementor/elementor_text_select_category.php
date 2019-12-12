<?php

new elementor_text_select_category();

class elementor_text_select_category extends \Elementor\Widget_Base {


  public function get_name() {
    return 'text_select_category';
  }

  public function get_title() {
    return __( 'Text Select Category', 'plugin-name' );
  }

  public function get_icon() {
    return 'fa fa-code';
  }

  public function get_categories() {
    return [ 'basic' ];
  }

  protected function _register_controls() {

    $this->start_controls_section(
      'content_section',
      [
        'label' => __( 'Content', 'plugin-name' ),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    $this->add_control(
      'post_category_id',
      [
        'label' => __( 'Category', 'plugin-domain' ),
        'type' => \Elementor\Controls_Manager::SELECT,
        'default' => 'solid',
        'options' => $this->get_categories_posts(),
      ]
    );

    $this->add_control(
      'text',
      [
        'label' => __( 'Text', 'plugin-name' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'input_type' => 'url',
        'placeholder' => __( 'Write text', 'plugin-name' ),
      ]
    );

    $this->end_controls_section();

  }

  protected function render() {

    $settings = $this->get_settings_for_display();

    $text = wp_oembed_get( $settings['text'] );
    $category = wp_oembed_get( $settings['post_category_id'] );

    echo '<div class="oembed-elementor-widget">';

    echo ( $text ) ? $text : $settings['text'];
    echo ( $category ) ? $category : $this->get_category_posts($settings['post_category_id']);

    echo '</div>';

  }

  public function get_categories_posts()
  {
    $options = [];

    foreach (get_terms('category') as $category) {
      $options[$category->term_id] = $category->name;
    }

    return $options;
  }

  public function get_category_posts($id)
  {
    $post_title = '<ul>';

    foreach (get_posts(['category__in' => [$id]]) as $post) {
      $post_title .= '<li>' . $post->post_title. '</li>';
    }

    $post_title .= '</ul>';
    return $post_title;
  }
}