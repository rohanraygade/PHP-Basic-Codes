<?php
echo "<H2>POST Method</H2>";
$firstName=$_POST["firstname"] ." ";
$lastname=$_POST["lastname"]."<br>";
$address=$_POST["address"]."<br>";
$date=$_POST["date"]."<br>";
$gender=$_POST["gender"]."<br>";
echo $firstName.$lastname.$address.$date.$gender;