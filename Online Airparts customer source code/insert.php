<html>
<head>
    <title>Add Data</title>
</head>

<body>
<a href="index.php">Home</a> | <a href="view.php">View Products</a> | <a href="logout.php">Logout</a>
<br/><br/>

<form action="p1.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td>partName</td>
            <td><input type="text" name="partName"></td>
        </tr>
        <tr>
            <td>partDesc</td>
            <td><input type="text" name="partDesc"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>
</body>
</html>