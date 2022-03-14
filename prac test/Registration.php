<?php
    include 'connection.php';
 
    if(isset($_POST['submit']))
    {   
 
        if(isset($_POST['submit']))
        {   
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $mobile_No = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];
           

            
            
            $q = "INSERT INTO `register` (`id`, `fname`, `lname`, `phone`, `email`, `password`) VALUES (NULL, '$firstname', '$lastname', '$mobile_No','$email', '$password')";
           
            $query = mysqli_query($conn,$q);
            //header('location:display.php');
           

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
        <form method="post" action="#">
            <br><br><div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">REGISTRATION</h1>
                </div><br>
                
                <label>Firstname</label>
                <input type="text" name="fname" id="fname" class="form-control" ><br>

                <labe>Lastname</labe></label>
                <input type="text" name="lname" id="lname" class="form-control"  ><br>
                
                <label>Mobile_No</label>
                <input type="text" name="phone" id="phone" class="form-control"  ><br>

                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control"  ><br>

                <label>Password</label>
                <input type="password" name="password" id="pass" class="form-control"  ><br>

               


                <button class="btn btn-success" type="submit" name="submit" onclick="validation()" >SUBMIT</button><br>
                <p align="center"><b><i>Already Have An Account?</i></b></p><a href='login.php' align="center">Click Here</a>


                <!-- <?php
                 //echo "<p align=center><b>Copyright &copy; 2020-" . date("Y") . " By JASMIN ISAPARA</b></p>";
                ?> -->
            </div>
        </form>
        <script>
            function validation()
            {
                var fn = document.getElementById("fname");

                 if (fn.value == null || fname.value.match(/^ *$/)) 
                 {
                     alert("Enter Valid Firstname");
                     return false;
                 }


                var ln = document.getElementById("lname");
                if (ln.value == null || lname.value.match(/^ *$/)) 
                {
                    alert("Enter valid Lastname");
                    return false;
                }


                var pn = document.getElementById("phone");
                var phoneno = /^\d{10}$/;
                if(!pn.value.match(phoneno))
                {
                 alert("Enter valid Phone Number");
                 return false;
                }


                var em = document.getElementById("email");
                if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value))) 
                {
                    alert("You have entered an invalid email address!")
                    return (false)
                }

                var pass = document.getElementById("pass");
                var passw=  /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
                if(!pass.value.match(passw)) 
                { 
                    alert('password should contain atleast one number and one special character')
                    return false;
                }

            }
        </script>

    </div>
</body>
</html>