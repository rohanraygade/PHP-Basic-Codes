<html>
<head>
</head>
<body>
<?php
function randompassword_generate($chars)
{
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($data), 0, $chars);
}
  echo randompassword_generate(10)."\n";
?>
</body>
</html>