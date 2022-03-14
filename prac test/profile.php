<?php
    
    include 'connection.php';

    $email = $_POST['email'];
   
    
    $q  = "SELECT * FROM register where email='{$email}'";
    $result = mysqli_query($conn, $q);

    if (mysqli_num_rows($result) > 0) {

    
        $row = mysqli_fetch_assoc($result);
        

$fname = $row["fname"];
//echo $fname;
// echo "Your Firstname Is: " .$fname;
// echo "<br>";
$lname = $row["lname"];
// echo "Your Lastname Is: ".$lname;
// echo "<br>";
$email = $row["email"];
// echo "Your Email Is: ".$email;echo "<br>";
$phone = $row["phone"];
// echo "Your Phone No Is: ".$phone;

//header("location:profile.php");
    }
    else{
        echo "<script>alert ('Data Not Found')</script>";

    }
?>
<html>
<head>

</head>
<body>
    <form method="post" action="#">
        <input type="text" name="email" placeholder="Enter Your Email">
        <button>submit</button>


    </form>
    <h1 align="center"><u>YOUR PERSONAL PROFILE</u></h1>
    <h3 align="center">Your Name:<?php echo $fname; ?></h3>
    <h3 align="center">Last Name:<?php echo $lname; ?></h3>
    <h3 align="center">Email:<?php echo $email; ?></h3>
    <h3 align="center">Your Mobile Number Is:<?php echo $phone; ?></h3>

    <!-- <button ><a  align="center" href="update.php">Update Your Profile</a></button> -->
</body>
</html>