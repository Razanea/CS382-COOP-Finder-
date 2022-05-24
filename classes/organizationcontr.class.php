<?php
include_once 'organization.class.php';

class OrganizationContr extends Organization{

    private $name;
    private $place;
    private $email;
    private $description;

public function __construct($name, $place, $email, $description) {
    $this->name = $name;
    $this->place = $place;
    $this->email = $email;
    $this->description = $description;
}
    public function editProfile($name, $place, $email, $description) {
        $this->setOrganization($this->name, $this->place, $this->email, $this->description);
    }

     public function updateProfile()
    {
     $this->updateOrg($this->name, $this->place, $this->email, $this->description);
    }


       public function selectOrg($name, $place, $email, $description)
    {

     $this->updateOrg($this->name, $this->place , $this->$email, $this->description );
    }


        public function selectUni($name, $place, $email, $description)
    {

     $this->updateOrg($this->name, $this->place , $this->$email, $this->description );
    }

}




