<html>
<head>
</head>
<body>
<?php
echo "<h2>Code 20 </h2>";
function roundout ($value, $places=0)
{
if ($places < 0) { $places = 0; }
$a= pow(10, $places);
return ($value >= 0 ? ceil($value * $a):floor($value * $a)) / $a;
}
echo roundout (78.78001, 2)."\n"."<br>";
echo roundout (8.131001, 2)."\n"."<br>";
echo roundout (0.586001, 4)."\n"."<br>";
echo roundout (-.125481, 3)."\n"."<br>";
echo roundout (-.125481);
?>
</body>
</html>