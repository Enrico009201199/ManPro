<html>
    <body>
        <?php include "../Header/Header.php";
        include "../connection.php";
        include "../Sumber Daya Manusia/style.html";

        $query = "select * from dbo.prestasi_mhs";
        $noCount = sqlsrv_query($conn,"SET NOCOUNT ON");
        $stmt = sqlsrv_query($conn,$query);

        //Table Header
            echo "<table>";
            echo "<tr>";
                echo "<th>Kegiatan</th>";
                echo "<th>Tahun</th>";
                echo "<th>Tingkat</th>";
                echo "<th>Prestasi</th>";
                echo "<th>Akademik</th>";
                echo "<th></th>";
            echo "</tr>";
            //Table Content
            while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            echo "<tr>";
                echo "<td>" . $row['Kegiatan'] . "</td>";
                echo "<td>" . $row['Tahun'] . "</td>";
                echo "<td>" . $row['Tingkat'] . "</td>";
                echo "<td>" . $row['Prestasi'] . "</td>";
                echo "<td>" . $row['Akademik'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";

            ?>

        <div class="">
			<a href="Grafik/Grafik Akademik.php" target="_blank">Tampilkan Grafik Kualitas Input</a> 
		</div>
        <br>
        <br>
        <br>
    </body>
</html>