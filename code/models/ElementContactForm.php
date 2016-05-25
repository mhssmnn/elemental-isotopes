<?php

/**
 * @package assurity_elements
 */
class ElementContactForm extends BaseElement
{
  private static $db = array(
    'SendTo'     => 'Varchar(200)'
  );

  private static $title = "Contact form";

  private static $description = "";

  protected $enable_title_in_template = true;

  public function Link() {
    return Director::get_current_page()->Link();
  }
}

class ElementContactForm_Controller extends BaseElement_Controller {
  private static $allowed_actions = array('submitContact');

  public function Form()
  {
    $fields = FieldList::create(
      TextField::create('Name')->addHolderClass('form-label-hidden')
        ->setAttribute('placeholder', 'Name'),
      TextField::create('Organisation')->addHolderClass('form-label-hidden')
        ->setAttribute('placeholder', 'Organisation'),
      TextField::create('Email')->addHolderClass('form-label-hidden')
        ->setAttribute('placeholder', 'Email'),
      TextField::create('Phone')->addHolderClass('form-label-hidden')
        ->setAttribute('placeholder', 'Phone no')
    );
    $actions = FieldList::create(
      FormAction::create('submitContact', 'Submit' )
        ->setButtonContent('Request call <i class="fa fa-arrow-right"></i>')
        ->setStyle('primary')
    );

    $validator = new RequiredFields('Name', 'Organisation', 'Email', 'Phone');

    return BootstrapForm::create(
      $this,
      'SubmitContact',
      $fields,
      $actions,
      $validator)
        ->addWell();
  }

  public function submitContact($data) {
    $email = new Email();

    $email->setTo($this->SendTo);
    $email->setFrom($data['Email']);
    $email->setSubject( 'Someone requested a call' );

    $messageBody = "
      <p><strong>Name:</strong>{$data['Name']}</p>
      <p><strong>Organisation:</strong>{$data['Organisation']}</p>
      <p><a href='tel:{$data['Phone']}'>{$data['Phone']}</a></p>
    ";

    $email->setBody($messageBody);

    $email->send();
    return array(
      'Form' => '<div id="FormResponse"><p>Thanks for your request! We will get back to you shortly</p></div>'
    );
  }
}
