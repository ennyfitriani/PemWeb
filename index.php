<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">

    <title>Tugas Bootstrap</title>
  </head>
  <body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">X University</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" 
      aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" 
            role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Alumni
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="dataAlumni.php">Data Diri</a></li>
              <li><a class="dropdown-item" href="ipkAlumni.php">Riwayat Pendidikan</a></li>
              <li><a class="dropdown-item" href="applyAlumni.php">Riwayat Pendaftaraan Lowongan</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" 
            role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Perusahaan
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="perusahaan.php">Data Perusahaan</a></li>
              <li><a class="dropdown-item" href="lowongan.php">Daftar Lowongan</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Akhir Navbar -->
    
    <br>
    <h1 class="text-center">SELAMAT DATANG</h1>
    <h2 class="text-center"> di Website Alumni </h2>
    <h2 class="text-center text-primary">UNIVERSITAS X INDONESIA</h2><hr>
    <p class="text-center">"Website ini merupakan website fasilitas dari pihak Universitas bagi para alumni.
    <br>Website ini menyediakan informasi lowongan pekerjaan yang berasal dari beberapa 
    <br>Perusahaan yang telah menjalin kerja sama dengan pihak Universitas."</p>
    <br>

    <img src="wp4.jpg" class="img-fluid" alt="...">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" 
    crossorigin="anonymous"></script>

  </body>
</html>
