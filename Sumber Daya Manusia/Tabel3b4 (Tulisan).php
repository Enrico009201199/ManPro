<?php

include "connection.php";
include "style.html";

$query = "EXEC dbo.Tabel3b4_PartTulisan";
$noCount = sqlsrv_query($conn,"SET NOCOUNT ON");
$stmt = sqlsrv_query($conn,$query);

//Table Header
// //Baris 1
// echo "<table>";
//     echo "<tr>";
//     echo "<th rowspan='2'>No</th>";
//     echo "<th rowspan='2'>Jenis</th>";
//     echo "<th colspan='3'>Jumlah Judul</th>";
//     echo "<th rowspan='2'>Jumlah</th>";
//     echo "</tr>";
// //Baris 2
//     echo "<tr>";
//         echo "<th>TS-2</th>";
//         echo "<th>TS-1</th>";
//         echo "<th>TS</th>";
//     echo "</tr>";
    
// //Table Content
// //Nomor Baris
// $no = 1;

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
//Buat tabel jumlah
echo "<td colspan=2> Jumlah </td>";
echo "<td>".$jumlahTs2."</td>";
echo "<td>".$jumlahTs1."</td>";
echo "<td>".$jumlahTs."</td>";
echo "<td>".$jumlahTotal."</td>";
echo "</table>";

?>