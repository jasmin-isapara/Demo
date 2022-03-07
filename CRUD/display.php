<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="col-lg-12"><br><br>
            <h1 class="text-dark  text-center">DISPLAY USER DATA</h1>
            <br>
            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>DELETE</th>
                    <th>UPDATE</th>
                </tr>

    <?php
         include 'connection.php';

         $q = "SELECT * FROM data";

          $query = mysqli_query($conn,$q);
          while($res = mysqli_fetch_array($query))
          {  
        
    ?>
                <tr class="text-center">
                    <td><?php echo $res['ID']; ?></td>
                    <td><?php echo $res['Username'];  ?></td>
                    <td><?php echo $res['Password'];  ?></td>
                    <td><button class ="btn-danger btn"> <a href="delete.php?ID=<?php echo $res['ID']; ?>"class="text-white">Delete </a></button></td>
                    <td><button class ="btn-primary btn"><a href="update.php?ID=<?php echo $res['ID']; ?>"class="text-white">Update </a></button></td>
                </tr>
        <?php
        }
        ?>
         
            </table>
            <?php
                 echo "<p align=center><b>Copyright &copy; 2020-" . date("Y") . " By JASMIN ISAPARA</b></p>";
                ?>
        </div>
    </div>
</body>
</html>