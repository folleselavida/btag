<?php

/**
 * banner actions.
 *
 * @package    aa
 * @subpackage banner
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class bannerComponents extends sfComponents
{
	public function executeBuscarsitiomenu(sfWebRequest $request)
	{
		$this->ciudades = Doctrine_Core::getTable('ciudad')
		->createQuery('a')
		->orderBy("nombre asc")
		->execute();
	}
	
}
