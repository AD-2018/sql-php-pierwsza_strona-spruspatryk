<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="style.css">
  <title>Książki</title>
</head>
<body>
<div>
<a href="https://sprus-patryk.herokuapp.com">Strona Glowna </a>
</div>
<?php
require_once "connect.php";

$sql = "SELECT * FROM bibl_autor";
echo("<h2>Autorzy</h2>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>id_autor</th><th>autor</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['id_autor']."</td><td>".$row['autor']."</td>");
    echo ('</tr>');
}
echo ('</table>');
</body>
</html>
