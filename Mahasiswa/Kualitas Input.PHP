<html>
    <body>
        <?php 
            include "../Header/Header.php";
            include_once('connection.php');
            $query = "select * from mahasiswa";
            $result = mysqli_query($conn,$query);

           //jumlah per halaman yg diinginkan 
           $results_per_page = 50;
           $number_of_results = mysqli_num_rows($result);
     
        ?>


        <div class="">
            <h3>Kualitas Input Mahasiswa</h3>
            
            <div class="">
            <table>
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


                <?php
                echo "Halaman: ";
                    for ($page=1 ; $page<=$number_f_pages; $page++){
                        echo '<a href="Kualitas Input.php?page=' . $page . '">' . $page . '</a> ';
                        
                        if($page<$number_f_pages)
                        echo '&nbsp';
                    }
                echo '<p>'
                ?>            
            </table>

        
        </div>
        </div>
        <br>
        <div class="">
            <a href="Grafik/Grafik Kualitas Input.php" target="_blank">Tampilkan Grafik Kualitas Input</a> 
        </div>
    </body>
</html>