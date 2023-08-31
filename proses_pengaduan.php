<?php
echo $_files['foto']['pengaduan'];
echo $_files['foto']['pengaduan.png'];

//koneksi database

//PDO
$koneksi = new PDO("mysql:host=localhost;dbname=desainlaporan_pengaduan","root","");
$koneksi->query("select * from pengaduan");

$query = $koneksi->query("insert * from pengaduan");
$data = $query->fetchAll();

var_dump($data);
if($koneksi){
    echo "koneksi berhasil";
}else{
    echo"gagal koneksi";
}