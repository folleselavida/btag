<?php

/**
 * sfGuardRegisterForm for registering new users
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Jonathan H. Wage <jonwage@gmail.com>
 * @version    SVN: $Id: BasesfGuardChangeUserPasswordForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardRegisterForm extends BasesfGuardRegisterForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
  	parent::configure();
  	
  	$profileForm = new UsuarioForm($this->object->Profile);
  	unset($profileForm['id'], $profileForm['sf_guard_user_id']);
  	$this->embedForm('Profile', $profileForm);
  	
  	$this->widgetSchema->setFormFormatterName('list');
  	
  	
  	
  	
  	
  }
  
  
}