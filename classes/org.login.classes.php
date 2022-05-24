<?php

class Login extends Dbh  {

//input something in db 

protected function getUser($uid, $pwd) {
//grab the connection  and run sql statement 
$stmt = $this->connect()-> prepare('SELECT org_password from organization where org_name = ? OR org_email = ?;');  

//checking if there is any error in db
if (!$stmt-> execute(array($uid, $pwd))){
	$stmt = null; //delet the stmt
	header ("location: ../index.php?error=1");
	exit();
}

// Check if we have 0 result from db ( in the query) , then we want to through error msg 

if ($stmt-> rowCount() ==0) {
	// code...$stmt = null;
	header ("location: ../index.php?error=stmtfailled1");
	exit();
}

 $stmt = $this->connect()-> prepare('SELECT * from organization where  org_name = ? or org_email = ? AND org_password = ?;'); 

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

// we can now log in the user 
$user = $stmt->fetchAll(PDO::FETCH_ASSOC);

  }
 
}
