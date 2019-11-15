<html>
    <body>
        <?php include "../Header/Header.php"?>

        <div class="">
            <h3>Pengabdian kepada Masyarakat (PkM)</h3>
            
            <div class="">
            <?php 
//Connect Database
include '../connection.php';
include "style.html";

$query = "EXEC dbo.Tabel7_PKMDTPSMahasiswa";
$noCount = sqlsrv_query($conn,"SET NOCOUNT ON");
$stmt = sqlsrv_query($conn,$query);

// FETCH ARRAY
//Table Header
echo "<table>";
echo "<tr>";
  echo "<th>No</th>";
  echo "<th>Nama Dosen</th>";
  echo "<th>Tema PkM sesuai Roadmap";
  echo "<th>Nama Mahasiswa</th>";
  echo "<th>Judul Kegiatan</th>";
  echo " <th>Tahun</th>";
echo "</tr>";
//Table Content
//Nomor Baris
$no = 1;
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
  echo "<tr>";
    echo "<td>" . $no . "</td>";
    echo "<td>" . $row['namaDosen'] . "</td>";
    echo "<td>" . $row['temaPKM'] . "</td>";
    echo "<td>" . $row['namaMahasiswa'] . "</td>";
    echo "<td>" . $row['judulKegiatan'] . "</td>";
    echo "<td>" . $row['tahun'] . "</td>";
  echo "</tr>";
  $no ++;
}

//Hitung jumlah kegiatan
$no = $no - 1;
echo "<tr>";
  echo "<td colspan=4> Jumlah </td>";
  echo "<td colspan=2>" . $no . "</td>";
echo "</tr>";

echo "</table>";
?>
        </div>
        </div>
        <br>
        <div class="">
            <a href="Grafik/Grafik PkM.php" target="_blank">Tampilkan Grafik Pengabdian kepada Masyarakat (PkM)</a> 
        </div>
    </body>
</html>
