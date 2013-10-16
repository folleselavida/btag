<?php

/**
 * oferta form.
 *
 * @package    AUV
 * @subpackage form
 * @author     
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ofertaForm extends BaseofertaForm
{
  public function configure()
  {
  	$imagen = '/uploads/oferta/'.$this->getObject()->imagen;
  	$this->widgetSchema['imagen'] = new sfWidgetFormInputFileEditable(array(
  	  	  			'file_src'  => $imagen,
  	  	  			'is_image' => true,
  	  	  			'edit_mode' => !$this->isNew(),
  	  	  			'template'     => '<style>.fix img{max-width:96px;}</style><div class="fix">%file%</div><br />%input%<br />',
  	  	  			'delete_label' => 'Borrar imagen'));
  	$this->validatorSchema['imagen'] = new sfValidatorFile(array(
  	  	  			'required'   => $this->isNew(),
  	  	  			'path'       => sfConfig::get('sf_upload_dir').'/uploads/oferta',
  	  	  			'mime_types' => 'web_images'
  	));
  	
  	
  }
}
