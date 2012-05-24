<?php

class myUser extends sfBasicSecurityUser
{
	public function login($oAdminUser)
	{
		
		if(count($oAdminUser) > 0 && is_array($oAdminUser))
		{
			$this->setAuthenticated(true);
			$this->addCredential('admin');
			$this->setAttribute('id', $oAdminUser[0]['id'], 'admin');
			$this->setAttribute('username', $oAdminUser[0]['email'], 'admin');
			$this->setAttribute('name', $oAdminUser[0]['firstname']." ".$oAdminUser[0]['lastname'], 'admin');
			
			sfContext::getInstance()->getResponse()->setCookie('admin_id',$oAdminUser[0]['id']);
			sfContext::getInstance()->getResponse()->setCookie('username', $oAdminUser[0]['email']);
			sfContext::getInstance()->getResponse()->setCookie('name',$oAdminUser[0]['firstname']." ".$oAdminUser[0]['lastname']);
			return true; 
				
		}
		else
			return false; 	
	}
	
	/**
	 * Executes method logout and unset authenticate for login user, remove credential, unsetset attribute
	 */
	public function logout()
	{
		$this->getAttributeHolder()->removeNamespace('admin');		
		$this->removeCredential();
		$this->setAuthenticated(false);
	}
}
