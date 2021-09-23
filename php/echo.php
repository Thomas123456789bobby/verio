<?php

$je_naam = $_POST['je_naam'];
$getal_1 = $_POST['getal_1'];
$getal_2 = $_POST['getal_2'];
$getal_3 = $_POST['getal_3'];

$getal_4 = $getal_1 + $getal_2 + $getal_3 ;

echo "hello $je_naam !";
echo "<br>" ;
echo "<br>" ;
echo "de som van $getal_1 + $getal_2 + $getal_3 = $getal_4";
echo"<br><br>" ;
 if ($getal_4 >= 100){ echo "hoger dan 100";}
 if ($getal_4 <= 100){ echo "lager dan 100";}
 echo "<br><br>" ;
 
 
 $mysqli = new mysqli("localhost","root","","anus");


if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
 if ($mysqli->query("INSERT INTO leer VALUES ('$getal_4')") === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $mysqli->error;
  }
$mysqli -> close();


?>