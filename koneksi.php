<?php
//PDO
$koneksi = new PDO("mysql:host=localhost;dbname=desainlaporan_pengaduan","root","");
$koneksi->query("select * from pengaduan");

$query = $koneksi->query("select * from pengaduan");
$data = $query->fetchAll();

var_dump($data);
if($koneksi){
    echo "koneksi berhasil";
}else{
    echo"gagal koneksi";
}
?>