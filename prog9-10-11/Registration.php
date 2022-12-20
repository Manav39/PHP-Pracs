<html>
<body>
	<form method="POST">
		Sign Up<br>
		Username:<input type="Text" name="username"><br>
		Password:<input type="Password" name="password"><br>
		Age:<input type="Number" name="age"><br>
		Gender:<input type="Text" name="gender"><br>
		Phone Number:<input type="Number" name="phone"><br>

		<input type="Submit">
		<a href="LoginSys.php">To login click here.</a>
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
		$a=$_POST['age'];
		$ph=$_POST['phone'];
		$g=$_POST['gender'];
		$sql = "INSERT INTO register_table(username,password,age,gender,phone_number) VALUES ('$u', '$p','$a','$g','$ph')";  
		if(mysqli_query($conn, $sql))
		{  
 			echo "Record inserted successfully in regiter_table table";  
		}
		else
		{  
			echo "Could not insert record: ". mysqli_error($conn);  
		}
	?>	
</body>
</html>