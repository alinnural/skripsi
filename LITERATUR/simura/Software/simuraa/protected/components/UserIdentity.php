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
	private $_id;
	public function authenticate()
	{
		$record=User::model()->findByAttributes(array('username'=>$this->username));  // email dijadiin username
       if($record===null)
               {
                       $this->_id='user Null';
                                   $this->errorCode=self::ERROR_USERNAME_INVALID;
               }
       else if($record->password!==$this->password)            // membandingkan password
               {        $this->_id=$this->username;
                       $this->errorCode=self::ERROR_PASSWORD_INVALID;
               }
        
       else
       {  
          $this->_id=$record['id_user'];
           // $this->setState('title', $record['email']);
           $this->errorCode=self::ERROR_NONE;

       }
       return !$this->errorCode;
   }

   public function getId()       //  override Id
   {
       return $this->_id;
	}
}