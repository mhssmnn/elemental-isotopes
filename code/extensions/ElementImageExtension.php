<?php

class ElementImageExtension extends DataExtension {
  private static $has_one = array(
    'Image' => 'Image'
  );

  public function updateCMSFields(FieldList $fields)
  {
    $uploadField = UploadField::create('Image', 'Image')
        ->setAllowedFileCategories('image')
        ->setAllowedMaxFileNumber(1)
        ->setFolderName('Uploads/images');
    $fields->addFieldToTab('Root.Media', $uploadField);

    return $fields;
  }
}
