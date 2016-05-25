<?php

class ElementLinkExtension extends DataExtension {

  private static $has_one = array(
    'ElementLink' => 'ElementLink'
  );

  public function updateCMSFields(FieldList $fields)
  {
    $data = array();
    if ($this->owner->ElementLink()) {
      $data = $this->owner->ElementLink();
    }

    $fields->addFieldsToTab('Root.Links', array(
      $url = TextField::create('ElementLink::LinkURL', 'Link URL', $data->LinkURL),
      $tree = TreeDropdownField::create('ElementLink::InternalLinkID', 'Link To', 'SiteTree'),
      CheckboxField::create('ElementLink::NewWindow', 'Open in a new window', $data->NewWindow),
      $text = TextField::create('ElementLink::LinkText', 'Link Text', $data->LinkText),
      $desc = TextareaField::create('ElementLink::LinkDescription', 'Link Description', $data->LinkDescription)
    ));

    $tree->setValue($data->InternalLinkID);

    $url->setRightTitle('Including protocol e.g: '.Director::absoluteBaseURL());

    $fields->addFieldToTab('Root.Main', HiddenField::create('ElementLinkID'));

    return $fields;
  }
}
