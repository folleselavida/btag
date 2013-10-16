<?php

/**
 * categoria form.
 *
 * @package    AUV
 * @subpackage form
 * @author     
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoriaForm extends BasecategoriaForm
{
  public function configure()
  {
  	
  	$imagen = '/uploads/categoria/'.$this->getObject()->logo;
  	$this->widgetSchema['logo'] = new sfWidgetFormInputFileEditable(array(
  	  	  			'file_src'  => $imagen,
  	  	  			'is_image' => true,
  	  	  			'edit_mode' => !$this->isNew(),
  	  	  			'template'     => '<style>.fix img{max-width:96px;}</style><div class="fix">%file%</div><br />%input%<br />',
  	  	  			'delete_label' => 'Borrar imagen'));
  	$this->validatorSchema['logo'] = new sfValidatorFile(array(
  	  	  			'required'   => $this->isNew(),
  	  	  			'path'       => sfConfig::get('sf_upload_dir').'/uploads/categoria',
  	  	  			'mime_types' => 'web_images'
  	));
  	 
  	 
  	$imagen = '/uploads/categoria/'.$this->getObject()->thumbnail;
  	$this->widgetSchema['thumbnail'] = new sfWidgetFormInputFileEditable(array(
  	  	  	  			'file_src'  => $imagen,
  	  	  	  			'is_image' => true,
  	  	  	  			'edit_mode' => !$this->isNew(),
  	  	  	  			'template'     => '<style>.fix img{max-width:96px;}</style><div class="fix">%file%</div><br />%input%<br />',
  	  	  	  			'delete_label' => 'Borrar imagen'));
  	$this->validatorSchema['thumbnail'] = new sfValidatorFile(array(
  	  	  	  			'required'   => $this->isNew(),
  	  	  	  			'path'       => sfConfig::get('sf_upload_dir').'/uploads/categoria',
  	  	  	  			'mime_types' => 'web_images'
  	));
  	 
  	
  	
  }
}
