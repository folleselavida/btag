<?php

/**
 * usuario form.
 *
 * @package    AUV
 * @subpackage form
 * @author     
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class usuarioForm extends BaseusuarioForm
{
	
	public function configure()
	{
	  	$foto = '/uploads/usuarios/'.$this->getObject()->foto;
  	$this->widgetSchema['foto'] = new sfWidgetFormInputFileEditable(array(
  	  	  	  	  	  	  	  	  	  	  							'file_src'  => $foto, 
  	  	  	  	  	  	  	  	  	  	  	   			            'is_image' => true,
  	  	  	  	  	  	  	  	  	  	  				            'edit_mode' => !$this->isNew(),
  	  	  	  	  	  	  	  	  	  	  							'template'     => '<style>.fix img{max-width:96px;}</style><div class="fix">%file%</div><br />%input%<br />',
  	  	  	  	  	  	  	  	  	  	  						    'delete_label' => 'Borrar imagen'));
  	$this->validatorSchema['foto'] = new sfValidatorFile(array(
  	  	  	  	  	  	  	  	  	  	  		  'required'   => false,
  	  	  	  	  	  	  	  	  	  	  		  'path'       => sfConfig::get('sf_upload_dir').'/uploads/usuarios',
  	  	  	  	  	  	  	  	  	  	  		  'mime_types' => 'web_images',	
  	));
  }

}
