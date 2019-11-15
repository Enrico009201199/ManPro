<html>
<<<<<<< HEAD
    <?php
        include "../connection.php";
        $query = "EXEC dbo.Tabel5b_IntegrasiKegiatanPenelitianPkM";
        
        $noCount = sqlsrv_query($conn, "SET NOCOUNT ON");
        $stmt = sqlsrv_query($conn, $query);
    ?>
    <head>
        <title>Diagram Lingkaran Integrasi Kegiatan</title>
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
            $matPem = 0;
            $studKas = 0;
            $topPen = 0;
            while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                if(stristr($row['bentukIntegrasi'],',') != "") {
                    $integrasi = explode(",", $row['bentukIntegrasi']);
                    if($integrasi[0] == 'Materi Pembelajaran') {
                        $matPem++;
                    }
                    else if($integrasi[0] == 'Studi Kasus') {
                        $studKas++;
                    }
                    else if($integrasi[0] == 'Topik Penelitian'){
                        $topPen++;
                    }

                    if($integrasi[1] == 'Materi Pembelajaran') {
                        $matPem++;
                    }
                    else if($integrasi[1] == 'Studi Kasus') {
                        $studKas++;
                    }
                    else if($integrasi[1] == 'Topik Penelitian'){
                        $topPen++;
                    }
                } else {
                    if($row['bentukIntegrasi'] == 'Materi Pembelajaran') {
                        $matPem++;
                    }
                    else if($row['bentukIntegrasi'] == 'Studi Kasus') {
                        $studKas++;
                    }
                    else if($row['bentukIntegrasi'] == 'Topik Penelitian'){
                        $topPen++;
                    }
                }
            }
        ?>
        var persenMateriPembelajaran = <?php echo $matPem ?>;
        var persenStudiKasus = <?php echo $studKas ?>;
        var persenTopikPenelitian = <?php echo $topPen ?>;

        var data = [persenMateriPembelajaran, persenStudiKasus, persenTopikPenelitian];

        var colors = [
            window.chartColors.red,
            window.chartColors.green,
            window.chartColors.blue
        ];

        var myChart = {
            type: 'pie',
            data: {
                datasets: [{
                    data: data,
                    backgroundColor: colors
                }],
                labels: [
                    "Materi Pembelajaran",
                    "Studi Kasus",
                    "Topik Penelitian"
                ]
            },
            options: {
                title: {
                    display: true,
                    text: "Diagram Lingkaran Bentuk Integrasi"
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
=======
<head>
<script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light1", // "light2", "dark1", "dark2"
	animationEnabled: false, // change to true		
	title:{
		text: "Basic Column Chart"
	},
	data: [
	{
		// Change type to "bar", "area", "spline", "pie",etc.
		type: "column",
		dataPoints: [
			{ label: "apple",  y: 10  },
			{ label: "orange", y: 15  },
			{ label: "banana", y: 25  },
			{ label: "mango",  y: 30  },
			{ label: "grape",  y: 28  },
            { label: "melon",  y: 50}
		]
	}
	]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 75%; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
</body>
>>>>>>> timIntan
</html>