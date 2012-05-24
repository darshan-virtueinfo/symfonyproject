<?php

/**
 * Reports form.
 *
 * @package    ProjectManagment
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ReportsTypeForm extends BaseReportsForm
{
  public function configure()
  {
  		
  		$asProjectName = ProjectDetailTable::getAllProjectName();
  		$asTaskType	= TaskTypeTable::getAllTaskType();
  		$asUserNames = UserTable::getAllUser();
  		$asTitle = TABLE2Table::getAllTitle();
  		 
  		$this->widgetSchema['user_id'] = new sfWidgetFormDoctrineChoice(array(
	  	 	'model' => 'User',
	  	 	'query' => $asUserNames,
  			'method' => 'getFirstName',
	  	 	'add_empty' => 'All'
	  	 ));
	  	 
	  	 $this->widgetSchema['project_id'] = new sfWidgetFormDoctrineChoice(array(
	  	 	'model' => 'ProjectDetail',
	  	 	'query' => $asProjectName,
  			'method' => 'getProjectName',
	  	 	'add_empty' => 'All'
	  	 ));
	  	 
	  	 $this->widgetSchema['task_id'] = new sfWidgetFormDoctrineChoice(array(
	  	 	'model' => 'TaskType',
	  	 	'query' => $asTaskType,
  			'method' => 'getTaskType',
	  	 	'add_empty' => 'All'
	  	 ));
	  	 
  		
  		$this->widgetSchema['title'] = new sfWidgetFormChoice(array('choices' => $asTitle));
  		$this->setWidget('startdate', new sfWidgetFormInputText());
  		$this->setWidget('enddate', new sfWidgetFormInputText());
		
  		$this->widgetSchema->setLabels(array(
  			'user_id' => 'Devloper',
 			'project_id' => 'Project Name',  
  			'task_id' => 'Task Type',
  			'startdate' => 'Strat Date', 
  			'enddate' => 'End Date'
  			
		));
		
		$this->widgetSchema->setNameFormat('reports[%s]');
		$this->validatorSchema->setOption('allow_extra_fields', true);
		$this->validatorSchema->setOption('filter_extra_fields', false);
  }
}