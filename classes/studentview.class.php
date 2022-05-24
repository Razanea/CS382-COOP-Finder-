<?php
include_once 'student.classes.php';
class StudentView extends Student{

        public function showUserName($id) {
         $results = $this->getuser($id);
         echo $results[0]['users_uid'];
         }

        public function showUserEmail($id) {
        $results = $this->getuser($id);
        echo $results[0]['users_email'];
        }

        public function showUserCity($id) {
        $results = $this->getuser($id);
        echo $results[0]['user_city'];
        }

        public function showUserDiscription($id) {
        $results = $this->getuser($id);
        echo $results[0]['user_discription'];
        }
         public function showUserSkill1($id) {
        $results = $this->getuser($id);
        echo $results[0]['user_skill1'];
        }

        public function showUserSkill2($id) {
        $results = $this->getuser($id);
        echo $results[0]['user_skill2'];
        }

        public function showUserSkill3($id) {
        $results = $this->getuser($id);
        echo $results[0]['user_skill3'];
        }

        public function showUserSkill4($id) {
        $results = $this->getuser($id);
        echo $results[0]['user_skill4'];
        }

        public function showUserSkill5($id) {
        $results = $this->getuser($id);
        echo $results[0]['user_skill5'];
        }

}