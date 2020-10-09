<?php
// revision: 
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

class Signup {
	public function insert(){

		$available_id = 'nabila';
        $new_id = 'ara';
        $available_email = 'nabila@yahoo.com';
        $new_email = 'ara@gmail.com';
        
        if ($available_id == $new_id AND $available_email == $new_email) {
        echo "gagal";}
        else {
        echo "sukses";}
    }
}

$insert_account = new Signup();
$insert_account->insert();