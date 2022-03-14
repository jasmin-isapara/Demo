<?php
    include 'connection.php';

    $id = $_GET['id'];

    $q= " DELETE FROM register WHERE id = $id ";

    mysqli_query($conn,$q);

    header('location:display.php');
?>