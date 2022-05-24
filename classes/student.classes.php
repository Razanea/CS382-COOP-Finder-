<?php  
include_once 'dbh.classes.php';
class Student extends dbh{

	protected function updateUser($name, $email , $city , $description, $s1 , $s2 , $s3 , $s4 , $s5)
    {

	   //grab the connection  and run sql statement 
	     $stmt = $this->connect()-> prepare("UPDATE users set users_uid = '$name' , users_email = '$email' , user_city ='$city' , user_discription = '$description', user_skill1 ='$s1' , user_skill2 ='$s2' ,  user_skill3 ='$s3' ,  user_skill4 = '$s4' ,  user_skill5 ='$s5' where users_id = 1 "); 
 
	    //checking if there is any error in db
         if (!$stmt-> execute(array($name, $email , $city , $description, $s1 , $s2 , $s3 , $s4 , $s5 )))
         {
	     $stmt = null; //delet the stmt
	     header ("location: ../std_dashboard.php?error=1");
	     exit();
         }
     }

    protected function getuser($id) {
        $sql = "SELECT * FROM users WHERE users_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

   
}