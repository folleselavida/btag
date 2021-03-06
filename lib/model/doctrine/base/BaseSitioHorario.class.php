<?php

/**
 * BaseSitioHorario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $sitio_id
 * @property integer $horario_id
 * @property sitio $sitio
 * @property horario $horario
 * 
 * @method integer      getSitioId()    Returns the current record's "sitio_id" value
 * @method integer      getHorarioId()  Returns the current record's "horario_id" value
 * @method sitio        getSitio()      Returns the current record's "sitio" value
 * @method horario      getHorario()    Returns the current record's "horario" value
 * @method SitioHorario setSitioId()    Sets the current record's "sitio_id" value
 * @method SitioHorario setHorarioId()  Sets the current record's "horario_id" value
 * @method SitioHorario setSitio()      Sets the current record's "sitio" value
 * @method SitioHorario setHorario()    Sets the current record's "horario" value
 * 
 * @package    AUV
 * @subpackage model
 * @author     
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSitioHorario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sitio_has_horario');
        $this->hasColumn('sitio_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('horario_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));


        $this->index('fk_sitio_has_horario_horario1', array(
             'fields' => 
             array(
              0 => 'horario_id',
             ),
             ));
        $this->index('fk_sitio_has_horario_sitio1', array(
             'fields' => 
             array(
              0 => 'sitio_id',
             ),
             ));
        $this->option('collate', 'latin1_swedish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sitio', array(
             'local' => 'sitio_id',
             'foreign' => 'id'));

        $this->hasOne('horario', array(
             'local' => 'horario_id',
             'foreign' => 'id'));
    }
}