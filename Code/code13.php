<html>
<head>
    <title> Code 13 </title>
</head>
<body>
<?php
echo "<h3>Code 13 </h3>";
for($a=1;$a<=5;$a++)
{
    for ($b=1;$b<=$a;$b++)
    {
        echo "*";
        if($a< $b)
        {
            echo " ";
        }
    }
    echo"<br>";
}
"<br><br>";
?>
</body>
</html>
