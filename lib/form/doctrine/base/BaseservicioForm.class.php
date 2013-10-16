<?php

/**
 * servicio form base class.
 *
 * @method servicio getObject() Returns the current form's model object
 *
 * @package    AUV
 * @subpackage form
 * @author     
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseservicioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'nombre'             => new sfWidgetFormInputText(),
      'serviciositio_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'servicio')),
      'servicio_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'servicio')),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'             => new sfValidatorString(array('max_length' => 255)),
      'serviciositio_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'servicio', 'required' => false)),
      'servicio_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'servicio', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servicio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'servicio';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['serviciositio_list']))
    {
      $this->setDefault('serviciositio_list', $this->object->serviciositio->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['servicio_list']))
    {
      $this->setDefault('servicio_list', $this->object->servicio->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveserviciositioList($con);
    $this->saveservicioList($con);

    parent::doSave($con);
  }

  public function saveserviciositioList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['serviciositio_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->serviciositio->getPrimaryKeys();
    $values = $this->getValue('serviciositio_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('serviciositio', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('serviciositio', array_values($link));
    }
  }

  public function saveservicioList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['servicio_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->servicio->getPrimaryKeys();
    $values = $this->getValue('servicio_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('servicio', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('servicio', array_values($link));
    }
  }

}
