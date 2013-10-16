<?php

/**
 * review form base class.
 *
 * @method review getObject() Returns the current form's model object
 *
 * @package    AUV
 * @subpackage form
 * @author     
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasereviewForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'util'         => new sfWidgetFormInputText(),
      'gracioso'     => new sfWidgetFormInputText(),
      'negativo'     => new sfWidgetFormInputText(),
      'texto'        => new sfWidgetFormTextarea(),
      'calificacion' => new sfWidgetFormChoice(array('choices' => array(1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'))),
      'sitio_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sitio'), 'add_empty' => false)),
      'usuario_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('usuario'), 'add_empty' => false)),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'util'         => new sfValidatorInteger(array('required' => false)),
      'gracioso'     => new sfValidatorInteger(array('required' => false)),
      'negativo'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'texto'        => new sfValidatorString(array('max_length' => 2000)),
      'calificacion' => new sfValidatorChoice(array('choices' => array(0 => '1', 1 => '2', 2 => '3', 3 => '4', 4 => '5'))),
      'sitio_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sitio'))),
      'usuario_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('usuario'))),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('review[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'review';
  }

}
