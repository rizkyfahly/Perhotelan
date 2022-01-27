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
        $txtnomorkamar = $_POST['txtnomorkamar'];
        $txtfasilitaskamar = $_POST['txtfasilitaskamar'];
        $txttipekamar = $_POST['txttipekamar'];
        $txtharga = $_POST['txtharga'];
        $txtgambar = $_POST['gambar'];
$sql = "INSERT INTO fasilitas VALUES (NULL,'$txtnomorkamar','$txtfasilitaskamar','$txttipekamar','$txtharga','$txtgambar')";
$query = mysqli_query($koneksi,$sql);

if($query)  {
    header('location:kamar.php');
}else {
    echo 'Query Error'. mysqli_error($koneksi);
}
}
    ?>

<form action="#" method="Post">

<div class="mb-3">
    <label for="nomorkamar">Nomor Kamar</label>
    <input type="text" id="nomorkamar" name="txtnomorkamar" class="form-control" required>
</div>
<div class="mb-3">
    <label for="fasilitaskamar">Fasilitas Kamar</label>
    <input type="text" id="fasilitaskamar" name="txtfasilitaskamar" class="form-control" required>
</div>
<div class="mb-3">
    <label for="tipekamar">Tipe Kamar</label>
     <textarea name="txttipekamar" id="tipekamar" class="form-control" cols="30" rows="5" required></textarea>
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