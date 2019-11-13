<!DOCTYPE html>
<html>
<head>
     <!-- TABLE STYLES-->
    <link href="css/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
    <?php
    include "../Header/Header.php";
    include_once('connection.php');
    $query = "select * from mahasiswa";
    $result = mysqli_query($conn,$query);
    ?>

	<div class="">
        <h3>Kualitas Input Mahasiswa</h3>
		<div class="">
			<div class="panel-body">
                <div class="table">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No </th>
                                <th>NPM</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            ?>   
                            <tr>    
                                <td> <?php echo $rows['No']; ?> </td>
                                <td> <?php echo $rows['NPM']; ?> </td>
                                <td> <?php echo $rows['Nama']; ?> </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
	</div>

    <div class="">
        <a href="Grafik/Grafik Kualitas Input.php" target="_blank">Tampilkan Grafik Kualitas Input</a> 
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
