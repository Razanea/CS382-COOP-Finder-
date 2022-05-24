<?php
 // sign up info , the error handler
 class loginContr extends Login {

 	private $uid;
 	private $pwd;


 	public function __construct($uid,$pwd )
 	{
       $this->uid = $uid;
       $this->pwd = $pwd;

 	}
 	// create a function is allowed for us to sign up the user if none of these error handlers   return an error 
 	public function loginUser() {
 		// run a header stmt that is going to  send the user to the home page 
 		if($this->emptyInput() ==false){
 			header ("location: ../index.php?error=emptyInput");
	       exit();
 		}

 		// if none of these error happened 
 		$this->getUser($this->uid, $this->pwd);

 	}

 	private function emptyInput() {
 		$result; 
 		if( empty($this->uid) || empty($this->pwd) )		
 		{
          $result = false;
 		}
 		else {
 			$result = true;			
 		}
 		return $result;

 	} 
 }

 	