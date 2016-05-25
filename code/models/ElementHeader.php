<?php

/**
 * @package assurity_elements
 */
class ElementHeader extends BaseElement
{
  private static $db = array(
    'SubTitle' => 'Varchar(200)',
    'Intro'    => 'Text'
  );

  private static $has_one = array(
    'Image' => 'Image'
  );

  private static $title = "Header Element";

  private static $description = "";

  protected $enable_title_in_template = true;

  public function getCMSFields()
  {
    $this->beforeUpdateCMSFields(function ($fields) {
      $subTitle = TextField::create('SubTitle', 'Sub-title');
      $subTitle->setRightTitle('Below the page title');
      $fields->addFieldToTab('Root.Main', $subTitle);

      $uploadField = UploadField::create('Image', 'Image')
          ->setAllowedFileCategories('image')
          ->setAllowedMaxFileNumber(1)
          ->setFolderName('Uploads/images');

      $fields->addFieldToTab('Root.Main', $uploadField);
    });

    return parent::getCMSFields();
  }
}
