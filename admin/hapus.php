
<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:login.php');
}
?>
<?php
if (isset($_GET['id'])){
require 'setting.php';

$nomor = $_GET['nomor'];
$query="DELETE FROM hotel WHERE nomor = '$nomor'";
$result = mysqli_query($koneksi,$query);

if($result) {
   
     header('location:index.php');
     
} else {
    echo 'Data Gagal Terhapus'.mysqli_error($koneksi);
}
}

?>
