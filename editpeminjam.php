<?php 

include 'database.php';
$db = new database();
if (isset($_GET['idNama'])) {
    $id = ($_GET['idNama']);

    $query = $db->koneksi->prepare("SELECT * FROM t_tambah WHERE idNama='$id'");
    $query->execute();
    $hasil=$query->get_result();
    

    $data = mysqli_fetch_array($hasil);
    $idNama = $data["idNama"];
    $NamaPengguna= $data["NamaPengguna"];
    $NamaBuku = $data["NamaBuku"];
    $noHP = $data["NoHp"];
    
}else {
    header("location:viewpeminjam.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
    background-color: antiquewhite;
}

h1 {
    text-align: center;
}

.container {
    width: 400px;
    margin: auto;
}
</style>

<body>
    <h1>Edit Data</h1>
    <div class="container">
        <form id="form_mahasiswa" action="proses_editpeminjam.php" method="post">

            <fieldset>
                <legend>Edit Data Peminjam </legend>
                <p>
                    <label for="idNama">ID : </label>
                    <input type="hidden" name="idNama" value="<?php echo $idNama; ?>">
                    <input type="text" name="idNamaDisabled" id="idNamaDisabled" value="<?php echo $idNama ?>"
                        disabled>

                </p>
                <p>
                    <label for="NamaPengguna">Nama Peminjam: </label>
                    <input type="text" name="NamaPengguna" id="NamaPengguna" value="<?php echo $NamaPengguna ?>">
                </p>
                <p>
                    <label for="NamaBuku">Nama Buku : </label>
                    <input type="text" name="NamaBuku" id="NamaBuku" value="<?php echo $NamaBuku ?>">
                </p>
                <p>
                    <label for="noHP">No HP : </label>
                    <input type="text" name="noHP" value="<?php echo $noHP?>">

                </p>

            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
        </form>

    </div>

</body>

</html>