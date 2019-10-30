<html>
    <body>
    <?php
include "Kinerja Dosen.php";
include "connection.php";
include "style.html";

$query = "EXEC dbo.Tabel3b3_PKMDTPS";
$noCount = sqlsrv_query($conn,"SET NOCOUNT ON");
$stmt = sqlsrv_query($conn,$query);

//Baris 1
echo "<table>";
    echo "<tr>";
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
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
  echo "<tr>";
      echo "<td>" . $row['sumberPembiayaan'] . "</td>";
      echo "<td>" . $row['ts2'] . "</td>";
      echo "<td>" . $row['ts1'] . "</td>";
      echo "<td>" . $row['ts'] . "</td>";
      echo "<td>" . $row['jumlah'] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>
        </div>
        </div>
        <br>
        <div class="">
            <a href="Grafik/Grafik PkM DTPS.php" target="_blank">Tampilkan Grafik Pengabdian kepada Masyarakat (PkM) DTPS</a> 
        </div>
    </body>
</html>