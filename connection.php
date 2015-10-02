<?php

$host = 'localhost';
$user = 'projectbelajar';
$pass = 'billy';
$dbName = 'batalkan';

try {
  $db = new PDO('mysql:' . $host . ',dbname=' . $dbName, $user, $pass);
} catch (PDOException $e) {
  die('Connection failed. (' . $e->getMessage() . ')');
}
