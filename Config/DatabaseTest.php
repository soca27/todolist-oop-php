<?php

require_once __DIR__ . '/Database.php';

use Config\Database;


$db = Database::getConnection();
echo "sukses koneksi ke database";
