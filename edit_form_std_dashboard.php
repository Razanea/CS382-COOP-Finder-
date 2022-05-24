<?php
session_start();
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="MenuAndFooterStyle.css" rel="stylesheet">
    <link href="Training_discription_style.css" rel="stylesheet">
    <link href="edit_form_dashboard.css" rel="stylesheet">
    <title>EDit Profile Form</title>
</head>
<body>
<!----------------------Menue---------------------------->
<?php include("menue.php"); ?>
<!----------------------Form---------------------------->
<div class="w3-card container w3-center EditProfileForm">
  
      <h2 class="mt-2"><b>Edit Profile</b></h2>
  
      <form class="my-3" action="includes/editprofile.inc.php" method="post">
  
        <div class="col-25"><h4>Name:</h4></div>
           <div class="col-60 my-1"><input type ="text" name="name" placeholder="Enter your Name.."></div>

        <div class="col-25"><h4>Email:</h4></div>
           <div class="col-60 my-1"><input type ="text" name="email" placeholder="Enter your Email.."></div>

        <div class="col-25"><h4>City:</h4></div>
           <div class="col-60 my-1"><input type ="text" name="city" placeholder="Enter your City.."></div>

  
           <div class="col-25"><h4>Headline:</h4></div>
           <div class="col-60 my-1 mb-3"> <textarea id="Ddescription" name="description" placeholder="Type a brief description about you.." style="height:200px"></textarea></div>

           <div class="col-25"><h4>Skill 1:</h4></div>
           <div class="col-60 my-1">
            <input type ="text" name="s1" placeholder="Skill 1..">
           </div>
           <div class="col-25"><h4>Skill 2:</h4></div>
           <div class="col-60 my-1">
            <input type ="text" name="s2" placeholder="Skill 2..">
           </div>
           <div class="col-25"><h4>Skill 3:</h4></div>
           <div class="col-60 my-1">
            <input type ="text" name="s3" placeholder="Skill 3..">
           </div>
           <div class="col-25"><h4>Skills 4:</h4></div>
           <div class="col-60 my-1">
            <input type ="text" name="s4" placeholder="Skill 4..">
           </div>
           <div class="col-25"><h4>Skill 5:</h4></div>
           <div class="col-60 my-1">
            <input type ="text" name="s5" placeholder="Skill 5..">
           </div>
           
          <br><br>
      
         <button type="submit" class="ApplyButton" name="submit">Submit</button>
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
