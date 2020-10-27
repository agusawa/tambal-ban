<?php

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