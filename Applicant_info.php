<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Applicant info</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <link href="MenuAndFooterStyle.css" rel="stylesheet">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="DashboardForOrgnization.css" rel="stylesheet">
    <link href="Training_discription_style.css" rel="stylesheet">
</head>
<style type="text/css">
.co, table{
    color: white;
    background-color: #274472;
  }
</style>
<body>

<!----------------------Menue---------------------------->
<?php include("menue.php");  ?>
<!----------------------page content---------------------------->
<div class="container w3-center mt-2">
  <section class=" w3-padding"> <br><br>
   <h1 class="ApplyText"> Applicants Info!</h1> <br>
    <div class="row">
     <div class="col-md-7">
      <table class="w3-table w3-center w3-bordered w3-border" style="width: 1100px;">
       <thead>
        <tr>
         <th scope="col">#</th>
         <th scope="col">First</th>
         <th scope="col">Last</th>
         <th scope="col">Email</th>
         <th scope="col">CV</th>
         <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
<?php
include 'D:/xampp/htdocs/cop_finder2/classes/dbhh.classes.php';
$query="select * from apply limit 200"; // Fetch all the data from the table customers
$result=mysqli_query($conn,$query);
?>
<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_row($result)): ?>
<tr>
<th scope="row"><?php echo $array[4];?></th>
<td><?php echo $array[0];?></td>
<td><?php echo $array[1];?></td>
<td><?php echo $array[2];?></td>
<td><?php echo $array[3];?></td>
<td> 
<a href="javascript:void(0)" class="btn btn-primary view co" data-id="<?php echo $array[4];?>">View</a> 
</tr>
<?php endwhile; ?>
<?php else: ?>
<tr>
<td colspan="3" rowspan="1" headers="">No Data Found</td>
</tr>
<?php endif; ?>
<?php mysqli_free_result($result); ?>
</tbody>
</table>
<br>
</div>

<div class="col-md-7">
<span id="app_fname"></span><br>
<span id="app_lname"></span><br>
<span id="app_email"></span><br>
<span id="app_cv"></span><br>
</div>
</div>        

<script type="text/javascript">
$(document).ready(function($){
$('body').on('click', '.view', function () {
var id = $(this).data('id');
// ajax
$.ajax({
type:"POST",
url: "includes/ajax-fetch-record.inc.php",
data: { id: id },
dataType: 'json',
success: function(res){
$('#app_fname').html(res.app_fname);
$('#app_lname').html(res.app_lname);
$('#app_email').html(res.app_email);
$('#app_cv').html(res.app_cv);
}
});
});
}); 
</script>
<br><br> </section></div>

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

</body>
</html>