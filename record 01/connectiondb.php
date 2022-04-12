<?php function redirect($url, $code = 301){header("location: $url");}

$host = "localhost";
$username = "root";
$password = "";
$dbname = "dbdisc";
try {
    $conn = new mysqli($host, $username, $password, $dbname);
} catch (Exception $e) {
    die($e->getMessage());
}



?>