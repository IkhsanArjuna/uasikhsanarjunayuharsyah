<?php 

include("database.php");

$koneksiIkhsan = new database();

if (isset($_GET["idNama"])) {
    
    $id = $_GET["idNama"];

    $query = $koneksiIkhsan->koneksi->prepare("DELETE FROM t_tambah WHERE idNama='$id'");
    $query->execute();
    $hasil_query = $query->get_result();


    header("location:viewpeminjam.php");



    
    return $hasil_query;

    

}
$koneksiIkhsan->koneksi->close();




?>