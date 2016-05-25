<?php

/**
 * @package elemental_assurity
 */
class ElementRawHTML extends ElementContent
{
  private static $db = array(
    'RawHTML' => 'Text'
  );

  private static $title = "Raw HTML";

  private static $description = "";

  protected $enable_title_in_template = true;
}
