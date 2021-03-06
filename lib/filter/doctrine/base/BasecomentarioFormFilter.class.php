<?php

/**
 * comentario filter form base class.
 *
 * @package    AUV
 * @subpackage filter
 * @author     
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasecomentarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'contenido'  => new sfWidgetFormFilterInput(),
      'usuario_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('usuario'), 'add_empty' => true)),
      'review_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('review'), 'add_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'contenido'  => new sfValidatorPass(array('required' => false)),
      'usuario_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('usuario'), 'column' => 'id')),
      'review_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('review'), 'column' => 'id')),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('comentario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'comentario';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'contenido'  => 'Text',
      'usuario_id' => 'ForeignKey',
      'review_id'  => 'ForeignKey',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
