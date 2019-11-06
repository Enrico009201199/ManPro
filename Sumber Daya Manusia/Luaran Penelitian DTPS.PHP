<html>
    <body>
    <?php
include "Kinerja Dosen.php";
include "connection.php";
include "style.html";

$query = "EXEC dbo.Tabel3b7_LuaranPenelitianPKMLainnya";
$noCount = sqlsrv_query($conn,"SET NOCOUNT ON");
$stmt = sqlsrv_query($conn,$query);

//Table Header
echo "<table>";
echo "<tr>";
    echo "<th>Nomor</th>";
    echo "<th>Judul Luaran";
    echo "<th>Tahun</th>";
    echo "<th>Keterangan</th>";
echo "</tr>";
//Table Content
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
  echo "<tr>";
      echo "<td>" . $row['Nomor'] . "</td>";
      echo "<td>" . $row['JudulLuaran'] . "</td>";
      echo "<td>" . $row['tahun'] . "</td>";
      echo "<td>" . $row['keterangan'] . "</td>";
  echo "</tr>";
}
echo "</table>";

//Pindah Ke select ke-2 (Tabel 2)
sqlsrv_next_result($stmt);
//Table Header
echo "<table>";
echo "<tr>";
echo "<th>No</th>";
    echo "<th>Na</th>";
    echo "<th>Nb</th>";
    echo "<th>Rlp</th>";
    echo "<th>Skor</th>";
echo "</tr>";
$nomor=1;

//Table Content
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $nomor . "</td>";
        echo "<td>" . $row['Na'] . "</td>";
        echo "<td>" . $row['Nb'] . "</td>";
        echo "<td>" . $row['Rlp'] . "</td>";
        echo "<td>" . $row['skor'] . "</td>";
    echo "</tr>";
    $nomor++;
}
echo "</table>";

?>
        </div>
        </div>
        <br>
        <div class="">
            <a href="Grafik/Grafik Luaran Penelitian.php" target="_blank">Tampilkan Grafik Luaran Penelitian/PkM Lainnya oleh DTPS</a> 
        </div>
    </body>
</html>

<script>
    var x = document.getElementById("change1");
    x.innerHTML = "Luaran Penelitian/PkM Lainnya oleh DTPS";
</script>