<?php
include("koneksi.php");
if ( isset($_GET['id']) ){

    //ambil dari query string
    $id = $_GET['id'];

    //buat query hapus
    $sql = "DELETE FROM siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    //apakah query hapus berhasil
    if ( $query ){
        header('Location: list-siswa.php');
    } else {
        die ("gagal menghapus.....");
    }
 } else{
    die("akses di larang");
 }
?>
