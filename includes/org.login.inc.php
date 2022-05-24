<?php
session_start();

if(isset($_POST["submit"]))
{
   //grabbing the data 
   $uid = $_POST["uid"];
   $pwd = $_POST["pwd"];

   //Inistatiate SignUpcontr class  (woth ordering )
     include '../classes/dbh.classes.php';
     include '../classes/org.login.classes.php';
     include '../classes/login.contr.classess.php';
     $login = new loginContr($uid,$pwd);

   // Running error handlers and user signup
   $login -> loginUser();

   $_SESSION['uid'] = $_POST["uid"];
   $_SESSION['type_of_user'] = "org";
 
   // Going to back to front page 
   header ("location: ../index.php?error=none");

}
