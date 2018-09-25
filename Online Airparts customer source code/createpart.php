
<!DOCTYPE html >
<html>
<head>
    <title> Sisgrammers RFQ System</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title> Aircraft Parts RFQ System</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <p id="demo"></p>

    <script>
        var d = new Date();
        document.getElementById("demo").innerHTML = d.toDateString();
    </script>

</head>
<body id="body_bg">
<div <div align="left">

    <h3>Create New Part</h3>
<form action="authen_createpart.php" method="POST">
    <fieldset>
        <legend><h3><b>Part Details</h3></legend>
        <table>
            <tr>
                <td>Part Number*: </td>
                <td><input type="text" name="partNr" readonly disabled="disabled"></td>
            </tr>
            <tr>
                <td>Part Name*: </td>
                <td><input type="text" name="partName"></td>
            </tr>
            <tr>
                <td>Part Description*: </td>
                <td><input type="text" name="partDesc"></td>
            </tr>
            <tr>
                <td>Manufacturer Name*: </td>
                <td><input type="text" name="manufacturerName"></td>
            </tr>
            <tr>
                <td>Barcode: </td>
                <td><input type="text" name="barcode"></td>
            </tr>
            <tr>
                <td>Price: </td>
                <td><input type="text" name="price"></td>
            </tr>
        </table>
    </fieldset>

    <br><button onclick="myFunction()">Cancel</button>
    <input type="submit" value="Create Part" >
</form>

<script>
    function myFunction() {
        confirm("Are you sure you want to cancel?");
    }
</script>
</form>
</body>
</html>