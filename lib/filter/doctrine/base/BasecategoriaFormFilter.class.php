<?php

/**
 * categoria filter form base class.
 *
 * @package    AUV
 * @subpackage filter
 * @author     
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasecategoriaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'logo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'thumbnail' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciudad_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ciudad'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'    => new sfValidatorPass(array('required' => false)),
      'logo'      => new sfValidatorPass(array('required' => false)),
      'thumbnail' => new sfValidatorPass(array('required' => false)),
      'ciudad_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ciudad'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('categoria_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'categoria';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'nombre'    => 'Text',
      'logo'      => 'Text',
      'thumbnail' => 'Text',
      'ciudad_id' => 'ForeignKey',
    );
  }
}
