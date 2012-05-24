<?php
class ImportcsvForm extends BaseForm
{
  public function configure()
  {
 		$this->setWidget('filename', new sfWidgetFormInputFile());
  		$this->setValidator('filename', new sfValidatorFile(array(
    		'mime_types' => 'web_images',
    		'path' => sfConfig::get('sf_upload_dir').'/products',
  		)));
  			
    	$this->widgetSchema->setNameFormat('importcsv[%s]');
    	$this->validatorSchema->setOption('allow_extra_fields', true);
		$this->validatorSchema->setOption('filter_extra_fields', false); 	
  }
}