<?php /* Template Name: Example */

get_header();

if ( is_active_sidebar( 'sidebar-up' ) ) { ?>
  <ul id="sidebarUp">
    <?php dynamic_sidebar('sidebar-up'); ?>
  </ul>
<?php }
global $post;

echo $post->post_content;

if ( is_active_sidebar( 'sidebar-down' ) ) { ?>
  <ul id="sidebarUp">
    <?php dynamic_sidebar('sidebar-down'); ?>
  </ul>
<?php
}

get_footer();
