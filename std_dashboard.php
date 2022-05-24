<?php
session_start();
include 'classes/studentview.class.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="MenuAndFooterStyle.css" rel="stylesheet">
<link href="std_dashboard.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("a").click(function(){
    $(".content,a").hide();
  });

});
</script>
<style type="text/css">
  .close {
  position: absolute;
  left: 32px;
  top: 750px;
  width: 20px;
  height: 32px;
  opacity: 0.3;
}
.close:hover {
  opacity: 1;
}
.close:before, .close:after {
  position: absolute;
  left: 15px;
  content: ' ';
  height: 20px;
  width: 2px;
  background-color: #333;
}
.close:before {
  transform: rotate(45deg);
}
.close:after {
  transform: rotate(-45deg);
}
</style>
</head>
<body>

  <!----------------------Menue---------------------------->
<?php include("menue.php"); ?>

  <!---------- Page Container ------------------------------>
 
<div class="w3-container"> 
  <!-- The Grid -->
  <div class="w3-row">
    <!------------ Left Column ----------->
    <?php 
    $userObj = new StudentView(); 
    ?>
    <div class="w3-col m3">
      <!-- Profile -->
  <form action="edit_form_std_dashboard.php">
   <div class="ProfileContent">  
     <div class="card-container">
     <img class="round" src="photos/admin.png" alt="user" />

     <h3><?php $userObj->showUserName('1');?></h3>
     <h6><?php $userObj->showUserEmail('1');?></h6>
     <h6><?php $userObj->showUserCity('1');?></h6>
     <p><?php $userObj->showUserDiscription('1');?></p>
 
    <div class="skills">
    <h6>Skills</h6>
    <ul>
      <li><?php $userObj->showUserSkill1('1');?></li>
      <li><?php $userObj->showUserSkill2('1');?></li>
      <li><?php $userObj->showUserSkill3('1');?>L</li>
      <li><?php $userObj->showUserSkill4('1');?></li>
      <li><?php $userObj->showUserSkill5('1');?></li>
    </ul>
    </div> <br>
    <div class="buttons">
      <button type="submit" class="primary">
        Edit 
      </button><br>
    </div>
    </div>
   </div>
  </form>


  <!------------Jquery part--------------->
  <div class="content"> 
  <h1>Welcome! <br> This is your dashboard. You can edit and manage your activity right here!.</h1>
  </div>
  <a href="#" class="close"></a>
</div>

 <!------------ Middle Column ----------->
  <div class="w3-col m7 w3-margin "><br>
    <div class="w3-row-padding"> 
      <section class="ProfileContent2 w3-padding">
            <div class="w3-container w3-padding"> 
            <h6 class="ApplyText"> Get Started and Apply for A training Program!</h6> <br>
            <img src="photos/apply.jpg" width="500px">
             <form action="training.php">
                <div class="buttons">
            <button class="primary">
          <p> Easy Apply </p>
            </button><br> 
            </div>
          </form>
          </div>
          </section>
        </form>
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
</body>
</html>