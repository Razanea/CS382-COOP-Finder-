
<?php
 // sign up info , the error handler
 class SignUpContr extends Signup  {

 	private $uid;
 	private $pwd;
 	private $pwdRepeat;
 	private $email;

 	public function __construct($uid,$pwd , $pwdRepeat,$email )
 	{
       $this->uid = $uid;
       $this->pwd = $pwd;
       $this->pwdRepeat = $pwdRepeat;
       $this->email = $email;  
 	}
 	// wcreate a function is allowed for us to sign up the user if none of these error handlers   return an error 

 	public function signupUser() {

 		if($this->invalidaUid() ==false){
 			header ("location: ../index.php?error=username");
	       exit();
 		}

 		if($this->pwdMatch() ==false){
 			// echo " pass dont match "
 			header ("location: ../index.php?error=passwordmatch");
	       exit();
 		}
 		if($this->uidTakenCheck() ==false){
 			// echo " username or email taken "
 			header ("location: ../index.php?error=useroremailtaken");
	       exit();
 		}
 		// if none of these error happened 
 		$this->setUser($this->uid, $this->pwd, $this->email);

 	}

 	private function emptyInput() {
 		$result; 
 		if( empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email))		
 		{
          $result = false;
 		}
 		else {
 			$result = true;			
 		}
 		return $result;

 	} 

 	private function invalidaUid() {
      $result;
      if (!preg_match("/^[a-zA-z0-9]*$/" , $this->uid))
      {
      	$result = false;
      }
      else 
      {
      	$result = true;
      }
      return $result;
 	}

    private function pwdMatch() {
      $result;
      if ($this->pwd !== $this->pwdRepeat) 
      {
      	$result = false;
      }
      else 
      {
      	$result = true;
      }
      return $result;
 	}

 	// the error handler if the user name is exist from signup class
 	 private function uidTakenCheck() {
      $result;
      if (!$this-> checkUser($this->uid, $this->email ))
      {
      	$result = false;
      }
      else 
      {
      	$result = true;
      }
      return $result;
 	}
 }