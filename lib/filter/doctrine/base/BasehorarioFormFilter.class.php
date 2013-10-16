<?php

/**
 * horario filter form base class.
 *
 * @package    AUV
 * @subpackage filter
 * @author     
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasehorarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'horario' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'horario' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('horario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'horario';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'horario' => 'Text',
    );
  }
}
