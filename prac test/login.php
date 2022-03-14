<?php
    session_start();
    include 'connection.php';
    
    if (isset($_POST['submit'])) {
        if ($_POST['email'] == 'jasminisapara@gmail.com' && $_POST['password'] == 'jd90@@') {
          echo "<script>alert('You Have in admin')</script>";
          header('location:display.php');
        } else {
          $email = $_POST['email'];
          $password = $_POST['password'];
      
          $q = "select email,password from register where (email='$email' AND password='$password')";
      
      
          $result = mysqli_query($conn, $q);
      
          if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('You Have Successfully Logged in')</script>";
            header("location:dashboard.php");
          } else {
            echo "<script>alert('You Have Entered Incorrect Password')</script>";
            //header('location:../View/login.html');
          }
        }
      }

?>
<!DOCTYPE html>
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
                    <h1 class="text-white text-center">USER LOGIN</h1>
                </div><br>
                
                <label>Username</label>
                <input type="text"  name="email" class="form-control" ><br>

                

                <label>Password</label>
                <input type="password" name="password" class="form-control"  ><br>

               


                <button class="btn btn-success" name="submit">SUBMIT</button><br>
                <a align="center" href="forgot.php">Forgot Password?</a>
                <a align="center" href="Registration.php">Don't Have A Acoount?Sign Up</a>
                <!-- <?php
                 //echo "<p align=center><b>Copyright &copy; 2020-" . date("Y") . " By JASMIN ISAPARA</b></p>";
                ?> -->
            </div>
        </form>

    </div>
</body>
</html>