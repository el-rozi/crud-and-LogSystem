<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "crud_202351090";

$con = mysqli_connect($server, $user, $password, $nama_database);

if( !$con ){
    die("gagal terhubung dengan database: " . mysqli_connect_error());
}
?>