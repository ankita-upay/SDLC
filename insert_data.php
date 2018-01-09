<?php
include 'config.php';

$quantity = $_POST['quantity'];
$unitprice = $_POST['unitprice'];
$requireddate = $_POST['requireddate'];
$partNumber = $_POST['partNumber'];
//$partName = $_POST['partName'];
$partDesc = $_POST['partDesc'];
$manufacturerName = $_POST['manufacturerName'];
$barcode = $_POST['barcode'];
$price = $_POST['price'];
$status = "created";



$stmt = "insert into `rfq_header` (`quantity`,`STATUS`,`Required_Date`) 
                         values ('$quantity', '$status','$requireddate')";
//echo $stmt;
$result = mysqli_query($link, $stmt);

$st="select max(`Header_ID`) as Header_ID from rfq_header LIMIT 1";

$result2=mysqli_query($link, $st);
while ($row = $result2->fetch_assoc()) {
    $Header_ID = $row['Header_ID'];
    //echo $row['Header_ID'];
}


    $sql_1 = "insert into `rfq_lines` (`Header_ID`,`partNumber`, `partDesc`,`Required_Date`,`Quantity`,`Unit_Price`) 
                        values ('$Header_ID','$partNumber','$partDesc','$requireddate','$quantity','$unitprice')";




$result1 = mysqli_query($link, $sql_1);
if (!$result1) {
    echo "<script type='text/javascript'>alert('RFQ Created ERROR')</script>";
}
else{
    echo "<script type='text/javascript'>alert('RFQ Created Successfully')</script>";
    echo "Records inserted" . mysqli_affected_rows($link);
}



?>


