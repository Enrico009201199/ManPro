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
                    <table class="table table-striped table-bordered " id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No </th>
                                <th>NPM</th>
                                <th>Nama</th>
                            </tr>
							<?php 
                    // total page yg tersedia
                    $number_f_pages = ceil($number_of_results/$results_per_page);
                    
                    // halaman page yg sedang aktif
                    if (!isset($_GET['page'])){
                        $page = 1;
                    } else{
                        $page = $_GET['page'];
                    }
                    
                    //Limit starting number for the results on the displaying page
                    $this_page_first_result = ($page-1)*$results_per_page;

                    //hasil dari database dan menampilkannya ke layar sesuai page
                    $query = "SELECT * FROM mahasiswa LIMIT " . $this_page_first_result . ',' .$results_per_page;
                    $result = mysqli_query($conn,$query);
                ?>
                        </thead>
                        <tbody>
                            <?php
							$no = 1;
                                while($rows = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                            ?>   
                            <tr>    
                                <td> <?php echo $no; $no ++;?> </td>
                                <td> <?php echo $rows['NPM']; ?> </td>
                                <td> <?php echo $rows['nama']; ?> </td>
                            </tr>
                            <?php
                                }
                            ?>
							<?php
                echo "Halaman: ";
                    for ($page=1 ; $page<=$number_f_pages; $page++){
                        echo '<a href="Kualitas Input.php?page=' . $page . '">' . $page . '</a> ';
                        
                        if($page<$number_f_pages)
                        echo '&nbsp';
                    }
                echo '<p>'
                ?>    
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
	</div>

    <div class="">
        <a href="Grafik/bar.html" target="_blank">Tampilkan Grafik Kualitas Input</a> 
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
