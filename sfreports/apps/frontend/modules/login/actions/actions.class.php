<?php

/**
 * login actions.
 *
 * @package    ProjectManagment
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
sfProjectConfiguration::getActive()->loadHelpers(array('Url', 'Tag', 'I18N', 'Asset','Partial','Text','JavascriptBase'));
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
	public function executeAddUserDetail( $request)
  	{
  		$this->snReportId = 0;
  		$this->ssUrl = url_for('reports/addreportdetail');
  		if($this->hasRequestParameter('id')) {
  			$this->snReportId = $this->getRequestParameter('id');
  			$oReport = Doctrine::getTable('User')->find($this->snReportId);
  				$this->oUserDetailform = new UserRegisterForm($oReport);
  				$this->ssUrl .= '/id/'.$this->snReportId;
  		} else {
  			$this->oUserDetailform = new UserRegisterForm();
  		}
  		
  		unset($this->oUserDetailform['_csrf_token']);
  		if($request->isMethod('post')) {  
			$this->oUserDetailform->bind($request->getParameter($this->oUserDetailform->getName()));
				if($this->oUserDetailform->isValid()) {
					$this->oUserDetailform->save();
  					$this->snReportId = $this->getRequestParameter('id');
  					if($this->snReportId) {
  						$this->getUser()->setFlash('success_flash_msg', 'Your profile updated sucessfully');	
						$this->redirect('reports/index');		
  					} else {
						$this->getUser()->setFlash('success_flash_msg', 'Your register process is sucessfully');	
						$this->redirect('login/login');
  					}  						
					
				} 
  		}				
  	}
	public function executeLogin(sfWebRequest $request)
  	{
  		if($this->getUser()->isAuthenticated() && $this->getUser()->hasCredential('client')) {	 
			return $this->redirect('reports/addreportdetail');
		} else {
	  		$this->oLoginForm = new UserForm();
	  		unset($this->oLoginForm['_csrf_token']);	
	  		if($request->isMethod('post')) {  
				$this->oLoginForm->bind($request->getParameter($this->oLoginForm->getName()));
				if($this->oLoginForm->isValid()) {   
					$oAdmin = $request->getParameter('user');
					$ssUsername =  trim($oAdmin['email']);
					$ssPassword =  $oAdmin['password'];
					
					$oValidate = LoginValidator::validate($ssUsername,$ssPassword);
					 	  
					if($oValidate)
						return $this->redirect('reports/addreportdetail');
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