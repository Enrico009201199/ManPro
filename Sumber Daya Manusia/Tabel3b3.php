<?php

include "connection.php";
include "style.html";

$query = "EXEC dbo.Tabel3b3_PKMDTPS";
$noCount = sqlsrv_query($conn,"SET NOCOUNT ON");
$stmt = sqlsrv_query($conn,$query);

//Baris 1
echo "<table>";
    echo "<tr>";
        echo "<th rowspan='2'>No</th>";
        echo "<th rowspan='2'>Sumber Pembiayaan</th>";
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
//Nomor Baris
$no = 1;
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
  echo "<tr>";
  if($row['sumberPembiayaan'] != 'Jumlah'){
    echo "<td>" . $no . "</td>";
    echo "<td>" . $row['sumberPembiayaan'] . "</td>";
}
else{
    echo "<td colspan=2>" . $row['sumberPembiayaan'] . "</td>";
}
    echo "<td>" . $row['ts2'] . "</td>";
    echo "<td>" . $row['ts1'] . "</td>";
    echo "<td>" . $row['ts'] . "</td>";
    echo "<td>" . $row['jumlah'] . "</td>";
  echo "</tr>";
  $no ++;
}
echo "</table>";
?>