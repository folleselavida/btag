<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
	public function setup()
	{
		$this->enablePlugins('sfDoctrinePlugin');
		$sf_root_dir = sfConfig::get('sf_root_dir');
		sfConfig::add(array(
		 'sf_web_dir_name' => $sf_web_dir_name = 'html',
		 'sf_web_dir'      => $sf_root_dir.DIRECTORY_SEPARATOR.$sf_web_dir_name,
		 'sf_upload_dir'   => $sf_root_dir.DIRECTORY_SEPARATOR.$sf_web_dir_name.DIRECTORY_SEPARATOR.sfConfig::get('sf_upload_dir_name'),
		));
		$this->enablePlugins('sfDoctrineGuardPlugin');
		$this->enablePlugins('sfFormExtraPlugin');

    $this->enablePlugins('sfThumbnailPlugin');
  }
}

