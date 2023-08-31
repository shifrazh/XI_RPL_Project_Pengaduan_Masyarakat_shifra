<?php
//PDO
$koneksi = new PDO("mysql:host=localhost;dbname=desainlaporan_pengaduan","root","");
$koneksi->query("select * from pengaduan");

$query = $koneksi->query("select * from pengaduan");
$data = $query->fetchAll();


if($koneksi){
    echo "koneksi berhasil";
}else{
    echo"gagal koneksi";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #FFCACC;">
    <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="halaman_pelaporan.php">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lihat_laporan.php">Lihat laporan</a>
        </li>
        
      </ul>
 
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="search" aria-label="Logout">
      </form>
 
   </div>
</div>
 
</nav>
<nav class="navbar navbar-expand-lg navbar-light navbar-light">
<div class="container">

<table class="table">
  <thead>
    
    
  </tbody>
</table>
</div>
</body>
</html>