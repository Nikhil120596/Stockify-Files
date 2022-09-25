<?php
    if(!isset($_GET['id'])){
        header('Location: ../Portal.php');
    }
    else {
        $id = $_GET['id'];
        include('_conn.php');
        $sql = "DELETE FROM `stock` WHERE `id` = '$id'";
        if ($conn->query($sql) === TRUE) {
            header('Location: ../Portal.php');
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>