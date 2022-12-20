<?php
$cars=array();
$cars['BMW']=array(
    "Name"=>"BMW",
    "Color"=>"Blue",
    "Seating Capacity"=>'4',
    "Fuel Type"=>'petrol',
);
$cars['Mercedes']=array(
    "Name"=>"Mercedes",
    "Color"=>"Green",
    "Seating Capacity"=>'4',
    "Fuel Type"=>'diesel',
);
$cars['Ferrari']=array(
    "Name"=>"Ferrari",
    "Color"=>"Red",
    "Seating Capacity"=>'2',
    "Fuel Type"=>'petrol',
);
$cars['Tesla']=array(
    "Name"=>"Tesla",
    "Color"=>"Black",
    "Seating Capacity"=>'2',
    "Fuel Type"=>'Electric',
);
foreach($cars as $k => $v)
{
    echo "<h1>$k</h1>";
    foreach($v as $k1 => $v1)
    {
        echo "$k1 => $v1 <br>";
    }
}
?>