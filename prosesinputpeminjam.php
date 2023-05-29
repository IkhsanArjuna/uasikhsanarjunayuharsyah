<?php 

include 'database.php';
$koneksiIkhsan = new database();

if (isset($_POST['input'])) {
    $NamaPengguna = $_POST['NamaPengguna'];
    $NamaBuku = $_POST['NamaBuku'];
    $noHP = $_POST['noHP'];

    $query  =$koneksiIkhsan->koneksi->prepare("INSERT INTO t_tambah VALUES (NULL, '$NamaPengguna','$NamaBuku', '$noHP')");
    $result = $query->execute();

    header("location:viewpeminjam.php");

    return $result;
    
  
   
}

$koneksiIkhsan->koneksi->close();







?>