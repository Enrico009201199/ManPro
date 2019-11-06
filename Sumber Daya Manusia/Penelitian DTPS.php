<html>
    <body>
    <?php
include "Kinerja Dosen.php";
include "connection.php";
include "style.html";

$query = "EXEC dbo.Tabel3b2_PenelitianDTPS";
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
$nomor=1;
//Table Content
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {      
    echo "<tr>";
    echo "<td>" . $nomor . "</td>";
      echo "<td>" . $row['sumberPembiayaan'] . "</td>";
      echo "<td>" . $row['ts2'] . "</td>";
      echo "<td>" . $row['ts1'] . "</td>";
      echo "<td>" . $row['ts'] . "</td>";
      echo "<td>" . $row['jumlah'] . "</td>";
    echo "</tr>";
    $nomor++;
}
echo "</table>";
?>
        </div>
        </div>
        <br>
        <div class="">
            <a href="Grafik/Grafik Penelitian DTPS.php" target="_blank">Tampilkan Grafik Penelitian DTPS</a> 
        </div>
    </body>
</html>

<script>
    var x = document.getElementById("change1");
    x.innerHTML = "Penelitian DTPS";
</script>