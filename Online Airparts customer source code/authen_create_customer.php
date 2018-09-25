<?php include 'config.php';


// create a variable
$company_name=$_POST['company_name'];
$company_city=$_POST['company_city'];
$company_state=$_POST['company_state'];
$company_zipcode=$_POST['Zip-Code'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];
$quote_type=$_POST['Quote Type'];


$sql = " 
 INSERT INTO customer
 (company_name,company_city,company_state,company_zipcode,company_email,company_phone,company_quote_type)
				VALUES('$company_name,$company_city,$company_state,$company_zipcode,$email,$phone,$quote_type)";
if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " ;
}

?>