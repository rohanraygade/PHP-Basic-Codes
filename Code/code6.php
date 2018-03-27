<html>
<head>
    <title>Code 6 </title>
</head>
<body>
<?php
echo "<h3>Code 6 </h3>";
$original = array( '1','2','3','4','5','6','7','8','9' );
echo 'Original array : '."<br><br>";
foreach ($original as $a)
{echo "$a ";}
echo "<br><br>";
$inserted = '$';
for ($x=2; $x<10; $x=$x+3)
{
array_splice($original, $x, 0, $inserted);
}
echo " After inserting '$' the array is : ". "<br><br>";
foreach ($original as $a)
{echo "$a ";}
echo "<br><br>"
?>
</body>
</html>