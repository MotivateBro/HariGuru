<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hari guru</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
        <a class="nav-link active" aria-current="page" href="tokoh.php">Tokoh</a>
        <a class="nav-link active" aria-current="page" href="tentang.php">Tentang</a>
        <a class="nav-link active" aria-current="page" href="pesan.php">Buku Tamu</a>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
        </li>
      </ul>
      <form class="d-flex">
      </form>
    </div>
  </div>
</nav>  

<div class="container">
<form action="" method="POST" name="Pesan">
    <div class="mb-3">
        <label form="NamaSiswa" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama_sisw" name="nama_sisw">
    </div>
    <div class="mb-3">
        <label form="Alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="almt" name="almt">
    </div>
    <div class="mb-3">
        <label form="No.Telpon" class="form-label">No_Telepon</label>
        <input type="text" class="form-control" id="no_telp" name="no_telp">
    </div>
    <div class="mb-3">
        <label form="Keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control" id="ket" name="ket">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">submit</button>
</form>
</div>

<?php
if(isset($_POST['submit'])){
    $nma = $_POST['nama_sisw'];
    $almt = $_POST['almt'];
    $no_telp = $_POST['no_telp'];
    $ket = $_POST['ket'];

    echo"<div class='container'>";

    echo"Nama Siswa: $nma <br>";
    echo"Alamat : $almt <br>";
    echo"No.Telpon : $no_telp <br>";
    echo"Keterangan : $ket <br>";

}
?>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
