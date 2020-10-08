<?php
class Login{
	public Function isValid()
    {
    //$Email = 'dwirahmadini212@gmail.com';
    $Email = 'dini123@gmail.com';
    $Password = 'SistemInformasi19';
    if($Email == 'dwirahmadini212@gmail.com' AND $Password == 'SistemInformasi19'){
    echo "Login sukses!";
    }else{
    echo "email atau password yang anda masukkan salah!";
    }}}
    
    $Valid = new Login();
    $Valid -> isValid();
?>