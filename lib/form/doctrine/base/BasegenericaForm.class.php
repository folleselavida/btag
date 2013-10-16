<?php

/**
 * generica form base class.
 *
 * @method generica getObject() Returns the current form's model object
 *
 * @package    AUV
 * @subpackage form
 * @author     
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasegenericaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'titulo'         => new sfWidgetFormInputText(),
      'contenido'      => new sfWidgetFormTextarea(),
      'catgenerica_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('catgenerica'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'titulo'         => new sfValidatorString(array('max_length' => 255)),
      'contenido'      => new sfValidatorString(array('max_length' => 20000)),
      'catgenerica_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('catgenerica'))),
    ));

    $this->widgetSchema->setNameFormat('generica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'generica';
  }

}
