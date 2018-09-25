<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><h1>Sisgrammers</h1>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title> Aircraft Parts RFQ System</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <p id="demo"></p>

    <script>
        var d = new Date();
        document.getElementById("demo").innerHTML = d.toDateString();
    </script>

</head>

<body >

<h3>Aircraft Parts RFQ System</h3>
<h2>Hello Customer</h2>


<div class="tab" style="background:#22daff">



    <button class="tablinks" onclick="openCreateRFQ(event, 'Create RFQ')">Create New RFQ</button>
    <button class="tablinks" onclick="openUpdateRFQ(event, 'Update RFQ')">Update Existing RFQ</button>
    <button class="tablinks" onclick="openSalesOrder(event, 'Sales Order')">Sales Order</button>
    <button class="tablinks" onclick="openUpdateSalesQuote(event, 'Create Sales Quote')">Create Sales Quote</button>
    <button class="tablinks" onclick="openMain_Page(event, 'Main Page')">Main Page</button>
    <button class="tablinks" onclick="openabout_Us(event, 'About us')">About us</button>

</div>

<div id="Create New RFQ" class="tabcontent">
    <h3>Create New RFQ</h3>
    <p>Create New RFQ</p>
</div>

<div id="Update Existing RFQ" class="tabcontent">
    <h3>Update Existing RFQ</h3>
    <p>Update Existing RFQ</p>
</div>
<div id="SalesOrder" class="tabcontent">
    <h3>SalesOrder</h3>
    <p>SalesOrder</p>
</div>
<div id="Create Sales Quote" class="tabcontent">
    <h3>Create Sales Quote</h3>
    <p>Create Sales Quote</p>
</div>

<div id="Main Page" class="tabcontent">
    <h3>Main Page</h3>
    <p>Main Page</p>
</div>

<div id="About us" class="tabcontent">
    <h3>About us</h3>
    <p>About us</p>
</div>

<script>
    function openCreateRFQ(event, occ) {
        window.location.href ="create_rfq.php";
    }
    function openUpdateRFQ(event, ouc) {
        window.location.href ="update_rfq.php";
    }
    function openSalesOrder(event, oci) {
        window.location.href ="SalesOrder.php";
    }
    function openUpdateSalesQuote(event, oui) {
        window.location.href ="update_sales_quote.php";
    }

    function openMain_Page(event, ol) {
        window.location.href = "Main_Page.php";
    }

    function openabout_Us(event, oau) {
        window.location.href = "aboutus.php";
    }
</script>


</body>
</html>