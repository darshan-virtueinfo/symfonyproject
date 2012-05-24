<?php

/**
 * User form .
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    ProjectManagment
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
class UserRegisterForm extends BaseUserForm
{
  	public function configure()
  	{	
  		
		unset($this['created_at'], $this['updated_at']);
		
		if($this->isNew()) {
  			$this->widgetSchema['password'] = new sfWidgetFormInputPassword();
  			$this->widgetSchema['retype_password'] = new sfWidgetFormInputPassword();
		} else {
			unset($this['password']);
			unset($this['email']);
		}
		
  		$this->widgetSchema->setLabels(array(
			'firstname'  => 'First Name',
		  	'lastname'  => 'Last Name',
		));
		
		if($this->isNew()) {
			$this->setValidators(array(
				
				'email' => new sfValidatorEmail(array(), array('invalid' => 'Please enter valid email address','required' => 'Please enter email address')),
				
				'password' => new sfValidatorAnd(array( new sfValidatorString( array('min_length' => 6, 'max_length' => 20), 
		  			array( 'min_length' => 'Your password must have at least 6 characters.', 'max_length' => 'Your password cannot be longer than 20 characters.'))), 
		  			array(), array('required' => 'Please enter a password')),
		  			
				'retype_password' => new sfValidatorAnd(array( new sfValidatorString( array('min_length' => 6, 'max_length' => 20), 
		  			array( 'min_length' => 'Your retype_password must have at least 6 characters.', 'max_length' => 'Your retype_password cannot be longer than 20 characters.'))), 
		  			array(), array('required' => 'Please enter a retype password')),
			));
		} 
		
		if($this->isNew()) {
			$postValidators = array(
		   		new sfValidatorDoctrineUnique(array('model' => 'User', 'column' => array('email')),array('invalid' => 'This email address is already exists.')),
		   		new sfValidatorSchemaCompare('password', '==', 'retype_password',array(),array('invalid'=> 'Password and confirm password fields does not match'))
		 	);
		 	$this->validatorSchema->setPostValidator(new sfValidatorAnd($postValidators));
		}
		 
		$this->widgetSchema->setNameFormat('user[%s]');
		$this->validatorSchema->setOption('allow_extra_fields', true);
		$this->validatorSchema->setOption('filter_extra_fields', false);
		
  	}
  	
}
