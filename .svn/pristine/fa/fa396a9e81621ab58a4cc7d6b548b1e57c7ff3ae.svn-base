<?php

/**
 * imagenVersion form base class.
 *
 * @method imagenVersion getObject() Returns the current form's model object
 *
 * @package    AUV
 * @subpackage form
 * @author     
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseimagenVersionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'revisado'   => new sfWidgetFormInputCheckbox(),
      'imagen'     => new sfWidgetFormInputText(),
      'seccion'    => new sfWidgetFormChoice(array('choices' => array('Eventos' => 'Eventos', 'Foto Arte' => 'Foto Arte'))),
      'posicion'   => new sfWidgetFormInputText(),
      'home_id'    => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
      'version'    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'revisado'   => new sfValidatorBoolean(array('required' => false)),
      'imagen'     => new sfValidatorString(array('max_length' => 255)),
      'seccion'    => new sfValidatorChoice(array('choices' => array(0 => 'Eventos', 1 => 'Foto Arte'))),
      'posicion'   => new sfValidatorInteger(),
      'home_id'    => new sfValidatorInteger(),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
      'version'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('version')), 'empty_value' => $this->getObject()->get('version'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('imagen_version[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'imagenVersion';
  }

}
