<html>

<body>
    <?php
    include "Profil Dosen.php";
    include "connection.php";
    include "style.html";

    $query = "EXEC dbo.Tabel3a1_DosenTetapUPPS";
    $noCount = sqlsrv_query($conn, "SET NOCOUNT ON");
    $stmt = sqlsrv_query($conn, $query);

    echo "<table>";

    echo "<tr>";

    echo "<th rowspan='2'>No</th>";
    echo "<th rowspan='2'>Nama Dosen</th>";
    echo "<th rowspan='2'>NIDN / NIDK</th>";
    echo "<th colspan='2'>Pendidikan Pasca Sarjana </th>";
    echo "<th rowspan='2'>Bidang Keahlian</th>";
    echo "<th rowspan='2'>Kesesuaian Kompetensi</th>";
    echo "<th rowspan='2'>Jabatan Akademik</th>";
    echo "<th rowspan='2'>Sertifikat Pendidik</th>";
    echo "<th rowspan='2'>Sertifikat Kompetensi</th>";
    echo "<th rowspan='2'>Mata Kuliah PS Yang Diampu</th>";
    echo "<th rowspan='2'>Kesesuaian Bidang Keahlian</th>";
    echo "<th rowspan='2'>Mata Kuliah Luar PS Yang Diampu</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Magister/Magister Terapan/Spesialis </th>";
    echo "<th>Doktor/Doktor Terapan/Spesialis</th>";
    echo "</tr>";
    $nomor = 1;
    // Table Content
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $nomor . "</td>";
        echo "<td>" . $row['NamaDosen'] . "</td>";
        echo "<td>" . $row['NIDN'] . "</td>";
        echo "<td>" . $row['Pendidikan'] . "</td>";
        echo "<td>" . $row['Pendidikan_doctor'] . "</td>";
        echo "<td>" . $row['BidangKeahlian'] . "</td>";
        echo "<td>" . $row['KesesuaianKompetensi'] . "</td>";
        echo "<td>" . $row['JabatanAkademik'] . "</td>";
        echo "<td>" . $row['SertifikatPendidik'] . "</td>";
        echo "<td>" . $row['SertifikatKompetensi'] . "</td>";
        echo "<td>" . $row['MataKuliahPSYangDiampu'] . "</td>";
        echo "<td>" . $row['KesesuaianBidangKeahlian'] . "</td>";
        echo "<td>" . $row['MataKuliahLuarPSYangDiampu'] . "</td>";
        echo "</tr>";
        $nomor++;
    }
    echo "</table>";

    //Pindah Ke select ke-2
    sqlsrv_next_result($stmt);
    //Table Header
    echo "<table>";
    echo "<tr>";
    echo "<th>No</th>";
    echo "<th>NDTPS</th>";
    echo "<th>NDS3</th>";
    echo "<th>PDS3</th>";
    echo "<th>PGBLKL</th>";
    echo "<th>RMD</th>";
    echo "</tr>";
    $nomor=1;
    //Table Content
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $nomor . "</td>";
        echo "<td>" . $row['NDTPS'] . "</td>";
        echo "<td>" . $row['NDS3'] . "</td>";
        echo "<td>" . round($row['PDS3'],2) . "</td>";
        echo "<td>" . round($row['PGBLKL'],2) . "</td>";
        echo "<td>" . $row['RMD'] . "</td>";
        echo "</tr>";
        $nomor++;
    }
    echo "</table>";

    //Pindah Ke select ke-3 (Tabel 3)
    sqlsrv_next_result($stmt);
    //Table Header
    echo "<table>";
    echo "<tr>";
    echo "<th>No</th>";
    echo "<th>Kecukupan Jumlah DTPS</th>";
    echo "<th>Kualifikasi akademik DTPS</th>";
    echo "<th>Jabatan Akademik DTPS</th>";
    echo "<th>Rasio</th>";
    echo "</tr>";
    $nomor=1;
    //Table Content
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $nomor . "</td>";
        echo "<td>" . $row['KecukupanjumlahDTPS'] . "</td>";
        echo "<td>" . round($row['KualifikasiakademikDTPS'],2) . "</td>";
        echo "<td>" . round($row['JabatanAkademikDTPS'] . "</td>",2);
        echo "<td>" . $row['Rasio'] . "</td>";
        $nomor++;
        echo "</tr>";
    }
    echo "</table>";
    ?>
    </div>
    </div>
    <br>
    <div class="">
        <a href="Grafik/Grafik Dosen Tetap.php" target="_blank">Tampilkan Grafik Dosen Tetap Perguruan Tinggi</a>
    </div>
</body>

</html>