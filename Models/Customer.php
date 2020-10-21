<?php
  require_once "./Models/UserModel.php";

  class Customer extends User {

    public $userLevel="";

    public function setUserLevel($level) {
        $this->userLevel = $level;
    }
    
    public function getUserLevel() {
        return $this->userLevel;
    }
  }
?>