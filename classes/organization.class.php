<?php
include_once 'dbh.classes.php';
class Organization extends dbh{

    protected function getOrganization($id) { 
        $sql = "SELECT * FROM Organization WHERE org_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setOrganization($name, $place, $email, $description) {
        $sql = "INSERT organization(org_name, org_place, org_email, org_description) VALUES (?, ?, ?, ?)"; 
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $place, $email, $description]);
    }

    //Call from orgnization.class
    protected function updateOrg($name, $place, $email, $description)
    {
        $sql = "UPDATE organization SET org_name = '$name' , org_place= '$place',org_email = '$email' , org_description ='$description' WHERE org_id = '1' "; // didn't insert the logo leave it for later
        $stmt = $this->connect()->prepare($sql);
 
        $stmt->execute([$name, $place, $email, $description]);
  
   }

   //call from orgnization.class
    protected function selectOrg($name, $place, $email, $description)
    {
        $sql = "SELECT * FROM Organization WHERE org_section = 1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([1]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function selectUni($name, $place, $email, $description)
    {
        $sql = "SELECT * FROM Organization WHERE org_section = 2";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([2]);

        $results = $stmt->fetchAll();
        return $results;
    }

}





