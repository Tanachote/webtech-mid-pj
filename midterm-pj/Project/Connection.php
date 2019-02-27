<?php

// namespace Core;
use \PDO;

class Connection {

    public static function make(){
        $servername = "127.0.0.1";
        $username = "group1";
        $password = "1234";

        try {
            $pdo = new PDO("mysql:host=$servername;dbname=university", $username, $password);
            // set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

            // echo "Connected successfully"; 
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}


