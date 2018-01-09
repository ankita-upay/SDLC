<?php
include('config.php');

?>
<html>
<head><h1>Sisgrammers</h1>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title> Aircraft Parts RFQ System</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <p id="demo"></p>
    <title> Aircraft Parts RFQ System</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <p id="demo"></p>

    <script>
        var d = new Date();
        document.getElementById("demo").innerHTML = d.toDateString();
    </script>

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
                xmlhttp.open("GET", "fetch_data_part.php?q=" + str, true);
                xmlhttp.send();
            }
        }


    </script>
</head>

<body>

<h3> Update Existing Part </h3>
<form>
<fieldset>
    <label>Select Part Name</label>
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