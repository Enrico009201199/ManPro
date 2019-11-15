<html>
    <body>
        <?php
            include "../Header/Header.php";
            include "connection.php";
            $query = "SELECT *
                      FROM dbo.MataKuliah";
            
            $noCount = sqlsrv_query($conn, "SET NOCOUNT ON");
            $stmt = sqlsrv_query($conn, $query);
        ?>

        <div class="">
            <h3>Kurikulum</h3>
            
            <div class="">
                <table>
                    <tr>
                        <th>No.</th>
                        <th>Semester</th>
                        <th>Kode Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th>
                        <th>Bobot Kredit<br>(sks)</th>
                    </tr>
                    <?php
                        $number = 1;
                        while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                            echo "<tr>";
                                echo "<td>".$number."</td>";
                                echo "<td>".$row['semester']."</td>";
                                echo "<td>".$row['kodeMatakuliah']."</td>";
                                echo "<td>".$row['namaMatakuliah']."</td>";
                                echo "<td>".$row['sks']."</td>";
                            echo "</tr>";
                            $number++;
                        }
                    ?>
                </table>
            </div>
        </div>
        <br>
        <div class="">
            <a href="Grafik/Grafik Kurikulum.php" target="_blank">Tampilkan Grafik Kurikulum</a> 
        </div>
    </body>
</html>