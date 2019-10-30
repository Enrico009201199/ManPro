<html>
    <body>
    <?php
    include "Profil Dosen.php";
include "connection.php";
include "style.html";

$query = "EXEC dbo.Tabel3a3_EWMPDosenTetapPerguruanTinggi";
$noCount = sqlsrv_query($conn,"SET NOCOUNT ON");
$stmt = sqlsrv_query($conn,$query);

// FETCH ARRAY
//Table Header
echo "<table>";
//Baris 1
echo "<tr>";
    echo "<th rowspan='3'>Nama Dosen (DT)</th>";
    echo "<th rowspan='3'>DTPS</th>";
    echo "<th colspan='6'>Ekuivalen Waktu Mengajar Penuh (EWMP) pada saat TS dalam satuan kredit semester (sks)</th>";
    echo "<th rowspan='3'>Jumlah (sks)</th>";
    echo "<th rowspan='3'>Rata-rata per Semester (sks)</th>";
echo "</tr>";
//Baris 2
echo "<tr>";
    echo "<th colspan='3'>Pendidikan: Pembelajaran dan Pembimbingan</th>";
    echo "<th rowspan='2'>Penelitian</th>";
    echo "<th rowspan='2'>PkM</th>";
    echo "<th rowspan='2'>Tugas Tambahan dan/atau Penunjang</th>";
echo "</tr>";
//Baris 3
echo "<tr>";
    echo "<th>PS yang Diakreditasi</th>";
    echo "<th>PS Lain di dalam PT</th>";
    echo "<th>PS Lain di luar PT</th>";
echo "</tr>";

//Table Content
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
  echo "<tr>";
      echo "<td>" . $row['Nama'] . "</td>";
      echo "<td>" . $row['isDTPS'] . "</td>";
      echo "<td>" . $row['PembelajaranPS'] . "</td>";
      echo "<td>" . $row['PembelajaranPSLain'] . "</td>";
      echo "<td>" . $row['PembelajaranPSLuar'] . "</td>";
      echo "<td>" . $row['Penelitian'] . "</td>";
      echo "<td>" . $row['Pkm'] . "</td>";
      echo "<td>" . $row['Tambahan'] . "</td>";
      echo "<td>" . $row['Jumlah'] . "</td>";
      echo "<td>" . $row['Rata2'] . "</td>";
  echo "</tr>";
}
echo "</table>";

?>
        </div>
        </div>
        <br>
        <div class="">
            <a href="Grafik/Grafik Dosen EWMP.php" target="_blank">Tampilkan Grafik Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi</a> 
        </div>
    </body>
</html>