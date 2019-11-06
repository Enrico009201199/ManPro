<?php
include "connection.php";
include "style.html";

$query = "EXEC dbo.Tabel3b1_RekognisiDTPS";
$noCount = sqlsrv_query($conn,"SET NOCOUNT ON");
$stmt = sqlsrv_query($conn,$query);

// FETCH ARRAY
//Table Header
echo "<table>";
//Baris 1
echo "<tr>";
    echo "<th rowspan='2'>No</th>";
    echo "<th rowspan='2'>Nama Dosen</th>";
    echo "<th rowspan='2'>Bidang Keahlian</th>";
    echo "<th rowspan='2'>Rekognisi dan Bukti Pendukung</th>";
    echo "<th colspan='3'>Tingkat</th>";
    echo "<th rowspan='2'>Tahun</th>";
echo "</tr>";
//Baris 2
echo "<tr>";
    echo "<th>Wilayah</th>";
    echo "<th>Nasional</th>";
    echo "<th>Internasional</th>";
echo "</tr>";

//Table Content
//Nomor Baris
$jumlahWilayah=0;
$jumlahNasional=0;
$jumlahInternasional=0;
$no = 1;
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
  echo "<tr>";
    echo "<td>" . $no . "</td>";
    echo "<td>" . $row['NamaDosen'] . "</td>";
    echo "<td>" . $row['Bidang Keahlian'] . "</td>";
    echo "<td>" . $row['Rekognisi'] . "</td>";
    echo "<td>" . $row['Wilayah'] . "</td>";
    if($row['Wilayah'] != null){
      $jumlahWilayah ++;
    }
    echo "<td>" . $row['Nasional'] . "</td>";
    if($row['Nasional'] != null){
      $jumlahNasional ++;
    }
    echo "<td>" . $row['Internasional'] . "</td>";
    if($row['Internasional'] != null){
      $jumlahInternasional ++;
    }
    echo "<td>" . $row['Tahun'] . "</td>";
  echo "</tr>";
  $no ++;
}
echo "<td colspan=4> Jumlah </td>";
echo "<td>" . $jumlahWilayah . "</td>";
echo "<td>" . $jumlahNasional . "</td>";
echo "<td>" . $jumlahInternasional . "</td>";
echo "<td>"."</td>";
echo "</table>";

?>