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
	public function executeFooter(sfWebRequest $request)
	{
		$q = Doctrine_Query::create()
		->select('g.titulo, c.nombre')
				->from("catgenerica c")
				->innerJoin('c.genericas g')
				->orderBy("c.id asc");
		$this->genericas = $q->fetchArray();
	}
	
	public function executeBuscarsitiomenu(sfWebRequest $request)
	{
		$this->ciudades = Doctrine_Core::getTable('ciudad')
		->createQuery('a')
		->orderBy("nombre asc")
		->execute();
	}
	
	public function executeCreateGallery(sfWebRequest $request)
	{

	}
	
}
