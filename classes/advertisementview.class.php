<?php
include_once 'advertisement.class.php';
class AdvertisementView extends Advertisement{

    public function showAdvertisementTitle($id) {
        $results = $this->getAdvertisement($id);
        echo $results[0]['adv_title'];
    }

    public function showAdvertisementBrief($id) {
        $results = $this->getAdvertisement($id);
        echo $results[0]['adv_brief'];
    }

    public function showAdvertisementEligibility($id) {
        $results = $this->getAdvertisement($id);
        echo $results[0]['adv_eligibility'];
    }

    public function showAdvertisementDocuments($id) {
        $results = $this->getAdvertisement($id);
        echo $results[0]['adv_documents'];
    }

    public function showAdvertisementObjectives($id) {
        $results = $this->getAdvertisement($id);
        echo $results[0]['adv_objectives'];
    }

    public function showAdvertisementBenefits($id) {
        $results = $this->getAdvertisement($id);
        echo $results[0]['adv_benefits'];
    }

/* new     public function showCompAdv($id) {
        $results = $this->getCompTitle($id);
       echo $results[0]['adv_title'];
    }

     public function showCompAdv($id) {
        $results = $this->getUniAdvTitle($id);
        echo $results[0]['adv_title'];
    }

     public function showCompAdvDes($id) {
        $results = $this->getUniAdv($id);
      echo $results[0]['adv_brief'];
    }

     public function selectUniAdsDes($id) {
        $results = $this->getUniAdvertisemt($id);
        echo $results[0]['adv_brief'];
    }
*/


}