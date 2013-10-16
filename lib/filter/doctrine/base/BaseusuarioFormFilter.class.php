<?php

/**
 * usuario filter form base class.
 *
 * @package    AUV
 * @subpackage filter
 * @author     
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseusuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'foto'            => new sfWidgetFormFilterInput(),
      'fechanacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'sexo'            => new sfWidgetFormChoice(array('choices' => array('' => '', 'M' => 'M', 'F' => 'F'))),
      'pais'            => new sfWidgetFormFilterInput(),
      'ciudad'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'foto'            => new sfValidatorPass(array('required' => false)),
      'fechanacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'sexo'            => new sfValidatorChoice(array('required' => false, 'choices' => array('M' => 'M', 'F' => 'F'))),
      'pais'            => new sfValidatorPass(array('required' => false)),
      'ciudad'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'usuario';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'foto'            => 'Text',
      'fechanacimiento' => 'Date',
      'sexo'            => 'Enum',
      'pais'            => 'Text',
      'ciudad'          => 'Text',
    );
  }
}
