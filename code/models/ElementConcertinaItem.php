<?php

class ElementConcertinaItem extends DataObject {
  private static $db = array(
    'Title'     => 'Varchar(200)',
    'Content'   => 'HTMLText',
    'Sort'      => 'Int'
  );

  private static $has_one = array(
    'Parent' => 'ElementConcertina'
  );

  private static $default_sort = "\"Sort\"";
}
