<?php

require_once __DIR__ . "/../Core/Service.php";
require_once __DIR__ . "/../Core/Helpers/Arr.php";
require_once __DIR__ . "/../Models/TirePatch.php";


class TirePatchService extends Service
{
    public static function findOneById($id)
    {
        $stmt = static::getConnection()->prepare("SELECT * FROM `tire_patches` WHERE `id` = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $stmt->close();

        $result = Arr::fetchAssoc($result);
        return TirePatch::serializeMany($result);
    }

    public static function search($keyword)
    {
        $keyword = "%$keyword%";

        $stmt = static::getConnection()->prepare("SELECT * FROM `tire_patches` WHERE `address` LIKE ?");
        $stmt->bind_param("s", $keyword);
        $stmt->execute();

        $result = $stmt->get_result();
        $stmt->close();

        $result = Arr::fetchAssoc($result);

        return TirePatch::serializeMany($result);
    }

    /**
     * To find out whether the tire patch belongs to that user.
     *
     * @param User $user
     * @param TirePatch $tirePatch
     * @return boolean
     */
    public static function isOwnedBy($user, $tirePatch)
    {
        return $user->getId() === $tirePatch->getUserId();
    }

    public static function insert($tirePatch)
    {
        $stmt = static::getConnection()->prepare("INSERT INTO 'users' ('name', 'address', 'description', 'whatsappNumber') VALUES (?, ?, ?, ?)");

        $name = $tirePatch->getName();
        $address = $tirePatch->getAddress();
        $description = $tirePatch->getDescription();
        $whatsappNumber = $tirePatch->getWhatsappNumber();

        $stmt->bind_param("sssi", $name, $address, $description, $whatsappNumber);

        $process = $stmt->execute();
        $stmt->close();

        if ($process) {
            return true;
        }
            return false;
    }
}
