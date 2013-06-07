<?php
/**
 * A form for editing the user profile.
 * 
 * @package LydiaCore
 */
class CFormUserProfile extends CForm {

  /**
   * Constructor
   */
  public function __construct($object, $user) {
    parent::__construct();
    $this->AddElement(new CFormElementText('acronym', array('readonly'=>true, 'value'=>$user['acronym'], 'label'=>'Användarnamn')))
         ->AddElement(new CFormElementPassword('password'))
         ->AddElement(new CFormElementPassword('password1', array('label'=>'Upprepa lösenord')))
         ->AddElement(new CFormElementSubmit('Ändra_lösenord', array('callback'=>array($object, 'DoChangePassword'))))
         ->AddElement(new CFormElementText('name', array('value'=>$user['name'], 'required'=>true, 'label'=>'Namn')))
         ->AddElement(new CFormElementText('email', array('value'=>$user['email'], 'required'=>true, 'label'=>'E-mail')))
         ->AddElement(new CFormElementSubmit('Spara', array('callback'=>array($object, 'DoProfileSave'))));
         
    $this->SetValidation('name', array('not_empty'))
         ->SetValidation('email', array('not_empty'));
  }
  
}
