<?php

/**
 * Admin form.
 *
 * @package    ProjectManagment
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AdminForm extends BaseAdminForm
{
  	public function configure()
  	{
  		unset($this['created_at'], $this['updated_at']);
			 
		$this->setWidgets(array(
		  	'email' => new sfWidgetFormInputText(array(),array('maxlength' => 50,'size' => 20,'tabindex' => 1)),
		  	'password' => new sfWidgetFormInputPassword(array(),array('maxlength' => 30,'size' => 20,'tabindex' => 1)),		  
		));

		$this->widgetSchema->setLabels(array(
			'email'  => 'User Name',
		  	'password'  => 'Password',
		));

		$this->setValidators(array(
			'email' => new sfValidatorString(array('required' => true,'trim' => true),array('required'=> 'Please Enter Username')),
			'password' => new sfValidatorString(array('required' => true,'trim' => true),array('required'=> 'Please Enter Password')),
		));

		$this->widgetSchema->setNameFormat('admin[%s]');
		$this->validatorSchema->setOption('allow_extra_fields', true);
		$this->validatorSchema->setOption('filter_extra_fields', false);
  	}
}
