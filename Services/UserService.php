<?php

require __DIR__ . "/../Core/Service.php";
require __DIR__ . "/../Models/User.php";

class UserService extends Service
{
    public static function findOneByEmail($email)
    {
        $stmt = static::getConnection()->prepare("SELECT * FROM `users` WHERE `email` = ? LIMIT 1");

        $stmt->bind_param('s', $email);
        $stmt->execute();

        $result = $stmt->get_result()->fetch_assoc();
        $stmt->close();

        if ($result) {
            return User::serialize($result);
        }

        return null;
    }

    public static function insert($user)
    {
        $stmt = self::$connection->prepare("INSERT INTO 'users' ('name', 'email', 'password', 'created') VALUES (?, ?, ?, ?)");

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

