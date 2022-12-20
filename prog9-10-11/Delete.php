<html>
<body>
	<form method="POST">
		Delete<br>
		Username:<input type="Text" name="username"><br>
        Password:<input type="Password" name="password"><br>
		<input type="Submit">
	</form>
	<?php
		$host='localhost';
 		$user="root";
 		$pass="";
 		$conn=mysqli_connect($host,$user,$pass,'practicals');
 		if(! $conn)
 		{
 			die("Could not connect".mysqli_error());
 		}
 		echo "Connected successfully<br>";
		$u=$_POST['username'];
		$p=$_POST['password'];  
          
        $sql1="DELETE from register_table where username='$u' and password = '$p'";
        if(mysqli_query($conn, $sql1))
		{  
 			echo "Record deleted successfully from register_table table";  
		}
		else
		{  
			echo "Could not delete record: ". mysqli_error($conn);  
		}     
	?>

</body>
</html>