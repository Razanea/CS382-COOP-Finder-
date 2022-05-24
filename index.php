<?php
session_start();
include_once 'classes/advertisementview.class.php' 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="style.css" rel="stylesheet">
  <link href="StyleSheet_2.css" rel="stylesheet">
  <title>Home Page</title>
  <style>

  #form1 {
  position: relative;
  width: 500px;
  margin-top: 30px;
  height: 450px;
  margin: 2%;
  font-family: 'Exo', sans-serif;
  background-color: #e1ecf4;
  border-radius: 3px;
  border: 1px solid #7aa7c7;
  box-shadow: rgba(255, 255, 255, .7) 0 1px 0 0 inset;  
  }

  #form2{
  width: 500px;
  margin-top: 30px;
  height: 450px;
  margin: 2%;
  position: relative;
  font-family: 'Exo', sans-serif;
  background-color: #e1ecf4;
  border-radius: 3px;
  border: 1px solid #7aa7c7;
  box-shadow: rgba(255, 255, 255, .7) 0 1px 0 0 inset;  
  }
.center2{
  margin-left: 30%;
}
</style>

<script> //log in form
$(document).ready(function(){
  $(".click").click(function(){
    $(".hide").hide();
    $(".show").show();
  });
});
</script>

</head>
<body>
<!----------------------Menue---------------------------->
<?php include("menue.php"); ?>
<!----------------------Name---------------------------->
<img class="header1" src="photos/header33.png">

<!----------------------About----------------------->
<div class="context"> <!-- the blue box -->
<div class="w3-container">
  <div class="content"> <!-- transparent box -->
    <h1><b id="About"> About <b></h1><br><br>
      <h2 class="w3-display-container">  
        COOP Finder aims to make it easier for students to complete their training program. By gathering the majority of the companies and the universities that have training opportunities for students. Bring them all together on one website so that students can conveniently apply for a training without needing to search from other websites and sources. As well as the companies can get benefit from our website by advertising their available training opportunities for students.
     </h2>
  </div>
</div>
</div>
<div class="area" > <!-- the animation --> 
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
</div>

<!-----------------Training programs section------------------->
<div class = "w3-card mt-3 mx-1"> 
    <h1 class = "text-center pt-2" style="color: #274472;"><b>Cooperative Training Programs</b></h1>
    <?php $allAdvertisementObj = new AdvertisementView();
  
    ?> 
     <!---------------Card 1-------------------->
    <form action="OrganizationTrainingPage.php" method="post" class = "Form_card" style = "display: inline"><div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover d-inline-block mx-4 " style="width: 360px; overflow: hidden; border-radius: 1px;">
      <img src="photos/Image1.jpg" class="d-block w-full">
      <div class="px-2 py-2">
        <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
        Saudi Aramco </h1>
        <p class="mb-1 ff-serif">
        <?php $allAdvertisementObj->showAdvertisementBrief('1'); ?>&hellip; </p>
      </div>
     <button name = "Button_1" type="submit" style = "background: none; border: none;"> <a name="Button_1" class="w3-left text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
        Read More </a></buttton>
     
   </div>
</form>
   
   <!---------------Card 2-------------------->
   <form action="OrganizationTrainingPage.php" method="post" style = "display: inline"> <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover d-inline-block mx-4 " style="width: 360px; overflow: hidden; border-radius: 1px;">
       <img src="photos/Image2.jpg" class="d-block w-full" width="200px" height="200px">
       <div class="px-2 py-2">
         <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
         SABIC </h1>
         <p class="mb-1 ff-serif">
         <?php $allAdvertisementObj->showAdvertisementBrief('2'); ?>&hellip; </p>
       </div>
      <button name = "Button_2" type="submit" style = "background: none; border: none;"><a name="Button_1" class="w3-left text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
        Read More </a></button>
     </div><br><br>

     <div class = "text-center">
     <button class = "button_forMore shadow-1 px-1"><a href="training.php" class="text-uppercase d-inline-block font-weight-medium lts-2px mb-1 mt-1 text-center styled-link"> More Training Programs </a></button>
     </div> <br>
</div>
</form>
<!----------------------log in --------------------------->
<div class="w3-container">
<div class="hide">
<?php
// if the user doesnt sign in show this windows
if(!isset($_SESSION['uid']))
{
?>
  <h1 class = "text-center pt-2" id="join" style="color: #274472;"><b>Join with us</b></h1>
  <h4 class="text-center pt-2 click" style="color: #274472;"> Do you have an orgnization account? <a href="#">click here </a></h4>
 
 <br><br>
<div class="center2">
 <form action="includes/login.inc.php" id="form1" method="post">
  <div class="container">
    <center><h1> Log in </h1></center>
    <input type="text" placeholder="Username" name="uid" required>
    <input type="password" placeholder="Password" name="pwd" required>
    <input type="password" placeholder="reapet password" name="pwdrepeat" required>       
    <button type="submit" name="submit">Login</button>
  </div>
  <!-- if we want to do show query for sign up -->
  <!-- <center><p> Dont you have an account? <a id="show" href="#"> click here </a> </p></center><br> -->
 </form>
<br><br>
</div>
<!----------------------Sign up --------------------------->
<div class="center2">
 <form action="includes/signup.inc.php" id="form2" method="post">
  <div class="container">
    <center><h1> Sign up </h1></center>
    <input type="text" placeholder="Username" name="uid" required>
    <input type="password" placeholder="Password" name="pwd" required>  
    <input type="password" placeholder="reapet password" name="pwdrepeat" required>
    <input type="text" placeholder="email" name="email" required>
    <button type="submit" name="submit">Sign up</button>
  </div>
 </form>
</div>

<?php
}
else
{
// nothing will appear 
}
?>
</div></div>
<!--------------- log in (org)  ----------------------->
<div style="display: none;" class="show">
<?php
// if the user doesnt sign in show this windows
if(!isset($_SESSION['uid']))
 {
?> 
<h1 class = "text-center pt-2" style="color: #274472;"><b>Join with us</b></h1>
<h4 class="text-center pt-2 click" style="color: #274472;">Welcome!</h4>
<br><br>
<div class="center2">
<div id="Form_log">
<form action="includes/org.login.inc.php" id="form1" method="post">
  <div class="container">
    <center><h1> Log in </h1></center>
    <input type="text" placeholder="Username" name="uid" required>
    <input type="password" placeholder="Password" name="pwd" required>
    <input type="password" placeholder="reapet password" name="pwdrepeat" required>       
    <button type="submit" name="submit">Login</button>
  </div>
</form>
</div>
</div>
<?php
}
else
{
// nothing will appear 
}
?>
</div>
<!--------------------------Footer------------------------------------> 
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
<!-------------------------------------------->
</body>
</html>