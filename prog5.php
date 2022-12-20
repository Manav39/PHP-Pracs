<?php
class Personal {
    public $name;
    public $age;
    public $blood;
    public function DisplayPersonal(){
        $name="Manav";
        $age="13";
        $blood="B+";
        echo '<h2>Students Personal Information </h2><br>';
        echo "Name : $name <br>";
        echo "Age : $age<br>";
        echo "Blood Group : $blood<br>";
    }
}

trait Academic{
    public $marks;
    public $percentage;
    public $attendance;
    public function DisplayAcademic(){
        $marks='50';
        $percentage='75%';
        $attendance='96%';
        echo '<h2>Student Academic Information</h2><br>';
        echo "Marks : $marks<br>";
        echo "Percentage : $percentage<br>";
        echo "Overall Attendance : $attendance<br>";
    }
}
class Overall extends Personal{
    use Academic;
    public $college;
    public $dept;
    public function OverallInfo(){
        $college="Shri Bhagubhai Mafatlal Polytechnic<br>";
        $dept="CSE";
        echo "<h1>$college</h1><br>";
        echo "<h2>Department : $dept</h2><br>";
    }
}
$obj = new Overall();
$obj->OverallInfo();
$obj->DisplayPersonal();
$obj->DisplayAcademic();
?>