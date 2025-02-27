<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

	private $_id;

	public function __construct($email, $password)
    {
        $this->username = $email;
        $this->password = $password;
    }


	public function authenticate()
	{
		$user = Emp::model()->findByAttributes(array('email' => $this->username));

		if ($user === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } elseif (!CPasswordHelper::verifyPassword($this->password, $user->password)) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->_id = $user->id;
            $this->setState('name', $user->name);
            $this->errorCode = self::ERROR_NONE;
        }
		return !$this->errorCode;
	}

	public function getId()
    {
        return $this->_id;
    }
}