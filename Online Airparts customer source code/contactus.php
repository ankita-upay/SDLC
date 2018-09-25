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



<?php
$action="";
if ($action=="")    /* display the contact form */
{
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
        <fieldset>
        <input type="hidden" name="action" value="submit">
        Your name:<br>
        <input name="name" type="text" value="" size="30"/><br>
        Your email:<br>
        <input name="email" type="text" value="" size="30"/><br>
        Your message:<br>
        <textarea name="message" rows="7" cols="30"></textarea><br>
        <input type="submit" value="Send email"/>
        </fieldset>
    </form>
    <?php
}
else                /* send the submitted data */
{
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
    {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
    }
    else{
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        // mail("youremail@yoursite.com", $subject, $message, $from);
        echo "Email sent!";
    }
}
?>
</body>
</html>