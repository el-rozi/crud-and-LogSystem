<?php

include("koneksi.php");

// kalau tidak ada id query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang diedit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body style="background-image: url('background.jpg');">
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

    <fieldset>

    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" required />

    <p>
        <label for="nama">Nama: </label>
        <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" required/>
    </p>
    <p>
        <label for="alamat">Alamat: required</label>
        <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
    </p>
    <p>
        <label for="jenis_kelamin">Jenis Kelamin: </label>
        <?php $jk = $siswa['jenis_kelamin']; ?>
        <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> laki-laki</label>
        <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> perempuan</label>
    </p>
    <p>
        <label for="agama">Agama: </label>
        <?php $agama = $siswa['agama']; ?>
        <select name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
            </select>
    </p>
    <p>
        <label for="sekolah_asal">Sekolah Asal: </label>
        <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" required/>
    </p>
    <p>
        <input type="submit" value="simpan" name="simpan" />
    </p>
    </fieldset>

    </form>

</body>
</html>