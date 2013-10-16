<?php

/**
 * galeria filter form base class.
 *
 * @package    AUV
 * @subpackage filter
 * @author     
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasegaleriaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'imagen'   => new sfWidgetFormFilterInput(),
      'sitio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sitio'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'imagen'   => new sfValidatorPass(array('required' => false)),
      'sitio_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sitio'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('galeria_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'galeria';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'imagen'   => 'Text',
      'sitio_id' => 'ForeignKey',
    );
  }
}
