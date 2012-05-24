<?php

class LoginValidator
{
	/**
	 * Executes method validate Login
	 * @param $ssUsername = username
	 * @param $ssPassword = password
	 */
	public static function validate($ssUsername,$ssPassword)
	{
		if(!empty($ssUsername) && !empty($ssPassword))
		{
			$oUser = Doctrine::getTable('User')->getByUserName(trim($ssUsername));
			if(count($oUser) > 0)
			{
				if($ssPassword == $oUser[0]['password'])
				{
					sfContext::getInstance()->getUser()->login($oUser);
					return true;
				}
				else
					return false;
			}
		}
		return false;
	}
}


