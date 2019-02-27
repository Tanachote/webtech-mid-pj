<?php

namespace Core;

use \Core\Connection;

class QueryBuilder {

    private $pdo;

    public function __construct() { // constructor
        $this->pdo = Connection::make();
    }

    public function selectAll($table) {
        
        $query = $this->pdo->prepare('select * from '. $table);
        $query->execute();
        return $query->fetch(\PDO::FETCH_OBJ);
    }
}