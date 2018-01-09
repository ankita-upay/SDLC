<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><h1>Sisgrammers</h1>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title> Aircraft Parts RFQ System</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <p id="demo"></p>

    <script>
        var d = new Date();
        document.getElementById("demo").innerHTML = d.toDateString();
    </script>

</head>

<body>
<h3>Aircraft Parts RFQ System</h3>

<form >
    <fieldset>
        <legend align="center">Generate Sales Order Report</legend>
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>Type of Report</legend>
                        <input type="radio" name="reporttype" value="Detail"
                               onmouseup="onchange_handler(this, 'Detail')"> Detail<br>
                        <input type="radio" name="reporttype" value="Summary"
                               onmouseup="onchange_handler(this, 'Summary')"> Summary<br>
                    </fieldset>
                    <fieldset>
                        <legend>Sorting</legend>
                        <input type="radio" name="sorting" value="CustomerNumber"
                               onmouseup="onchange_handler(this, 'CustomerNumber')">
                       Customer Number<br>
                        <input type="radio" name="sorting" value="partNumber"
                               onmouseup="onchange_handler(this, 'partNumber')">
                        Part Number<br>
                        <input type="radio" name="sorting" value="rfqnumber"
                               onmouseup="onchange_handler(this, 'rfqnumber')"> RFQ Number<br>
                        <input type="radio" name="sorting" value="date" onmouseup="onchange_handler(this, 'date')"> Date<br>

                    </fieldset>
                </td>
                <td>
                    <fieldset>
                        <legend>Detail</legend>
                        <table>
                            <tr>
                                <td><input type="checkbox" name="partNumber" value="partNumber" checked>Part Number</td>
                                <td><input type="checkbox" name="partName" value="partName" checked> Part Name</td>
                                <td><input type="checkbox" name="partDesc" value="partDesc" checked>Part Description</td>
                                <td><input type="checkbox" name="manufacturerName" value="manufacturerName" checked>Manufacturer
                                    Name
                                </td>
                            <tr>
                                <td><input type="checkbox" name="barcode" value="barcode" checked>Barocode</td>
                                <td><input type="checkbox" name="price" value="price" checked>Price</td>
                                <td><input type="checkbox" name="Header_ID" value="Header_ID" checked>RFQ Number</td>
                                <td><input type="checkbox" name="Required_date" value="Required_date" checked>Required
                                    Date
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="Quantity" value="Quantity" checked>Quantity</td>
                                <td><input type="checkbox" name="STATUS" value="STATUS" checked>Status</td>
                                <td><input type="checkbox" name="quote_type" value="quote_type" checked>Quote Type</td>
                                <td><input type="checkbox" name="unitprice" value="unitprice" checked>Unit Price</td>

                            </tr>
                            <tr>
                                <td><input type="checkbox" name="Customer_ID" value="Customer_ID" checked>Customer ID</td>
                                <td><input type="checkbox" name="Customer_Name" value="Customer_Name" checked>Customer Name</td>
                                <td><input type="checkbox" name="Company_city" value="Company_city" checked>City</td>
                                <td><input type="checkbox" name="Company_state" value="Customer_state" checked>State</td>

                            </tr>
                            <tr>
                                <td><input type="checkbox" name="Company_zipcode" value="Company_zipcode" checked>Zip-Code</td>
                                <td><input type="checkbox" name="phone" value="phone" checked>Phone</td>
                                <td><input type="checkbox" name="email" value="email" checked>Email</td>



                            </tr>
                        </table>
                        <button onclick="myFunction()">Cancel</button>
                        <button type="submit" formaction="authernpart1.php">Generate Detailed Report</button>
                    </fieldset>
                    <fieldset>
                        <legend>Summary</legend>
                        <table>
                            <tr>
                                <td><input type="checkbox" name="partNumber" value="partNumber" checked>Part Number</td>
                                <td><input type="checkbox" name="partName" value="partName" checked> Part Name</td>
                                <td><input type="checkbox" name="Customer_Name" value="Customer_Name" checked>Customer
                                    Name
                                </td>
                                <td><input type="checkbox" name="Company_city" value="Company_city" checked>City</td>

                            <tr>
                                <td><input type="checkbox" name="email" value="email" checked>Email</td>
                                <td><input type="checkbox" name="Phone" value="Phone" checked>Phone</td>
                                <td><input type="checkbox" name="Header_ID" value="Header_ID" checked>RFQ Number</td>
                                <td><input type="checkbox" name="price" value="price" checked>Price</td>

                            </tr>
                            <tr>
                                <td><input type="checkbox" name="Required_date" value="Required_date" checked>Required
                                    Date
                                </td>
                                <td><input type="checkbox" name="Quantity" value="Quantity" checked>Quantity</td>
                                <td><input type="checkbox" name="STATUS" value="STATUS" checked>Status</td>
                            </tr>
                        </table>
                        <button onclick="myFunction()">Cancel</button>
                        <button type="submit" formaction="authenpart.php">Generate Summary Report</button>

                    </fieldset>
                </td>
                <td>
                    <fieldset>
                        <legend>Layout</legend>
                        <input type="radio" name="layout" value="portrait" onmouseup="onchange_handler(this, 'Detail')">
                        Portrait<br>
                        <input type="radio" name="layout" value="landscape"
                               onmouseup="onchange_handler(this, 'Summary')"> Landscape<br>

                    </fieldset>
                    <fieldset>
                        <legend>Sorting</legend>
                        <input type="radio" name="papersize" value="A4" onmouseup="onchange_handler(this, 'A4')">
                        A4<br>
                        <input type="radio" name="papersize" value="A3" onmouseup="onchange_handler(this, 'A3')"> A3<br>
                        <input type="radio" name="papersize" value="A1" onmouseup="onchange_handler(this, 'A1')"> A1<br>

                    </fieldset>
                </td>
                </td>
            </tr>
        </table>

    </fieldset>
</form>

</body>
</html>

