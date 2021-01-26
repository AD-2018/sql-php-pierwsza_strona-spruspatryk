<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-spruspatryk">GitHub</a>
    <h1>Patryk Sprus nr 11</h1>
<div class="nav">
    <a href="https://sprus-patryk.herokuapp.com/index.php">menu</a>
    <a href="/pracownicy/orgPracownicy.php">Organizacja Pracownicy</a>
    <a href="/pracownicy/funkcAgregujace.php">Funkcje Agregujące</a>
    <a href="/pracownicy/DataCzas.php">Data i czas</a>
    <a href="/pracownicy/formularz.html">Formularz</a>
    <a href="/pracownicy/dodawanieprac.php">Dodawanie pracowników</a>
    <a href="/biblioteka/ksiazki.php">książki</a>

</div>
</body>
</html>


<?php
require_once("connect.php");

echo("<br>Zad 1 <br>");
$sql = "SELECT * from pracownicy where dzial=2";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dział</th><th>Imie</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzial'].'</td><td>'.$row['imie'].'</td>');
        echo('</tr>');
    }
   echo('</table>');


//---------


echo("<br>Zad 2 <br>");
$sql = "SELECT * from pracownicy where (dzial=2 or dzial=3)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dział</th><th>Imie</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzial'].'</td><td>'.$row['imie'].'</td>');
        echo('</tr>');
    }
   echo('</table>');

echo("<br>Zad 3 <br>");
$sql = "SELECT * from pracownicy where zarobki<30";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dział</th><th>Imie</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzial'].'</td><td>'.$row['imie'].'</td>');
        echo('</tr>');
    }
   echo('</table>');
   ?>
