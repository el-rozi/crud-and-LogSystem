<!-- Melakukan include file koneksi.php yang berisi kode untuk melakukan koneksi ke database -->
<?php include("koneksi.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftar | SMK CODING</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
   <!-- Bagian body berisi konten halaman web. Di sini juga diterapkan gambar latar belakang -->
  <body style="background-image: url('background.jpg'); background-size: 100%;">
       <!-- Kelas container digunakan untuk merapikan konten dengan memberikan margin dan padding -->
    <div class="container">
            <!-- Kelas row digunakan untuk membuat baris dalam layout grid Bootstrap -->
        <div class="row" style="margin-top: 100px;">
             <!-- Kelas col-12 membuat elemen mengambil semua 12 kolom dalam grid, sehingga elemen akan mengisi seluruh lebar baris -->
            <div class="col-12">
                    <!-- Judul halaman dengan teks putih dan rata tengah -->
            <h2 class="text-white text-center">Siswa Yang Sudah Terdaftar</h2>
            </div>
            <div class="card-body">
                <div class="col-md-5 mx-auto">
                    <form method="POST">
                        <div class="input-group mb-3 mt-3">
                            <input type="text" name="tcari" class="form-control" placeholder="Masukkan kata kunci">
                            <button class="btn btn-primary" name="bcari" type="submit">Cari</button>
                            <button class="btn btn-danger" name="breset" type="submit">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-6">
                <a href="form-daftar.php" class="btn btn-primary"><i class="bi bi-plus-square"></i> Tambah</a>
            </div>
            <div class="col-6">
                <a href="halamanutama.php" class="btn btn-danger float-end"><i class="bi bi-arrow-right-square"></i> Kembali</a>
            </div>
                    <!-- Judul halaman dengan teks putih dan rata tengah -->
            <div class="col-12 my-2">
                <table class="table table-striped">
                  <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Sekolah Asal</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
$no = 1;

//untuk pencarian data
//jika tombol cari di klik
if(isset($_POST['bcari'])){
    //tampilkan data yang di cari
    $keyword = $_POST['tcari'];
    $sql = "SELECT * FROM siswa WHERE alamat like '%$keyword%' or nama like '%$keyword%' order by id desc";
} else {
    $sql = "SELECT * FROM siswa order by id desc";
}

$query = mysqli_query($db, $sql);

if(mysqli_num_rows($query) == 0){
    echo "<p class='text-white text-center'><b>Data tidak ditemukan</b></p>";
} else {
    while($siswa = mysqli_fetch_array($query)){
        echo "<tr>";

        echo "<td>".$no."</td>";
        echo "<td>".$siswa['nama']."</td>";
        echo "<td>".$siswa['alamat']."</td>";
        echo "<td>".$siswa['jenis_kelamin']."</td>";
        echo "<td>".$siswa['agama']."</td>";
        echo "<td>".$siswa['sekolah_asal']."</td>";

        echo "<td>";
        echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
        echo "<button type='button' onclick='KonfirmasiHapus(".$siswa['id'].")'>Hapus</button>";
        echo "</td>";

        echo "</tr>";
        $no++;
    }
}
?>

                    </tbody>
                </table>
                <p>Total: <?php echo mysqli_num_rows($query) ?></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--alert-->
<?php
if(!empty($_GET['status']) && !isset($_POST['bcari']) && !isset($_POST['breset'])):
    if($_GET['status']== 'sukses'){
?>
<script>
    Swal.fire("Berhasil Perubahan data!", "", "success");
</script>
<?php
    }
endif;
?>

    <!--HAPUS-->
<script>
    function KonfirmasiHapus(id){
        Swal.fire({
            title: "Yakin ingin menghapus data tersebut?",
            showCancelButton: true,
            icon: 'question' ,
            confirmButtonText: "Yakin",
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                Swal.fire("Saved!", "", "success");
                window.location='hapus.php?id='+id;
            } else if (result.isDenied) {
                Swal.fire("Gagal di hapus", "", "error");
            }
        });
    }
</script>
  </body>
</html>