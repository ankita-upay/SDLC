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


<div class="tab" style="background:#22daff">


    <button class="tablinks" onclick="openabout_Us(event, 'About us')">About us</button>
    <button class="tablinks" onclick="openTeam(event, 'Team')">Team</button>
    <button class="tablinks" onclick="openLogin(event, 'Login')">Login</button>
    <button class="tablinks" onclick="openContactUs(event, 'ContactUs')">Contact Us</button>

</div>

<div id="About us" class="tabcontent">
    <h3>About us</h3>
    <p>About us</p>
</div>

<div id="Team" class="tabcontent">
    <h3>Team</h3>
    <p>Team</p>
</div>

<div id="Login" class="tabcontent">
    <h3>Login</h3>
    <p>Login</p>
</div>

<div id="Contactus" class="tabcontent">
    <h3>Contact Us</h3>
    <p>Contact Us</p>
</div>


<script>
    function openabout_Us(event, oau) {
        window.location.href = "aboutus.php";
    }

    function openTeam(event, ot) {
        window.location.href = "team.php";
    }

    function openLogin(event, ol) {
        window.location.href = "login.php";
    }
    function openContactUs(event, ol) {
        window.location.href = "contactus.php";
    }


</script>

</body>
</html>