<html>
<head>
    <title> Code 9 </title>
</head>
<body>
<?php
echo "<h3>Code 9 </h3>";
$a=range(14,86);
shuffle($a);
for ($b=0; $b< 10; $b++)
{
echo $a[$b].' ';
}
"<br><br>";
?>
</body>
</html>