<!DOCTYPE html>
<html>
<head>
    <title> Informasi Hotel</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.css">

</head>
<body>
    <?php
    include 'navbar.php';
    ?>
   <div class="container mt-5">

   <a href="tambah_kamar.php">
            <input type= "submit" value="Tambah data" class="btn btn-primary">
    </a>

       <table class="table">
           <thead>
               <tr>
                   <th>No</th>
                   <th>Nomor Kamar</th>
                   <th>Fasilitas Kamar</th>
                   <th>Tipe Kamar</th>
                   <th>Harga</th>
                   <th>Gambar</th>
                   <th>Aksi</th>
</tr>
</thead>
<tbody>
    <?php
    
    require 'setting.php';
    $query = "SELECT * FROM fasilitas";
    $sql = mysqli_query($koneksi, $query);
    $no = 1;
    while ($data = mysqli_fetch_object($sql)) {
    ?>

    <tr>
        <td> <?php echo $no++; ?> </td>
        <td> <?php echo $data->nomor_kamar; ?> </td>
        <td> <?php echo $data->fasilitas_kamar; ?> </td>
        <td> <?php echo $data->tipe_kamar; ?> </td>
        <td> <?php echo $data->harga; ?> </td>
        <td><a href="gambar/<?= $data->gambar; ?>"><?= $data->gambar; ?></a> </td>

        <td>
            <a href = "edit.php?id=<?= $data->id;?>">
            <input type= "submit" value="edit" class="btn btn-warning">
    </a>
    <a href = "hapus_fasilitas.php?id=<?= $data->id;?>">
    <input type= "submit" value="hapus" oncklick="confirm('yakin hapus data?')" class="btn btn-danger">
    </a>




    </tr>

<?php
    }
    ?>
    </tbody>

</table>

   </div> 
</body>
</html>