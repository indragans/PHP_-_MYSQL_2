<?php
$NRP = $_POST["NRP"];
$NAMA_MHS = $_POST["NAMA_MHS"];
$JENIS_KELAMIN = $_POST["JENIS_KELAMIN"];
$ALAMAT_MHS = $_POST["ALAMAT_MHS"];
include("koneksi.php");
$hasil=mysqli_query($koneksi,"UPDATE mahasiswa SET NAMA_MHS='$NAMA_MHS',JENIS_KELAMIN='$JENIS_KELAMIN',ALAMAT_MHS='$ALAMAT_MHS' WHERE NRP='$NRP'");
echo "Data telah berhasil diupdate";
mysqli_close($koneksi);
?>