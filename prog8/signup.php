<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <center><h1>SignUp</h1></center>
    <center>
        <form method="POST">
            Enter Username : <input type="text" name="user" /><br><br>
            Enter Password : <input type="password" name="pass" ><br><br>
            <input type="submit" value="SignUp" name="submit">
            </form>
    </center>
<?php
if(isset($_POST['submit']))
{
    $conn=mysqli_connect('localhost','root','','practical');
$user=$_POST['user'];
$pass=$_POST['pass'];
$sql="INSERT INTO validate values('$user','$pass')";
if(mysqli_query($conn,$sql))
{
   echo "<center>SignUp successfull</center>";
}
else{
    die('Connection interrupted'.mysqli_error($conn));
}
}
?><br>
<center>If you aldready have an account ? <a href="login.php">Login</a></center>
</body>
</html>