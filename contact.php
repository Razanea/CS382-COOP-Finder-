<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="MenuAndFooterStyle.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
 <link href="style.css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  color: #274472;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text],input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #274472;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

button{
  background-color: #274472;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

.container {
  border-radius: 5px;
  background-color: white;
  padding: 10px;
}

.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


}
</style>
<script type="text/javascript">
  $(document).ready(function(){
    $("#btn").click (function(){
      //get all input field values
      var name = $("#name").val(); // use id selector to get input value 
      var email = $("#email").val();
      var msg = $("#msg").val();

      /*use (call) ajax post method to send form data 
            $.post(uri,payload, res fun) */
            $.post("includes/SubmitForm.inc.php", {
              name:name,
              email: email,
              msg: msg
            },
                function (data, status){
            //check response 
            if (data=="success") {
              $("#response").html("<h2>Thanks "+ name + ", your message has been sent.</h2>");

            } else {
              $("#response").html("<h2> Sorry, try again! </h2>");
                
            }
        });
  });
});
</script>
</head>
<body>

<!----------------------Menue---------------------------->
<?php include("menue.php"); ?>
<!------------------------------------------------------>
<div class="container">
  <div style="text-align:center">
    <h2>CONTACT US!</h2>
  </div>
  <div class="row">
    <div class="column">
      <img src="photos/contact.jpg" style="width:100%">
    </div>
    <div class="column">

        <label>Name</label>
        <input type="text" id="name" placeholder="Name"  required>

        <label>Email</label>
        <input type="email" id="email" placeholder="Email" required>

        <label>Message</label>
        <textarea id="msg" placeholder="write your message here" required></textarea>
        <br>
        <button id="btn">Submit</button> <br>
        <span id="response"></span>

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