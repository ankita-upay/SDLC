<?php
include('Config.php');
?>
<?php
session_start();
// get the q parameter from URL
$q = $_REQUEST["q"];

$query = "select partNumber,partDesc,price, manufacturerName,barcode from parts where partName='$q'";
$result = mysqli_query($link, $query);
$count = mysqli_num_rows($result);
while ($row = $result->fetch_assoc()) {
    $_SESSION = $row['partNumber'];
    $partNumber = $row['partNumber'];
    $partDesc = $row['partDesc'];
    $manufacturerName = $row['manufacturerName'];
    $barcode = $row['barcode'];
    $price = $row['price'];
   /* echo $row['partNumber'];
    echo $row['partDesc'];
    echo $row['manufacturerName'];
    echo $row['barcode'];*/


}
//header('Location: update_part.php');
//exit();
?>
<html>
<body>
<form action="insert_data.php" method="post">
<fieldset>
    <table>
        <tr>
            <td>Part Number*:</td>
            <td>
                <input type="text" name="partNumber" id="partNumber" value="<?php echo $partNumber ?>" />
            </td>
        <tr>
            <td>Part Description*:</td>
            <td>
                <input type="text" name="partDesc" id="partDesc" value="<?php echo $partDesc ?>" />
            </td>
        </tr>
        <tr>
            <td>Manufacturer Name*:</td>
            <td>
                <input type="text" name="manufacturerName" id="manufacturerName" value="<?php echo $manufacturerName ?>"  disabled="disabled"/>
            </td>
        </tr>
        <tr>
            <td>Price*:</td>
            <td>
                <input type="text" name="price" id="price" value="<?php echo $price ?>"  disabled="disabled"/>
            </td>
        </tr>
        <tr>
            <td>Barcode*:</td>

            <td>
                <input type="text" name="barcode" id="barcode" value="<?php echo $barcode ?>" readonly disabled="disabled"/>
            </td>
        </tr>
        <tr>
            <td>Quantity*:
            </td>
            <td>
                <input type="text" name="quantity" id="quantity" />
            </td>
        </tr>
        <tr>
            <td>Required Date*:
            </td>
            <td>
                <input type="date" name="requireddate" id="requireddate" />
            </td>
        </tr>
        <tr>
            <td>Unit Price*:
            </td>
            <td>
                <input type="text" name="unitprice" id="unitprice" />
            </td>
        </tr>
    </table>



    <button type="submit" name="cancel">Cancel</button>
        <button type="submit" name="save">Create RFQ</button>

</fieldset>
</form>
</body>
</html>