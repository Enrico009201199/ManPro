<!doctype html>
<html>

<head>
    <title>Pie Chart</title>
    <script src="../../Chart.bundle.js"></script>
    <script src="../../utils.js"></script>
    <style>
    canvas{
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>
</head>

<body>
	<div style="width:50%;">
		<canvas id="canvas"></canvas>
	</div>
    <script>
		var dataKarya = [2, 5, 5, 1];
		
		var colors = [
						window.chartColors.red,
						window.chartColors.yellow,
						window.chartColors.green,
						window.chartColors.blue,
		];
		
		var myChart = {
			type: "pie",
			data: {
				datasets : [
					{/* objek 1*/
						backgroundColor: colors,
						data: dataKarya,
					}
				],
				labels: ["Hak Cipta (2017)", "Hak Cipta (2018)", "Hak Cipta (2019)", "Paten (2018)"]
			},
			options: {
				title: {
					display: true,
					text: "Jumlah Luaran Penelitian/PKM Lainnya Oleh DTPS"
				},
				responsive : true
			},
		};
		
		window.onload = function() {
			var ctx = document.getElementById("canvas").getContext("2d");
			new Chart(ctx, myChart);
		}
    </script>
</body>

</html>
