<?php

$host = 'localhost';
$user = 'projectbelajar';
$pass = 'billy';
$dbName = 'batalkan';

try {
  //salah di dsn
  $db = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, $user, $pass);
} catch (PDOException $e) {
  die('Connection failed. (' . $e->getMessage() . ')');
}
