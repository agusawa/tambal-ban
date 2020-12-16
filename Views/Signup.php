<?php
// revision 8 oct 2020: 
// 1. coding using english word
// 2. choose typing CamelCase or Snake Case or Pascal Case or Normal Case
// 3. no. 2 should consistent
// 4. style curl brace ==> {}, example 
// 4.1 function() {
//     }
// 4.2 function()
//     {
//     }
// 5. choose no. 4.1 or no. 4.2
// 6. choose the right data type ==> char ('') or string("")
// 7. before create login and registration is used to create a account firstly
// 8. example basic php in file FindPlace.php

require __DIR__ . "/../Core/View.php";

class Signup extends View
{
    protected $inputName;
    protected $inputEmail;
    protected $inputPassword;
    private $registeredEmail = "sara@gmail.com";

    public function __construct($inputName, $inputEmail, $inputPassword)
    {
        // $this->inputName = $inputName;
        // $this->inputEmail = $inputEmail;
        // $this->inputPassword = $inputPassword;
        parent::__construct();
    }

    public function isRegisteredEmail()
    {
        if ($this->inputEmail === $this->registeredEmail) {
            return true;
        } else {
            return false;
        }
    }

    public function save()
    {
        if ($this->isRegisteredEmail()) {
            echo "Maaf, Email telah terdaftar";
        } else {
            echo "Selamat, anda berhasil";
        }
    }

    public function get()
    {
        $this->render("Signup.php");
    }

    public function post()
    {
    }
}

$inputName = "sara";
$inputEmail = "ara@gmail.com";
$inputPassword = "vaseline100";

$signUp = new Signup($inputName, $inputEmail, $inputPassword);
//$signUp->save();
