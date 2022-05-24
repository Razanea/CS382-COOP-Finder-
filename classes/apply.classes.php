<?php 

class apply extends Dbh {

 protected function setUser($fname, $lname, $email, $myfile)
 {
 	 $stmt = $this->connect()->prepare('INSERT INTO apply (app_fname, app_lname, app_email, app_cv) VALUES (?, ?, ?, ? );');
 
   if(!$stmt->execute(array($fname, $lname, $email, $myfile)))
   {
      $stmt = null;
       header("location: ../index.php?error=stmtfailed");
       exit();
    }
    $stmt = null;
  }

   protected function checkApply($fname, $email){
 	 $stmt = $this->connect()->prepare('SELECT app_fname from apply WHERE app_fname = ? OR app_email = ?; ');
 
   if(!$stmt->execute(array($fname, $email))){
   $stmt = null;
   header("location: ../index.php?error=stmtfailed");
   exit();
   }

    $resultCheck;
    if ($stmt->rowCount() > 0) {
	   $resultCheck = false;
     }
     else {
	   $resultCheck = true;
     }
      return $resultCheck;
    }
 
 }



 