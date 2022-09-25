<?php
    $mobile = $_POST['Username'];
    $password = $_POST['Password'];
    if($mobile == 'Admin' && $password == 'Cherry@123') {
        $cookie_name = "Stock";
        $cookie_value = "Admin";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        header("Location: ../Portal.php");
    }
    else {
        header("Location: ../index.php");
    }
?>