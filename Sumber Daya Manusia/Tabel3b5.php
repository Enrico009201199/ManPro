<?php 
//Connect Database
include 'connection.php';
include "style.html";

$query = "EXEC dbo.Tabel3b5_KaryaIlmiahDisitasi";
$noCount = sqlsrv_query($conn,"SET NOCOUNT ON");
$stmt = sqlsrv_query($conn,$query);

// FETCH ARRAY
//Table Header
echo "<table>";
echo "<tr>";
  echo "<th>No</th>";
  echo "<th>Nama Dosen</th>";
  echo "<th>Judul Artikel";
  echo "<th>Jumlah Sitasi</th>";
echo "</tr>";
//Table Content
//Nomor Baris
$no = 1;
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
  echo "<tr>";
    echo "<td>" . $no . "</td>";
    echo "<td>" . $row['NamaDosen'] . "</td>";
    echo "<td>" . $row['JudulArtikel'] . "</td>";
    echo "<td>" . $row['JumlahSitasi'] . "</td>";
  echo "</tr>";
  $no ++;
}
echo "</table>";


// //CEK FETCH ARRAY
// if(sqlsrv_fetch_array($stmt) ===false){
//   echo "<br>";
//   echo "fetch error";
//   echo "<br>";
//   die(print_r(sqlsrv_errors(),true));
//   }else{
//   echo "sqlsrv_fetch is working";
//   echo "<br />";
//   }

// //CEK HAS ROWS
//   if ($stmt !== NULL) {  
//     $rows = sqlsrv_has_rows( $stmt );  

//     if ($rows === true)  
//        echo "\nthere are rows\n";  
//     else   
//        echo "\nno rows\n";  
//  }

?>