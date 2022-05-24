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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <link href="edit_form_dashboard.css" rel="stylesheet">
  <link href="MenuAndFooterStyle.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <title>Home Page</title>
</head>
 
<body>
<!----------------------Menue---------------------------->
<?php include("menue.php"); ?>

<!--------------------Apply Form---------------------->

<div class="w3-card container w3-center EditProfileForm">
  
      <h2 class="mt-2"><b>Apply For a COOP Training</b></h2>
  
      <form class="my-3" action="includes/apply.inc.php" method="post">
  
        <div class="col-25"><h4>First Name:</h4></div>
           <div class="col-60 my-1"><textarea  name="fname" placeholder="Your First Name" style="height:80px"></textarea></div>

           <div class="col-25"><h4>Last Name:</h4></div>
           <div class="col-60 my-1 mb-3"> <textarea  name="lname" placeholder="Your Last Name" style="height:80px"></textarea></div>
  
           <div class="col-25"><h4>Email:</h4></div>
           <div class="col-60 my-1 mb-3"> <textarea  name="email" placeholder="Your Email" style="height:100px"></textarea></div>
  
           <div class="col-25"><h4>Uploaed Your CV:</h4></div>
           <div class="col-60 my-1 mb-3"><input type="file" id="myfile" name="myfile" style="height:100px"></input></div>
  
          <br><br>
      
         <button type="submit" class="ApplyButton" id="submit" name="submit">Submit</button>
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
<!-------------------------------------------->
</body>
</html>