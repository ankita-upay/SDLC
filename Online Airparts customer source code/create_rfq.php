<?php
include('Config.php');
?>

<!DOCTYPE html >
<html>
<head>
    <h2> Sisgrammers RFQ System</h2>
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

    <h3>Create New RFQ</h3>

    <script>

        function showUser(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "fetch_data.php?q=" + str, true);
                xmlhttp.send(); mn
            }
        }


    </script>

</head>
<body>

<form>
<fieldset>
    <label>Part Name</label>
    <select name="PartName" onchange="showUser(this.value)">
        <option>Select Part</option>
        <?php
        $query = 'select distinct(partName) partName,partNumber,partDesc from parts';
        $result = mysqli_query($link, $query);
        $count = mysqli_num_rows($result);
        while ($row = $result->fetch_assoc()) {
            echo "<option >" . $row['partName'] . "</option>";
        }
        ?>
    </select>

</fieldset>
</form>

<div id="txtHint"><b></b></div>

</html>