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
<<<<<<< HEAD
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
=======
                        <th rowspan="2">No.</th>
                        <th rowspan="2">Semester</th>
                        <th rowspan="2">Kode Mata Kuliah</th>
                        <th rowspan="2">Nama Mata Kuliah</th>
                        <th rowspan="2">Mata Kuliah Kompetensi</th>
                        <th colspan="3">Bobot Kredis<br>(sks)</th>
                        <th rowspan="2">Konversi Kredit ke Jam</th>
                        <th colspan="4">Capaian Pembelajaran</th>
                        <th rowspan="2">Dokumen Rencana Pembelajaran</th>
                        <th rowspan="2">Unit Penyelenggara</th>
                    </tr>
                    <tr>
                        <th>Kuliah/Responsi/Tutorial</th>
                        <th>Seminar</th>
                        <th>Praktikum/Praktik/Praktik Lapangan</th>
                        <th>Sikap</th>
                        <th>Pengetahuan</th>
                        <th>Keterampilan Umum</th>
                        <th>Keterampilan Khusus</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
>>>>>>> timIntan
                </table>
            </div>
        </div>
        <br>
        <div class="">
            <a href="Grafik/Grafik Kurikulum.php" target="_blank">Tampilkan Grafik Kurikulum</a> 
        </div>
    </body>
</html>