<html>
    <body>
    <?php
include "Kinerja Dosen.php";
include "connection.php";
include "style.html";

$query = "EXEC dbo.Tabel3b4_PartJurnal";
$noCount = sqlsrv_query($conn,"SET NOCOUNT ON");
$stmt = sqlsrv_query($conn,$query);

//Baris 1
echo "<table>";
    echo "<tr>";
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
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
  echo "<tr>";
      echo "<td>" . $row['jenisPublikasi'] . "</td>";
      echo "<td>" . $row['ts2'] . "</td>";
      echo "<td>" . $row['ts1'] . "</td>";
      echo "<td>" . $row['ts'] . "</td>";
      echo "<td>" . $row['jumlah'] . "</td>";

  echo "</tr>";
}
echo "</table>";

//Pindah Ke select ke-2 (Tabel 2)
sqlsrv_next_result($stmt);
//Table Header
echo "<table>";
echo "<tr>";
    echo "<th>Lokal</th>";
    echo "<th>Nasional</th>";
    echo "<th>Internasional</th>";
    echo "<th>Skor</th>";
echo "</tr>";
//Table Content
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    echo "<tr>";
        echo "<td>" . $row['lokal'] . "</td>";
        echo "<td>" . $row['nasional'] . "</td>";
        echo "<td>" . $row['internasional'] . "</td>";
        echo "<td>" . $row['skor'] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<table>";
    echo "<tr>";
        echo "<th rowspan='2'>Jenis</th>";
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
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
  echo "<tr>";
      echo "<td>" . $row['jenisPublikasi'] . "</td>";
      echo "<td>" . $row['ts2'] . "</td>";
      echo "<td>" . $row['ts1'] . "</td>";
      echo "<td>" . $row['ts'] . "</td>";
      echo "<td>" . $row['jumlah'] . "</td>";

  echo "</tr>";
}
echo "</table>";
echo"<br>";
echo"<br>";

$query1 = "EXEC dbo.Tabel3b4_PartSeminar";
$noCount1 = sqlsrv_query($conn,"SET NOCOUNT ON");
$stmt1 = sqlsrv_query($conn,$query1);

//Pindah Ke select ke-2 (Tabel 2)
sqlsrv_next_result($stmt1);
//Table Header
echo "<table>";
echo "<tr>";
    echo "<th>Lokal</th>";
    echo "<th>Nasional</th>";
    echo "<th>Internasional</th>";
    echo "<th>Skor</th>";
echo "</tr>";
//Table Content
while($row = sqlsrv_fetch_array($stmt1, SQLSRV_FETCH_ASSOC)) {
    echo "<tr>";
        echo "<td>" . $row['lokal'] . "</td>";
        echo "<td>" . $row['nasional'] . "</td>";
        echo "<td>" . $row['internasional'] . "</td>";
        echo "<td>" . $row['skor'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
        </div>
        </div>
        <br>
        <div class="">
            <a href="Grafik/Grafik Pagelaran DTPS.php" target="_blank">Tampilkan Grafik Pagelaran/pameran/presentasi/publikasi Ilmiah DTPS</a> 
        </div>
    </body>
</html>