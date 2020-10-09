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