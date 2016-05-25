<?php

/**
 * @package assurity_elements
 */
class ElementVideo extends ElementContent
{
  private static $extensions = array(
    'ElementImageExtension',
    'ElementVideoExtension'
  );

  private static $title = "Video Element";

  private static $description = "";

  protected $enable_title_in_template = true;
}
