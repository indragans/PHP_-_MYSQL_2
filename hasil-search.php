<?php
$kolom = $_POST["kolom"];
$cari = $_POST["cari"];
include("koneksi.php");
$hasil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE $kolom LIKE '%$cari%'");
echo "<br>Hasil pencarian:<br>";
echo "<table border=1>";
echo "<tr><td>NRP</td><td>NAMA_MHS</td><td>JENIS_KELAMIN</td><td>ALAMAT_MHS</td></tr>";
while ($baris = mysqli_fetch_row($hasil)) {
    echo "<tr><td>$baris[0]</td><td>$baris[1]</td><td>$baris[2]</td><td>$baris[3]</td></tr>";
}
echo "</table>";
?>






<!-- hiasan halaman php -->
<!-- //<?php
$kolom = $_POST["kolom"];
$cari = $_POST["cari"];
include("koneksi.php");
$hasil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE $kolom LIKE '%$cari%'");
?>

<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    h1 {
      color: blue;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table td, table th {
      padding: 8px;
      border: 1px solid #ccc;
    }

    table th {
      background-color: #f2f2f2;
    }

    .button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 10px;
      cursor: pointer;
    }

    .button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h1>Hasil Pencarian</h1>
  <table>
    <tr>
      <th>NRP</th>
      <th>NAMA_MHS</th>
      <th>JENIS_KELAMIN</th>
      <th>ALAMAT_MHS</th>
    </tr>
    <?php
    while ($baris = mysqli_fetch_row($hasil)) {
      echo "<tr><td>$baris[0]</td><td>$baris[1]</td><td>$baris[2]</td><td>$baris[3]</td></tr>";
    }
    ?>
  </table>
</body>
</html>
// -->