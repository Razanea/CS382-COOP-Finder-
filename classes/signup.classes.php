<?php
// create the neccessary code that will run inside the database , where we interact with db  
class Signup extends Dbh  {

//input something in db 

protected function setUser($uid, $pwd, $email) {
//grab the connection  and run sql statement 
$stmt = $this->connect()-> prepare('INSERT INTO users (users_uid , users_pwd, users_email) VALUES (?,?,?); ');  

//something in hashing , we want to insert the hash pwd in db  

$hadhedPwd = password_hash($pwd, PASSWORD_DEFAULT);

if (!$stmt-> execute(array($uid, $hadhedPwd, $email))){
 // take the data an assign it to question mark
	$stmt = null; //delet the stmt
	header ("location: ../index.php?error=stmtfailled");
	exit();
}
 $stmt = null;
}


protected function checkUser($uid, $email) {
$stmt = $this-> connect() -> prepare('SELECT users_uid From users where users_uid = ? OR users_email = ?; ');  // check if the user name is qual to any username in the database , if there is something exisit ( insted of $uid i can put ?)
if (!$stmt-> execute(array($uid, $email))){
 // take the data assign it to question mark
	$stmt = null; //delet the stmt
	header ("location: ../index.php?error=stmtfailled");
	exit();
}

$resultCheck;
if($stmt-> rowCount()>0 ) { // it tell us how many rows returns from this query
  $resultCheck = false;

}
else{
	$resultCheck = true;
}
    return $resultCheck;
}

}

