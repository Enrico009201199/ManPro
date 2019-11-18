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
	<div style="width:100%;">
		<canvas id="canvas"></canvas><br><br><br><br><br><br>
		<canvas id="canvas2"></canvas>
	</div>
    <script>
		var dataUKPS = [554, 1903, 150, 9973, 1122, 146, 47, 165, 320, 140894];
		var dataPS = [7799, 1104, 89, 18, 59, 637, 2014, 0, 0, 0];
		var myChart = {
			type: "bar",
			data: {
				datasets : [
					{/* objek 1*/
						label: "Biaya UKPS",
						data: dataUKPS,
						borderWidth: 3,
					}],
				labels: ["Gaji Dosen", "Gaji Tenaga Kependidikan", "Operasional Pembelajaran", "Operasional Tidak Langsung", "Operasional Kemahasiswaan", "Penelitian", "PkM", "Investasi SDM", "Investasi Sarana", "Investasi Prasarana"]
			},
			options: {
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: "Jenis Biaya"
						}
					}],
					yAxes : [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: "Biaya (Dalam Jutaan)"
						}
					}],
				},
				title: {
					display: true,
					text: "Jumlah Biaya UKPS"
				},
				responsive : true
			},
		};
		
		var myChart2 = {
			type: "bar",
			data: {
				datasets : [
					{/* objek 1*/
						label: "Biaya Program Studi",
						data: dataPS,
						borderWidth: 3,
					}],
				labels: ["Gaji Dosen", "Gaji Tenaga Kependidikan", "Operasional Pembelajaran", "Operasional Tidak Langsung", "Operasional Kemahasiswaan", "Penelitian", "PkM", "Investasi SDM", "Investasi Sarana", "Investasi Prasarana"]
			},
			options: {
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: "Jenis Biaya"
						}
					}],
					yAxes : [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: "Biaya (Dalam Jutaan)"
						}
					}],
				},
				title: {
					display: true,
					text: "Jumlah Biaya Program Studi"
				},
				responsive : true
			},
		};
		
		window.onload = function() {
			var ctx = document.getElementById("canvas").getContext("2d");
			var ctx2 = document.getElementById("canvas2").getContext("2d");
			new Chart(ctx, myChart);
			new Chart(ctx2, myChart2);
		};
    </script>
</body>

</html>
