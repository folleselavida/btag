<?php

/**
 * Baseservicio
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property Doctrine_Collection $serviciositio
 * @property Doctrine_Collection $servicio
 * @property Doctrine_Collection $sitio_has_servicioes
 * 
 * @method integer             getId()                   Returns the current record's "id" value
 * @method string              getNombre()               Returns the current record's "nombre" value
 * @method Doctrine_Collection getServiciositio()        Returns the current record's "serviciositio" collection
 * @method Doctrine_Collection getServicio()             Returns the current record's "servicio" collection
 * @method Doctrine_Collection getSitioHasServicioes()   Returns the current record's "sitio_has_servicioes" collection
 * @method servicio            setId()                   Sets the current record's "id" value
 * @method servicio            setNombre()               Sets the current record's "nombre" value
 * @method servicio            setServiciositio()        Sets the current record's "serviciositio" collection
 * @method servicio            setServicio()             Sets the current record's "servicio" collection
 * @method servicio            setSitioHasServicioes()   Sets the current record's "sitio_has_servicioes" collection
 * 
 * @package    AUV
 * @subpackage model
 * @author     
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseservicio extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('servicio');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));

        $this->option('collate', 'latin1_swedish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('servicio as serviciositio', array(
             'refClass' => 'SitioServicio',
             'refClassRelationAlias' => 'sitios',
             'local' => 'servicio_id',
             'foreign' => 'sitio_id'));

        $this->hasMany('servicio', array(
             'refClass' => 'SitioServicio',
             'local' => 'sitio_id',
             'foreign' => 'servicio_id'));

        $this->hasMany('SitioServicio as sitio_has_servicioes', array(
             'local' => 'id',
             'foreign' => 'servicio_id'));
    }
}