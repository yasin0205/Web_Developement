<?php
$dbhost = 'localhost';
$dbname = 'asciiproject';
$dbuser = 'root';
$dbpass = '';



try {
  $dbcon = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
  $dbcon -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}