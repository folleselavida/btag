<?php

/**
 * SitioHorario form base class.
 *
 * @method SitioHorario getObject() Returns the current form's model object
 *
 * @package    AUV
 * @subpackage form
 * @author     
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSitioHorarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sitio_id'   => new sfWidgetFormInputHidden(),
      'horario_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'sitio_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('sitio_id')), 'empty_value' => $this->getObject()->get('sitio_id'), 'required' => false)),
      'horario_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('horario_id')), 'empty_value' => $this->getObject()->get('horario_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sitio_horario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SitioHorario';
  }

}
