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

   <a href="tambah.php">
            <input type= "submit" value="Tambah data" class="btn btn-primary"> 
    </a>

       <table class="table">
           <thead>
               <tr>
                   <th>No</th>
                   <th>Nama Hotel</th>
                   <th>Keterangan</th>
                   <th>Lokasi</th>
                   <th>Harga</th>
                   <th>Gambar</th>
                   <th>Aksi</th>
</tr>
</thead>
<tbody>
    <?php
    
    require 'setting.php';
    $query = "SELECT * FROM hotel";
    $sql = mysqli_query($koneksi, $query);
    $no = 1;
    while ($data = mysqli_fetch_object($sql)) {
    ?>

    <tr>
        <td> <?php echo $no++; ?> </td>
        <td> <?php echo $data->nama_hotel; ?> </td>
        <td> <?php echo $data->keterangan; ?> </td>
        <td> <?php echo $data->lokasi; ?> </td>
        <td> <?php echo $data->harga; ?> </td>
        <td><a href="gambar/<?= $data->gambar; ?>"><?= $data->gambar; ?></a> </td>

        <td>
            <a href = "edit_hotel.php?nomor=<?= $data->nomor;?>">
            <input type= "submit" value="edit" class="btn btn-warning">
    </a>
    <a href = "hapus.php?nomor=<?= $data->nomor;?>">
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