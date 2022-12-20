<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
<center><h1>Login</h1></center>
    <center>
        <form method="POST">
            Enter Username : <input type="text" name="user" /><br><br>
            Enter Password : <input type="password" name="pass" ><br><br>
            <input type="submit" value="Login" name="submit">
            </form>
    </center>
	<?php
	$u=$_POST['user'];
	$p=$_POST['pass'];
	$conn=mysqli_connect('localhost','root','','practical');
	$sql = "SELECT * from validate where username = '$u' and password = '$p'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    if($count==1){
    	echo "<center>Login Successfully</center>";
    }
    else{
    	echo "<center>Login Failed</center>";
    }
	?>
</body>
</html>
