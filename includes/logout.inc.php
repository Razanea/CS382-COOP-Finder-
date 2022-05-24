<?php 

session_start();
session_unset(); //unset all the session variables 
session_destroy(); 

//then send the user back to the fron page 
// Going to back to front page 
 header ("location: ../index.php?error=s");
