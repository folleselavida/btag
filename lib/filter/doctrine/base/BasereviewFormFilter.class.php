<?php

/**
 * review filter form base class.
 *
 * @package    AUV
 * @subpackage filter
 * @author     
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasereviewFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'util'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gracioso'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'negativo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'texto'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'calificacion' => new sfWidgetFormChoice(array('choices' => array('' => '', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'))),
      'sitio_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sitio'), 'add_empty' => true)),
      'usuario_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('usuario'), 'add_empty' => true)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'util'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gracioso'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'negativo'     => new sfValidatorPass(array('required' => false)),
      'texto'        => new sfValidatorPass(array('required' => false)),
      'calificacion' => new sfValidatorChoice(array('required' => false, 'choices' => array(1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'))),
      'sitio_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sitio'), 'column' => 'id')),
      'usuario_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('usuario'), 'column' => 'id')),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('review_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'review';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'util'         => 'Number',
      'gracioso'     => 'Number',
      'negativo'     => 'Text',
      'texto'        => 'Text',
      'calificacion' => 'Enum',
      'sitio_id'     => 'ForeignKey',
      'usuario_id'   => 'ForeignKey',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}