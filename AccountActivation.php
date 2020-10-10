<?php

// process activation account
// check name --> function return boolean
// check email --> function return boolean
// generate token (md5) --> function string
// activation status --> return boolean ==> account is activate or not
// class registration (input) --> checking name and email use a class validation then, use a class activation (proses) --> store name, email and token in cookies/txt/database (output)
// class login (input) --> use a class validation for checking name, email and token (proses) --> main menu (output)

class ActivateAccount {

	public function activate() {
		$available_email = 'abcd99@gmail.com';
		$new_email = 'sayariri1@gmail.com';
        $available_token = '01ABCD';
        $new_token = '12ASLI';
        
        
		if ($new_email === $available_email AND $new_token === $available_token) {
			echo "Sukses";
		} else {
			echo "Gagal";
		}
    }
}

$activate_account = new ActivateAccount();
$activate_account->activate();