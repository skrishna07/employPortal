<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	private $id;
	public function authenticate()
	{
		$record =EmpRegistration::model()->find('emp_username = :x_username',array(':x_username'=>$this->username));
		if($record===null)
		{
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		else if(($record->emp_password)!==($this->password))
		{
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		else
		{
			$this->id=$record->emp_id;
			$this->setState('roles', $record->emp_role);
			$this->setState('user_id',$record->emp_id);
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
		}
		
		public function getId(){
			return $this->id;
		}
		
}