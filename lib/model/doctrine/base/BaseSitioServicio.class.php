<?php

/**
 * BaseSitioServicio
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $sitio_id
 * @property integer $servicio_id
 * @property sitio $sitio
 * @property servicio $servicio
 * 
 * @method integer       getSitioId()     Returns the current record's "sitio_id" value
 * @method integer       getServicioId()  Returns the current record's "servicio_id" value
 * @method sitio         getSitio()       Returns the current record's "sitio" value
 * @method servicio      getServicio()    Returns the current record's "servicio" value
 * @method SitioServicio setSitioId()     Sets the current record's "sitio_id" value
 * @method SitioServicio setServicioId()  Sets the current record's "servicio_id" value
 * @method SitioServicio setSitio()       Sets the current record's "sitio" value
 * @method SitioServicio setServicio()    Sets the current record's "servicio" value
 * 
 * @package    AUV
 * @subpackage model
 * @author     
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSitioServicio extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sitio_has_servicio');
        $this->hasColumn('sitio_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('servicio_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));


        $this->index('fk_sitio_has_servicio_servicio1', array(
             'fields' => 
             array(
              0 => 'servicio_id',
             ),
             ));
        $this->index('fk_sitio_has_servicio_sitio1', array(
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

        $this->hasOne('servicio', array(
             'local' => 'servicio_id',
             'foreign' => 'id'));
    }
}