<?php
    $deleteID = $_POST['deleteID'];
    $con = mysqli_connect("localhost","root","","OnlineShop");
    $sql = "delete from product where ProductID = '$deleteID'";
    mysqli_query($con, $sql) or die("Product not added to database");
    header('Location: ../homepage/sell.php');
?>