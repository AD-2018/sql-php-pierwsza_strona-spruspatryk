<?php
$hostname = $_SERVER['HTTP_HOST'];
if ($hostname=="localhost"){
  $servername = 'localhost';
  $username = 'user';
  $password = 'a';
  $dbname = 'user'; 
} else {
$servername = "mysql-patryksprus.alwaysdata.net";
$username = "217136";
$password = "@H@R8He5TsaaXJR";
$dbname = "patryksprus_baza";
}
$conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    };
?>