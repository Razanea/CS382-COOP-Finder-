<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<!----------------------Menue---------------------------->
  <div class="nav-color">
   <div class="w3-bar">
<?php
// checking if the user currently sign in and have a session id inside his session, then this menue will display else display te other
 
 if(isset( $_SESSION['uid'] ))
 {
 
  if( $_SESSION['type_of_user'] == "org")
  {
 ?>
     <div class="link-1">
     <a href="includes/logout.inc.php" class="w3-bar-item w3-button w3-right">Log out</a></div>
     <div class="link-2">
     <a href="DashboardForOrgnization.php" class="w3-bar-item w3-button w3-right" > <?php echo$_SESSION['uid']; ?> </a></div>

    <div class="link-3">
     <a href="index.php" class="w3-bar-item w3-button  w3-left" >Home</a></div>
    <div class="link-4">
     <a href="training.php" class="w3-bar-item w3-button w3-left">Training</a></div>
          <div class="link-3">
     <a href="index.php" class="w3-bar-item w3-button w3-left">About </a></div>
     <div class="link-6">
     <a href="contact.php" class="w3-bar-item w3-button w3-left">Contact</a></div>
   
 <?php
 }
  else if( $_SESSION['type_of_user'] == "std")
  {
?>
      <div class="link-1">
     <a href="includes/logout.inc.php" class="w3-bar-item w3-button w3-right">Log out</a></div>
     <div class="link-2">
     <a href="std_dashboard.php" class="w3-bar-item w3-button w3-right" > <?php echo$_SESSION['uid']; ?> </a></div>

    <div class="link-3">
     <a href="index.php" class="w3-bar-item w3-button  w3-left" >Home</a></div>
    <div class="link-4">
     <a href="training.php" class="w3-bar-item w3-button w3-left">Training</a></div>
          <div class="link-3">
     <a href="index.php" class="w3-bar-item w3-button w3-left">About </a></div>
     <div class="link-6">
     <a href="contact.php" class="w3-bar-item w3-button w3-left">Contact</a></div>
   <?php
  }
}
else
{
 ?> 
    <div class="link-1">
     <a href="index.php" class="w3-bar-item w3-button  w3-left" >Home</a></div>
    <div class="link-2 join">
     <a href="training.php" class="w3-bar-item w3-button w3-left">Training</a></div>
     <div class="link-3">
     <a href="index.php" class="w3-bar-item w3-button w3-left">About </a></div>
    <div class="link-3">
     <a href="contact.php" class="w3-bar-item w3-button w3-left">Contact</a></div>


<?php
}
?>
    </div>
  </div>
</body>
</html>