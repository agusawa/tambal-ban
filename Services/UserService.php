<?php

require __DIR__ . "/../Core/Service.php";

class UserService extends Service
{
    public static function findOneByEmail($email)
    {
        $stmt = self::getConnection()->prepare("SELECT * FROM 'users' WHERE 'email' = ?");

        $stmt->bind_param('s', $email);

        $stmt->execute();

        return $stmt->get_result();
    }

    public static function insert($user)
    {
        $stmt = self::getConnection()->prepare("INSERT INTO 'users' ('name', 'email', 'password', 'created') VALUES (?, ?, ?, ?)");

        $name = $user->getName();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $created = $user->getCreated();

        $stmt->bind_param("sssi", $name, $email, $password, $created);

        $process = $stmt->execute();
        $stmt->close();

        // Jika proses sukses.
        if ($process) {
            $stmt->close();
            return true;
        }

        // Jika proses gagal.
        $stmt->close();
        return false;
    }

    public static function findOneById($id)
    {
        $stmt = self::$connection->prepare("SELECT * FROM users WHERE `id` = ? LIMIT 1");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $user = $stmt->get_result()[0];

        $stmt->close();
        if ($user) return $user;
        return null;
    }

    public static function delete($id)
    {
        $user = self::findOneById($id);

        if (!$user) return false;

        $stmt = self::$connection->prepare("DELETE users WHERE `id` = ? LIMIT 1");
        $stmt->bind_param("i", $id);
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

$id = 1;
var_dump(UserService::delete($id));
