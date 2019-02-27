<?php


namespace Controller;

use \Core\Connection;

class Home {
    public function showCity(){
        $pdo = Connection::make();
        return $pdo;
    }
}