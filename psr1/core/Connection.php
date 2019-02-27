<?php

namespace Core;
use \PDO;

class Connection {

    public static function make(){
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=world','world_user','1234');
        return $pdo;

    }
}