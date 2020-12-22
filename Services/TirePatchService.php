<?php

require __DIR__ . "/../Core/Service.php";

class TirePatchService extends Service
{
    public static function search($keyword)
    {
        $keyword = "%$keyword%";

        $stmt = static::getConnection()->prepare("SELECT * FROM 'tire_patches' WHERE 'address' = ?");
        $stmt->bind_param("s", $keyword);
        $stmt->execute();

        $result = $stmt->get_result();
        $result = Arr::fetchAssoc($result);

        return TirePatch::serializeMany($result);
    }
}

