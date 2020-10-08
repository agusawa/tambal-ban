<?php
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
        


}}
 $insert_account = new Signup();
 $insert_account->insert();


