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
<h2>Hello Manager</h2>


<div class="tab" style="background:#22daff">



    <button class="tablinks" onclick="openCreateCustomer(event, 'Create Customer')">Create Customer</button>
    <button class="tablinks" onclick="openUpdateCustomer(event, 'Update Customer')">Update Customer</button>
    <button class="tablinks" onclick="openCreateItem(event, 'Create Item')">Create Part</button>
    <button class="tablinks" onclick="openUpdateItem(event, 'Update Item')">Update Part</button>

    <button class="tablinks" onclick="openGenerateRFQReport(event, 'Create RFQ Report')">RFQ Report</button>
    <button class="tablinks" onclick="openGenerateSalesReport(event, 'Create Sales Report')">Sales Order Report</button>
    <button class="tablinks" onclick="openMain_Page(event, 'Main Page')">Main Page</button>

    <button class="tablinks" onclick="openabout_Us(event, 'About us')">About us</button>

</div>

<div id="Create Customer" class="tabcontent">
    <h3>Create Customer</h3>
    <p>Create Customer</p>
</div>

<div id="Update Customer" class="tabcontent">
    <h3>Update Customer</h3>
    <p>Update Customer</p>
</div>
<div id="Create Item" class="tabcontent">
    <h3>Create Item</h3>
    <p>Create Item</p>
</div>
<div id="Update Item" class="tabcontent">
    <h3>Update Item</h3>
    <p>Update Item</p>
</div>


<div id="Create RFQ Report" class="tabcontent">
    <h3>Create RFQ Report</h3>
    <p>Create RFQ Report</p>
</div>

<div id="Create Sales Report" class="tabcontent">
    <h3>Create Sales Report</h3>
    <p>Create Sales Report</p>
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
    function openCreateCustomer(event, occ) {
        window.location.href ="create_customer.php";
    }
    function openUpdateCustomer(event, ouc) {
        window.location.href ="update_customer.php";
    }
    function openCreateItem(event, oci) {
        window.location.href ="createpart.php";
    }
    function openUpdateItem(event, oui) {
        window.location.href ="update_part.php";
    }


    function openMain_Page(event, ol) {
        window.location.href = "Main_Page.php";
    }

    function openabout_Us(event, oau) {
        window.location.href = "aboutus.php";
    }

    function openGenerateRFQReport(event, ogr) {
        window.location.href = "generaterfq.php";
    }

    function openGenerateSalesReport(event, ogr) {
        window.location.href = "generatesale.php";
    }



</script>


</body>
</html>