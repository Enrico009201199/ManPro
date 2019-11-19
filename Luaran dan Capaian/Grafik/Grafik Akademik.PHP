<!doctype html>
<html>

<head>
    <title>Bar Chart</title>
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
		var data = [3, 2, 6, 12, 1];
		
		var myChart = {
			type: "bar",
			data: {
				datasets : [
					{/* objek 1*/
						label: "Jumlah Prestasi Mahasiswa",
						data: data,
					}
				],
				labels: ["2015", "2016", "2017", "2018", "2019"]
			},
			options: {
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: "Tahun"
						}
					}],
					yAxes : [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: "Jumlah Prestasi"
						}
					}],
				},
				title: {
					display: true,
					text: "Jumlah Prestasi Mahasiswa Tiap Tahun"
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
