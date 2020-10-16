<?php

require_once "./Model.php";

class AccountModel implements Model {
    protected $id;
    protected $name;
    protected $email;
    protected $password;

    public function getId($name) {
        return $this->id;
    }

    public function getName($name) {
        return $this->name;
    }

    public function getEmail($email) {
        return $this->email;
    }

    public function getPassword($password) {
        return $this->password;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function save() {
        if ($this->id) {
            // Update record
        }

        // Insert record
    }

    public function delete() {
        // Delete record    
    }

    public static function findOneById() {
        $existAccount = true; // Query to database

        if ($existAccount) {
            $account = new AccountModel();
            // $account->id = $id;
            // $account->name = $name;
            // $account->email = $email;
            // $account->password = $password;
            return $account;
        }

        return null;
    }
}
