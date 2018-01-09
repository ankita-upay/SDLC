<?php
include('Config.php');
?>
<?php
session_start();
// get the q parameter from URL


$query = "SELECT  `customer`.`Customer_ID`, `customer`.`Customer_Name`,`customer`. `Company_city`,`customer`. `Company_state`,
`customer`. `Company_zipcode`,`customer`. `email`,`customer`. `phone`,
`rfq_lines`.`Header_ID`,`rfq_lines`.`partNumber`, `rfq_lines`.`partName`, `rfq_lines`.`partDesc`, `rfq_lines`.`Required_Date`, 
`rfq_lines`.`Quantity`,
 `rfq_lines`.`Unit_Price`,`rfq_header`.`STATUS`, `rfq_header`.`Quote_Type`, `rfq_header`.`Customer_ID`, `rfq_header`.`Customer_Name`,
 `parts`.`price`, `parts`.`manufacturerName`, `parts`.`barcode`
  FROM `rfq_lines`,`rfq_header`,`parts` ,`customer` 
  where `rfq_lines`.`Header_ID`=`rfq_header`.`Header_ID` 
  and `rfq_lines`.`partNumber`=`parts`.`partNumber`
  and `rfq_header`.`Customer_ID`=`customer`.`Customer_ID`";
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
    $customerName = $row['Customer_ID'];
    $customerName = $row['Company_city'];
    $customerName = $row['Company_state'];
    $customerName = $row['Company_zipcode'];
    $customerName = $row['phone'];
    $customerName = $row['email'];

    $return =
        "<fieldset>" .
        "<table width = '200px' border='3'><tr>" .
        "<th width='50px'>" . "PartName" . "</th>" .
        "<th width='50px'>" . "partNumber" . "</th>" .
        "<th width='50px'>" . "partDesc" . "</th>" .
        "<th width='50px'>" . "manufacturerName" . "</th>" .
        "<th width='50px'>" . "barcode" . "</th>" .
        "<th width='50px'>" . "price" . "</th>" .
        "<th width='50px'>" . "Header_ID" . "</th>" .
        "<th width='50px'>" . "Customer Name" . "</th>" .
        "<th width='50px'>" . "Customer ID" . "</th>" .
        "<th width='50px'>" . "City" . "</th>" .
        "<th width='50px'>" . "State" . "</th>" .
        "<th width='50px'>" . "Zip-Code" . "</th>" .
        "<th width='50px'>" . "Phone" . "</th>" .
        "<th width='50px'>" . "Email" . "</th>" .
        "<th width='50px'>" . "Required_Date" . "</th>" .
        "<th width='50px'>" . "Quantity" . "</th>" .
        "<th width='50px'>" . "STATUS" . "</th>" .
        "<th width='50px'>" . "Unit Price" . "</th></tr>" .
        "<tr><td>" . $row['partName'] . "</td>" .
        "<td>" . $row['partNumber'] . "</td>" .
        "<td>" . $partDesc = $row['partDesc'] . "</td>" .
            "<td>" . $row['manufacturerName'] . "</td>" .
            "<td>" . $row['barcode'] . "</td>" .
            "<td>" . $row['price'] . "</td>" .
            "<td>" . $row['Header_ID'] . "</td>" .
            "<td>" . $row['Customer_Name'] . "</td>" .
            "<td>" . $row['Customer_ID'] . "</td>" .
            "<td>" . $row['Company_city'] . "</td>" .
            "<td>" . $row['Company_state'] . "</td>" .
            "<td>" . $row['Company_zipcode'] . "</td>" .
            "<td>" . $row['phone'] . "</td>" .
            "<td>" . $row['email'] . "</td>" .
            "<td>" . $row['Required_Date'] . "</td>" .
            "<td>" . $row['Quantity'] . "</td>" .
            "<td>" . $row['STATUS'] . "</td>" .
            "<td>" . $row['Unit_Price'] . "</td>" .
            "</tr></table>" .
            "</fieldset>";
    echo $return;


}
//header('Location: update_part.php');
//exit();
?>


