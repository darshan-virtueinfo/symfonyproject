<?php

/**
 * Reports form.
 *
 * @package    ProjectManagment
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ReportsForm extends BaseReportsForm
{
  	public function configure()
  	{
  		unset($this['updated_at'], $this['created_at'], $this['_csrf_token']);
  		if(!$this->isNew()) {
  			unset($this['date_at']);
  		}
  		if($this->isNew()) {
  			$this->widgetSchema['date_at'] = new sfWidgetFormInputText();
  			
  		}
  		$asProjectName = ProjectDetailTable::getAllProject();
  		$asTaskType	= TaskTypeTable::getAllTask();
  		
		$this->widgetSchema['project_id'] = new sfWidgetFormChoice(array('choices' => $asProjectName));
  		$this->widgetSchema['task_id'] = new sfWidgetFormChoice(array('choices' => $asTaskType ));
  		$this->widgetSchema['start_time'] = new sfWidgetFormInputText();
  		$this->widgetSchema['end_time'] = new sfWidgetFormInputText();
  		
  		$this->widgetSchema['user_id'] = new sfWidgetFormInputHidden(array(), array("value" => $this->getOption('snSessionId')));
  		
  		
  		$snHour = array('' => 'Select Hour', '0.25' => '0.25', '0.50' => '0.50', '0.75' => '0.75', '1.00' => '1.00'
	  		, '1.25' => '1.25', '1.50' => '1.50', '1.75' => '1.75', '2.00' => '2.00'
	  		, '2.25' => '2.25', '2.50' => '2.50', '2.75' => '2.75', '3.00' => '3.00'
	  		, '3.25' => '3.25', '3.50' => '3.50', '3.75' => '3.75', '4.00' => '4.00'
	  		, '4.25' => '4.25', '4.50' => '4.50', '4.75' => '4.75', '5.00' => '5.00'
	  		, '5.25' => '5.25', '5.50' => '5.50', '5.75' => '5.75', '6.00' => '6.00'
	  		, '6.25' => '6.25', '6.50' => '6.50', '6.75' => '6.75', '7.00' => '7.00'
	  		, '7.25' => '7.25', '7.50' => '7.50', '7.75' => '7.75', '8.00' => '8.00'
	  		, '8.25' => '8.25', '8.50' => '8.50', '8.75' => '8.75', '9.00' => '9.00'
	  		, '9.25' => '9.25', '9.50' => '9.50', '9.75' => '9.75', '10.00' => '10.00');
	  		
	  		
  		$this->widgetSchema['task_hour'] = new sfWidgetFormChoice(array('choices' => $snHour));

  		if($this->isNew()) {
	  		$this->setValidators(array(
	  			'project_id' => new sfValidatorString(array(), array('required' => 'Please select proejct')),
	  			'task_id' => new sfValidatorString(array(), array('required' => 'Please select task type')),
	  			'detail' => new sfValidatorString(array(), array('required' => 'Please enter task description')),
	  			'start_time' => new sfValidatorString(array(), array('required' => 'Please enter start time')),
	  			'end_time' => new sfValidatorString(array(), array('required' => 'Please enter end time')),
	  			'task_hour' => new sfValidatorString(array(), array('required' => 'Please select task hour')),
	  			'date_at' => new sfValidatorString(array(), array('required' => 'Please enter date'))
	  		));
  		} else {
  			$this->setValidators(array(
	  			'project_id' => new sfValidatorString(array(), array('required' => 'Please select proejct')),
	  			'task_id' => new sfValidatorString(array(), array('required' => 'Please select task type')),
	  			'detail' => new sfValidatorString(array(), array('required' => 'Please enter task description')),
	  			'start_time' => new sfValidatorString(array(), array('required' => 'Please enter start time')),
	  			'end_time' => new sfValidatorString(array(), array('required' => 'Please enter end time')),
	  			'task_hour' => new sfValidatorString(array(), array('required' => 'Please select task hour'))
	  		));
  		}
  		$this->widgetSchema->setLabels(array(
 			'project_id' => 'Project Name',  
  			'task_id' => 'Task Type',
  			'detail' => 'Sort Description'
		));
		
		$this->widgetSchema->setNameFormat('reports[%s]');
		$this->validatorSchema->setOption('allow_extra_fields', true);
		$this->validatorSchema->setOption('filter_extra_fields', false);
  	}
}
