<?php

/**
 * sitio form base class.
 *
 * @method sitio getObject() Returns the current form's model object
 *
 * @package    AUV
 * @subpackage form
 * @author     
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesitioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'nombre'             => new sfWidgetFormInputText(),
      'categoria_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('categoria'), 'add_empty' => false)),
      'latitud'            => new sfWidgetFormInputText(),
      'longitud'           => new sfWidgetFormInputText(),
      'direccion'          => new sfWidgetFormInputText(),
      'descripcion'        => new sfWidgetFormTextarea(),
      'usuario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('usuario'), 'add_empty' => false)),
      'ciudad_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ciudad'), 'add_empty' => false)),
      'imagen'             => new sfWidgetFormInputText(),
      'thumbnail'          => new sfWidgetFormInputText(),
      'calificacion'       => new sfWidgetFormInputText(),
      'telefono'           => new sfWidgetFormInputText(),
      'keywords'           => new sfWidgetFormTextarea(),
      'website'            => new sfWidgetFormInputText(),
      'horario'            => new sfWidgetFormTextarea(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
      'sitioservicio_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sitio')),
      'sitio_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sitio')),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'categoria_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('categoria'))),
      'latitud'            => new sfValidatorString(array('max_length' => 255)),
      'longitud'           => new sfValidatorString(array('max_length' => 255)),
      'direccion'          => new sfValidatorString(array('max_length' => 255)),
      'descripcion'        => new sfValidatorString(array('max_length' => 10000)),
      'usuario_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('usuario'))),
      'ciudad_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ciudad'))),
      'imagen'             => new sfValidatorString(array('max_length' => 255)),
      'thumbnail'          => new sfValidatorString(array('max_length' => 255)),
      'calificacion'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'telefono'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'keywords'           => new sfValidatorString(array('max_length' => 800, 'required' => false)),
      'website'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'horario'            => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
      'sitioservicio_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sitio', 'required' => false)),
      'sitio_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sitio', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sitio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sitio';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['sitioservicio_list']))
    {
      $this->setDefault('sitioservicio_list', $this->object->sitioservicio->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['sitio_list']))
    {
      $this->setDefault('sitio_list', $this->object->sitio->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->savesitioservicioList($con);
    $this->savesitioList($con);

    parent::doSave($con);
  }

  public function savesitioservicioList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['sitioservicio_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->sitioservicio->getPrimaryKeys();
    $values = $this->getValue('sitioservicio_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('sitioservicio', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('sitioservicio', array_values($link));
    }
  }

  public function savesitioList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['sitio_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->sitio->getPrimaryKeys();
    $values = $this->getValue('sitio_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('sitio', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('sitio', array_values($link));
    }
  }

}
