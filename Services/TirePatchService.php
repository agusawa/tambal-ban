<?php

require __DIR__ . "/../Core/Service.php";

class TirePatchService extends Service {
    
    public static function search($keyword) {

        $stmt = self::$connection->prepare("SELECT * FROM 'tire_patches' WHERE 'address' = ?");

        $stmt->bind_param("s", $keyword);

        $stmt->execute();
        
        return $stmt->get_result();
    }
}
$keyword = 'contoh@example.com';
var_dump(TirePatchService::search($email));