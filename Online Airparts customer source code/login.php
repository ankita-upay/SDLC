

<!DOCTYPE html >
<html>
<head>
<title> Sisgrammers RFQ System</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body id="body_bg">
<div <div align="center">

<h3>LOGIN</h3>
    <form id="login-form" method="post" action="authen_login.php" >
        <fieldset>
        <div >
        <table border="0.5" >
            <tr>
                <td><label for="user_id">User Name</label></td>
                <td><input type="text" name="user_id" id="user_id"></td>
            </tr>
            <tr>
                <td><label for="user_pass">Password</label></td>
                <td><input type="password" name="user_pass" id="user_pass" required></input></td>
            </tr>

            <tr>
                <td><label for="user_role">Role</label></td>
                <td><input type="text" name="user_role" id="user_role" required></input></td>
            </tr>
        </table>
        </div>
        </fieldset>
        <div>
            <table>
            <tr>
                <input type="checkbox" checked="checked"> Remember me
                <td><input type="submit" value="Submit" />
                <td><input type="reset" value="Reset"/>

            </tr>
        </table>
        </div>
    </form>
		</div>
</body>
</html>