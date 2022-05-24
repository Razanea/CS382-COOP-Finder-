<?php 

class applyContr extends Apply{

  private $fname;
  private $lname;
  private $email;
  private $myfile;

 public function __construct($fname, $lname, $email, $myfile)
 {
    
    $this->fname = $fname; 
    $this->lname = $lname; 
    $this->email = $email; 
    $this->myfile = $myfile;
 }

  public function applyUser(){
    if($this->emptyInput() ==false){
      header ("location: ../index.php?error=emptyInput");
         exit();
    }
   //if no error 
   $this->setUser($this->fname,$this->lname,$this->email,$this->myfile);
 }

  private function emptyInput() {
    $result; 
    if( empty($this->fname) || empty($this->lname) || empty($this->email) || empty($this->myfile))   
    {
          $result = false;
    }
    else {
      $result = true;     
    }
    return $result;

  } 

}


