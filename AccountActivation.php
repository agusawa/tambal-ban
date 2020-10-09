class ActivateAccount {
	public function activate()
    {
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