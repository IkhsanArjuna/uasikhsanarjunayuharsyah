<?php
include "koneksi.php";

$sql = "INSERT INTO t_tambah (idNama, NamaPengguna,NamaBuku, noHP) VALUES (10,'Rahmad Dwi Prasetya','langit bumi',089978786)";

$statment= $con->prepare($sql);

$statment->execute();


echo "Tambah Data Berhasil";







?>