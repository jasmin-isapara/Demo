<?php
    include 'connection.php';

    $email = $_POST['email'];
   
    
    $q  = "SELECT * FROM register where email='{$email}'";
    $result = mysqli_query($conn, $q);

    if (mysqli_num_rows($result) > 0) {

    
        $row = mysqli_fetch_assoc($result);
        

$fname = $row["fname"];
echo $fname;
// echo "Your Firstname Is: " .$fname;
// echo "<br>";
// $lname = $row["lname"];
// echo "Your Lastname Is: ".$lname;
// echo "<br>";
// $email = $row["email"];
// echo "Your Email Is: ".$email;echo "<br>";
// $phone = $row["phone"];
// echo "Your Phone No Is: ".$phone;

header("location:profile.php");
    }
    else{
        echo "<script>alert ('Data Not Found')</script>";

    }
?>