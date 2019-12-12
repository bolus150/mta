<?php
new core_sidebars();

class core_sidebars
{
  public function __construct()
  {
    require 'sidebar_up.php';
    require 'sidebar_down.php';
  }
}