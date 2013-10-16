<?php

/**
 * servicio filter form base class.
 *
 * @package    AUV
 * @subpackage filter
 * @author     
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseservicioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'serviciositio_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'servicio')),
      'servicio_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'servicio')),
    ));

    $this->setValidators(array(
      'nombre'             => new sfValidatorPass(array('required' => false)),
      'serviciositio_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'servicio', 'required' => false)),
      'servicio_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'servicio', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servicio_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addServiciositioListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.SitioServicio SitioServicio')
      ->andWhereIn('SitioServicio.sitio_id', $values)
    ;
  }

  public function addServicioListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.SitioServicio SitioServicio')
      ->andWhereIn('SitioServicio.servicio_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'servicio';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'nombre'             => 'Text',
      'serviciositio_list' => 'ManyKey',
      'servicio_list'      => 'ManyKey',
    );
  }
}
