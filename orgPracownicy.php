<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-spruspatryk">GitHub</a>
<div class="nav">
    <a href="orgPracownicy.php">Organizacja Pracownicy</a>
    <a href="funkcAgregujace.php">Funkcje Agregujące</a>
    <a href="DataCzas.php">Data i czas</a>
</div>
</body>
</html>
<?php
require_once("connect.php");

echo("<br>Zad 1 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 2 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and (dzial=1 or dzial=4)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 3 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and imie like '%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 4 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and imie not like '%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

//-------------------------------------------

echo("<h2>Sortowanie</h2>");

echo("<br>Zad 5 </br>");
$sql ="SELECT * from pracownicy,organizacja where id_org=dzial order by imie desc"; 
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Nazwa działu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

//----------------------------------------------------------


echo("<br>Zad 6 </br>");
$sql ="SELECT * from pracownicy,organizacja where id_org=dzial and dzial=3 order by imie asc"; 
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Nazwa działu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

//-------------------------
echo("<br>Zad 7 </br>");
$sql ="SELECT * from pracownicy,organizacja where id_org=dzial and imie like '%a' order by imie asc"; 
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Nazwa działu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

//---------------------------------

echo("<br>Zad 8</br>");
$sql ="SELECT * from pracownicy,organizacja where id_org=dzial and imie like '%a' having (dzial=1 or dzial=3) order by imie asc"; 
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Nazwa działu</th><th>Zarobki</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>'.'<td>'.$row['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

//--------------------------------------------

echo("<br>Zad 9</br>");
 $sql ="SELECT * from pracownicy,organizacja where id_org=dzial and imie not like '%a' order by dzial asc, zarobki asc";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Nazwa działu</th><th>Zarobki</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>'.'<td>'.$row['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');


echo("<h2>Limit</h2>");

echo("<br>Zad 10</br>");
    $sql ="SELECT * from pracownicy,organizacja where id_org=dzial and dzial=4 order by zarobki desc limit 0, 2"; 
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Nazwa działu</th><th>Zarobki</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>'.'<td>'.$row['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 11</br>");
   $sql ="SELECT * from pracownicy,organizacja where id_org=dzial and imie like'%a' and (dzial=4 or dzial=3) order by zarobki desc limit 0, 3"; 
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Nazwa działu</th><th>Zarobki</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>'.'<td>'.$row['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');


echo("<br>Zad 12</br>");
 $sql ="SELECT * from pracownicy,organizacja where id_org=dzial order by data_urodzenia asc limit 0, 1"; 
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Nazwa działu</th><th>Zarobki</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>'.'<td>'.$row['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
?>

