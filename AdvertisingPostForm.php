<?php
session_start();
?>
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

    <title>Advertising Form</title>
</head>
<body>
<script> 
  $(document).ready(function(){
  $("#submit").click(function(){
    <?php header("adsCard.php");?> // to add the card automaticlly when the form is filled (currently not workinh)
  });
</script>


<!----------------------Menue---------------------------->
<?php include("menue.php"); ?>

<!----------------------Form---------------------------->

<div class="w3-card container w3-center EditProfileForm">
  
      <h2 class="mt-2"><b>New Advertising Post</b></h2>
  
      <form class="my-3" action="includes/newAdv.inc.php" method="post">
  
        <div class="col-25"><h4>Title:</h4></div>
           <div class="col-60 my-1"><input type ="text" name="title" placeholder="Enter title of the program..."></div>

           <div class="col-25"><h4>Brief description:</h4></div>
           <div class="col-60 my-1 mb-3"> <textarea id="Bdescription" name="Bdescription" placeholder="Type a brief description of your program here..." style="height:80px"></textarea></div>
  
           <div class="col-25"><h4>Eligibility Criteria:</h4></div>
           <div class="col-60 my-1 mb-3"> <textarea id="Eligibility" name="Eligibility" placeholder="Type the eligibility criteria of your program here..." style="height:100px"></textarea></div>
  
           <div class="col-25"><h4>Required Documents:</h4></div>
           <div class="col-60 my-1 mb-3"> <textarea id="RecDocuments" name="RecDocuments" placeholder="Type the required documents here..." style="height:100px"></textarea></div>

           <div class="col-25"><h4>Program Objectives:</h4></div>
           <div class="col-60 my-1 mb-3"> <textarea id="Objectives" name="Objectives" placeholder="Type the program objectives here..." style="height:100px"></textarea></div>
  
           <div class="col-25"><h4>Benefits during the program:</h4></div>
           <div class="col-60 my-1 mb-3"> <textarea id="Benefits" name="Benefits" placeholder="Type the benefits during the program here..." style="height:100px"></textarea></div>
  
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