<?php
include_once "config.php";


if (isset($_POST['partName'])) { // Fetching variables of the form which travels in URL
    $partName = $_POST['partName'];
    $partDesc = $_POST['partDesc'];
    $manufacturerName = $_POST['manufacturerName'];
    $barcode = $_POST['barcode'];
    $price = $_POST['price'];
    //Insert Query of SQL
    $stmt = "insert into `parts` (`partName`, `partDesc`, `manufacturerName`, `price`,`barcode`) values ('$partName', '$partDesc', '$manufacturerName', '$price','$barcode')";
//echo$stmt;
    $result = mysqli_query($link, $stmt);
    if (!$result) {
        echo "<script type='text/javascript'>alert('Query is wrong')</script>";
    } else {
        echo "<script type='text/javascript'>alert('Success')</script>";
        echo "Records inserted" . mysqli_affected_rows($link);
    }
}


?>