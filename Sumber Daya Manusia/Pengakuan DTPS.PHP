<html>
    <body>
    <?php
    include "Kinerja Dosen.php";
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
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
  echo "<tr>";
      echo "<td>" . $row['NamaDosen'] . "</td>";
      echo "<td>" . $row['Bidang Keahlian'] . "</td>";
      echo "<td>" . $row['Rekognisi'] . "</td>";
      echo "<td>" . $row['Wilayah'] . "</td>";
      echo "<td>" . $row['Nasional'] . "</td>";
      echo "<td>" . $row['Internasional'] . "</td>";
      echo "<td>" . $row['Tahun'] . "</td>";
  echo "</tr>";
}
echo "</table>";

?>
        </div>
        </div>
        <br>
        <div class="">
            <a href="Grafik/Grafik Pengakuan DTPS.php" target="_blank">Tampilkan Grafik Pengakuan/Rekognisi DTPS</a> 
        </div>
    </body>
</html>