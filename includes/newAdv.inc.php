<?php
 include "../classes/dbh.class.php";
 include "../classes/advertisement.class.php";
 include "../classes/advertisementcontr.class.php";

if(isset($_POST["submit"])){

    $title = $_REQUEST["title"];
    $Bdescription = $_REQUEST["Bdescription"];
    $Eligibility = $_REQUEST["Eligibility"];
    $RecDocuments = $_REQUEST["RecDocuments"];
    $Objectives = $_REQUEST["Objectives"];
    $Benefits = $_REQUEST["Benefits"];
    
   

    $AdvObj = new AdvertisementContr($title, $Bdescription, $Eligibility, $RecDocuments, $Objectives, $Benefits, '1');

    $AdvObj->checkInput();

    header("location: ../DashboardForOrgnization.php?error=none");
}