<?php
    include 'connection.php';
    $id=$_GET['ID'];
    $sel = "select * from data where ID=$id";
    $r=mysqli_query($conn,$sel);
    
    if(isset($_POST['submit']))
    {   
        $id= $_GET['ID'];
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        $q = "UPDATE data set ID=$id, Username='$Username', Password='$Password'  where ID=$id";

        $query = mysqli_query($conn,$q);

        header('location:display.php');
    }
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="col-lg-6 m-auto">
        <form method="post">
            <br><br><div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">UPDATE OPERATION</h1>
                </div><br>
                <?php
                    while($res=mysqli_fetch_assoc($r)){
                ?>
                <label>Username</label>

                <input type="text" name="Username" class="form-control" value="<?php echo $res["Username"] ?>"><br>
                
                <label>Password</label>
                <input type="password" name="Password" class="form-control" value="<?php echo $res["Password"] ?>"><br>
                <?php
                }
                ?>
                <button class="btn btn-success"type="submit" name="submit">SUBMIT</button><br>
                <?php
                 echo "<p align=center><b>Copyright &copy; 2020-" . date("Y") . " By JASMIN ISAPARA</b></p>";
                ?>
            </div>
           
        </form>
        
    </div>
</body>
</html>