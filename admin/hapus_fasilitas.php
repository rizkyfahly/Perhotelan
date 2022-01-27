
<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:login.php');
}
?>
<?php
if (isset($_GET['id'])){
require 'setting.php';

$id = $_GET['id'];
$query="DELETE FROM fasilitas WHERE id = '$id'";
$result = mysqli_query($koneksi,$query);

if($result) {
   
     header('location: kamar.php');
     
} else {
    echo 'Data Gagal Terhapus'.mysqli_error($koneksi);
}
}

?>
