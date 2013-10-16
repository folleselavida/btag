<?php

/**
 * sitio form.
 *
 * @package    AUV
 * @subpackage form
 * @author     
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sitioForm extends BasesitioForm
{
  public function configure()
  {
  	
//   	$this->widgetSchema['propiedad_list']->setOption('renderer_class', 'sfWidgetFormSelectDoubleList');
  	 
  	
  	
  	$plugin = 'plugins:"pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist"';
  	$theme = 'theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
  	theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
  	theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
  	theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak"';
  	 
  	
  	$this->widgetSchema['descripcion'] = new sfWidgetFormTextareaTinyMCE(array(
  			'width'  => 550,
  			'height' => 250,
  			'config'=>$plugin.','.$theme
  	));
  	
  	
  	$imagen = '/uploads/sitio/'.$this->getObject()->imagen;
  	$this->widgetSchema['imagen'] = new sfWidgetFormInputFileEditable(array(
  	  			'file_src'  => $imagen,
  	  			'is_image' => true,
  	  			'edit_mode' => !$this->isNew(),
  	  			'template'     => '<style>.fix img{max-width:96px;}</style><div class="fix">%file%</div><br />%input%<br />',
  	  			'delete_label' => 'Borrar imagen'));
  	$this->validatorSchema['imagen'] = new sfValidatorFile(array(
  	  			'required'   => $this->isNew(),
  	  			'path'       => sfConfig::get('sf_upload_dir').'/uploads/sitio',
  	  			'mime_types' => 'web_images'
  	));
  	
  	
  	$imagen = '/uploads/sitio/'.$this->getObject()->thumbnail;
  	$this->widgetSchema['thumbnail'] = new sfWidgetFormInputFileEditable(array(
  	  	  			'file_src'  => $imagen,
  	  	  			'is_image' => true,
  	  	  			'edit_mode' => !$this->isNew(),
  	  	  			'template'     => '<style>.fix img{max-width:96px;}</style><div class="fix">%file%</div><br />%input%<br />',
  	  	  			'delete_label' => 'Borrar imagen'));
  	$this->validatorSchema['thumbnail'] = new sfValidatorFile(array(
  	  	  			'required'   => $this->isNew(),
  	  	  			'path'       => sfConfig::get('sf_upload_dir').'/uploads/sitio',
  	  	  			'mime_types' => 'web_images'
  	));
  	
  }
}
