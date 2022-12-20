<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prog4</title>
</head>
<body>
    <form method="POST">
        Enter the String : <input type="text" name="s1"><br>
        <input type="checkbox" name="operate[]" value="A">Length of String<br>
        <input type="checkbox" name="operate[]" value="B">Ord of String<br>
        <input type="checkbox" name="operate[]" value="C">String in Upper Case<br>
        <input type="checkbox" name="operate[]" value="D">String in Lower Case<br>
        <input type="checkbox" name="operate[]" value="E">Reverse string<br>
        <input type="submit" value="submit" name="submit">
</form>
<?php
if(isset($_POST['submit']))
{
    $s1=$_POST['s1'];
    if(!empty($_POST['operate']))
    {
        foreach($_POST['operate'] as $value)
        {
            if($value=='A')
            {
                echo "Length of $s1 : ".strlen($s1).'<br>';
            }
            if($value=='B')
            {
                echo "Ord of $s1 : ".ord($s1).'<br>';
            }
            if($value=='C')
            {
                echo "UpperCase of $s1 : ".strtoupper($s1).'<br>';
            }
            if($value=='D')
            {
                echo "Lowercase of $s1 : ".strtolower($s1).'<br>';
            }
            if($value=='E')
            {
                echo "Reverse of $s1 : ".strrev($s1).'<br>';
            }
        }
    }
}
?>
</body>
</html>