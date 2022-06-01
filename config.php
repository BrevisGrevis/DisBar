<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "disbar";
$DB_Port = 3306;
 
$conn = mysqli_connect($server, $user, $pass, $database,$DB_Port);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>