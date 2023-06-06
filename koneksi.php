Membuat koneksi ke database<br>
<?php
$host = 'localhost'; // alamat server database (misalnya 'localhost' atau '127.0.0.1')
$username = 'root'; // username database
$password = ''; // password database
$database = '31_db_tugas'; // nama database

// Membuat koneksi ke database
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa apakah koneksi berhasil
if ($koneksi->connect_error) {
    die('Koneksi gagal: ' . $koneksi->connect_error);
}

echo 'Koneksi sukses';
?>
















<?php 
// $konek=mysql_connect('localhost','root','') or die('koneksi gagal');
// mysql_select_db('31_db_pens',$konek) or die('koneksi ke database gagal');
// echo 'koneksi sukses';
?>

