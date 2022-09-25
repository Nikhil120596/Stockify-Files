<?php
    setcookie("Stock", "", time() - 3600,'/');
    header("Location: ../index.php");
?>