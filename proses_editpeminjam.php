<?php 

if (isset($_POST['edit'])) {
    
    include("database.php");
    $db = new database();
    $idNama = $_POST['idNama'];
    $NamaPengguna = $_POST['NamaPengguna'];
    $NamaBuku = $_POST['NamaBuku'];
    $noHP= $_POST['NoHp'];

    $query = $db->koneksi->prepare("UPDATE t_tambah SET idNama = '$idNama', 
    NamaPengguna = '$NamaPengguna', NamaBuku = '$NamaBuku', NoHp = '$noHP' WHERE idNama = '$idNama'");
    $query->execute();

    
header("location:viewpeminjam.php");
return $query;

}

$db->koneksi->close();


?>