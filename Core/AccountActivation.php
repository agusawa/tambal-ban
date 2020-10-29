<?php

// process activation account
// check name --> function return boolean
// check email --> function return boolean
// generate token (md5) --> function string
// activation status --> return boolean ==> account is activate or not
// class registration (input) --> checking name and email use a class validation then, use a class activation (proses) --> store name, email and token in cookies/txt/database (output)
// class login (input) --> use a class validation for checking name, email and token (proses) --> main menu (output)

class ActivateAccount {
	private $availableEmail = 'abcd99@gmail.com';
    private $availableToken = '01ABCD';
    
    protected $inputEmail;
    protected $inputToken;
    
	public function __construct($inputEmail, $inputToken) {
		$this->inputEmail = $inputEmail;
		$this->inputToken = $inputToken;
    }
    
    public function isValid() {
		if ($this->inputEmail === $this->availableEmail AND $this->inputToken === $this->availableToken) {
			echo "Sukses";
		} else {
			echo "Gagal";
		}
    }
    protected function get() {
    }

    protected function post() {    	
    }
}

$inputEmail = "abcd99@gmail.com";
$inputToken = "01ABCD";

$activateAccount = new ActivateAccount($inputEmail, $inputToken);
$activateAccount->isValid();
?> 