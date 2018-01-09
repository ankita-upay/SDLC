<?php
include 'config.php';




$status=$_POST['STATUS'];
$partNumber = $_POST['partNumber'];
//$partName=$_POST['partName'];
$partDesc =$_POST['partDesc'];
$Unit_Price=$_POST['Unit_Price'];
$quantity=$_POST['quantity'];
$Required_Date=$_POST['Required_Date'];
$Header_ID = $_POST['Header_ID'];



$st1="Update `rfq_header` , `rfq_lines` set `rfq_header`.`quantity`='$quantity' , 
`rfq_lines`.`Quantity` ='$quantity' ,`rfq_header`.`Required_Date`='$Required_Date',
`rfq_lines`.`Required_Date`='$Required_Date',
`rfq_lines`.`Unit_Price`='$Unit_Price',`rfq_lines`.`partNumber`='$partNumber',`rfq_lines`.`partDesc`='$partDesc'
where `rfq_header`.`Header_ID`='$Header_ID' 
and `rfq_lines`.`Header_ID`=`rfq_header`.`Header_ID`";
echo $st1;
$result = mysqli_query($link, $st1);

if (!$result) {
    echo "<script type='text/javascript'>alert('Error in Updating RFQ')</script>";
}
else{
    echo "<script type='text/javascript'>alert('Sucessfully Updated RFQ')</script>";
    echo "Records updated" . mysqli_affected_rows($link);
}
/*echo $partNumber;
echo $partname;
echo $partDesc;
echo $manufacturerName;
echo $price;*/


