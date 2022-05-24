<?php 
// contact form 
if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])){
//get all post variable value 
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];

// connect to msql database 
$conx = mysqli_connect("localhost","root","","demo");

//create sql statement
$sql = "INSERT INTO `message`(`name`, `email`, `msg`) VALUES ('$name','$email','$msg')";

//execute sql statement
$result=mysqli_query($conx,$sql);

//check sql resualt
if($result==TRUE){
	echo "success";
} else {
	echo "failed";
}
}


?>