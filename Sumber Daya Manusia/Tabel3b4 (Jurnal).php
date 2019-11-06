<?php

include "connection.php";
include "style.html";

$query = "EXEC dbo.Tabel3b4_PartJurnal";
$noCount = sqlsrv_query($conn,"SET NOCOUNT ON");
$stmt = sqlsrv_query($conn,$query);

//Baris 1
echo "<table>";
    echo "<tr>";
        echo "<th rowspan='2'>No</th>";
        echo "<th rowspan='2'>Media Publikasi</th>";
        echo "<th colspan='3'>Jumlah Judul</th>";
        echo "<th rowspan='2'>Jumlah</th>";
    echo "</tr>";
//Baris 2
    echo "<tr>";
        echo "<th>TS-2</th>";
        echo "<th>TS-1</th>";
        echo "<th>TS</th>";
    echo "</tr>";
//Table Content
//Init Variable Jumlah
$jumlahTs2 = 0;
$jumlahTs1 = 0;
$jumlahTs = 0;
$jumlahTotal = 0;
//Nomor Baris
$no = 1;
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
  if($row['jenisPublikasi'] != 'Jumlah'){
    echo "<tr>";
      echo "<td>" . $no . "</td>";
      echo "<td>" . $row['jenisPublikasi'] . "</td>";
      echo "<td>" . $row['ts2'] . "</td>";
      echo "<td>" . $row['ts1'] . "</td>";
      echo "<td>" . $row['ts'] . "</td>";
      echo "<td>" . $row['jumlah'] . "</td>";
    echo "</tr>";
    $no ++;
  }
  else{
    $jumlahTs2 += $row['ts2'];
    $jumlahTs1 += $row['ts1'];
    $jumlahTs += $row['ts'];
    $jumlahTotal += $row['jumlah'];
  }
}

include "Tabel3b4 (Seminar).php";
include "Tabel3b4 (Tulisan).php";
?>