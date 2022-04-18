<?php
require 'connection.php';

session_start();

$error  = '';

if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(trim($username)!=""and trim($password)!= "")
    {
        $username=stripcslashes($username);
        $password=stripcslashes($password);
        $username=strip_tags($_POST["username"]);
        $password=strip_tags($_POST["password"]);
        
        $username= mysqli_real_escape_string($conn,$username);
        $password= mysqli_real_escape_string($conn,$password);

        $query = mysqli_query($conn,"SELECT * FROM login WHERE 
        username='$username' AND password ='$password'");

        $numrows= mysqli_num_rows($query);
        if($numrows >0)
        {
            $_SESSION["username"]= $username; 

            $error = "<div class='alert alert-success text-center' role='alert'>Login is Successfull.</div>";
        }
        else
        {
            $error = "<div class='alert alert-danger text-center' role='alert'>Username/Password is incorrect.</div>";
        }
           
    }
}
?>
