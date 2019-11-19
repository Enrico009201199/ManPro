<html>
	<head>
	<link href="css/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
	</head>
    <body>
		<?php 
			include "../Header/Header.php";
			include "connection.php";
			$query = "Select * From Kerjasama";
			$rst = sqlsrv_query($conn, $query);
		?>

        <div class="">
            <h3>Kerjasama</h3>
        </div>

		
        
		<div class="">
			<div class="panel-body">
                <div class="table">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Lembaga Mitra</th>
                                <th>Tingkat</th>
								<th>Judul Kegiatan Kerjasama</th>
								<th>Manfaat</th>
								<th>Waktu Mulai</th>
								<th>Waktu Berakhir</th>
								<th>Bukti Kerjasama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($rows = sqlsrv_fetch_array($rst, SQLSRV_FETCH_ASSOC)){
                            ?>   
                            <tr>    
                                <td> <?php echo $rows['No']; ?> </td>
                                <td> <?php echo $rows['LembagaMitra']; ?> </td>
                                <td> <?php echo $rows['Tingkat']; ?> </td>
								<td> <?php echo $rows['JudulKegiatanKerjaSama']; ?> </td>
								<td> <?php echo $rows['Manfaat']; ?> </td>
								<td>  
                                    <?php
                                        if($rows['WaktuMulai'] != null) {
                                            $date = $rows['WaktuMulai'];
                                            $result = $date->format('Y-m-d H:i:s');
                                            echo $result;
                                        } else {
                                            echo "";
                                        }
                                    ?>
                                </td>
								<td>  
                                    <?php
                                        if($rows['WaktuBerakhir'] != null) {
                                            $date = $rows['WaktuBerakhir'];
                                            $result2 = $date->format('Y-m-d H:i:s');
                                            echo $result2;
                                        } else {
                                            echo "";
                                        }
                                    ?>
                                </td>
								<td> <?php echo $rows['BuktiKerjaSama']; ?> </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
		
        <script src="js/jquery-1.10.2.js"></script>
     	 <!-- Bootstrap Js -->
   		<script src="js/bootstrap.min.js"></script>
   		<script src="js/jquery.dataTables.js"></script>
    	<script src="js/dataTables.bootstrap.js"></script>
    	<script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    	</script>
    </body>
</html>