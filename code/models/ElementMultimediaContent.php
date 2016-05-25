<?php

/**
 * @package elemental_assurity
 */
class ElementMultimediaContent extends ElementContent
{
  private static $extensions = array(
    'ElementImageExtension',
    'ElementVideoExtension',
    'ElementLinkExtension'
  );

  private static $db = array();

  private static $title = "Multimedia Content";

  private static $description = "";

  protected $enable_title_in_template = true;
}
