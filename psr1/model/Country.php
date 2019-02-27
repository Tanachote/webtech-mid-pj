<?php

namespace Model;

use \Core\QueryBuilder;

class Country {
    public function findAll() {
        $qb = new QueryBuilder();
        return $qb->selectAll('country');
    }
 }