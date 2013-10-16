<?php

/**
 * comentario form base class.
 *
 * @method comentario getObject() Returns the current form's model object
 *
 * @package    AUV
 * @subpackage form
 * @author     
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasecomentarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'contenido'  => new sfWidgetFormTextarea(),
      'usuario_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('usuario'), 'add_empty' => false)),
      'review_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('review'), 'add_empty' => false)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'contenido'  => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'usuario_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('usuario'))),
      'review_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('review'))),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('comentario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'comentario';
  }

}
