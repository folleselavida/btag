<?php

/**
 * SitioHorario filter form base class.
 *
 * @package    AUV
 * @subpackage filter
 * @author     
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSitioHorarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('sitio_horario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SitioHorario';
  }

  public function getFields()
  {
    return array(
      'sitio_id'   => 'Number',
      'horario_id' => 'Number',
    );
  }
}
