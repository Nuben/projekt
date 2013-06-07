<?php
/**
 * A form for creating a new user.
 * 
 * @package LydiaCore
 */
class CFormUserCreate extends CForm {

  /**
   * Constructor
   */
  public function __construct($object) {
    parent::__construct();
    $this->AddElement(new CFormElementText('acronym', array('required'=>true, 'label'=>'Användarnamn')))
         ->AddElement(new CFormElementPassword('password', array('required'=>true, 'label'=>'Lösenord')))
         ->AddElement(new CFormElementPassword('password1', array('required'=>true, 'label'=>'Upprepa lösenord')))
         ->AddElement(new CFormElementText('name', array('required'=>true, 'label'=>'Namn')))
         ->AddElement(new CFormElementText('email', array('required'=>true, 'label'=>'E-mail')))
         ->AddElement(new CFormElementSubmit('Skapa', array('callback'=>array($object, 'DoCreate'))));
         
    $this->SetValidation('acronym', array('not_empty'))
         ->SetValidation('password', array('not_empty'))
         ->SetValidation('password1', array('not_empty'))
         ->SetValidation('name', array('not_empty'))
         ->SetValidation('email', array('not_empty'));
  }
  
}
