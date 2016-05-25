<?php

/**
 * @package elemental-isotopes
 */
class ElementConcertina extends ElementContent
{
  private static $has_many = array(
    'Items' => 'ElementConcertinaItem'
  );

  private static $title = "Concertina Element";

  private static $description = "List of elements in a concertina style";

  protected $enable_title_in_template = true;

  public function getCMSFields()
  {
    $items = $this->Items();
    $isInDb = $this->isInDB();

    $this->beforeUpdateCMSFields(function ($fields) use ($isInDb, $items) {
      if ($isInDb) {
        $config = GridFieldConfig_RelationEditor::create();
        $config->addComponent(new GridFieldOrderableRows());
        $gridField = new GridField(
          'Items',
          'Items',
          $items,
          $config
        );
        $fields->addFieldToTab('Root.Items', $gridField);
      } else {
        $fields->addFieldToTab('Root.Main', LiteralField::create('warn', '<p class="message notice">Once you save this object you will be able to add items</p>'));
      }
    });

    return parent::getCMSFields();
  }
}
