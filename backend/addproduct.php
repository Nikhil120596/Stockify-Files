<?php
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$priceperunit = $_POST['priceperunit'];
$total_price = $_POST['total_price'];
$dateadded = $_POST['dateadded'];
$timeadded = $_POST['timeadded'];
$expiration = $_POST['expiration'];
echo $quantity;
include('_conn.php');
$sql = "INSERT INTO `stock`(`id`, `name`, `quantity`, `priceperunit`, `total price`, `dateadded`, `timeadded`, `expiration`) VALUES ('','$name','$quantity','$priceperunit','$total_price','$dateadded','$timeadded','$expiration')";
if ($conn->query($sql) === TRUE) {
    header('Location: ../Add Product.php');
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>