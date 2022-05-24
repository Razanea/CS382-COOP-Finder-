<?php
include 'classes/OrganizationView.class.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="MenuAndFooterStyle.css" rel="stylesheet">
    <link href="DashboardForOrgnization.css" rel="stylesheet">
    <link href="Training_discription_style.css" rel="stylesheet">
   <link href="edit_form_dashboard.css" rel="stylesheet">

    <title>Edit Profile</title>
</head>
<body>
  <!----------------------Menue---------------------------->
<?php include("menue.php"); ?>

<!----------------------Form---------------------------->

<div class="w3-card container w3-center EditProfileForm">

<?php
      $organizationObj = new OrganizationView();
    ?>

    <h2 class="mt-2"><b>Edit Information</b></h2>

    <form class="my-3" action="includes/editprofileOrg.inc.php" method="post">

      <div class="col-25"><h4>Name of the organization:</h4></div>
         <div class="col-60 my-1"><input type ="text" name="name" placeholder="<?php $organizationObj->showOrganizationName('1');?>"></div>

         <div class="col-25"><h4>Place of the organization:</h4></div>
         <div class="col-60 my-1"><input type ="text" name="place" placeholder="<?php $organizationObj->showOrganizationPlace('1');?>"></div>

         <div class="col-25"><h4>Organization's email:</h4></div>
         <div class="col-60 my-1"><input type ="text" name="email" placeholder="<?php $organizationObj->showOrganizationEmail('1');?>"></div>

         <div class="col-25"><h4>About the organization:</h4></div>
         <div class="col-60 my-1 mb-3"> <textarea id="description" name="description" placeholder="<?php $organizationObj->showOrganizationDescription('1');?>" style="height:200px"></textarea></div>

        <br><br>

       <button type="submit" class="ApplyButton" name="submit">Update</button>
    </form>
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