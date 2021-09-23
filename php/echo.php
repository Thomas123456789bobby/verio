<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/echo.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
  <div class="ans">
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
    echo "geluckt";
  } else {
    echo "Error: " . $mysqli->error;
  }
$mysqli -> close();
echo "<br>";
echo '<a href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=anus&table=leer&pos=0" target="_blank">surfer info</a>';

?>
</div>
<div id="gif2">
<img  src="../media/200.gif" alt="Computer Man">
</div>
</div>
</body>
</html>
