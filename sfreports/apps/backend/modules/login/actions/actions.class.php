<?php

/**
 * login actions.
 *
 * @package    ProjectManagment
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
 	/**
  	* Executes index action
  	*
  	* @param sfRequest $request A request object
  	*/
  	public function executeIndex(sfWebRequest $request)
  	{
    	$this->forward('default', 'module');
  	}
	public function executeLogin(sfWebRequest $request)
  	{
  		if($this->getUser()->isAuthenticated() && $this->getUser()->hasCredential('admin')) {	 
			return $this->redirect('reports/reportType');
		} else {	
	  		$this->oLoginForm = new AdminForm();
	  		unset($this->oLoginForm['_csrf_token']);	
	  		if($request->isMethod('post')) {  
				$this->oLoginForm->bind($request->getParameter($this->oLoginForm->getName()));
				if($this->oLoginForm->isValid()) {   
					$oAdmin = $request->getParameter('admin');
					$ssUsername =  trim($oAdmin['email']);
					$ssPassword =  $oAdmin['password'];
					
					$oValidate = LoginValidator::validate($ssUsername,$ssPassword);
					
					if($oValidate)
						return $this->redirect('reports/reportType');
					else
						$this->getUser()->setFlash('err_msg', 'Invalid Login');
				}			
			}
		}
  	}
	public function executeLogout($request)
  	{
  		$this->getUser()->logout();
		$this->redirect('login/login');	
  	}
}
