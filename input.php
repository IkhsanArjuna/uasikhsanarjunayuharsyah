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

.container1 {
    width: 400px;
    margin: auto;
}
</style>

<body>
    <br>
    <h1>Input Data Peminjaman</h1>
    <div class="container1">
        <form action="prosesinputpeminjam.php" id="form_peminjam" method="post" class="row g-3">
            <fieldset>
                <Legend>Input Data</Legend>
                <p>
                    <Label for="nama">Nama Peminjam : </Label>
                    <input type="text" name="NamaPengguna" id="NamaPengguna">
                </p>

                <p>
                    <Label for="nama">Nama Buku : </Label>
                    <input type="text" name="NamaBuku" id="NamaBuku">
                </p>
                <p>
                    <Label for="ipk">No HP : </Label>
                    <input type="text" name="noHP" id="noHP" placeholder="Contoh 0812222233334">

                </p>
                <p>
                    <input type="submit" name="input" value="Simpan">
                    <a href="viewpeminjam.php" type="button">Kembali</a>

                </p>
            </fieldset>
        </form>
    </div>
</body>

</html>