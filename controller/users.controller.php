<?php

namespace App\Controller;

require_once __DIR__ . '/../repository/users.repository.php';

use App\Repository;

function getAllUsers($req, $res, $params) {
    return Repository\fetchAllUsers();
}

?>