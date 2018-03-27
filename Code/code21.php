<html>
<head>
</head>
<body>
<?php
echo "<h2>Code 21 </h2>";
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php"
?>
</body>
</html>