<?php 


$con = new mysqli("localhost","root","","peminjamanbuku");

if ($con->connect_error) {
    die("Koneksi Gagal : ". $con->connect_error);
}

$query = "CREATE TABLE t_login (
    id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tgl_register TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$hasil=$con->query($query);

if ($hasil == TRUE) {
    echo"Tabel t_login Berhasil Dibuat";
}else{
    echo "Tabel gagal dibuat: ".$con->error;
}

$con->close();











?>