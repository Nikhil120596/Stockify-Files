<?php
$id = $_POST['id'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$priceperunit = $_POST['priceperunit'];
$total_price = $_POST['total_price'];
$expiration = $_POST['expiration'];
    include('_conn.php');
    $sql = "UPDATE `stock` SET `name`='$name',`quantity`='$quantity',`priceperunit`='$priceperunit',`expiration`='$expiration', `total price` = '$total_price' WHERE `id` = '$id'";
    if ($conn->query($sql) === TRUE) {
        header('Location: ../View Product.php?id='.$id);
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>