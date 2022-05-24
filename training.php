<?php
session_start();
include_once 'classes/advertisementview.class.php' 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="MenuAndFooterStyle.css" rel="stylesheet">
<link href="StyleSheet_2.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">

<style>
	
* {
  box-sizing: border-box;
}

body {
  background-color: white;
  font-family: Arial;
}

  .ExploreNavbar{
     bottom:-60px;
   } 
   .Explorebtn {
     background-color: #274472;
    }
</style>
</head>
<body>
<!----------------------Menue---------------------------->
<?php include("menue.php"); ?>
<!----------------------Name---------------------------->
<!--<img class="header1" src="header3.png"><hr> -->

<header class="w3-display-container w3-content w3-center w3-margin-top" style="max-width:800px"><br><br>
   <h1 class = "text-center pt-2" style="color: #274472;"><b>Are you looking for training programs?</b></h1>
  <img class="w3-image" src="photos/trian1.jpg">
</header>
<!--------------------filter ----------------------------------->
 <div class="w3-display-container w3-content w3-center w3-margin-top ">
  <div class="w3-bar w3-round w3-hide-small w3-large ExploreNavbar ">
    <a href="training.php" class="w3-bar-item w3-button Explorebtn w3-text-white">Show All</a>
    <a href="compTraining.php" class="w3-bar-item w3-button Explorebtn w3-text-white">Companies</a>
    <a href="unitraining.php" class="w3-bar-item w3-button Explorebtn w3-text-white">Universities</a>
  </div>
</div> <br><br><br>

    <?php  $allAdvertisementObj = new AdvertisementView();  ?>
    
<!-- Portfolio Gallery Grid -->
<div class="w3-row">
  <div class="w3-col m4">
 <!-- aramco -->
      <form action="OrganizationTrainingPage.php" method="post" style = "display: inline">
       <div class=" Form_card my-2 mx-auto p-relative bg-white shadow-1 blue-hover d-inline-block mx-4 " style="width: 340px; height: 580px; overflow: hidden; border-radius: 1px; ">
       <img src="photos/Image1.jpg" class="d-block w-full" width="200px" height="200px">
       <div class="px-2 py-2">
        <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
        Saudi Aramco </h1>
        <p class="mb-1 ff-serif">
        <?php $allAdvertisementObj->showAdvertisementBrief('1'); ?>&hellip; </p>
       </div><br>
    <button name = "Button_1" type="submit" style ="background: none; border: none;"> 
    <a name="Button_1" class="w3-left text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
        Read More </a>
    </button> 
   </div>
  </form>   
 </div>

  <div class="column ">
 <!-- company 2-->
      <form action="OrganizationTrainingPage.php" method="post" style = "display: inline">
       <div class=" Form_card my-2 mx-auto p-relative bg-white shadow-1 blue-hover d-inline-block mx-4 " style="width: 340px; height: 580px; overflow: hidden; border-radius: 1px; ">
       <img src="photos/Image2.jpg" class="d-block w-full" width="200px" height="200px">
       <div class="px-2 py-2">
        <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
        SABIC </h1>
        <p class="mb-1 ff-serif">
        <?php $allAdvertisementObj->showAdvertisementBrief('2'); ?>&hellip; </p>
       </div><br>
    <button name = "#" type="#" style ="background: none; border: none;"> 
    <a name="#" class="w3-left text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
        Read More </a>
    </button> 
   </div>
  </form>   
 </div>

   <div class="column ">
 <!-- company 2-->
      <form action="OrganizationTrainingPage.php" method="post" style = "display: inline">
       <div class=" Form_card my-2 mx-auto p-relative bg-white shadow-1 blue-hover d-inline-block mx-4 " style="width: 340px; height: 580px; overflow: hidden; border-radius: 1px; ">
       <img src="photos/norah.jpg" class="d-block w-full" width="200px" height="200px">
       <div class="px-2 py-2">
        <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
        Princess Nourah Bint Abdulrahman University</h1>
        <p class="mb-1 ff-serif">
        Princess Nourah Bint Abdulrahman University is a public women's university located in Riyadh, the capital of Saudi Arabia. It is the largest women's university in the world. The university offers diplomas, bachelor and postgraduate degrees &hellip;</p>
       </div>
    <button name = "#" type="#" style ="background: none; border: none;"> 
    <a name="#" class="w3-left text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
        Read More </a>
    </button> 
   </div>
  </form>   
 </div>

<!-- END GRID -->
</div>
</div>

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
 
        <p class="footer-company-name">COOP finder &copy; 2022</p>
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

</body>
</html>