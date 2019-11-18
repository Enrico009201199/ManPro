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
		var dataMahasiswa = [36, 11, 18, 33, 43, 34, 30, 26, 30];
		
		var myChart = {
			type: "bar",
			data: {
				datasets : [
					{/* objek 1*/
						label: "Jumlah Mahasiswa",
						data: dataMahasiswa,
						borderWidth: 1,
					}],
				labels: ["CEN", "CHW", "ELH", "GDK", "LCA", "MTA", "RDL", "TAB", "VSK"],
			},
			options: {
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: "Kode Dosen"
						}
					}],
					yAxes : [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: "Jumlah Mahasiswa Bimbingan"
						}
					}],
				},
				title: {
					display: true,
					text: "Jumlah Mahasiswa Yang Dibimbing Setiap Dosen"
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
