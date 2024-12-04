<?php

namespace App\Model;

use App\Core\Database;

class Type{

    public static function getTypes(){
        $sql = "SELECT typeId, `name`
        FROM `type`";

        $stmt = Database::connection()->prepare($sql);
        if(!$stmt->execute()){
            return null;
        }
        $result = $stmt->get_result();
        $types = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();

        return $types;
    }

}