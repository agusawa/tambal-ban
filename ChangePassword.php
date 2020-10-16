<?php
class ChangePassword {
	private $correctId = "01375";
    private $correctOldPassword = "betulini27";
    private $correctPassword1 = "aqs12345";
    private $correctPassword2 = "aqs12345";
    
    protected $inputId;
    protected $inputOldPassword;
    protected $inputPassword1;
    protected $inputPassword2;
    
    public function __construct($inputId, $inputOldPassword, $inputPassword1, $inputPassword2) {
    	$this->inputId = $inputId;
        $this->inputOldPassword = $inputOldPassword;
        $this->inputPassword1 = $inputPassword1;
        $this->inputPassword2 = $inputPassword2;
    }
    
    public function save() {
    	if ($this->inputId === $this->correctId AND $this->inputOldPassword === $this->correctOldPassword AND $this->inputPassword1 === $this->correctPassword2) {
        	echo "Sesuai";
            } else {
            echo "Tidak Sesuai";
            }
     }
}

$inputId = "01375";
$inputOldPassword = "betulini27";
$inputPassword1 = "aqs12345";
$inputPassword2 = "aqs12345";

$changePassword = new ChangePassword($inputId, $inputOldPassword, $inputPassword1, $inputPassword2);
$changePassword->save();
?>