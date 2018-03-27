<html>
<head>
</head>
<body>
<?php
echo "<h3>Code 29 </h3>";
echo "<table align=\"left\" border=\"1\" cellpadding=\"2\" cellspacing=\"2\">";
for($i=1;$i<=7;$i++)
{
    echo "<tr>";
    for ($j=1;$j<=7;$j++)
    {
        echo "<td>".$i*$j."</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br><br>";
?>
<br><br>
</body>
</html>