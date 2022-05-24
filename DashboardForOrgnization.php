<?php
session_start();

include 'classes/OrganizationView.class.php';
include 'classes/AdvertisementView.class.php';


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="MenuAndFooterStyle.css" rel="stylesheet">
    <link href="DashboardForOrgnization.css" rel="stylesheet">
    <link href="Training_discription_style.css" rel="stylesheet">

    <title>Orgnization Dashboard</title>

<script>
  $(document).ready(function(){
  $(".hover").mouseenter(function(){
  alert("You can add a new Advertisment post right her.");
  });
});
</script>
</head>
<body>
<!----------------------Menue---------------------------->
<?php include("menue.php");  ?>
  <!---------- Page Container ------------------------------>
 
<div class="w3-container"> 
  <!-- The Grid -->
  <div class="w3-row">
    <!------------ Left Column ----------->
    <div class="w3-col m3">
      <!-- Profile --> 
      <br><br><br>
       <div class="card-container">
        <img class="round" src="photos/aramco_logo2.png" alt="user">
     
      <?php
      $organizationObj = new OrganizationView();
      $advertisementObj = new AdvertisementView();
    ?>

     <h3>  <?php $organizationObj->showOrganizationName('1'); ?> </h3>
     <h6>  <?php $organizationObj->showOrganizationPlace('1');?> </h6>
     <h6>  <?php $organizationObj->showOrganizationEmail('1');?> </h6>
     <p>  <?php $organizationObj->showOrganizationDescription('1');?> </p><br>

        <div class="buttons">
          <a href="Edit_OrganizationDashboard.php">
        <button class="primary">
            Edit 
        </button><br>
        </a>
        </div>
      </div>
</div>


<!------------------------->
<div class="w3-col m7 w3-margin"><br><br>

    <div class="w3-row-padding">  
      <section class="w3-card-4 P2 w3-padding" style="height:500px;">
            <div class="w3-container w3-padding"> 
              <div class="w3-center"> <h3 class="hover"> New post</h3><br>
              <img src="photos/post.jpg" width="300px"><br><br>
              <button class ="primary"><a href="AdvertisingPostForm.php" style="color:white;"> Add</a></button><br>
             </div>
             </div>
       </section>
     </div><br><br>


 <!------------ Middle Column ----------->
    <div class="w3-row-padding">
      <section class="ProfileContent2 w3-padding">
            <div class="w3-container w3-padding"> <br> 
              <div class="w3-left"> <h3> <?php $advertisementObj->showAdvertisementTitle('1'); ?> </h3> </div>
                <div class = "w3-right"> 
                 <img class = "CompanyLogo" src="photos/Aramco Logo.png">
                </div> <br><br><br><hr>
                <div class="w3-left-align">
                 <h3>Eligibility</h3>
                 <p>Applicants eligible to apply for the program are those required by their universities to undergo 
                    practical training prior to graduation. They are considered for the program based on the availability 
                    of slots and the following criteria:
                 </p>
                 <p> <?php $advertisementObj->showAdvertisementEligibility('1'); ?> </p>

                 <h3>Required Documents</h3>
                 <p> <?php $advertisementObj->showAdvertisementDocuments('1'); ?> </p>

                 <h3>Program Objectives</h3>
                 <p>The program is designed to meet the following objectives:</p>
                 <p> <?php $advertisementObj->showAdvertisementObjectives('1'); ?> </p>

                 <h3>Benefits during the program</h3>
                 <p> <?php $advertisementObj->showAdvertisementBenefits('1'); ?> </p>
                 <br><br>
               </div><br><br><br><br>
             <button class ="w3-center primary"><a href="edit_ads_org.php" style="color:white;">Edit</a></button><br><br><br>
              <div class="w3-left-align">
               <a href="training.php" class="w3-opacity linkPlace"> Veiw as a page visitor</a> 
              </div>
           </div>
         </section>
       </div><br><br>

<!--------------Applicant request---------------------->

    <div class="w3-row-padding"> 
      <section class="ProfileContentorg w3-padding">
            <div class="w3-container w3-padding"> 
              <div class="w3-center"> <h3> See all the Applicant Info!</h3><br></div>
              <img src="photos/appInfo2.jpg" width="500px"><br><br>
              <button class ="w3-center primary"><a href="Applicant_info.php" style="color:white;">Edit</a></button>
             </div>
       </section>
     </div>
  </div>
</div>
</div>



<!--------------------------Footer------------------------------------>
<footer> 
  <section id="footer">
    <footer class="footer-distributed">
      <div class="footer-left"> 

        <h3>COOP Finder </h3>
        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Join US</a>
          ·
          <a href="#">About </a>
          ·
          <a href="#">Contact</a>
        </p>
 
        <p class="footer-company-name">COOP finder &copy; 2021</p>
      </div>
     
      <div class="footer-center">
         <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Yanbu</span> SA(Saudi Arabia)</p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p>+966 000000000</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="#">COOP_Finder@gmail.com</a></p>
        </div>
      </div>
 
      <div class="footer-right">
          <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
    </footer>
  </section> 

</footer>
<!-------------------------------------------->

</body>
</html>