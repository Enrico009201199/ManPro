<?php

include "connection.php";
include "style.html";

$query = "EXEC dbo.Tabel4_PenggunaanDana";
$noCount = sqlsrv_query($conn,"SET NOCOUNT ON");
$stmt = sqlsrv_query($conn,$query);

//Baris 1
echo "<table>";
    echo "<tr>";
        echo "<th rowspan='2'>No</th>";
        echo "<th rowspan='2'>Jenis Penggunaan</th>";
        echo "<th colspan='4'>Unit Kelola Program Studi (Rp.)</th>";
        echo "<th colspan='4'>Program Studi(Rp.)</th>";
    echo "</tr>";
//Baris 2
    echo "<tr>";
        echo "<th>TS-2</th>";
        echo "<th>TS-1</th>";
        echo "<th>TS</th>";
        echo "<th>Rata-rata</th>";
        echo "<th>TS-2</th>";
        echo "<th>TS-1</th>";
        echo "<th>TS</th>";
        echo "<th>Rata-rata</th>";
    echo "</tr>";
//Table Content
//Nomor Baris
$no = 1;
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
  echo "<tr>";
    echo "<td>" . $no . "</td>";
    echo "<td>" . $row['jenisPenggunaan'] . "</td>";
    echo "<td>" . $row['TS_2_UPPS'] . "</td>";
    echo "<td>" . $row['TS_1_UPPS'] . "</td>";
    echo "<td>" . $row['TS_UPPS'] . "</td>";
    echo "<td>" . $row['Rata_rata_UPPS'] . "</td>";
    echo "<td>" . $row['TS_2_PS'] . "</td>";
    echo "<td>" . $row['TS_1_PS'] . "</td>";
    echo "<td>" . $row['TS_PS'] . "</td>";
    echo "<td>" . $row['Rata_rata_PS'] . "</td>";
  echo "</tr>";
  $no ++;
}
echo "</table>";
?>