<?php

function http_request($url){
    // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url);

    // set user agent    
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // mengembalikan hasil curl
    return $output;
}

$profile = http_request("https://latapialumni.000webhostapp.com/coba_alumni.php");

// ubah string JSON menjadi array
$profile = json_decode($profile, TRUE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap CSS Tanpa Download -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">

  <title>Tugas API</title>
</head>
<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">NAL University</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" 
      aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="homeuniv.php">Home</a>
          </li>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" 
            role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Alumni
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="alumniapi.php">Semua Data</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="fia.php">Prodi Teknik Informatika</a></li>
              <li><a class="dropdown-item" href="rahmi.php">Prodi Sistem Informasi</a></li>
              <li><a class="dropdown-item" href="nazlah.php">Prodi Ilmu Komputer</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Akhir Navbar -->

<br>
<div class="container">
<h1 class="text-center">INI FAKHRY YANG EDIT</h1>
<h1 class="text-center">DATA ALUMNI</h1>
<h2 class="text-center"> Prodi Teknik Informatika </h2>
<h3 class="text-center"> NAL University</h3><hr>

<br>
  <table class="table table-primary table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">Email</th>
        <th scope="col">Warga Negara</th>
        <th scope="col">IPK</th>
        <th scope="col">Kompetensi</th>
      </tr>
    </thead>
    <tbody>
    <?php for($i = 0; $i < sizeof($profile); $i++){
      $row = $profile[$i];
      
    ?>

      <tr>
        <th scope="row"> <?= $i + 1 ?> </th>
            <td><?= $row["nim"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["jenkel"] ?></td>
            <td><?= $row["alamat_skrg"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["wn"] ?></td>
            <td><?= $row["ipk"] ?></td>
            <td><?= $row["kompetensi"] ?></td>   
      </tr>
    </tbody>

    <?php } ?>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" 
crossorigin="anonymous"></script>

</body>
</html>
