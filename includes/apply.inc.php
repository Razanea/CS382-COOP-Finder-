 <?php

 if (isset($_POST["submit"])) 
 {
 	// grabbing the data
 	$fname = $_POST["fname"];
 	$lname = $_POST["lname"];
 	$email = $_POST["email"];
 	$myfile = $_POST["myfile"]['name']; 


 	// instantiate applyContr class
   include "../classes/dbh.classes.php";
   include "../classes/apply.classes.php";
   include "../classes/apply-contr.classes.php";
   $apply = new applyContr($fname, $lname, $email, $myfile);

   $apply->applyUser();

 	// going back to front page

   header("location: ../index.php?error=none");
 }

 