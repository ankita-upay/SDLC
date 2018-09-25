<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/18/2017
 * Time: 5:19 PM
 */
require('Config.php');


// Do Something

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){

// Assigning POST values to variables.
    $username = $_POST['user_id'];
    $password = $_POST['user_pass'];
    $role=$_POST['user_role'];




    }

// CHECK FOR THE RECORD FROM TABLE
    $query = "SELECT * FROM `user` WHERE username='$username' and Password='$password' and Role='$role'";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);

    if (($count == 1) && ($role=='manager' ))
    {
        echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
            header( 'Location:manager_welcome.php' );
        }else if (($count == 1) && ($role=='customer'))
        {
            echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
            header( 'Location:customer_welcome.php' );
        }else
        {
            echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
        }


//echo "Invalid Login Credentials";

