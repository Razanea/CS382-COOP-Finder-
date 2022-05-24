<?php
// create the neccessary code that will run inside the database , where we interact with db 

class Login extends Dbh  {

//input something in db 

protected function getUser($uid, $pwd) {
//grab the connection  and run sql statement 
$stmt = $this->connect()-> prepare('SELECT users_pwd from users where  users_uid = ? OR users_email = ?;');  

//checking if there is any error in db
if (!$stmt-> execute(array($uid, $pwd))){
	$stmt = null; //delet the stmt
	header ("location: ../index.php?error=1");
	exit();
}

// Check if we have 0 result from db ( in the query) , then we want to through error msg 

if ($stmt-> rowCount() ==0) {
	// code...$stmt = null;
	header ("location: ../index.php?error=stmtfailled");
	exit();
}

// we want to take the pass from db and match it with the one that the user give us 

$pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
$checkPWd = password_verify($pwd,$pwdHashed[0]["users_pwd"]); // we want to got the zero index , then want to grap the assocsative array that has the name se to user _pwd.
// this mean that the checkPwd going to return tru or false 
if ($checkPWd == false)
 {
	$stmt = null;
	header ("location: ../index.php?error=stmtfailled");
	exit();
}

else if ($checkPWd == true) 
{
 $stmt = $this->connect()-> prepare('SELECT * from users where  users_uid = ? or users_email = ? AND users_pwd = ?;'); 
 // check for every thing from the user wheather the user have the user name is equal to what the user submitted or the user email inside the db is equal to what the user submitted 

  if (!$stmt-> execute(array($uid, $uid ,$pwd)))
  {
	$stmt = null; //delet the stmt
	header ("location: ../index.php?error=stmtfailled");
	exit();
  }

   if ($stmt-> rowCount() ==0) {
	$stmt = null; //delet the stmt
	header ("location: ../index.php?error=stmtfailled");
	exit();
  }
}
 
}

}




