<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h3 class="alert alert-info"> TAMBAH DATA HOTEL</h3>

    <?php
//menambahkan htmlspecialchars
require 'setting.php';
    if(isset($_POST['simpan'])){
        $txtnamahotel = $_POST['txtnamahotel'];
        $txtketerangan = $_POST['txtketerangan'];
        $txtlokasi = $_POST['txtlokasi'];
        $txtharga = $_POST['txtharga'];
        $txtgambar = $_POST['gambar'];
$sql = "INSERT INTO hotel VALUES (NULL,'$txtnamahotel','$txtketerangan','$txtlokasi','$txtharga','$txtgambar')";
$query = mysqli_query($koneksi,$sql);

if($query)  {
    header('location:index.php');
}else {
    echo 'Query Error'. mysqli_error($koneksi);
}
}
    ?>

<form action="#" method="Post">

<div class="mb-3">
    <label for="namahotel">Nama Hotel</label>
    <input type="text" id="namahotel" name="txtnamahotel" class="form-control" required>
</div>
<div class="mb-3">
    <label for="keterangan">Keterangan</label>
    <input type="text" id="keterangn" name="txtketerangan" class="form-control" required>
</div>
<div class="mb-3">
    <label for="lokasi">Lokasi</label>
     <textarea name="txtlokasi" id="lokasi" class="form-control" cols="30" rows="5" required></textarea>
</div>
<div class="mb-3">
    <label for="harga">Harga</label>
    <input type="text" id="harga" name="harga" class="form-control" required>
</div>
<div class="mb-3">
    <input type="file" class="custom-file-input" id="gambar" name="gambar">
    <label class="custom-file-label" id="foto" for="exampleInputFile">Pilih Gambar</label>
</div>

<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
<a href="index.php" class="btn btn-secondary">Kembali</a>

</form>
    </div>
</body>
</html>