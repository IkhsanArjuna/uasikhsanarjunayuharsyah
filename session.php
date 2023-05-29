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
.column {
    align-items: center;
    float: left;
    width: 100%;
}


.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>

<body class="bg-secondary">

    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark  text-light sticky-sm-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UAS</a>
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
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>     
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <br>

    <h1 class="align-content-center text-center text-light">
        Peminjaman Buku
    </h1>
    <br>
    <center>
            <div class="col-sm-4">
                <div class="card text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Data Peminjaman Buku</h5>
                        <p class="card-text">Data Peminjam Buku yang Terdiri dari Nama Peminjam ,Nama Buku ,dan No Hp </p>
                        <a href="viewPeminjam.php" class="btn btn-primary">Lihat Data Peminjam</a>
                    </div>
                </div>
            </div>
    <center>
    <br>
    <center>
        <div class="container align-content-center">

            <div class="card align-content-center " style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Nama : Ikhsan Arjuna Yuharsyah</p>
                    <p class="card-text">NIM : 223307010</p>
                    <p class="card-text">Kelas : 2A </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>



        </div>


    </center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>


</html>