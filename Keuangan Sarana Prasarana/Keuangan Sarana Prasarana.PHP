<html>

<body>
    <?php include "../Header/Header.php";
    include "connection.php";
    include "style.html";

    $query = "EXEC dbo.Tabel4_PenggunaanDana";
    $noCount = sqlsrv_query($conn, "SET NOCOUNT ON");
    $stmt = sqlsrv_query($conn, $query);

    //Baris 1
    echo "<table>";
    echo "<tr>";
    echo "<th rowspan='2'>No</th>";
    echo "<th rowspan='2'>Jenis Penggunaan</th>";
    echo "<th colspan='4'>Unit Kelola Program Studi (Rp.)</th>";
    echo "<th colspan='4'>Program Studi(Rp.)</th>";
    echo "</tr>";
    //Baris 2
    echo "<tr>";
    echo "<th>TS-2</th>";
    echo "<th>TS-1</th>";
    echo "<th>TS</th>";
    echo "<th>Rata-rata</th>";
    echo "<th>TS-2</th>";
    echo "<th>TS-1</th>";
    echo "<th>TS</th>";
    echo "<th>Rata-rata</th>";
    echo "</tr>";
    //Table Content
    //Nomor Baris
    $no = 1;
    $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
    echo "<tr>";
    echo "<td>" . $row['Nomor'] . "</td>";
    echo "<td colspan='9'>" . $row['jenisPenggunaan'] . "</td>";

    $no++;

    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['Nomor'] . "</td>";
        echo "<td>" . $row['jenisPenggunaan'] . "</td>";

        if ($no != 1) {
            echo "<td>" . number_format($row['TS_2_UPPS'], 0, ".", ",") . "</td>";
            echo "<td>" . number_format($row['TS_1_UPPS'], 0, ".", ",") . "</td>";
            echo "<td>" . number_format($row['TS_UPPS'], 0, ".", ",") . "</td>";
            echo "<td>" . number_format($row['Rata_rata_UPPS'], 0, ".", ",") . "</td>";
            echo "<td>" . number_format($row['TS_2_PS'], 0, ".", ",") . "</td>";
            echo "<td>" . number_format($row['TS_1_PS'], 0, ".", ",") . "</td>";
            echo "<td>" . number_format($row['TS_PS'], 0, ".", ",") . "</td>";
            echo "<td>" . number_format($row['Rata_rata_PS'], 0, ".", ",") . "</td>";
        };
        echo "</tr>";
        $no++;
    }
    echo "</table>";
    ?>
    </div>
    </div>
    <br>
    <div class="">
        <a href="Grafik/Grafik Keuangan.php" target="_blank">Tampilkan Grafik Penggunaan Dana</a>
    </div>
</body>

</html>