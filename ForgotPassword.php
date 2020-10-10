<?php
  class ForgotPassword {

    protected $Email;
    protected $newEmail;

    private $availableEmail = "ikanuril@gmail.com";


    public function check($Email, $newEmail){
      $this->email = $Email;
      $this->newEmail = $newEmail;
    }
    

  public function send(){
    if ($this->Email === $this->availableEmail){
      echo "Login Success";
    } else {
      echo "Check Your Email To Reset Your Password";
    }
  }
}


$Email = "ikanuril@gmail.com";
$newEmail = "ika@gmail.com";

$forgotPassword = new ForgotPassword($Email, $newEmail);
$forgotPassword->send();