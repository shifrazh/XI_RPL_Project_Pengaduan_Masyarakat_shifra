<?php
$koneksi        = mysqli_connect("localhost", "root", "", "desainlaporan_pengaduan");
$join           = "select * from pengaduan join masyarakat on masyarakat.nik = pengaduan.nik";
$select         = mysqli_query($koneksi, $join);

?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/add.css' rel='stylesheet'>
  <link rel="stylesheet" href="dashboard.css">
</head>

<body style="background-color : #FFC7EA;">
<!-- NAVBAR-->
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laporan masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
</nav>

  <div class="container mt-5">
  
    <table class="table table-secondary table-bordered text-center">
      <thead>
        <tr class="table-dark">
          <th scope="col">id</th>
          <th scope="col">Nama Pelapor</th>
          <th scope="col">isi Laporan</th>
          <th scope="col">Bukti Foto</th>
          <td>
          <th scope="col">status</th>
          <td>
          
          
        </tr>
        <td>
       
        <td>
       
      </thead>
      <?php while ($data = mysqli_fetch_array($select)) { ?>
        <tbody>
          <tr>
            <th scope="row"><?php echo $data['id_pengaduan']; ?></th>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['isi_laporan']; ?></td>
            <td><img src=<?php echo $data['foto']; ?>" alt="" width="150px"></td>
            <td><button type="button" class="btn btn-info mt-4 text-white" disabled><?php echo $data['status']; ?></button></td>
            <td>
              
            </td>
          </tr>
        </tbody>
      <?php } ?>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>