<?php
include_once 'advertisement.class.php';
class AdvertisementContr extends Advertisement{

    private $title;
    private $Bdescription;
    private $Eligibility;
    private $RecDocuments;
    private $Objectives;
    private $Benefits;
    private $id;

    public function __construct($title, $Bdescription, $Eligibility, $RecDocuments, $Objectives, $Benefits, $id) {
        $this->title = $title;
        $this->Bdescription = $Bdescription;
        $this->Eligibility = $Eligibility;
        $this->RecDocuments = $RecDocuments;
        $this->Objectives = $Objectives;
        $this->Benefits = $Benefits;
        $this->id = $id;
    }

    public function checkInput() {
        if($this->emptyInput() == false){
            header("location: ../AdvertisingPostForm.php");
            exit(0);
        }

        $this->setAdv($this->title, $this->Bdescription, $this->Eligibility, $this->RecDocuments, $this->Objectives, $this->Benefits, $this->id);
    }

    private function emptyInput() {

        $results;
        if (empty($this->title) || empty($this->Bdescription) || empty($this->Eligibility) || empty($this->RecDocuments) || empty($this->Objectives) || empty($this->Benefits)){
            $results = false;
        }
        else{
            $results = true;
        }

        return $results;
    }

     public function updatAds()
    {
     $this->updateAds($this->title, $this->Bdescription, $this->Eligibility, $this->RecDocuments, $this->Objectives, $this->Benefits, $this->id);
    }


}