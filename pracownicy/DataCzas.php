<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
        <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-spruspatryk">GitHub</a>
<div class="nav">
    <a href="https://sprus-patryk.herokuapp.com/index.php">menu</a>
    <a href="/pracownicy/orgPracownicy.php">Organizacja Pracownicy</a>
    <a href="/pracownicy/funkcAgregujace.php">Funkcje Agregujące</a>
    <a href="/pracownicy/DataCzas.php">Data i czas</a>
</div>
</body>
</html>
<?php
require_once("connect.php");
echo("<br>Zad 1 <br>");
$sql ="SELECT *,YEAR(curdate())-YEAR(data_urodzenia) AS wiek from pracownicy,organizacja where id_org=dzial"; 
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Wiek</th><th>Nazwa Działu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

//----------------------

echo("<br>Zad 2<br>");
$sql ="SELECT *,YEAR(curdate())-YEAR(data_urodzenia) as wiek from pracownicy,organizacja where id_org=dzial and dzial=1";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Wiek</th><th>Nazwa Działu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

//-----------------------

echo("<br>Zad 3<br>");
$sql ="SELECT *,sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma_lat from pracownicy,organizacja where id_org=dzial"; 
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Suma lat wszystkich pracowników</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma_lat'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

//------------------

echo("<br>Zad 4<br>");
$sql ="SELECT *,sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma_lat from pracownicy,organizacja where id_org=dzial and dzial=2"; 
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Suma lat dział handel</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma_lat'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

//--------------------------------------------------

echo("<br>Zad 5<br>");
$sql ="SELECT *,sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma_lat from pracownicy,organizacja where id_org=dzial and imie like'%a'"; 
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Suma lat kobiet</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma_lat'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

//------------------------------------------------

echo("<br>Zad 6<br>");
$sql ="SELECT *,sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma_lat from pracownicy,organizacja where id_org=dzial and imie not like'%a'"; 
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Suma lat kobiet</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma_lat'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
//-------------------------

