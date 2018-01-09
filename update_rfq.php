<?php
include('config.php');

?>
<html>
<head><h1>Sisgrammers</h1>


    <title> Aircraft Parts RFQ System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
                xmlhttp.open("GET", "fetch_rfq.php?q=" + str, true);
                xmlhttp.send();
            }
        }


    </script>
</head>

<body>

<h3> Update Existing RFQ </h3>
<form>
<fieldset>
    <label>Select RFQ Number</label>
    <select name="Header_ID" onchange="showUser(this.value)">
        <option>Select RFQ</option>
        <?php
        $query = 'select h.Header_ID Header_ID from rfq_header h, rfq_lines l where h.Header_ID=l.Header_ID';
        $result = mysqli_query($link, $query);
        $count = mysqli_num_rows($result);
        while ($row = $result->fetch_assoc()) {
            echo "<option >" . $row['Header_ID'] . "</option>";
        }
        ?>
    </select>

</fieldset>
</form>

<div id="txtHint"><b></b></div>

</html>