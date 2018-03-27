<html>
<head>
    <title> Code 12 </title>
</head>
<body>

<?php
echo "<h3>Code 12 </h3>";
echo "Associative array : Ascending order sort by value  "."<br>";
$array2=array("Jane Smith"=>"31","Jacob Smith"=>"41","William Smith"=>"39","Frodo Baggins"=>"40");
asort($array2);
foreach($array2 as $x=>$x_value)
{echo "Age of ".$x." is : ".$x_value."<br>";}
"<br><br>";

echo "Associative array : Ascending order sort by Key "."<br>";
$array3=array("Jane Smith"=>"31","Jacob Smith"=>"41","William Smith"=>"39","Frodo Baggins"=>"40");
ksort($array3);
foreach($array3 as $y=>$y_value)
{echo "Age of ".$y." is : ".$y_value."<br>";}
"<br><br>";

echo "Associative array : Descending order sorting by Value "."<br>";
$age=array("Jane Smith"=>"31","Jacob Smith"=>"41","William Smith"=>"39","Frodo Baggins"=>"40");
arsort($age);
foreach($age as $z=>$z_value)
{echo "Age of ".$z." is : ".$z_value."<br>";}
"<br><br>";

echo "Associative array : Descending order sorting by Key  "."<br>";
$array4=array("Jane Smith"=>"31","Jacob Smith"=>"41","William Smith"=>"39","Frodo Baggins"=>"40");
krsort($array4);
foreach($array4 as $a=>$a_value)
{echo "Age of ".$a." is : ".$a_value."<br>";}
"<br><br>";

?>
</body>
</html>
