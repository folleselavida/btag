<?php

/**
 * sitio filter form base class.
 *
 * @package    AUV
 * @subpackage filter
 * @author     
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasesitioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'             => new sfWidgetFormFilterInput(),
      'categoria_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('categoria'), 'add_empty' => true)),
      'latitud'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'longitud'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usuario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('usuario'), 'add_empty' => true)),
      'ciudad_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ciudad'), 'add_empty' => true)),
      'imagen'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'thumbnail'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'calificacion'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'           => new sfWidgetFormFilterInput(),
      'keywords'           => new sfWidgetFormFilterInput(),
      'website'            => new sfWidgetFormFilterInput(),
      'horario'            => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'sitioservicio_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sitio')),
      'sitio_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sitio')),
    ));

    $this->setValidators(array(
      'nombre'             => new sfValidatorPass(array('required' => false)),
      'categoria_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('categoria'), 'column' => 'id')),
      'latitud'            => new sfValidatorPass(array('required' => false)),
      'longitud'           => new sfValidatorPass(array('required' => false)),
      'direccion'          => new sfValidatorPass(array('required' => false)),
      'descripcion'        => new sfValidatorPass(array('required' => false)),
      'usuario_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('usuario'), 'column' => 'id')),
      'ciudad_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ciudad'), 'column' => 'id')),
      'imagen'             => new sfValidatorPass(array('required' => false)),
      'thumbnail'          => new sfValidatorPass(array('required' => false)),
      'calificacion'       => new sfValidatorPass(array('required' => false)),
      'telefono'           => new sfValidatorPass(array('required' => false)),
      'keywords'           => new sfValidatorPass(array('required' => false)),
      'website'            => new sfValidatorPass(array('required' => false)),
      'horario'            => new sfValidatorPass(array('required' => false)),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'sitioservicio_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sitio', 'required' => false)),
      'sitio_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sitio', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sitio_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addSitioservicioListColumnQuery(Doctrine_Query $query, $field, $values)
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

  public function addSitioListColumnQuery(Doctrine_Query $query, $field, $values)
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

  public function getModelName()
  {
    return 'sitio';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'nombre'             => 'Text',
      'categoria_id'       => 'ForeignKey',
      'latitud'            => 'Text',
      'longitud'           => 'Text',
      'direccion'          => 'Text',
      'descripcion'        => 'Text',
      'usuario_id'         => 'ForeignKey',
      'ciudad_id'          => 'ForeignKey',
      'imagen'             => 'Text',
      'thumbnail'          => 'Text',
      'calificacion'       => 'Text',
      'telefono'           => 'Text',
      'keywords'           => 'Text',
      'website'            => 'Text',
      'horario'            => 'Text',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
      'sitioservicio_list' => 'ManyKey',
      'sitio_list'         => 'ManyKey',
    );
  }
}
