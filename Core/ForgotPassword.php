<?php

// process forgot password
// generate array of email --> function return array
// check email --> function return boolean
// password status --> return boolean ==> change password or not
// input new password --> function ==> input new password 

class ForgotPassword {
    protected $email;
    protected $newEmail;

    private $availableEmail = "ikanuril@gmail.com";

    public function __construct($email, $newEmail) {
        $this->email = $email;
        $this->newEmail = $newEmail;
    }
    
    public function send() {
        if ($this->email === $this->availableEmail) {
            echo "Login Success";
        } else {
            echo "Check Your Email To Reset Your Password";
        }
    }
}

$email = "ikanuril@gmail.com";
$newEmail = "ika@gmail.com";

$forgotPassword = new ForgotPassword($email, $newEmail);
$forgotPassword->send();