<html>
    <body>
        <?php
            include "../Header/Header.php";
            include "connection.php";
            $query = "EXEC dbo.Tabel5b_IntegrasiKegiatanPenelitianPkM";
            
            $noCount = sqlsrv_query($conn, "SET NOCOUNT ON");
            $stmt = sqlsrv_query($conn, $query);
        ?>

        <div class="">
            <h3>Integrasi Kegiatan Penelitian/PkM Dalam Pembelajaran</h3>
            
            <div class="">
            <table>
                <tr>
                    <th>No.</th>
                    <th>Judul Penelitian/PkM</th>
                    <th>Nama Dosen</th>
                    <th>Mata Kuliah</th>
                    <th>Bentuk Integrasi</th>
                </tr>
                <?php
                    $number = 1;
                    while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo "<tr>";
                            echo "<td>".$number."</td>";
                            echo "<td>".$row['judul']."</td>";
                            echo "<td>".$row['dosen']."</td>";
                            echo "<td>".$row['namaMatakuliah']."</td>";
                            echo "<td>".$row['bentukIntegrasi']."</td>";
                        echo "</tr>";
                        $number++;
                    }
                ?>
            </table>
        </div>
        </div>
        <br>
        <div class="">
            <a href="Grafik/Grafik Integrasi Kegiatan.php" target="_blank">Tampilkan Grafik Integrasi Kegiatan Penelitian/PkM Dalam Pembelajaran</a> 
        </div>
    </body>
</html>