<?php

require __DIR__ . "/../Core/Service.php";

class UserService extends Service {
	public static function findOneByEmail($email) {
		$stmt = $this->connection->prepare("SELECT * FROM 'users' WHERE 'email' = ?");

		$stmt->bind_param('s', $email);

		$stmt->execute();

		return $stmt->get_result();
	}

	public function insert($user)
	{
		$stmt = $this->connection->prepare("INSERT INTO 'users' ('name', 'email', 'password', 'created') VALUES (?, ?, ?, ?)");

		$name = $user->getName();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $created = $user->getCreated();

        $stmt->bind_param("sssi", $name, $email, $password, $created);

        $process = $stmt->execute();

        // Jika proses sukses.
        if ($process) {
            $stmt->close();
            return true;
        }

        // Jika proses gagal.
        $stmt->close();
        return false;

	}
}

require __DIR__ . "/../Models/User.php";
	$user = new User();
    $user->setName("John Doe");
    $user->setEmail("johndoe@example.com");
    $user->setPassword("secret");
    $user->setCreated(time());

    $process = UserService::insert($user);

    // Jika proses sukses.
    if ($process) {
        print_r("Process successful.");
    } else {
        print_r("Process failure.\n");
    }

$email = 'mari@example.com';
var_dump(UserService::findOneByEmail($email));
