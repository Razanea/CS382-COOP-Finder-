<?php 
 include_once 'student.classes.php'; 
class StudentControl extends Student {

private $name;
private $email;
private $city;
private $description;
private $s1;
private $s2;
private $s3;
private $s4;
private $s5;


 
       public function __construct($name,$email,$city, $description , $s1 , $s2, $s3, $s4, $s5 )
 	{
       $this->name = $name;
       $this->email = $email;
       $this->city = $city;
       $this->description = $description;
       $this->s1 = $s1;
       $this->s2 = $s2;
       $this->s3 = $s3;
       $this->s4 = $s4;
       $this->s5 = $s5;

 	}

       public function setProfile()
       {

 		    $this->updateUser($this->name, $this->email , $this->city , $this->description, $this->s1 , $this->s2 , $this->s3 , $this->s4, $this->s5 );
 	     }


}
