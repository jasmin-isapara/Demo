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
                    <th>FIRSTNAME</th>
                    <th>LASTNAME</th>
                    <th>MOBILE_NO</th>
                    <th>DELETE</th>
                    <th>UPDATE</th>
                </tr>
                <p><a href="logout.php" onclick="preventBack()">Logout</a></p>
                <p><a href="add_data.php">Add New User</a></p>
                <script type = "text/javascript" >
                function preventBack(){window.history.forward();}
                setTimeout("preventBack()", 0);
                window.onunload=function(){null};
</script>


    <?php
        session_start();
        include 'connection.php';

         $q = "SELECT * FROM register";

          $query = mysqli_query($conn,$q);
          
          while($res = mysqli_fetch_array($query))
          {  
            
    ?>  
                
                <tr class="text-center">
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['fname'];  ?></td>
                    <td><?php echo $res['lname'];  ?></td>
                    <td><?php echo $res['phone'];  ?></td>

                    <td><button class ="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>"class="text-white">Delete </a></button></td>
                    <td><button class ="btn-primary btn"><a href="update.php?id=<?php echo $res['id']; ?>"class="text-white">Update </a></button></td>
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