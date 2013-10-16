<?php

/**
 * homeVersion form base class.
 *
 * @method homeVersion getObject() Returns the current form's model object
 *
 * @package    AUV
 * @subpackage form
 * @author     
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasehomeVersionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'revisado'                  => new sfWidgetFormInputCheckbox(),
      'imagen_superior'           => new sfWidgetFormInputText(),
      'banner_cocacola'           => new sfWidgetFormInputText(),
      'almacen_miscelanea'        => new sfWidgetFormInputText(),
      'gaviero'                   => new sfWidgetFormInputText(),
      'frase_gaviero_superior_es' => new sfWidgetFormInputText(),
      'frase_gaviero_superior_en' => new sfWidgetFormInputText(),
      'frase_gaviero_inferior_es' => new sfWidgetFormInputText(),
      'frase_gaviero_inferior_en' => new sfWidgetFormInputText(),
      'texto_RES_es'              => new sfWidgetFormInputText(),
      'texto_RES_en'              => new sfWidgetFormInputText(),
      'texto_andres_es'           => new sfWidgetFormInputText(),
      'texto_andres_en'           => new sfWidgetFormInputText(),
      'texto_nuestra_empresa_es'  => new sfWidgetFormTextarea(),
      'texto_nuestra_empresa_en'  => new sfWidgetFormTextarea(),
      'video'                     => new sfWidgetFormInputText(),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
      'version'                   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'revisado'                  => new sfValidatorBoolean(array('required' => false)),
      'imagen_superior'           => new sfValidatorString(array('max_length' => 255)),
      'banner_cocacola'           => new sfValidatorString(array('max_length' => 255)),
      'almacen_miscelanea'        => new sfValidatorString(array('max_length' => 255)),
      'gaviero'                   => new sfValidatorString(array('max_length' => 255)),
      'frase_gaviero_superior_es' => new sfValidatorString(array('max_length' => 255)),
      'frase_gaviero_superior_en' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'frase_gaviero_inferior_es' => new sfValidatorString(array('max_length' => 255)),
      'frase_gaviero_inferior_en' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'texto_RES_es'              => new sfValidatorString(array('max_length' => 255)),
      'texto_RES_en'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'texto_andres_es'           => new sfValidatorString(array('max_length' => 255)),
      'texto_andres_en'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'texto_nuestra_empresa_es'  => new sfValidatorString(array('max_length' => 2500)),
      'texto_nuestra_empresa_en'  => new sfValidatorString(array('max_length' => 2500, 'required' => false)),
      'video'                     => new sfValidatorString(array('max_length' => 255)),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
      'version'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('version')), 'empty_value' => $this->getObject()->get('version'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('home_version[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'homeVersion';
  }

}
