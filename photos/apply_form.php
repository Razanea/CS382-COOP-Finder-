<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

  <link href="MenuAndFooterStyle.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <title>Home Page</title>
</head>

<body>
<!----------------------Menue---------------------------->

<div class="nav-color">
 <div class="w3-bar"> 
   <div class="link-1">
     <a href="Home.html" class="w3-bar-item w3-button w3-right" >Home</a></div>
   <div class="link-3">
     <a href="Training.html" class="w3-bar-item w3-button w3-right">Training</a></div>
   <div class="link-1">
     <a href="DashboardForOrgnization.php" class="w3-bar-item w3-button w3-right" >Dashboard</a></div>
   <div class="link-4">
     <a href="#About" class="w3-bar-item w3-button w3-right">About </a></div>
   <div class="link-5">
     <a href="#footer" class="w3-bar-item w3-button w3-right">Contact</a></div>
  </div>

<!--------------------Apply Form---------------------->

</div>
<div class="nav-color">
  <div class="w3-card">
<form action="includes/apply.inc.php" method="post">
  <input type="text" name="fname" placeholder="Your First Name"><br>
  <input type="text" name="lname" placeholder="Your Last Name"><br>
  <input type="text" name="email" placeholder="Your Email"><br>
  <input type="date" name="date"><br>
  <input type="radio" id="Male" name="gender1" value="Male">
  <label for="Male">Male</label>
  <input type="radio" id="Female" name="gender2" value="Female">
  <label for="Female">Female</label><br>
<br>
  <label for="myfile">Uploaed Your CV:</label>
  <input type="file" id="myfile" name="myfile"><br>
  <br>
<button type="submit" name="submit">Apply</button>
</form>
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