<?php
include("koneksi.php");
// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])){
    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // buat query
    $sql = "INSERT INTO siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE
    ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php dengan status=sukses
        header('Location: list-siswa.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: list-siswa.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>