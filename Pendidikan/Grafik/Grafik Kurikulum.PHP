<html>
    <?php
        include "../connection.php";
        $query = "SELECT semester FROM dbo.MataKuliah";
        
        $noCount = sqlsrv_query($conn, "SET NOCOUNT ON");
        $stmt = sqlsrv_query($conn, $query);
    ?>
    <head>
        <title>Diagram Garis Mata Kuliah Setiap Semester</title>
        <script src="Chart.bundle.js"></script>
        <script src="utils.js"></script>
        <style>
        canvas{
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
        </style>
    </head>
    <body>
        <div style="width: 50%;">
            <canvas id="canvas"></canvas>
        </div>

        <script>
            <?php
                $sem1 = 0;
                $sem2 = 0;
                $sem3 = 0;
                $sem4 = 0;
                $sem5 = 0;
                $sem6 = 0;
                $sem7 = 0;
                $sem8 = 0;
                $pilihan = 0;
                while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    if($row['semester'] == 1) {
                        $sem1++;
                    }
                    else if($row['semester'] == 2) {
                        $sem2++;
                    }
                    else if($row['semester'] == 3) {
                        $sem3++;
                    }
                    else if($row['semester'] == 4) {
                        $sem4++;
                    }
                    else if($row['semester'] == 5) {
                        $sem5++;
                    }
                    else if($row['semester'] == 6) {
                        $sem6++;
                    }
                    else if($row['semester'] == 7) {
                        $sem7++;
                    }
                    else if($row['semester'] == 8) {
                        $sem8++;
                    }
                    else {
                        $pilihan++;
                    }
                }
            ?>
            var semester1 = <?php echo $sem1 ?>;
            var semester2 = <?php echo $sem2 ?>;
            var semester3 = <?php echo $sem3 ?>;
            var semester4 = <?php echo $sem4 ?>;
            var semester5 = <?php echo $sem5 ?>;
            var semester6 = <?php echo $sem6 ?>;
            var semester7 = <?php echo $sem7 ?>;
            var semester8 = <?php echo $sem8 ?>;
            var matkulPilihan = <?php echo $pilihan ?>;

            var data = [semester1, semester2, semester3, semester4, semester5, semester6, semester7, semester8, matkulPilihan];

            var colors = [
                'rgba(255, 99, 132, 0.8)',
                'rgba(255, 159, 64, 0.8)',
                'rgba(255, 205, 86, 0.8)',
                'rgba(75, 192, 192, 0.8)',
                'rgba(54, 162, 235, 0.8)',
                'rgba(153, 102, 255, 0.8)',
                'rgba(100, 87, 0, 0.8)',
                'rgba(63, 13, 94, 0.8)',
                'rgba(201, 203, 207, 0.8)'
            ];

            var myChart = {
                type: 'bar',
                data: {
                    datasets: [{
                        data: data,
                        backgroundColor: colors,
                        label: 'Banyak Mata Kuliah'
                    }],
                    labels: ["Semester 1", "Semester 2", "Semester 3", "Semester 4",
                            "Semester 5", "Semester 6", "Semester 7", "Semester 8", "Tidak Ditentukan"],
                },
                options: {
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Semester'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Banyak Mata Kuliah'
                            }
                        }]
                    },
                    title: {
                        display: true,
                        text: 'Diagram Garis Banyak Mata Kuliah per-Semester'
                    },
                    legend: {
                        display: false
                    },
                    responsive: true
                }
            };

            window.onload = function() {
                var ctx = document.getElementById("canvas").getContext("2d");
                new Chart(ctx, myChart);
            }
        </script>
    </body>
</html>