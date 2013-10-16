<?php

/**
 * tipoeventoVersion form base class.
 *
 * @method tipoeventoVersion getObject() Returns the current form's model object
 *
 * @package    AUV
 * @subpackage form
 * @author     
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasetipoeventoVersionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'revisado'   => new sfWidgetFormInputCheckbox(),
      'imagen'     => new sfWidgetFormInputText(),
      'texto_es'   => new sfWidgetFormTextarea(),
      'texto_en'   => new sfWidgetFormTextarea(),
      'eventos_id' => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
      'version'    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'revisado'   => new sfValidatorBoolean(array('required' => false)),
      'imagen'     => new sfValidatorString(array('max_length' => 255)),
      'texto_es'   => new sfValidatorString(array('max_length' => 8000)),
      'texto_en'   => new sfValidatorString(array('max_length' => 8000, 'required' => false)),
      'eventos_id' => new sfValidatorInteger(),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
      'version'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('version')), 'empty_value' => $this->getObject()->get('version'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipoevento_version[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'tipoeventoVersion';
  }

}
