<?php 
    include 'database.php';
    $db = new database();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
table {
    width: 840px;
    margin: auto;
}

h1 {
    text-align: center;
}
</style>

<body class="bg-secondary">
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark  text-light sticky-sm-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewPeminjam.php">Pengguna</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Lainnya
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="mahasiswa/viewMahasiswa.php">Mahasiswa</a></li>
                            <li><a class="dropdown-item" href="matakuliah/viewMataKuliah.php">MataKuliah</a></li>

                        </ul>
                    </li>

                </ul>
                <form class="d-flex" role="search" action="viewpeminjam.php" method="get">
                    <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="cari">
                    <button class="btn btn-outline-light" type="submit" value="Cari">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <br>
    <h1 class="text-light">Tabel Peminjam</h1>
    <?php 
    if(isset($_GET['cari'])){
	    $cari = $_GET['cari'];
    }
    ?>
    <table border="1" class="table table-dark table-sm" style="width: 50%;">
        <tr>
            <th>ID</th>
            <td>Nama Pengguna</td>
            <td>Nama Buku</td>
            <th>No HP</th>
            <th>Pilihan</th>
        </tr>

        <?php 

if(isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $query = $db->koneksi->prepare("SELECT * FROM t_tambah WHERE NamaPengguna='$cari'");
    $query->execute();	
    $hasil=$query->get_result();			
}else{
    $query = $db->koneksi->prepare("SELECT * FROM t_tambah ORDER BY idNama ASC ");
    $query->execute();	
    $hasil=$query->get_result();	
}

while ($data = mysqli_fetch_array($hasil)) {

echo "<tr>";
echo "<td>$data[idNama]</td>";
echo "<td>$data[NamaPengguna]</td>";
echo "<td>$data[NamaBuku]</td>";
echo "<td>$data[NoHp]</td>";


echo '<td>
<a href="editpeminjam.php?idNama='.$data['idNama'].'">Edit</a> /
<a href="hapusPeminjam.php?idNama='.$data['idNama'].'" 
     onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
</td>';
echo "</tr>";
}
        

        
     ?>
    </table>
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
        <a href="input.php" type="button" class="btn btn-primary btn-lg">Input Data</a>
        <a href="viewpeminjam.php" type="button" class="btn btn-primary btn-lg">Reset</a>
        <a href="session.php" type="button" class="btn btn-primary btn-lg">Kembali</a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>