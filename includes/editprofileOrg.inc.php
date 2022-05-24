<?php 
 include "../classes/dbh.class.php";
 include '../classes/organization.class.php';
 include '../classes/organizationcontr.class.php';
session_start();

if(isset($_POST["submit"]))
{
   //grabbing the data 
   $name = $_POST["name"];
   $place = $_POST["place"];
   $email = $_POST["email"];
   $description = $_POST["description"];

    $UpdateProfile = new OrganizationContr($name, $place, $email, $description);
    $UpdateProfile->updateProfile();
     // Going to back to front page 
   header ("location: ../DashboardForOrgnization.php?error=none");

 }