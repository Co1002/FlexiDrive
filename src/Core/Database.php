<?php

namespace App\Core;

use mysqli;

class Database{

    public static function connection(){
        static $db;

        if ($db instanceof mysqli) {
            return $db;
        }

        try {
            $db = new mysqli("db5016497966.hosting-data.io","dbu2882133","FlexiDrive2024!","dbs13391471", 3306);
            $db->set_charset("utf8");

            if($db->connect_errno){
                header("Location: ".ROUTE_BASE."/500");
                exit();
            }
        } catch (\Throwable $th) {
            header("Location: ".ROUTE_BASE."/500");
            exit();
        }

        return $db;
    }

}