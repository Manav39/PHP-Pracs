<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prog1</title>
</head>
<body>
    <form method="POST">
        Enter Number 1 <input type="number" name="n1"><br>
        Enter Number 2 <input type="number" name="n2"><br>
        <select type="text" name="operate">
            <option value="add" name="add">Add</option>
            <option value="sub" name="sub">Subtract</option>
            <option value="mul" name="mul">Multiply</option>
            <option value="div" name="div">Division</option>
        </select><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
<?php
if(isset($_POST['submit']))
{
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $operate=$_POST['operate'];
    $result=Calculate($n1,$n2,$operate);
    echo "Result of $operate : $result";
}
function Calculate($n1,$n2,$operate)
{
    if($operate=='add')
    {
        return $n1+$n2;
    }
    else if($operate=='mul')
    {
        return $n1*$n2;
    }
    else if($operate=='sub')
    {
        return $n1-$n2;
    }
    else if($operate=='div')
    {
        return $n1/$n2;
    }
}
?>
</body>
</html>