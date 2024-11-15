<?php

namespace App\Repository;

use Database;

require_once __DIR__ . '/../config/db.config.php';

function fetchAllUsers() {
    $db = new Database();
    $con = $db->getConnection();

    $result = $con
    ->executeQuery('CALL GetAllUsers()')
    ->fetchAllAssociative();

    return $result;
}

