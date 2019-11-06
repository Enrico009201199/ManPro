<html>

<body>
    <?php
    include "Profil Dosen.php";
    include "connection.php";
    include "style.html";

    $query = "EXEC dbo.Tabel3a4_DosenTidakTetapUPPS";
    $noCount = sqlsrv_query($conn, "SET NOCOUNT ON");
    $stmt = sqlsrv_query($conn, $query);

    // FETCH ARRAY
    //Table Header
    echo "<table>";
    //Baris 1
    echo "<tr>";
    echo "<th>No</th>";
    echo "<th>Nama Dosen</th>";
    echo "<th>NIDN/NIDK</th>";
    echo "<th>Pendidikan Pasca Sarjana (sks)</th>";
    echo "<th>Bidang Keahlian</th>";
    echo "<th>Jabatan Akademik</th>";
    echo "<th>Sertifikat Pendidik Profesional</th>";
    echo "<th>Sertifikat Pendidik/ Kompetensi/ Industri</th>";
    echo "<th>Mata Kuliah yang Diampu pada PS yang Diakreditasi</th>";
    echo "<th>Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu</th>";

    $nomor = 1;
    echo "</tr>";

    //Table Content
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $nomor . "</td>";
        echo "<td>" . $row['NamaDosen'] . "</td>";
        echo "<td>" . $row['NIDN'] . "</td>";
        echo "<td>" . $row['Pendidikan'] . "</td>";
        echo "<td>" . $row['BidangKeahlian'] . "</td>";
        echo "<td>" . $row['JabatanAkademik'] . "</td>";
        echo "<td>" . $row['SertifikatPendidik'] . "</td>";
        echo "<td>" . $row['SertifikatKompetensi'] . "</td>";
        echo "<td>" . $row['MataKuliahPSYangDiampu'] . "</td>";
        echo "<td>" . $row['KesesuaianBidangKeahlian'] . "</td>";

        $nomor++;
        echo "</tr>";
    }
    echo "</table>";

    ?>
    </div>
    </div>
    <br>
    <div class="">
        <a href="Grafik/Grafik Dosen Tidak Tetap.php" target="_blank">Tampilkan Grafik Dosen Tidak Tetap Perguruan Tinggi</a>
    </div>
</body>

</html>

<script>
    var x = document.getElementById("change");
    x.innerHTML = "Dosen Tidak Tetap Perguruan Tinggi";
</script>