<?php

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
