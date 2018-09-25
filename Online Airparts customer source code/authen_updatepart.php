<?php
include 'config.php';

$partDesc = $_POST['partDesc'];
$manufacturerName = $_POST['manufacturerName'];
$price = $_POST['price'];
$partNumber =$_POST['partNumber'];

$st1="Update `parts` set `partDesc`='$partDesc',`manufacturerName`='$manufacturerName',`price`='$price' 
where `partNumber`='$partNumber' ";
//echo $st1;
$result = mysqli_query($link, $st1);

if (!$result) {
    echo "<script type='text/javascript'>alert('Error in Updating Part')</script>";
}
else{
    echo "<script type='text/javascript'>alert('Sucessfully Updated Part')</script>";
    echo "Records inserted" . mysqli_affected_rows($link);
}
/*echo $partNumber;
echo $partname;
echo $partDesc;
echo $manufacturerName;
echo $price;*/


