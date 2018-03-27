<html>
<head>
    <title> Code 25 </title>
</head>
<body>
<?php
echo "<h2>Code 25 </h2>";
$n=5;
for($a=1; $a<=$n; $a++)
{
    for($b=1; $b<=$a; $b++)
    {
        echo ' * ';
    }
    echo "<br>";
}
for($a=$n; $a>=1; $a--)
{
    for($b=1; $b<=$a; $b++)
    {
        echo ' * ';
    }
    echo "<br>";
}
?>
</body>
</html>