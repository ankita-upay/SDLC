<?php
include('Config.php');
?>
<?php
session_start();
// get the q parameter from URL
$q = $_REQUEST["q"];

$query = "select h.Header_ID,h.Required_Date,h.Quantity quantity,h.STATUS,l.Unit_Price,l.partNumber,p.partName,l.partDesc 
from rfq_header h, rfq_lines l ,parts p where h.Header_ID=l.Header_ID and l.partNumber=p.partNumber and h.Header_ID='$q'";
//echo $query;
$result = mysqli_query($link, $query);
$count = mysqli_num_rows($result);
while ($row = $result->fetch_assoc()) {
    $_SESSION = $row['Header_ID'];
    $Header_ID = $row['Header_ID'];
    $Required_Date = $row['Required_Date'];
    $quantity = $row['quantity'];
    $status=$row['STATUS'];
    $partNumber = $row['partNumber'];
    $partDesc = $row['partDesc'];
    $Unit_Price=$row['Unit_Price'];
    $partName=$row['partName'];
?>
<html>
<head></head>
<body>
<form action="authen_update_rfq.php" method="post">
    <fieldset>
        <table>
            <tr>
                <td>RFQ Number:</td>
                <td>
                    <input type="text" name="Header_ID" id="Header_ID" value="<?php echo $Header_ID ?>" readonly disabled="disabled"/>
                </td>
            </tr>
            <tr>
                <td>Part Number:</td>
                <td>
                    <input type="text" name="partNumber" id="partNumber" value="<?php echo $partNumber ?>" readonly disabled="disabled"/>
                </td>
            </tr>
            <tr>
                <td>Part Name:</td>
                <td>
                    <input type="text" name="partName" id="partName" value="<?php echo $partName ?>" readonly disabled="disabled"/>
                </td>
            </tr>
            <tr>
                <td>Part Description:</td>
                <td>
                    <input type="text" name="partDesc" id="partDesc" value="<?php echo $partDesc ?>" readonly disabled="disabled"/>
                </td>
            </tr>
            <tr>
            <tr>
                <td>Quantity*:</td>
                <td>
                    <input type="text" name="quantity" id="quantity" value="<?php echo $quantity ?>"/>
                </td>
            <tr>
                <td>Required Date*:</td>
                <td>
                    <input type="text" name="Required_Date" id="Required_Date" value="<?php echo $Required_Date ?>"/>
                </td>
            </tr>
            <tr>
                <td>Unit Price:</td>
                <td>
                    <input type="text" name="Unit_Price" id="Unit_Price" value="<?php echo $Unit_Price ?>"/>
                </td>
            </tr>
            <tr>
                <td>Status:</td>
                <td>
                    <input type="text" name="STATUS" id="STATUS" value="<?php echo $status ?>" readonly disabled="disabled"/>
                </td>
            </tr>

        </table>
        <fieldset>
            <legend>Additional Information</legend>
            <label>Comments</label>
            <input type="text" name="comments" id="comments" value=""/>
        </fieldset>
        <br><button onclick="myFunction()">Cancel</button>
        <input type="submit" value="Update RFQ" >




</form>
<script>
    function myFunction() {
        confirm("Are you sure you want to cancel?");
    }
</script>
</body>
</html>