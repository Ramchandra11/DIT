<?php 
session_start();
include("database.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $Gender=$_POST['gender'];
    $num=$_POST['number'];
    $address=$_POST['address'];
    $gmail=$_POST['mail'];
    $password=$_POST['pass'];
    if(!empty($gmail) && !empty($password)&& !is_numeric($gmail))
    {

$query="insert into lit(fname,lname,gender,cnum,address,email,pass) values('$firstname','$lastname','$Gender','$num','$address','$gmail','$password')";
   mysqli_query($con,$query);
   echo"<script type='text/javascript'> alert('Successfully Register')</script>";
    }
   else{
    echo"<script type='text/javascript'> alert('Please enter some valid infromation')</script>";

   } 
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Form login and Register</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="signup">
<h1> Sign Up</h1>

    
    <form method="POST">
<label>First Name</label>
<input type="text" name="fname" required>
<label>Last Name</label>
<input type="text" name="lname" required>
<label>Gender</label>
<input type="text" name="gender" required>
<label>Contact</label>
<input type="tel" name="number" required>
<label>Address</label>
<input type="text" name="address" required>
<label>Email</label>
<input type="email" name="mail" required>
<label>Password</label>
<input type="password" name="pass" required>
<input type="submit" name="" value="Submit">
    </form>

  <p>  <a href="">Term and condition</a> and <a href="">polity privacy</a>

<p>Already have an account <a href="login.php">Login Here</a> </p>
</div>
</body>
</html>