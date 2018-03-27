<?php
echo "<H2>GET Method</H2>";
$firstName=$_GET["firstname"]." ";
$lastname=$_GET["lastname"]."<br>";
$address=$_GET["address"]."<br>";
$date=$_GET["date"]."<br>";
$gender=$_GET["gender"]."<br>";
echo $firstName.$lastname.$address.$date.$gender;