<!DOCTYPE html>
<?php 
include 'classes/AdvertisementView.class.php';
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href="MenuAndFooterStyle.css" rel="stylesheet">
    <link href="Training_discription_style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>Organization coop description Page</title>
</head>
<body>
  
  <!----------------------Menue---------------------------->
<?php include("menue.php"); ?>

<?php 
$advertisementObj = new AdvertisementView();
if(isset($_POST['Button_1'])){ ?>
<!----------------------Training Program Description---------------------------->
<div class = "container w3-card mt-3 mx-6 py-3 px-3">
  <h1 class = "d-inline-block ml-2 mt-2" style="color:#5885af;"><b><?php $advertisementObj->showAdvertisementTitle('1'); ?></b></h1>
    <div class = "w3-right"> 
    <img class = "CompanyLogo" src="photos/Aramco Logo.png">
    </div>
    <br><br><br>
    <hr>
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
    
    <form action="apply_form.php" >
    <button type="submit" class ="ApplyButton">Easy Apply</button>
    </form>


</div>
<?php 
}
?>

<?php 
$advertisementObj = new AdvertisementView();
if(isset($_POST['Button_2'])){ ?>
<!----------------------Training Program Description---------------------------->
<div class = "container w3-card mt-3 mx-6 py-3 px-3">
  <h1 class = "d-inline-block ml-2 mt-2" style="color:#5885af;"><b><?php $advertisementObj->showAdvertisementTitle('2'); ?></b></h1>
    <div class = "w3-right"> 
    <img class = "CompanyLogo" src="photos/Sabic Logo.png">
    </div>
    <br><br><br>
    <hr>
    <h3>Eligibility</h3>
    <p>Applicants eligible to apply for the program are those required by their universities to undergo 
      practical training prior to graduation. They are considered for the program based on the availability 
      of slots and the following criteria:
    </p>
    <p> <?php $advertisementObj->showAdvertisementEligibility('2'); ?> </p>

    <h3>Required Documents</h3>
    <p> <?php $advertisementObj->showAdvertisementDocuments('2'); ?> </p>

    <h3>Program Objectives</h3>
    <p>The program is designed to meet the following objectives:</p>
    <p> <?php $advertisementObj->showAdvertisementObjectives('2'); ?> </p>

    <h3>Benefits during the program</h3>
    <p> <?php $advertisementObj->showAdvertisementBenefits('2'); ?> </p>
    <br><br>
    <button onclick="document.getElementById('CV_Upload').style.display='block'" class ="ApplyButton">Easy Apply</button>

    <div id="CV_Upload" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:600px">
  
        <div class="w3-center"><br>
          <span onclick="document.getElementById('CV_Upload').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        </div>
  
        <form class="w3-container" action="">
          <div class="w3-section">
            <h3><b>Please upload your CV</b></h3><br>
            <input type="file" id="myFile" name="filename"><br><br>
            <button onclick="document.getElementById('Message').style.display='block'" class="SubmitButton" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>

</div>
<?php }?>
<!--------------------------Footer------------------------------------>
<div>
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
  </div
  <!-------------------------------------------->
  
  </body>
  </html>