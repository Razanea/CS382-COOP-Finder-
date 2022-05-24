<?php

if(isset($_POST["submit"]))
{
   //grabbing the data 
   $uid = $_POST["uid"];
   $pwd = $_POST["pwd"];
   $pwdRepeat = $_POST["pwdrepeat"];
   $email = $_POST["email"];

   //Inistatiate SignUpcontr class  (woth ordering )
     include '../classes/dbh.classes.php';
     include '../classes/signup.classes.php';
     include '../classes/signup.contr.classes.php';
     $signup = new SignUpContr($uid,$pwd , $pwdRepeat,$email );

   // Running error handlers and user signup
   $signup -> signupUser();
   // Going to back to front page 
   header ("location: ../index.php?error=none");
}