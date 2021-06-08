<?php
function salam($waktu)
{
  return "Selamat $waktu, 
  <br>Selamat datang di Career Center !";
}

date_default_timezone_set('Asia/Jakarta');
$jam = date("G");
if ($jam >= 0 && $jam <= 11) {
  $waktu = "Pagi";
} elseif ($jam >= 12 && $jam <= 15) {
  $waktu = "Siang";
} elseif ($jam >= 16 && $jam <= 18) {
  $waktu = "Sore";
} elseif ($jam >= 19 && $jam <= 23) {
  $waktu = "Malam";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Career Center</title>

</head>

<body class="mt-3">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
      <a class="navbar-brand" href=indeks.php>Career Center</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href=alumni/alumni.php id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Alumni
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href=alumni/alumni.php>All</a>
              <a class="dropdown-item" href=alumni/alumnilaki.php>Laki-Laki</a>
              <a class="dropdown-item" href=alumni/alumnipr.php>Perempuan</a>
              <a class="dropdown-item" href=alumni/alumniberprestasi.php>Berprestasi</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=perusahaan/perush.php>Perusahaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=lowongan/lowongan.php>Lowongan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <img src="img/awal.jpg" width="40%" class="img-thubmnail">
      <h1 class="display-4"><?= salam($waktu); ?></h1>
      <p class="lead">Menuju tak batas dan melampauinya</p>
    </div>
  </div>


  <div class="container"></div>
  <div class="row">
    <div class="col text-center">
      <h1>Alumni</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-md">
      <div class="card">
        <img src="img/alumni.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Alumni</h5>
          <p class="card-text">Alumni yang telah bejuang dan lulus</p>
          <a href=alumni/alumni.php class="btn btn-info">Lihat</a>
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="card">
        <img src="img/alumni.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Alumni Laki-laki</h5>
          <p class="card-text">Alumni yang berjenis kelamin laki-laki</p>
          <a href=alumni/alumnilaki.php class="btn btn-info">Lihat</a>
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="card">
        <img src="img/alumni.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Alumni Perempuan</h5>
          <p class="card-text">Alumni yang berjenis kelamin perempuan</p>
          <a href=alumni/alumnipr.php class="btn btn-info">Lihat</a>
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="card">
        <img src="img/alumni.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Alumni Berprestasi</h5>
          <p class="card-text">Alumni yang berprestasi</p>
          <a href=alumni/alumniberprestasi.php class="btn btn-info">Lihat</a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="container"></div>
  <div class="row">
    <div class="col text-center">
      <h1>Perusahaan</h1>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem">
        <img src="img/perusahaan.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Perusahaan</h5>
          <p class="card-text">Perusahaan......</p>
          <a href=perusahaan/perush.php class="btn btn-info">Lihat</a>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
  <div class="container"></div>
  <div class="row">
    <div class="col text-center">
      <h1>Lowongan</h1>
    </div>
  </div>

  <div class="row-md">
    <div class="col">
      <div class="card" style="width: 18rem" ;>
        <img src=" img/lowongan.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Lowongan </h5>
          <p class="card-text">Coba dulu siapa tau beruntung</p>
          <a href=lowongan/lowongan.php class="btn btn-info">Lihat</a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
</body>

</html>