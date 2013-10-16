<?php

/**
 * generica filter form base class.
 *
 * @package    AUV
 * @subpackage filter
 * @author     
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasegenericaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'titulo'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contenido'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'catgenerica_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('catgenerica'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'titulo'         => new sfValidatorPass(array('required' => false)),
      'contenido'      => new sfValidatorPass(array('required' => false)),
      'catgenerica_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('catgenerica'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('generica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'generica';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'titulo'         => 'Text',
      'contenido'      => 'Text',
      'catgenerica_id' => 'ForeignKey',
    );
  }
}
