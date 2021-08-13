<?php
    $link = mysqli_connect("localhost","root","");
    mysqli_select_db($link, "websiteshop");
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }
    $sql = "DELETE FROM products WHERE id = '$id'";
    $qr = mysqli_query($link, $sql);
    if ($qr) {
        header("location: view_product.php");
    }
    else {
        echo ('Thất bại');
    }

?>