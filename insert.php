
<?php
echo("jestes w insert.php");
echo "<li>".$_POST['dzial'];
echo "<li>".$_POST['imie'];

$servername = "mysql-patryksprus.alwaysdata.net";
$username = "217136";
$password = "@H@R8He5TsaaXJR";
$dbname = "patryksprus_baza";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (dzial, imie) 
       VALUES (null, '".$_POST['dzial']."', '".$_POST['imie']."';
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
