<?php 
include "connection.php";
include "style.html";

$query = "EXEC dbo.Tabel3a2_DosenPembimbingUtamaTugasAkhir";
$noCount = sqlsrv_query($conn,"SET NOCOUNT ON");
$stmt = sqlsrv_query($conn,$query);

// FETCH ARRAY
//Table Header
//Baris 1
echo "<table>";
echo "<tr>";
    echo "<th rowspan='3'> No</th>";
    echo "<th rowspan='3'>Nama Dosen</th>";
    echo "<th colspan='8'>Jumlah Mahsiswa yang Dibimbing</th>";
    echo "<th rowspan='3'>Rata-rata Jumlah Bimbingan di semua Program/Semester</th>";
echo "</tr>";
//Baris 2 
echo "<tr>";
    echo "<th colspan='4'>pada PS yang Diakrediatasi</th>";
    echo "<th colspan='4'>pada PS Lain di PT</th>";
echo "</tr>";
//Baris 3 
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

// Table Content
//Nomor Baris
$no = 1;
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
  echo "<tr>";
    echo "<td>" . $no . "</td>";
    echo "<td>" . $row['NamaDosen'] . "</td>";
    echo "<td>" . $row['TS-2'] . "</td>";
    echo "<td>" . $row['TS-1'] . "</td>";
    echo "<td>" . $row['TS'] . "</td>";
    echo "<td>" . $row['Rata2'] . "</td>";
    echo "<td>" . $row['TS-2b'] . "</td>";
    echo "<td>" . $row['TS-1b'] . "</td>";
    echo "<td>" . $row['TSb'] . "</td>";
    echo "<td>" . $row['Rata2b'] . "</td>";
    echo "<td>" . $row['Rata2_semua'] . "</td>";
  echo "</tr>";
  //Iterasi baris
  $no ++;
}
echo "</table>";


//Hasil SP yang tidak dimunculkan di tabel

// //Pindah Ke select ke-2
// sqlsrv_next_result($stmt);
// //Table Header
// echo "<table>";
// echo "<tr>";
//     echo "<th>RDPU</th>";
//     echo "<th>Skor</th>";
// echo "</tr>";
// //Table Content
// while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
//     echo "<tr>";
//         echo "<td>" . $row['RDPU'] . "</td>";
//         echo "<td>" . $row['Skor'] . "</td>";
//     echo "</tr>";
// }
// echo "</table>";

?>