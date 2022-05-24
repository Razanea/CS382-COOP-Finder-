<?php
include_once 'organization.class.php';
class OrganizationView extends Organization{

    public function showOrganizationName($id) {
        $results = $this->getOrganization($id);
        echo $results[0]['org_name'];
    }

    public function showOrganizationPlace($id) {
        $results = $this->getOrganization($id);
        echo $results[0]['org_place'];
    }

    public function showOrganizationEmail($id) {
        $results = $this->getOrganization($id);
        echo $results[0]['org_email'];
    }

    public function showOrganizationDescription($id) {
        $results = $this->getOrganization($id);
        echo $results[0]['org_description'];
    }

}




