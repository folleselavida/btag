<?php

/**
 * Basehorario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $horario
 * @property Doctrine_Collection $sitio_has_horarioes
 * 
 * @method integer             getId()                  Returns the current record's "id" value
 * @method string              getHorario()             Returns the current record's "horario" value
 * @method Doctrine_Collection getSitioHasHorarioes()   Returns the current record's "sitio_has_horarioes" collection
 * @method horario             setId()                  Sets the current record's "id" value
 * @method horario             setHorario()             Sets the current record's "horario" value
 * @method horario             setSitioHasHorarioes()   Sets the current record's "sitio_has_horarioes" collection
 * 
 * @package    AUV
 * @subpackage model
 * @author     
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basehorario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('horario');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('horario', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));

        $this->option('collate', 'latin1_swedish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('SitioHorario as sitio_has_horarioes', array(
             'local' => 'id',
             'foreign' => 'horario_id'));
    }
}