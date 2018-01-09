<!DOCTYPE html >
<html>
<head>
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

    <h3>Create Customer</h3>
<body>


<form method="post" action="create_customer_insert.php">
<fieldset>
    <table border="0.5" >
        <tr>
            <td>
    <label>Company Name :</label>
    <input type="text" name="Company_name  : " />
            </td></tr>
        <tr>
            <td>
    <label>City :</label>
    <input type="text" name="City      :" />
            </td></tr>
        <tr>
            <td>
    <label>State :</label>
    <input type="text" name="State      :" />
            </td></tr>
        <tr>
            <td>
    <label>Zip-Code :</label>
    <input type="text" name="Zip-Code" />
            </td></tr>
        <tr>
            <td>
    <label>Email :</label>
    <input type="text" name="Email" />
            </td></tr>
        <tr>
            <td>
    <label>Phone :</label>
    <input type="text" name="Phone" />
            </td></tr>
        <tr>
            <td>
    <label>Quote Type:</label>
                <select>
                    <option value="auto">Auto</option>
                    <option value="manual">Manual</option>

                </select>
            </td></tr>
        <tr>
            <td>
                <input type="submit" value="Cancel">
    <input type="submit" value="Create Customer">

            </td></tr>

    </table>
</fieldset>
</form>



</body>
</html>