<?php 
 include "../classes/dbh.class.php";
 include "../classes/advertisement.class.php";
 include "../classes/advertisementcontr.class.php";

if(isset($_POST["submit"]))
{
   //grabbing the data 
    $title = $_REQUEST["title"];
    $Eligibility = $_REQUEST["elig"];
    $RecDocuments = $_REQUEST["documents"];
    $Objectives = $_REQUEST["objective"];
    $Benefits = $_REQUEST["benifit"];

 
    $AdvObj = new AdvertisementContr($title, 'Saudi Aramco is the worlds largest oil producer. Officially known as Saudi Arabian Oil Company, the company is primarily state-owned and is based in Dhahran, Saudi Arabia. It is the worlds most profitable company, eclipsing even tech giants such as Apple ', $Eligibility, $RecDocuments, $Objectives, $Benefits, '1');

    $AdvObj->updatAds();

    header("location: ../DashboardForOrgnization.php?error=none");

 }