<?php

require __DIR__ . "/../Core/Service.php";

class UserService extends Service {

	public static function findOneByEmail($email) {
		$stmt = $this->connection->prepare("SELECT * FROM 'users' WHERE 'email' = ?");

		$stmt->bind_param('s', $email);

		$stmt->execute();

		return $stmt->get_result();
	}
}
$email = 'mari@example.com';
var_dump(UserService::findOneByEmail($email));
