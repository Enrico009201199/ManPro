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
		var dataPenelitian = [2, 5, 5, 3];
		var myChart = {
			type: "bar",
			data: {
				datasets : [
					{/* objek 1*/
						label: "Biaya UKPS",
						data: dataPenelitian,
						borderWidth: 3,
					}],
				labels: ["2016", "2017", "2018", "2019"]
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
							labelString: "Jumlah Penelitian"
						}
					}],
				},
				title: {
					display: true,
					text: "Jumlah Penelitian Yang Melibatkan Mahasiswa"
				},
				responsive : true
			},
		};
		
		window.onload = function() {
			var ctx = document.getElementById("canvas").getContext("2d");
			new Chart(ctx, myChart);
		};
    </script>
</body>

</html>
