<?php
$student=array();
$student['Manav']=array(
    'Name'=>'Manav',
    'Roll No'=>'S139',
    'Dept'=>'CSE',
    'Age'=>'18',
    'Blood Group'=>"B+",
    'Marks'=>'50',
);
$student['Meet']=array(
    'Name'=>'Meet',
    'Roll No'=>'S141',
    'Dept'=>'CSE',
    'Age'=>'18',
    'Blood Group'=>"B+",
    'Marks'=>'50',
);
$student['Tanay']=array(
    'Name'=>'Tanay',
    'Roll No'=>'C137',
    'Dept'=>'IT',
    'Age'=>'18',
    'Blood Group'=>"B+",
    'Marks'=>'40',
);
foreach($student as $k => $v)
{
    echo "<h1>$k</h1>";
    foreach($v as $k1 => $v1)
    {
        echo "$k1 => $v1 <br>";
    }
}
?>
