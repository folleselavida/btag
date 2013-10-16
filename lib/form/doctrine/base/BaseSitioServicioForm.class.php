<?php

/**
 * SitioServicio form base class.
 *
 * @method SitioServicio getObject() Returns the current form's model object
 *
 * @package    AUV
 * @subpackage form
 * @author     
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSitioServicioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sitio_id'    => new sfWidgetFormInputHidden(),
      'servicio_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'sitio_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('sitio_id')), 'empty_value' => $this->getObject()->get('sitio_id'), 'required' => false)),
      'servicio_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('servicio_id')), 'empty_value' => $this->getObject()->get('servicio_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sitio_servicio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SitioServicio';
  }

}
