<?php
echo"Name : ".$_POST["uname"]."<br>";
echo"Password : ".$_POST["pass"]."<br>";
echo"Gender : ".$_POST["gender"]."<br>";
echo"skills: ";
foreach($_POST["skills"]as $b)
{
	echo $b." ";
}
echo"<br>";
echo"Depertment : ".$_POST["dept"]."<br>";
echo"Address : ".$_POST["address"]."<br>";
echo"Birthday : ".$_POST["birthday"]."<br>";
?>