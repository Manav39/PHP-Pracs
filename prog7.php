<html>
<body>
<form method="POST">    
name:<input type="text" name="name"><br>
pass: <input type="text" name="pass"><br>
<input type="submit" value="Create" name="create">
<input type="submit" value="Delete" name="del">
<input type="submit" value="Modify" name="mod">
<input type="submit" value="Retrieve" name="ret">
</form>
<?php
if(isset($_POST['ret'])) {
         
    if(isset($_COOKIE["name"])) {

        // Printing the cookie data
        echo "Name = ". $_COOKIE["name"]."<br/>";
        echo "Pass = ". $_COOKIE["pass"]."<br/>";
        
    }
    else
    {
        echo "<center><h4>Sorry can't retrieve..
           Your Cookies are deleted !!</h4></center>";
    }
}

if (isset($_POST['create']))
{setcookie("name",$_POST['name'],time()+3600,"/");
 setcookie("pass",$_POST['pass'],time()+3600,"/");
echo "cookie created";
}

if (isset($_POST['mod']))
{setcookie("name",$_POST['name'],time()+3600,"/");
 setcookie("pass",$_POST['pass'],time()+3600,"/");
echo "cookie modified";
}

if (isset($_POST['del']))
{setcookie("name",$_POST['name'],time()-3600,"/");
 setcookie("pass",$_POST['pass'],time()-3600,"/");
echo "deleted";
}
?>
</body>
</html>