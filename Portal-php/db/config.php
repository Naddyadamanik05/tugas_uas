<?php
$host = 'localhost';
$user = 'root';
$pass = 'kukicha12';
$db   = 'news_db';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>