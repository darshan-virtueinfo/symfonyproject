<?php

/**
 * TABLE2 form.
 *
 * @package    ProjectManagment
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TABLE2Form extends BaseTABLE2Form
{
  public function configure()
  {
  		$this->setWidget('filename', new sfWidgetFormInputFile());
  		$this->setValidator('filename', new sfValidatorFile(array(
    		//'mime_types' => 'web_images',
    		'required' => false,
    		'path' => sfConfig::get('sf_upload_dir'),
  		)//,//array(
    		//'mime_types' => 'Please select file'
  		//)
  		));
  			
    	$this->widgetSchema->setNameFormat('table2[%s]');
    	$this->validatorSchema->setOption('allow_extra_fields', true);
		$this->validatorSchema->setOption('filter_extra_fields', false); 	
  }
}
