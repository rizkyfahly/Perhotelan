<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <?php
   include 'navbar_index.php';
   ?>
   <div class="container">
   <h1>Hotel</h1>    
   <div class="row">
   <?php
           require 'admin/setting.php';

           $sql = "SELECT * FROM hotel";
           $query = mysqli_query($koneksi, $sql);
           while ($data = mysqli_fetch_object($query)){

           
           ?>
       <div class="col-md-3">
         
           <div class="card" style="border-radius: 20px;">
           <img src="admin/gambar/<?= $data->gambar; ?> " alt="" srcset="">
           <div class="card-body">
               <h5 class="card-title"><?= $data->nama_hotel;?></h5>
               <p><?= $data->keterangan;?></h5></p>
               <p><?= $data->lokasi;?></h5></p>
               <p><?= $data->harga;?></h5></p>
               <a href="detail.php?id=<?= $data->id;?>" class="btn btn-primary">Detail</a>
           </div>

           </div>
          
       </div>
       <?php
           }
           ?>

       </div>
   </div>

   

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>