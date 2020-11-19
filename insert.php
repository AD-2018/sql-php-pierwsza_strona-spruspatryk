<?php

$servername = "mysql-patryksprus.alwaysdata.net";
$username = "217136";
$password = "@H@R8He5TsaaXJR";
$dbname = "patryksprus_baza";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (null, imie, dzial, zarobki) 
       VALUES (null,'Ksawery', 3, 36,'1995-10-21')";

$conn->query($sql);

$conn->close();
?>
