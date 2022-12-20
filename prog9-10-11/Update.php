<html>
<body>
	<form method="POST">
		Update<br>
		Username:<input type="Text" name="username"><br>
		Initial Password:<input type="Password" name="in_password"><br>
        New Password:<input type="Password" name="password"><br>
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
        $ip=$_POST['in_password'];
		$p=$_POST['password'];  
    
        $sql1="UPDATE register_table set password='$p' where username='$u'";
        if(mysqli_query($conn, $sql1))
		{  
 			echo "Record updated successfully in register_table table";  
		}
		else
		{  
			echo "Could not update record: ". mysqli_error($conn);  
		}     
	?>

</body>
</html>