<?php

class myUser extends sfBasicSecurityUser
{
	
	public function login($oUser)
	{
		
		if(count($oUser) > 0 && is_array($oUser))
		{
			$this->setAuthenticated(true);
			$this->addCredential('client');
			$this->setAttribute('id', $oUser[0]['id'], 'client');
			$this->setAttribute('username', $oUser[0]['email'], 'client');
			$this->setAttribute('name', $oUser[0]['firstname']." ".$oUser[0]['lastname'], 'client');
			
			sfContext::getInstance()->getResponse()->setCookie('user_id',$oUser[0]['id']);
			sfContext::getInstance()->getResponse()->setCookie('username', $oUser[0]['email']);
			sfContext::getInstance()->getResponse()->setCookie('name',$oUser[0]['firstname']." ".$oUser[0]['lastname']);
			
			return true;	
		} else {
			return false;
		}		
			
	}
	

	/**
	 * Executes method logout and unset authenticate for login user, remove credential, unsetset attribute
	 */
	public function logout()
	{
		$this->getAttributeHolder()->removeNamespace('client');
		$this->removeCredential();
		$this->setAuthenticated(false);
	}
	
}
