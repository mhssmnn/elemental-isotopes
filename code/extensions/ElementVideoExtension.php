<?php

class ElementVideoExtension extends DataExtension {
  private static $db = array(
    'VideoUrl' => 'Varchar(255)'
  );

  public function updateCMSFields(FieldList $fields)
  {
    $fields->addFieldToTab('Root.Media', TextField::create('VideoUrl', 'Video Url'));

    return $fields;
  }

  public function Video() {
    return Oembed::get_oembed_from_url($this->owner->VideoUrl);
  }

  public function VideoStillUrl() {
    return str_replace('hqdefault', 'maxresdefault', $this->Video()->thumbnail_url);
  }
}
