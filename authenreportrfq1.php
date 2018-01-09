<?php
include('Config.php');
?>
<?php
session_start();
// get the q parameter from URL


$query = "SELECT  `rfq_lines`.`Header_ID`,`rfq_lines`.`partNumber`, `rfq_lines`.`partName`, `rfq_lines`.`partDesc`, `rfq_lines`.`Required_Date`, 
`rfq_lines`.`Quantity`,
 `rfq_lines`.`Unit_Price`,`rfq_header`.`STATUS`, `rfq_header`.`Quote_Type`, `rfq_header`.`Customer_ID`, `rfq_header`.`Customer_Name`,
 `parts`.`price`, `parts`.`manufacturerName`, `parts`.`barcode`
  FROM `rfq_lines`,`rfq_header`,`parts` where `rfq_lines`.`Header_ID`=`rfq_header`.`Header_ID` and `rfq_lines`.`partNumber`=`parts`.`partNumber`";
$result = mysqli_query($link, $query);
$count = mysqli_num_rows($result);
while ($row = $result->fetch_assoc()) {
    $partNumber = $row['partNumber'];
    $partDesc = $row['partDesc'];
    $manufacturerName = $row['manufacturerName'];
    $barcode = $row['barcode'];
    $price = $row['price'];
    $Header_ID = $row['Header_ID'];
    $Required_Date = $row['Required_Date'];
    $quantity = $row['Quantity'];
    $status = $row['STATUS'];
    $partNumber = $row['partNumber'];
    $partDesc = $row['partDesc'];
    $Unit_Price = $row['Unit_Price'];
    $partName = $row['partName'];
    $customerName = $row['Customer_Name'];
    $return =

        "<table width = '200px' border='1'><tr>" .
        "<th width='50px'>" . "PartName" . "</th>" .
        "<th>" . "partNumber" . "</th>" .

        "<th width='50px'>" . "price" . "</th>" .
        "<th width='50px'>" . "Header_ID" . "</th>" .
        "<th width='50px'>" . "Customer Name" . "</th>" .
        "<th width='50px'>" . "Required_Date" . "</th>" .
        "<th width='50px'>" . "Quantity" . "</th>" .
        "<th width='50px'>" . "STATUS" . "</th>" .

        "<tr><td>" . $row['partName'] . "</td>" .
        "<td>" . $row['partNumber'] . "</td>" .

        "<td>" . $row['price'] . "</td>" .
        "<td>" . $row['Header_ID'] . "</td>" .
        "<td>" . $row['Customer_Name'] . "</td>" .
        "<td>" . $row['Required_Date'] . "</td>" .
        "<td>" . $row['Quantity'] . "</td>" .
        "<td>" . $row['STATUS'] . "</td>" .

        "</tr></table>";
    echo $return;


}
//header('Location: update_part.php');
//exit();
?>


