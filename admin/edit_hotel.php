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
if (isset($_GET['nomor'])){
    $input_nomor = $_GET['nomor'];
    $query = "SELECT * FROM hotel WHERE nomor ='$input_nomor'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_object($result);
}
    if(isset($_POST['simpan'])){
        $txtnamahotel = $_POST['txtnamahotel'];
        $txtketerangan = $_POST['txtketerangan'];
        $txtlokasi = $_POST['txtlokasi'];
        $txtharga = $_POST['txtharga'];
        $txtgambar = $_POST['gambar'];
        $sql = "UPDATE hotel SET 
        nama_hotel='$txtnamahotel', keterangan='$txtketerangan',lokasi='$txtlokasi',harga='$txtharga',gambar='$txtgambar'
        WHERE nomor= $input_nomor";
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
    <input type="text" id="namahotel" name="txtnamahotel" class="form-control" value="<?= $data->nama_hotel;?>" required>
</div>
<div class="mb-3">
    <label for="keterangan">Keterangan</label>
    <input type="text" id="keterangn" name="txtketerangan" class="form-control" value="<?= $data->keterangan;?>" required>
</div>
<div class="mb-3">
    <label for="lokasi">Lokasi</label>
     <textarea name="txtlokasi" id="lokasi" class="form-control" cols="30" rows="5" required><?= $data->lokasi;?></textarea>
</div>
<div class="mb-3">
    <label for="harga">Harga</label>
    <input type="text" id="harga" name="txtharga" class="form-control" value="<?= $data->harga;?>"required>
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