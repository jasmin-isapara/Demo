<?php
    include 'connection.php';

    $id = $_GET['ID'];

    $q= " DELETE FROM data WHERE ID = $id ";

    mysqli_query($conn,$q);

    header('location:display.php');
?>