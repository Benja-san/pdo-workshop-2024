<?php

require_once('config.php');

try {
    $pdo = new PDO(DSN, USER, PASSWORD);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
