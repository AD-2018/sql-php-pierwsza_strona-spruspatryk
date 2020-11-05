<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-SprusPatryk/">github</a>
    <h1>Patryk Sprus</h1>
   

<?php

$conn = new mysqli("mysql-patryksprus.alwaysdata.net","217136","@H@R8He5TsaaXJR","patryksprus_baza");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo ("Zad.1");
$sql = "SELECT * FROM pracownicy";
$wynik = mysqli_query($conn, $sql);


    echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');


?>
