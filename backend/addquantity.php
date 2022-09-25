<?php
$id = $_POST['id'];
$qt = $_POST['qt'];
$ppu = $_POST['ppu'];
$oldqt = $_POST['oldqt'];
$orgqt = (int)$qt + (int)$oldqt;
$tp = $orgqt * $ppu;
    include('_conn.php');
    $sql = "UPDATE `stock` SET `quantity`='$orgqt', `total price` = '$tp' WHERE `id` = '$id'";
    if ($conn->query($sql) === TRUE) {
        header('Location: ../Portal.php');
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>