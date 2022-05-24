<?php
include_once 'dbh.classes.php';
class Advertisement extends Dbh{

    protected function getAdvertisement($id) {
        $sql = "SELECT * FROM advertisement WHERE org_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getAllAdvertisement() {
        $sql = "SELECT * FROM advertisement";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }


    protected function setAdv($title, $Bdescription, $Eligibility, $RecDocuments, $Objectives, $Benefits, $id) {
        $stmt = $this->connect()->prepare('INSERT INTO advertisement (adv_title, adv_brief, adv_eligibility, adv_documents, adv_objectives, adv_benefits, org_id) VALUES (?, ?, ?, ?, ?, ?, ?);');

        if(!$stmt->execute(array($title, $Bdescription, $Eligibility, $RecDocuments, $Objectives, $Benefits, $id))) {
            $stmt = null;
            header("location: ../AdvertisingPostForm.php");
            exit(0);
        }

        $stmt = null;
    }

        //call from advertisment.class
    protected function updateAds($title, $Bdescription, $Eligibility, $RecDocuments, $Objectives, $Benefits, $id)
    {
        $sql = "UPDATE advertisement SET adv_title = '$title' , adv_brief = '$Bdescription' ,  adv_eligibility= '$Eligibility',adv_documents = '$RecDocuments' , adv_objectives ='$Objectives', adv_benefits ='$Benefits' WHERE org_id = 1 "; // didn't insert the logo leave it for later

        $stmt = $this->connect()->prepare($sql);
 
        $stmt->execute([$name, $place, $email, $description]);

    }


   //call from orgnization.class
    protected function selectOrgAds()
    {
        $sql = "SELECT * FROM Organization WHERE org_section = 1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([1]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function selectUniAds()
    {
        $sql = "SELECT * FROM Organization WHERE org_section = 2";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([2]);

        $results = $stmt->fetchAll();
        return $results;
    }




    
}