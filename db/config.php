<?php

DEFINE("HOST", "localhost");
DEFINE("USER", "root");
DEFINE("PASS", "");
DEFINE("DB", "db_pemesanan_material");

$conn = new mysqli(HOST, USER, PASS, DB);

if ($conn->connect_errno) {
    die("Failed connect to database: " . $conn->connect_errno);
}

?>