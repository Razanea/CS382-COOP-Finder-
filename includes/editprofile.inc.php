<?php 


if(isset($_POST["submit"]))
{
   //grabbing the data 
   $name = $_POST["name"];
   $email = $_POST["email"];
   $city = $_POST["city"];
   $description = $_POST["description"];
   $s1 = $_POST["s1"];
   $s2 = $_POST["s2"];
   $s3 = $_POST["s3"];
   $s4 = $_POST["s4"];
   $s5 = $_POST["s5"];


   //Inistatiate SignUpcontr class  (with ordering )
     include '../classes/dbh.classes.php';
     include '../classes/student.classes.php';
     include '../classes/student.contr.classes.php';

     $UpdateProfile = new StudentControl($name, $email , $city , $description, $s1 , $s2 , $s3 , $s4 , $s5 ,  );

     $UpdateProfile->setProfile();
     // Going to back to front page 
   header ("location: ../std_dashboard.php?error=none");

 }