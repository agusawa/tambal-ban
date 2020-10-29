<?php
class DeleteTirePatch {
    protected $inputId;
    private $registeredId = "ara123";

	public function __construct($inputId) {
        $this->inputId = $inputId;
    }

    public function isValidId() {
        if ($this->inputId === $this->registeredId) {
            return true;
        } else {
            return false;
        }
    }

    public function save() {
        if ($this->isValidId()) {
            echo "Tambal Ban berhasil dihapus";
        } else {
            echo "Id akun tidak valid";
        }

    }
}

$inputId = "ara";

$DeleteTirePatch = new DeleteTirePatch($inputId);
$DeleteTirePatch->save();


