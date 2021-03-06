<?php

class IsoBaseElementExtension extends DataExtension {
  private function isNestedElement() {
    return $this->owner->List()->exists();
  }

  public function updateCMSFields(FieldList $fields)
  {
    // If the field has been removed due to the $enable_title_in_template = false
    if (!$fields->fieldByName('Root.Main.HideTitle')) {
      $fields->addFieldToTab('Root.Main', new HiddenField('HideTitle', '', true) );
    }

    return $fields;
  }
}
