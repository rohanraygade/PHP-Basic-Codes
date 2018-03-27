<html>
<head>
</head>
<body>
<?php
echo "<h2>Code 31 </h2>";
echo "<table align=\"left\" border=\"1\" cellpadding=\"2\" cellspacing=\"2\">";
for ($row=1; $row <= 10; $row++) {
    echo "<tr> \n";
    for ($col=1; $col <= 10; $col++) {
        $p = $col * $row;
        echo "<td>$p</td> \n";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>