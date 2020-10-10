<?php
  class Forgot_password {
  public function send($lupa){
	
	  
      $my_email = 'ikanuril@gmail.com';
      $available_email = 'ika@gmail.com';
      $my_password = 'ikanuril';
      $available_password = 'ika';
      if  ($my_email==$available_email AND $my_password==$available_password){
              echo "Login Berhasil";
            }else{
		  echo"Login Gagal<br/>";
		  
	  }
	  echo "$lupa";
	 
    }
	  
	    
  }

$reset = new Forgot_password();
$reset->send("Silahkan cek email anda untuk reset password");