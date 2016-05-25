<?php

/**
 * @package assurity_elements
 */
class ElementJumpTo extends BaseElement
{
  private static $title = "Jump To Menu";

  private static $description = "";

  protected $enable_title_in_template = true;

  public function JumpTo() {
    // Filter out ourselves
    $els = array();
    $page = Director::get_current_page();
    if ($page->hasMethod('ElementArea')) {
      $elements = $page
        ->ElementArea()
        ->Elements()
        ->exclude(array('ClassName' => 'ElementHeader'))
        ->exclude(array('ID' => $this->ID));

      return ArrayList::create($els);
    }

  }
}
